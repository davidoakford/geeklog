<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog 1.4                                                               |
// +---------------------------------------------------------------------------+
// | lib-security.php                                                          |
// |                                                                           |
// | Geeklog security library.                                                 |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2000-2006 by the following authors:                         |
// |                                                                           |
// | Authors: Tony Bibbs       - tony@tonybibbs.com                            |
// |          Mark Limburg     - mlimburg@users.sourceforge.net                |
// |          Vincent Furia    - vmf@abtech.org                                |
// |          Michael Jervis   - mike@fuckingbrit.com                          |
// +---------------------------------------------------------------------------+
// |                                                                           |
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// |                                                                           |
// +---------------------------------------------------------------------------+
//
// $Id: lib-security.php,v 1.55 2006/10/24 08:09:50 ospiess Exp $

/**
* This is the security library for Geeklog.  This is used to implement Geeklog's
* *nix-style security system.
*
* Programming notes:  For items you need security on you need the following for
* each record in your database:
* owner_id        | mediumint(8)
* group_id        | mediumint(8)
* perm_owner      | tinyint(1) unsigned
* perm_group      | tinyint(1) unsigned
* perm_members    | tinyint(1) unsigned
* perm_anon       | tinyint(1) unsigned
*
* For display one function can handle most needs:
* function SEC_hasAccess($owner_id,$group_id,$perm_owner,$perm_group,$perm_members,$perm_anon)
* A call to this function will allow you to determine if the current user should see the item.
*
* For the admin screen several functions will make life easier:
* function SEC_getPermissionsHTML($perm_owner,$perm_group,$perm_members,$perm_anon)
* This function displays the permissions widget with arrays for each permission
* function SEC_getPermissionValues($perm_owner,$perm_group,$perm_members,$perm_anon)
* This function takes the permissions from the previous function and converts them into
* an integer for saving back to the database.
*
*/

// Turn this on go get various debug messages from the code in this library
$_SEC_VERBOSE = false;

if (strpos ($_SERVER['PHP_SELF'], 'lib-security.php') !== false) {
    die ('This file can not be used on its own!');
}

/* Constants for acount stats */
define('USER_ACCOUNT_DISABLED', 0); // Account is banned/disabled
define('USER_ACCOUNT_AWAITING_ACTIVATION', 1); // Account awaiting user to login.
define('USER_ACCOUNT_AWAITING_APPROVAL', 2); // Account awaiting moderator approval
define('USER_ACCOUNT_ACTIVE', 3); // active account

/**
* Returns the groups a user belongs to
*
* This is part of the GL security implementation.  This function returns
* all the groups a user belongs to.  This function is called recursively
* as groups can belong to other groups
*
* Note: this is an expensive function -- if you are concerned about speed it should only
*       be used once at the beginning of a page.  The resulting array $_GROUPS can then be
*       used through out the page.
*
* @return array Array of group ID's user belongs to
*
* @param        int     $uid            User ID to get information for. If empty current user.
* @return	array	Associative Array grp_name -> ug_main_grp_id
*
*/
function SEC_getUserGroups($uid='')
{
    global $_TABLES, $_USER, $_SEC_VERBOSE;

    if ($_SEC_VERBOSE) {
        COM_errorLog("****************in getusergroups(uid=$uid,usergroups=$usergroups,cur_grp_id=$cur_grp_id)***************",1);
    }

    $groups = array();

    if (empty($uid)) {
        if (empty($_USER['uid'])) {
            $uid = 1;
        } else {
            $uid = $_USER['uid'];
        }
    }

    $result = DB_query("SELECT ug_main_grp_id,grp_name FROM {$_TABLES["group_assignments"]},{$_TABLES["groups"]}"
            . " WHERE grp_id = ug_main_grp_id AND ug_uid = $uid",1);

    if ($result == -1) {
        return $groups;
    }

    $nrows = DB_numRows($result);

    if ($_SEC_VERBOSE) {
        COM_errorLog("got $nrows rows",1);
    }

    while ($nrows > 0) {
        $cgroups = array();

        for ($i = 1; $i <= $nrows; $i++) {
            $A = DB_fetchArray($result);

            if ($_SEC_VERBOSE) {
                COM_errorLog('user is in group ' . $A['grp_name'],1);
            }
            if (!in_array($A['ug_main_grp_id'], $groups)) {
                array_push($cgroups, $A['ug_main_grp_id']);
                $groups[$A['grp_name']] = $A['ug_main_grp_id'];
            }
        }

        if (sizeof ($cgroups) > 0) {
            $glist = join(',', $cgroups);
            $result = DB_query("SELECT ug_main_grp_id,grp_name FROM {$_TABLES["group_assignments"]},{$_TABLES["groups"]}"
                    . " WHERE grp_id = ug_main_grp_id AND ug_grp_id IN ($glist)",1);
            $nrows = DB_numRows($result);
        } else {
            $nrows = 0;
        }
    }

    ksort($groups);

    if ($_SEC_VERBOSE) {
        COM_errorLog("****************leaving getusergroups(uid=$uid)***************",1);
    }

    return $groups;
}

/**
  * Checks to see if a user has admin access to the "Remote Users" group
  * Admin users will probably not be members, but, User Admin, Root, and
  * group admin will have access to it. However, we can not be sure what
  * the group id for "Remote User" group is, because it's a later static
  * group, and upgraded systems could have it in any id slot.
  *
  * @param      groupid     int     The id of a group, which might be the remote users group
  * @param      groups      array   Array of group ids the user has access to.
  * @return     boolean
  */
function SEC_groupIsRemoteUserAndHaveAccess($groupid, $groups)
{
    global $_TABLES, $_CONF;
    if(!isset($_CONF['remote_users_group_id']))
    {
        $result = DB_Query("SELECT grp_id FROM {$_TABLES['groups']} WHERE grp_name='Remote Users'");
        if( $result )
        {
            $row = DB_fetchArray( $result );
            $_CONF['remote_users_group_id'] = $row['grp_id'];
        }
    }
    if( $groupid == $_CONF['remote_users_group_id'] )
    {
        if( in_array( 1, $groups ) || // root
            in_array( 9, $groups ) || // user admin
            in_array( 11, $groups ) // Group admin
          )
        {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

/**
* Determines if user belongs to specified group
*
* This is part of the Geeklog security implementation. This function
* looks up whether a user belongs to a specified group
*
* @param        string      $grp_to_verify      Group we want to see if user belongs to
* @param        int         $uid                ID for user to check. If empty current user.
* @param        string      $cur_grp_id         NOT USED Current group we are working with in hierarchy
* @return       boolean     true if user is in group, otherwise false
*
*/
function SEC_inGroup($grp_to_verify,$uid='',$cur_grp_id='')
{
    global $_TABLES, $_USER, $_SEC_VERBOSE, $_GROUPS;

    if (empty ($uid)) {
        if (empty ($_USER['uid'])) {
            $uid = 1;
        } else {
            $uid = $_USER['uid'];
        }
    }

    if ((empty ($_USER['uid']) && ($uid == 1)) || ($uid == $_USER['uid'])) {
        if (empty ($_GROUPS)) {
            $_GROUPS = SEC_getUserGroups ($uid);
        }
        $groups = $_GROUPS;
    } else {
        $groups = SEC_getUserGroups ($uid);
    }

    if (is_numeric($grp_to_verify)) {
        if (in_array($grp_to_verify, $groups)) {
           return true;
        } else {
           return false;
        }
    } else {
        if (!empty($groups[$grp_to_verify])) {
            return true;
        } else {
            return false;
        }
   }
}

/**
* Determines if current user is a moderator of any kind
*
* Checks to see if this user is a moderator for any of the GL features OR
* GL plugins
*
* @return   boolean     returns if user has any .moderate rights
*
*/
function SEC_isModerator()
{
    global $_USER,$_RIGHTS;

    // Loop through GL core rights.
    for ($i = 0; $i < count($_RIGHTS); $i++) {
        if (stristr($_RIGHTS[$i],'.moderate')) {
            return true;
        }
    }

    // If we get this far they are not a Geeklog moderator
    // So, let's return if they're a plugin moderator

    return PLG_isModerator();
}

/**
* Checks to see if current user has access to a topic
*
* Checks to see if current user has access to a topic
*
* @param        string      $tid        ID for topic to check on
* @return       int 	returns 3 for read/edit 2 for read only 0 for no access
*
*/
function SEC_hasTopicAccess($tid)
{
    global $_TABLES;

    if (empty($tid)) {
        return 0;
    }

    $result = DB_query("SELECT owner_id,group_id,perm_owner,perm_group,perm_members,perm_anon FROM {$_TABLES['topics']} WHERE tid = '$tid'");
    $A = DB_fetchArray($result);

    return SEC_hasAccess($A['owner_id'],$A['group_id'],$A['perm_owner'],$A['perm_group'],$A['perm_members'],$A['perm_anon']);
}

/**
* Checks if current user has access to the given object
*
* This function takes the access info from a Geeklog object
* and let's us know if they have access to the object
* returns 3 for read/edit, 2 for read only and 0 for no
* access
*
* @param        int     $owner_id       ID of the owner of object
* @param        int     $group_id       ID of group object belongs to
* @param        int     $perm_owner     Permissions the owner has
* @param        int     $perm_group     Permissions the gorup has
* @param        int     $perm_members   Permissions logged in members have
* @param        int     $perm_anon      Permissions anonymous users have
* @return       int 	returns 3 for read/edit 2 for read only 0 for no access
*
*/
function SEC_hasAccess($owner_id,$group_id,$perm_owner,$perm_group,$perm_members,$perm_anon)
{
    global $_USER;

    // Cache current user id
    if (empty($_USER['uid'])) {
        $uid = 1;
    } else {
        $uid = $_USER['uid'];
    }

    // If user is in Root group then return full access
    if (SEC_inGroup('Root')) {
        return 3;
    }

    // If user is owner then return 1 now
    if ($uid == $owner_id) return $perm_owner;

    // Not private, if user is in group then give access
    if (SEC_inGroup($group_id)) {
        return $perm_group;
    } else {
        if ($uid == 1) {
            // This is an anonymous user, return it's rights
            return $perm_anon;
        } else {
            // This is a logged in member, return their rights
            return $perm_members;
        }
    }
}

/**
* Checks if current user has rights to a feature
*
* Takes either a single feature or an array of features and returns
* an array of whether the user has those rights
*
* @param        string|array        $features       Features to check
* @param        string              $operator       Either 'and' or 'or'. Default is 'and'.  Used if checking more than one feature.
* @return       boolean     Return true if current user has access to feature(s), otherwise false.
*
*/
function SEC_hasRights($features,$operator='AND')
{
    global $_USER, $_RIGHTS, $_SEC_VERBOSE;

    if (strstr($features,',')) {
        $features = explode(',',$features);
    }

    if (is_array($features)) {
        // check all values passed
        for ($i = 0; $i < count($features); $i++) {
            if ($operator == 'OR') {
                // OR operator, return as soon as we find a true one
                if (in_array($features[$i],$_RIGHTS)) {
                    if ($_SEC_VERBOSE) {
                        COM_errorLog('SECURITY: user has access to ' . $features[$i],1);
                    }
                    return true;
                }
            } else {
                // this is an "AND" operator, bail if we find a false one
                if (!in_array($features[$i],$_RIGHTS)) {
                    if ($_SEC_VERBOSE) {
                        COM_errorLog('SECURITY: user does not have access to ' . $features[$i],1);
                    }
                    return false;
                }
            }
        }

        if ($operator == 'OR') {
            if ($_SEC_VERBOSE) {
                COM_errorLog('SECURITY: user does not have access to ' . $features[$i],1);
            }
            return false;
                } else {
            if ($_SEC_VERBOSE) {
                COM_errorLog('SECURITY: user has access to ' . $features[$i],1);
            }
            return true;
        }
    } else {
        // Check the one value
        if ($_SEC_VERBOSE) {
            if (in_array($features,$_RIGHTS)) {
                COM_errorLog('SECURITY: user has access to ' . $features,1);
            } else {
                COM_errorLog('SECURITY: user does not have access to ' . $features,1);
            }
        }
        return in_array($features,$_RIGHTS);
    }
}

/**
* Shows security control for an object
*
* This will return the HTML needed to create the security control see on the admin
* screen for GL objects (i.e. stories, etc)
*
* @param        int     $perm_owner     Permissions the owner has 1 = edit 2 = read 3 = read/edit
* @param        int     $perm_group     Permission the group has
* @param        int     $perm_members   Permissions logged in members have
* @param        int     $perm_anon      Permissions anonymous users have
* @return       string  needed HTML (table) in HTML $perm_owner = array of permissions [edit,read], etc edit = 1 if permission, read = 2 if permission
*
*/
function SEC_getPermissionsHTML($perm_owner,$perm_group,$perm_members,$perm_anon)
{
    global $LANG_ACCESS, $_CONF;

    $retval = '';

    $perm_templates = new Template($_CONF['path_layout'] . 'admin/common');
    $perm_templates->set_file(array('editor'=>'edit_permissions.thtml'));

    $perm_templates->set_var ('owner', $LANG_ACCESS['owner']);
    $perm_templates->set_var ('group', $LANG_ACCESS['group']);
    $perm_templates->set_var ('members', $LANG_ACCESS['members']);
    $perm_templates->set_var ('anonymous', $LANG_ACCESS['anonymous']);

    // Owner Permissions
    if ($perm_owner >= 2) {
        $perm_templates->set_var ('owner_r_checked',' checked="checked"');
    }
    if ($perm_owner == 3) {
        $perm_templates->set_var ('owner_e_checked',' checked="checked"');
    }
    // Group Permissions
    if ($perm_group >= 2) {
        $perm_templates->set_var ('group_r_checked',' checked="checked"');
    }
    if ($perm_group == 3) {
        $perm_templates->set_var ('group_e_checked',' checked="checked"');
    }
    // Member Permissions
    if ($perm_members == 2) {
        $perm_templates->set_var ('members_checked',' checked="checked"');
    }
    // Anonymous Permissions
    if ($perm_anon == 2) {
        $perm_templates->set_var ('anon_checked',' checked="checked"');
    }

    $perm_templates->parse('output','editor');
    $retval .= $perm_templates->finish($perm_templates->get_var('output'));

    return $retval;
}

/**
* Gets everything a user has permissions to within the system
*
* This is part of the Geeklog security implmentation.  This function
* will get all the permissions the current user has call itself recursively.
*
* @param        int     $grp_id     DO NOT USE (Used for reccursion) Current group function is working on
* @uid		int	$uid        User to check, if empty current user.
* @return       string   returns comma delimited list of features the user has access to
*
*/
function SEC_getUserPermissions($grp_id='',$uid='')
{
    global $_TABLES, $_USER, $_SEC_VERBOSE, $_GROUPS;

    $retval = '';

    if ($_SEC_VERBOSE) {
        COM_errorLog("**********inside SEC_getUserPermissions(grp_id=$grp_id)**********",1);
    }

    // Get user ID if we don't already have it
    if (empty ($uid)) {
        if (empty ($_USER['uid'])) {
            $uid = 1;
        } else {
            $uid = $_USER['uid'];
        }
    }

    if ((empty ($_USER['uid']) && ($uid == 1)) || ($uid == $_USER['uid'])) {
        if (empty ($_GROUPS)) {
            $_GROUPS = SEC_getUserGroups ($uid);
        }
        $groups = $_GROUPS;
    } else {
        $groups = SEC_getUserGroups ($uid);
    }

    $glist = join(',', $groups);
    $result = DB_query("SELECT DISTINCT ft_name FROM {$_TABLES["access"]},{$_TABLES["features"]} "
                     . "WHERE ft_id = acc_ft_id AND acc_grp_id IN ($glist)");

    $nrows = DB_numrows($result);
    for ($j = 1; $j <= $nrows; $j++) {
        $A = DB_fetchArray($result);
        if ($_SEC_VERBOSE) {
            COM_errorLog('Adding right ' . $A['ft_name'] . ' in SEC_getUserPermissions',1);
        }
        $retval .= $A['ft_name'];
        if ($j < $nrows) {
            $retval .= ',';
        }
    }

    return $retval;
}

/**
* Converts permissions to numeric values
*
* This function will take all permissions for an object and get the numeric value
* that can then be used to save the database.
*
* @param        array       $perm_owner     Array of owner permissions  These arrays are set up by SEC_getPermissionsHTML
* @param        array       $perm_group     Array of group permissions
* @param        array       $perm_members   Array of member permissions
* @param        array       $perm_anon      Array of anonymous user permissions
* @return       array       returns numeric equivalent for each permissions array (2 = read, 3=edit/read)
* @see	SEC_getPermissionsHTML
* @see  SEC_getPermissionValue
*
*/
function SEC_getPermissionValues($perm_owner,$perm_group,$perm_members,$perm_anon)
{
    global $_SEC_VERBOSE;

    if ($_SEC_VERBOSE) {
        COM_errorLog('**** Inside SEC_getPermissionValues ****', 1);
    }

    if (is_array($perm_owner)) {
        $perm_owner = SEC_getPermissionValue($perm_owner);
    } else {
        $perm_owner = 0;
    }

    if (is_array($perm_group)) {
        $perm_group = SEC_getPermissionValue($perm_group);
    } else {
        $perm_group = 0;
    }

    if (is_array($perm_members)) {
        $perm_members = SEC_getPermissionValue($perm_members);
    } else {
        $perm_members = 0;
    }

    if (is_array($perm_anon)) {
        $perm_anon = SEC_getPermissionValue($perm_anon);
    } else {
        $perm_anon = 0;
    }

    if ($_SEC_VERBOSE) {
        COM_errorlog('perm_owner = ' . $perm_owner, 1);
        COM_errorlog('perm_group = ' . $perm_group, 1);
        COM_errorlog('perm_member = ' . $perm_members, 1);
        COM_errorlog('perm_anon = ' . $perm_anon, 1);
        COM_errorLog('**** Leaving SEC_getPermissionValues ****', 1);
    }

    return array($perm_owner,$perm_group,$perm_members,$perm_anon);
}

/**
* Converts permission array into numeric value
*
* This function converts an array of permissions for either
* the owner/group/members/anon and returns the numeric
* equivalent.  This is typically called by the admin screens
* to prepare the permissions to be save to the database
*
* @param        array       $perm_x     Array of permission values
* @return       int         integer representation of a permission array 2 = read 3 = edit/read
* @see SEC_getPermissionValues
*
*/
function SEC_getPermissionValue($perm_x)
{
    global $_SEC_VERBOSE;

    if ($_SEC_VERBOSE) {
        COM_errorLog('**** Inside SEC_getPermissionValue ***', 1);
    }

    $retval = 0;

    for ($i = 1; $i <= sizeof($perm_x); $i++) {
        if ($_SEC_VERBOSE) {
            COM_errorLog("perm_x[$i] = " . current($perm_x), 1);
        }
        $retval = $retval + current($perm_x);
        next($perm_x);
    }

    // if they have edit rights, assume read rights
    if ($retval == 1) {
        $retval = 3;
    }

    if ($_SEC_VERBOSE) {
        COM_errorLog("Got $retval permission value", 1);
        COM_errorLog('**** Leaving SEC_getPermissionValue ***', 1);
    }

    return $retval;
}

/**
* Return the group to a given feature.
*
* Scenario: We have a feature and we want to know from which group the user
* got this feature. Always returns the lowest group ID, in case the feature
* has been inherited from more than one group.
*
* @param    string  $feature    the feature, e.g 'story.edit'
* @param    int     $uid        (optional) user ID
* @return   int                 group ID or 0
*
*/
function SEC_getFeatureGroup ($feature, $uid = '')
{
    global $_GROUPS, $_TABLES, $_USER;

    $ugroups = array ();

    if (empty ($uid)) {
        if (empty ($_USER['uid'])) {
            $uid = 1;
        } else {
            $uid = $_USER['uid'];
        }
    }

    if ((empty ($_USER['uid']) && ($uid == 1)) || ($uid == $_USER['uid'])) {
        if (empty ($_GROUPS)) {
            $_GROUPS = SEC_getUserGroups ($uid);
        }
        $ugroups = $_GROUPS;
    } else {
        $ugroups = SEC_getUserGroups ($uid);
    }

    $group = 0;

    $ft_id = DB_getItem ($_TABLES['features'], 'ft_id', "ft_name = '$feature'");
    if (($ft_id > 0) && (sizeof ($ugroups) > 0)) {
        $grouplist = implode (',', $ugroups);
        $result = DB_query ("SELECT acc_grp_id FROM {$_TABLES['access']} WHERE (acc_ft_id = $ft_id) AND (acc_grp_id IN ($grouplist)) ORDER BY acc_grp_id LIMIT 1");
        $A = DB_fetchArray ($result);
        if (isset ($A['acc_grp_id'])) {
            $group = $A['acc_grp_id'];
        }
    }

    return $group;
}

/**
* Attempt to login a user.
*
* Checks a users username and password against the database. Returns
* users status.
*
* @param    string  $username   who is logging in?
* @param    string  $password   what they claim is their password
* @param    int     $uid        This is an OUTPUT param, pass by ref,
*                               sends back UID inside it.
* @return   int                 user status, -1 for fail.
*
*/
function SEC_authenticate($username, $password, &$uid)
{
    global $_TABLES, $LANG01, $_CONF;

    $result = DB_query( "SELECT status, passwd, email, uid FROM {$_TABLES['users']} WHERE username='$username' AND ((remoteservice is null) or (remoteservice = ''))" );
    $tmp = DB_error();
    $nrows = DB_numRows( $result );

    if(( $tmp == 0 ) && ( $nrows == 1 ))
    {
        $U = DB_fetchArray( $result );
        $uid = $U['uid'];
        if ($U['status'] == USER_ACCOUNT_DISABLED)
        {
            return USER_ACCOUNT_DISABLED; // banned, jump to here to save an md5 calc.
        } elseif ($U['passwd'] != md5( $password )) {
            return -1; // failed login
        } elseif ($U['status'] == USER_ACCOUNT_AWAITING_APPROVAL) {
            //awaiting approval, jump to msg.
            echo COM_refresh($_CONF['site_url'] . '/users.php?msg=70');
            exit;
        } elseif ($U['status'] == USER_ACCOUNT_AWAITING_ACTIVATION) {
            // Awaiting user activation, activate:
            DB_change($_TABLES['users'],'status',USER_ACCOUNT_ACTIVE,'username',$username);
            return USER_ACCOUNT_ACTIVE;
        } else {
            return $U['status']; // just return their status
        }
    }
    else
    {
        $tmp = $LANG01[32] . ": '" . $username . "'";
        COM_errorLog( $tmp, 1 );
        return -1;
    }
}

/**
* Return the current user status for a user.
*
* @param    int  $userid   Valid uid value.
* @return   int            user status, 0-3
*
*/
function SEC_checkUserStatus($userid)
{
    global $_CONF, $_TABLES;

    // Check user status
    $status = DB_getItem($_TABLES['users'], 'status', "uid=$userid");

    // only do redirects if we aren't on users.php in a valid mode (logout or
    // default)
    if (strpos ($_SERVER['PHP_SELF'], 'users.php') === false)
    {
        $redirect = true;
    } else {
        if (($_REQUEST['mode'] == 'logout') || ($_REQUEST['mode'] == ''))
        {
            $redirect = false;
        } else {
            $redirect = true;
        }
    }
    if ($status == USER_ACCOUNT_AWAITING_ACTIVATION)
    {
        DB_change($_TABLES['users'], 'status', USER_ACCOUNT_ACTIVE, 'uid', $userid);
    } elseif ($status == USER_ACCOUNT_AWAITING_APPROVAL) {
        // If we aren't on users.php with a default action then go to it
        if ($redirect)
        {
            COM_accessLog("SECURITY: Attempted Cookie Session login from user awaiting approval $userid.");
            echo COM_refresh($_CONF['site_url'] . '/users.php?msg=70');
            exit;
        }
    } elseif ($status == USER_ACCOUNT_DISABLED) {
        if ($redirect)
        {
            COM_accessLog("SECURITY: Attempted Cookie Session login from banned user $userid.");
            echo COM_refresh($_CONF['site_url'] . '/users.php?msg=69');
            exit;
        }
    }
}

/**
  * Check to see if we can authenticate this user with a remote server
  *
  * A user has not managed to login localy, but has an @ in their user
  * name and we have enabled distributed authentication. Firstly, try to
  * see if we have cached the module that we used to authenticate them
  * when they signed up (i.e. they've actualy changed their password
  * elsewhere and we need to synch.) If not, then try to authenticate
  * them with /every/ authentication module. If this suceeds, create
  * a user for them.
  *
  * @param  string  $loginname Their username
  * @param  string  $passwd The password entered
  * @param  string  $server The server portion of $username
  * @param  string  $uid OUTPUT parameter, pass it by ref to get uid back.
  * @return int     user status, -1 for fail.
  */
function SEC_remoteAuthentication(&$loginname, $passwd, $service, &$uid)
{
    global $_TABLES, $_CONF;

    /* First try a local cached login */
    $remoteusername = addslashes($loginname);
    $result = DB_query("SELECT passwd, status, uid FROM {$_TABLES['users']} WHERE remoteusername='$remoteusername' AND remoteservice='$service'");
    $tmp = DB_error();
    $nrows = DB_numRows($result);
    if (($tmp == 0) && ($nrows == 1))
    {
        $U = DB_fetchArray($result);
        $uid = $U['uid'];
        $mypass = $U['passwd']; // also used to see if the user existed later.
        if ($mypass == md5($passwd))
        {
            /* Valid password for cached user, return status */
            return $U['status'];
        }
    }


    if (file_exists($_CONF['path_system'].'classes/authentication/'.$service.'.auth.class.php'))
    {
        require_once($_CONF['path_system'].'classes/authentication/'.$service.'.auth.class.php');
        $authmodule = new $service();
        if ($authmodule->authenticate($loginname, $passwd))
        {
            /* check to see if they have logged in before: */
            if (empty($mypass))
            {
                // no such user, create them

                //Check to see if their remoteusername is unique locally
                $checkName = DB_getItem($_TABLES['users'],'username',"username='$remoteusername'");
                if ($checkName != '')
                {
                    // no, call custom function.
                    if (function_exists(custom_uniqueRemoteUsername))
                    {
                        $loginname = custom_uniqueRemoteUsername($loginname, $service);
                    }
                }
                USER_createAccount($loginname, $authmodule->email, md5($passwd), '', '', $remoteusername, $service);
                $uid = DB_getItem ($_TABLES['users'], 'uid', "remoteusername = '$remoteusername' AND remoteservice='$service'");
                // Store full remote account name:
                $service = addslashes($service);
                DB_Query("UPDATE {$_TABLES['users']} SET remoteusername='$remoteusername', remoteservice='$service', status=3 WHERE uid='$uid'");
                // Add to remote users:
                $remote_grp = DB_getItem ($_TABLES['groups'], 'grp_id',
                                              "grp_name='Remote Users'");
                DB_query ("INSERT INTO {$_TABLES['group_assignments']} (ug_main_grp_id,ug_uid) VALUES ($remote_grp, $uid)");
                return 3; // Remote auth precludes usersubmission,
                          // and integrates user activation, see?
            } else {
                // user existed, update local password:
                DB_Change($_TABLES['users'], 'passwd', md5($passwd), array('remoteusername','remoteservice'), array($remoteusername,$service));
                // and return their status
                return DB_getItem($_TABLES['users'], 'status', "remoteusername='$remoteusername' AND remoteservice='$service'");
            }
        } else {
            return -1;
        }
    } else {
        return -1;
    }
}

/**
  * Add user to a group
  *
  * work in progress
  *
  * Rather self explanitory shortcut function
  * Is this the right place for this, Dirk?
  *
  * @author Trinity L Bays <trinity93@steubentech.com>
  *
  * @param  string  $uid Their user id
  * @param  string  $gname The group name
  * @return bool    status, true or false.
  */
function SEC_addUserToGroup($uid, $gname)
{
    global $_TABLES, $_CONF;

    $remote_grp = DB_getItem ($_TABLES['groups'], 'grp_id', "grp_name='". $gname ."'");
    DB_query ("INSERT INTO {$_TABLES['group_assignments']} (ug_main_grp_id,ug_uid) VALUES ($remote_grp, $uid)");
}

/**
* Set default permissions for an object
*
* @param    array   $A                  target array
* @param    array   $use_permissions    permissions to set
*
*/
function SEC_setDefaultPermissions (&$A, $use_permissions = array ())
{
    if (!is_array ($use_permissions) || (count ($use_permissions) != 4)) {
        $use_permissions = array (3, 2, 2, 2);
    }

    // sanity checks
    if (($use_permissions[0] > 3) || ($use_permissions[0] < 0) ||
            ($use_permissions[0] == 1)) {
        $use_permissions[0] = 3;
    }
    if (($use_permissions[1] > 3) || ($use_permissions[1] < 0) ||
            ($use_permissions[1] == 1)) {
        $use_permissions[1] = 2;
    }
    if (($use_permissions[2] != 2) && ($use_permissions[2] != 0)) {
        $use_permissions[2] = 2;
    }
    if (($use_permissions[3] != 2) && ($use_permissions[3] != 0)) {
        $use_permissions[3] = 2;
    }

    $A['perm_owner']   = $use_permissions[0];
    $A['perm_group']   = $use_permissions[1];
    $A['perm_members'] = $use_permissions[2];
    $A['perm_anon']    = $use_permissions[3];
}


/**
* Common function used to build group access SQL
*
* @param   string  $clause    Optional parm 'WHERE' - default is 'AND'
* @return  string  $groupsql  Formatted SQL string to be appended in calling script SQL statement
*/
function SEC_buildAccessSql ($clause = 'AND')
{
    global $_TABLES, $_USER;

    if (isset($_USER) AND $_USER['uid'] > 1) {
        $uid = $_USER['uid'];
    } else {
        $uid = 1;
    }

    $_GROUPS = SEC_getUserGroups($uid);
    $groupsql = '';
    if (count($_GROUPS) == 1) {
        $groupsql .= " $clause grp_access = '" . current($_GROUPS) ."'";
    } else {
        $groupsql .= " $clause grp_access IN (" . implode(',',array_values($_GROUPS)) .")";
    }

    return $groupsql;
}

/**
* Remove a feature from the database entirely.
*
* This function can be used by plugins during uninstall.
*
* @param    string  $feature_name   name of the feature, e.g. 'foo.edit'
* @param    bool    $logging        whether to log progress in error.log
* @return   void
*
*/
function SEC_removeFeatureFromDB ($feature_name, $logging = false)
{
    global $_TABLES;

    if (!empty ($feature_name)) {
        $feat_id = DB_getItem ($_TABLES['features'], 'ft_id',
                               "ft_name = '$feature_name'");
        if (!empty ($feat_id)) {
            // Before removing the feature itself, remove it from all groups
            if ($logging) {
                COM_errorLog ("Attempting to remove '$feature_name' rights from all groups", 1);
            }
            DB_delete ($_TABLES['access'], 'acc_ft_id', $feat_id);
            if ($logging) {
                COM_errorLog ('...success', 1);
            }

            // now remove the feature itself
            if ($logging) {
                COM_errorLog ("Attempting to remove the '$feature_name' feature", 1);
            }
            DB_delete ($_TABLES['features'], 'ft_id', $feat_id);
            if ($logging) {
                COM_errorLog ('...success', 1);
            }
        } else if ($logging) {
            COM_errorLog ("SEC_removeFeatureFromDB: Feature '$feature_name' not found.");
        }
    }
}

/**
* Create a group dropdown
*
* Creates the group dropdown menu that's used on pretty much every admin page
*
* @param    int     $group_id   current group id (to be selected)
* @param    int     $access     access permission
* @return   string              HTML for the dropdown
*
*/
function SEC_getGroupDropdown ($group_id, $access)
{
    global $_TABLES;

    $groupdd = '';

    if ($access == 3) {
        $usergroups = SEC_getUserGroups ();

        $groupdd .= '<select name="group_id">' . LB;
        foreach ($usergroups as $ug_name => $ug_id) {
            $groupdd .= '<option value="' . $ug_id . '"';
            if ($group_id == $ug_id) {
                $groupdd .= ' selected="selected"';
            }
            $groupdd .= '>' . $ug_name . '</option>' . LB;
        }
        $groupdd .= '</select>' . LB;
    } else {
        // They can't set the group then
        $groupdd .= DB_getItem ($_TABLES['groups'], 'grp_name',
                                "grp_id = '$group_id'")
                 . '<input type="hidden" name="group_id" value="' . $group_id
                 . '">';
    }

    return $groupdd;
}

?>
