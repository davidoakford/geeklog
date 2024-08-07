<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Static Pages Plugin 1.4.3                                                 |
// +---------------------------------------------------------------------------+
// | functions.inc                                                             |
// |                                                                           |
// | This file does two things: 1) it implements the necessary Geeklog Plugin  |
// | API method and 2) implements all the common code needed by the Static     |
// | Pages' PHP files.                                                         |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2000-2006 by the following authors:                         |
// |                                                                           |
// | Authors: Tony Bibbs       - tony AT tonybibbs DOT com                     |
// |          Tom Willett      - twillett AT users DOT sourceforge DOT net     |
// |          Blaine Lang      - langmail AT sympatico DOT ca                  |
// |          Dirk Haun        - dirk AT haun-online DOT de                    |
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
// $Id: functions.inc,v 1.79 2006/11/04 17:54:44 dhaun Exp $

if (strpos ($_SERVER['PHP_SELF'], 'functions.inc') !== false) {
    die ('This file can not be used on its own.');
}

$langfile = $_CONF['path'] . 'plugins/staticpages/language/'
          . $_CONF['language'] . '.php';

if (file_exists ($langfile)) {
    include ($langfile);
} else {
    include ($_CONF['path'] . 'plugins/staticpages/language/english.php');
}

include ($_CONF['path'] . 'plugins/staticpages/config.php');

// +---------------------------------------------------------------------------+
// | Geeklog Plugin API Implementations                                        |
// +---------------------------------------------------------------------------+

/**
* Returns the items for this plugin that should appear on the main menu
*
* NOTE: this MUST return the url/value pairs in the following format
* $<arrayname>[<label>] = <url>
*
*/
function plugin_getmenuitems_staticpages()
{
    global $_CONF, $_TABLES, $_SP_CONF;

    $order = '';
    if (!empty ($_SP_CONF['sort_menu_by'])) {
        $order = ' ORDER BY ';
        if ($_SP_CONF['sort_menu_by'] == 'date') {
            $order .= 'sp_date DESC';
        } else if ($_SP_CONF['sort_menu_by'] == 'label') {
            $order .= 'sp_label';
        } else if ($_SP_CONF['sort_menu_by'] == 'title') {
            $order .= 'sp_title';
        } else { // default to "sort by id"
            $order .= 'sp_id';
        }
    }

    $result = DB_query ('SELECT sp_id, sp_label FROM ' . $_TABLES['staticpage'] . ' WHERE sp_onmenu = 1' . COM_getPermSql ('AND') . $order);
    $nrows = DB_numRows ($result);
    $menuitems = array ();
    for ($i = 0; $i < $nrows; $i++) {
        $A = DB_fetchArray ($result);
        $menuitems[$A['sp_label']] = COM_buildURL ($_CONF['site_url'] . '/staticpages/index.php?page=' . $A['sp_id']);
    }

    return $menuitems;
}

/**
* Geeklog is checking to see if this plugin supports comments, tell it no.
*
* NOTE: to support comments you must used the same date/time based ID for your
* widget.  In other words, to make primary keys for your plugin you should call
* makesid().  Comments are keyed off of that...it is a limitation on how Geeklog
* does comments.
*
*/
function plugin_commentsupport_staticpages()
{
    // Static Pages will not use comments
    return false;
}

/**
* Helper function: Count static pages visible to the current user
*
* @return   int     number of pages
*
*/
function SP_countVisiblePages ()
{
    global $_TABLES;

    $perms = SP_getPerms ();
    if (!empty ($perms)) {
        $perms = ' WHERE ' . $perms;
    }
    $result = DB_query ("SELECT COUNT(*) AS cnt FROM {$_TABLES['staticpage']}" . $perms);
    $A = DB_fetchArray ($result);

    return $A['cnt'];
}

/**
* Shows the statistics for the Static Pages plugin on stats.php.
* If $showsitestats is 1 then we are to only print the overall stats in the
* 'site statistics box' otherwise we show the detailed stats
*
* @param    int     showsitestate   Flag to let us know which stats to get
*/
function plugin_showstats_staticpages($showsitestats)
{
    global $_CONF, $_TABLES, $LANG_STATIC;
    $retval = '';

    $perms = SP_getPerms ();
    if (!empty ($perms)) {
        $perms = ' AND ' . $perms;
    }
    $result = DB_query ("SELECT sp_id,sp_title,sp_hits FROM {$_TABLES['staticpage']} WHERE sp_hits > 0" . $perms . ' ORDER BY sp_hits DESC LIMIT 10');
    $nrows  = DB_numRows ($result);
    if ($nrows > 0) {
        require_once( $_CONF['path_system'] . 'lib-admin.php' );
        $header_arr = array(
            array('text' => $LANG_STATIC['stats_page_title'], 'field' => 'sid', 'header_class' => 'stats-header-title'),
            array('text' => $LANG_STATIC['stats_hits'], 'field' => 'sp_hits', 'header_class' => 'stats-header-count', 'field_class' => 'stats-list-count'),
        );
        $data_arr = array();
        $text_arr = array('has_menu'     => false,
                          'title'        => $LANG_STATIC['stats_headline'],
        );
        for ($i = 0; $i < $nrows; $i++) {
            $A = DB_fetchArray ($result);
            $A['sp_title'] = stripslashes ($A['sp_title']);
            $A['sid'] = "<a href=\"" . COM_buildUrl ($_CONF['site_url']
                      . "/staticpages/index.php?page={$A['sp_id']}"). "\">{$A['sp_title']}</a>";
            $A['sp_hits'] = COM_NumberFormat ($A['sp_hits']);
            $data_arr[$i] = $A;
        }
        $retval .= ADMIN_simpleList("", $header_arr, $text_arr, $data_arr);
    } else {
        $retval .= COM_startBlock ($LANG_STATIC['stats_headline']);
        $retval .= $LANG_STATIC['stats_no_hits'];
        $retval .= COM_endBlock();
    }

    return $retval;
}

/**
* New stats plugin API function for proper integration with the site stats
*
* @return   array(item text, item count);
*
*/
function plugin_statssummary_staticpages ()
{
    global $_TABLES, $LANG_STATIC;

    $total_pages = SP_countVisiblePages ();

    return array ($LANG_STATIC['staticpages'], COM_numberFormat ($total_pages));
}

/**
* Geeklog is asking us to provide any new items that show up in the type
* drop-down on search.php.  Let's let users search static pages!
*
*/
function plugin_searchtypes_staticpages()
{
    global $LANG_STATIC;

    $tmp['staticpages'] = $LANG_STATIC['staticpages'];

    return $tmp;
}


/**
* this searches for static pages matching the user query and returns an array of
* for the header and table rows back to search.php where it will be formated and
* printed
*
* @param    string  $query      Keywords user is looking for
* @param    date    $datestart  Start date to get results for
* @param    date    $dateend    End date to get results for
* @param    string  $topic      The topic they were searching in
* @param    string  $type       Type of items they are searching, or 'all'
* @param    int     $author     Get all results by this author
* @param    string  $keyType    search key type: 'all', 'phrase', 'any'
* @param    int     $page       page number of current search
* @param    int     $perpage    number of results per page
*
*/
function plugin_dopluginsearch_staticpages($query, $datestart, $dateend, $topic, $type, $author, $keyType, $page, $perpage)
{
    global $_CONF, $_TABLES, $LANG_STATIC;

    if (empty ($type)) {
        $type = 'all';
    }

    // Bail if we aren't supppose to do our search
    if ($type <> 'all' AND $type <> 'staticpages') {
        $plugin_results = new Plugin();
        $plugin_results->plugin_name = 'staticpages';
        $plugin_results->searchlabel = $LANG_STATIC['results'];

        return $plugin_results;
    }

    // Build search SQL - exclude static PHP pages from search.
    $select = "SELECT u.username,u.fullname,sp.sp_id,sp.sp_title,sp.sp_hits,sp.sp_uid,UNIX_TIMESTAMP(sp.sp_date) AS day";
    $sql = " FROM {$_TABLES['staticpage']} AS sp,{$_TABLES['users']} AS u WHERE (sp.sp_uid = u.uid) AND (sp_php <> 1)" . COM_getPermSQL ('AND') . COM_getLangSql ('sp_id', 'AND', 'sp');

    if (!empty ($query)) {
        if ($keyType == 'phrase') {
            $mysearchterm = addslashes ($query);
            $sql .= " AND ((sp_content LIKE '%$mysearchterm%')"
                 . " OR (sp_title LIKE '%$mysearchterm%'))";
        } else if ($keyType == 'all') {
            $mywords = explode (' ', $query);
            $sql .= ' AND (';
            $tmp = '';
            foreach ($mywords AS $mysearchterm) {
                $mysearchterm = addslashes (trim ($mysearchterm));
                if (!empty ($mysearchterm)) {
                    $tmp .= "(sp_content LIKE '%$mysearchterm%')"
                         . " OR (sp_title LIKE '%$mysearchterm%') AND ";
                }
            }
            $tmp = substr ($tmp, 0, strlen ($tmp) - 5);
            $sql .= $tmp . ')';
        } else if ($keyType == 'any') {
            $mywords = explode (' ', $query);
            $sql .= ' AND (';
            $tmp = '';
            foreach ($mywords AS $mysearchterm) {
                $mysearchterm = addslashes (trim ($mysearchterm));
                if (!empty ($mysearchterm)) {
                    $tmp .= "(sp_content LIKE '%$mysearchterm%')"
                         . " OR (sp_title LIKE '%$mysearchterm%') OR ";
                }
            }
            $tmp = substr ($tmp, 0, strlen ($tmp) - 4);
            $sql .= $tmp . ')';
        } else {
            $mysearchterm = addslashes ($query);
            $sql .= " AND ((sp_content LIKE '%$mysearchterm%')"
                 . " OR (sp_title LIKE '%$mysearchterm%'))";
        }
    }

    if (!empty ($datestart) && !empty ($dateend)) {
        $delim = substr ($datestart, 4, 1);
        if (!empty($delim)) {
            $DS = explode ($delim, $datestart);
            $DE = explode ($delim, $dateend);
            $startdate = mktime (0, 0, 0, $DS[1], $DS[2], $DS[0]);
            $enddate = mktime (23, 59, 59, $DE[1], $DE[2], $DE[0]);
            $sql .= " AND (UNIX_TIMESTAMP(sp_date) BETWEEN '$startdate' AND '$enddate')";
        }
    }

    if (!empty ($author)) {
        $sql .= "AND (sp_uid = '$author')";
    }
    $sql    .= " GROUP BY sp_date, u.username, u.fullname, sp.sp_id, sp.sp_title, sp.sp_hits, sp.sp_uid ORDER BY sp_date DESC ";
    $l = ($perpage * $page) - $perpage;
    $sql .= 'LIMIT ' . $l . ',' . $perpage;

    // Perform search
    $result = DB_query ($select . $sql);
    $mycount = DB_numRows ($result);
    $result_count = DB_query ('SELECT COUNT(*)' . $sql);
    $B = DB_fetchArray ($result_count, true);

    // OK, now return table header labels
    $plugin_results = new Plugin();
    $plugin_results->plugin_name = 'staticpages';
    $plugin_results->searchlabel = $LANG_STATIC['results'];
    $plugin_results->addSearchHeading ($LANG_STATIC['title']);
    $plugin_results->addSearchHeading ($LANG_STATIC['date']);
    $plugin_results->addSearchHeading ($LANG_STATIC['author']);
    $plugin_results->addSearchHeading ($LANG_STATIC['hits']);
    $plugin_results->num_searchresults = 0;
    $plugin_results->num_itemssearched = $B[0];
    $plugin_results->supports_paging = true;

    // NOTE if any of your data items need to be links then add them here!
    // make sure data elements are in an array and in the same order as your
    // headings above!
    for ($i = 0; $i < $mycount; $i++) {
        $A = DB_fetchArray ($result);

        $thetime = COM_getUserDateTimeFormat ($A['day']);
        $A['sp_title'] = stripslashes ($A['sp_title']);
        $pageurl = COM_buildURL ($_CONF['site_url']
                        . '/staticpages/index.php?page=' . $A['sp_id']);
        if (isset ($_CONF['show_fullname']) && ($_CONF['show_fullname'] == 1) &&
                !empty ($A['fullname'])) {
            $author = $A['fullname'];
        } else {
            $author = $A['username'];
        }
        $profile = $_CONF['site_url'] . '/users.php?mode=profile&amp;uid='
                 . $A['sp_uid'];
        $row = array ('<a href="' . $pageurl . '">' . $A['sp_title'] . '</a>',
                      $thetime[0],
                      '<a href="' . $profile . '">' . $author . '</a>',
                      COM_NumberFormat ($A['sp_hits']));
        $plugin_results->addSearchResult ($row);
        $plugin_results->num_searchresults++;
    }

    return $plugin_results;
}


/**
* This will put an option for static pages in the command and control block on
* moderation.php
*
*/
function plugin_cclabel_staticpages()
{
    global $LANG_STATIC, $_CONF;

    if (SEC_hasRights ('staticpages.edit,staticpages.delete', 'OR')) {
        return array ($LANG_STATIC['staticpages'],
                $_CONF['site_admin_url'] . '/plugins/staticpages/index.php',
                plugin_geticon_staticpages ());
    }

    return false;
}

/**
* returns the administrative option for this plugin
*
*/
function plugin_getadminoption_staticpages()
{
    global $_CONF, $_TABLES, $LANG_STATIC;

    if (SEC_hasRights ('staticpages.edit,staticpages.delete', 'OR')) {
        $result = DB_query ("SELECT count(*) AS cnt FROM {$_TABLES['staticpage']}" . COM_getPermSQL ('WHERE', 0, 3));
        $A = DB_fetchArray ($result);
        $total_pages = $A['cnt'];
        return array ($LANG_STATIC['staticpages'], $_CONF['site_admin_url'] . '/plugins/staticpages/index.php', $total_pages);
    }
}

/**
* Return SQL where statement with appropriate permissions
*
* Takes User id and permission and returns SQL where clause which will return
* the appropriate objects.
* This assumes that the table has the following security structure:
* owner_id        | mediumint(8)
* group_id        | mediumint(8)
* perm_owner      | tinyint(1) unsigned
* perm_group      | tinyint(1) unsigned
* perm_members    | tinyint(1) unsigned
* perm_anon       | tinyint(1) unsigned
* This will work with the standard GL tables
*
* @param    string  $table  Table name (used in joins)
* @param    int     $access Access if blank read access  2 = read 3 = read/edit
* @param    int     $u_id   User ID if blank current user
* @return   string          Where clause of sql statement
*
*/
function SP_getPerms ($table = '', $access = '2', $u_id = '')
{
    global $_USER, $_GROUPS;

    if ($table != '') { $table .= '.'; }

    if ($u_id == '') {
        if (isset ($_USER['uid'])) {
            $uid = $_USER['uid'];
        } else {
            $uid = 1;
        }
        $GROUPS = $_GROUPS;
    } else {
        $uid = $u_id;
        $GROUPS = SEC_getUserGroups ($uid);
	}

    $sql = '(';

    if ($uid > 1) {
        $sql .= "((owner_id = '{$uid}') AND (perm_owner >= $access)) OR ";

        $sql .= "((group_id IN (" . implode (',', $GROUPS) . ")) "
             . "AND (perm_group >= $access)) OR (perm_members >= $access)";
    } else {
        $sql .= "perm_anon >= $access";
    }

    $sql .= ')';

    return $sql;
}

/**
* Display static pages in the center block.
*
* @param   where   int      where the static page will be displayed (0..3)
* @param   page    int      page number
* @param   topic   string   topic ID
* @return          string   HTML for the static page (can be empty)
*/
function plugin_centerblock_staticpages ($where = 1, $page = 1, $topic ='')
{
    global $_CONF, $_TABLES, $_SP_CONF, $LANG_STATIC;

    $retval = '';

    if ($page > 1) {
        return $retval; // we only support page 1 at the moment ...
    }

    $moresql = "(sp_where = $where) AND ";
    $displayFeatured = false;

    // If there are no featured stories, we won't be called with $where == 2.
    // So, if asked to display pages for the top of the page, check if we
    // have pages to be displayed after the featured story and if there is
    // no featured story, display those pages as well.
    if (($where == 1) && ($_CONF['showfirstasfeatured'] == 0)) {
        if (DB_count ($_TABLES['stories'], 'featured', 1) == 0) {
            // no featured story found - redefine $moresql
            $moresql = "(sp_where = 1 OR sp_where = 2) AND ";
            $displayFeatured = true;
        }
    }

    if (empty ($topic)) {
        $moresql .= "((sp_tid = 'none') OR (sp_tid = 'all'))";
    } else {
        $moresql .= "((sp_tid = '{$topic}') OR (sp_tid = 'all'))";
    }

    if ($_SP_CONF['sort_by'] == 'date') {
        $sort = 'sp_date DESC';
    } else if ($_SP_CONF['sort_by'] == 'title') {
        $sort = 'sp_title';
    } else { // default to "sort by id"
        $sort = 'sp_id';
    }
    if ($displayFeatured) {
        $sort = 'sp_where,' . $sort;
    }

    $perms = SP_getPerms ();
    if (!empty ($perms)) {
        $perms = ' AND ' . $perms;
    }
    $spsql = "SELECT sp_id,sp_title,sp_content,sp_format,owner_id,group_id,perm_owner,perm_group,perm_members,perm_anon,sp_php,sp_inblock,sp_help FROM {$_TABLES['staticpage']} WHERE (sp_centerblock = 1)" . COM_getLangSql ('sp_id', 'AND') . ' AND ' . $moresql . $perms . " ORDER BY " . $sort;
    $result = DB_query ($spsql);

    $pages = DB_numRows ($result);
    if ($pages > 0) {
        for ($i = 0; $i < $pages; $i++) {
            $spresult = DB_fetchArray ($result);

            if ($where == 0) {
                switch ($spresult['sp_format']) {
                    case 'noblocks':
                        $retval .= COM_siteHeader ('none');
                        break;
                    case 'allblocks':
                    case 'leftblocks':
                        $retval .= COM_siteHeader ('menu');
                        break;
                }
                $retval .= COM_showMessage ($_GET['msg']);
            }

            if (($spresult['sp_inblock'] == 1) && !empty ($spresult['sp_title'])
                && (($where != 0) || ($spresult['sp_format'] != 'blankpage'))) {
                $retval .= COM_startBlock ($spresult['sp_title'], $spresult['sp_help'],
                    COM_getBlockTemplate ('_staticpages_centerblock', 'header'));
            }

            $retval .= SP_render_content (stripslashes ($spresult['sp_content']), $spresult['sp_php']);

            if ((SEC_hasAccess ($spresult['owner_id'], $spresult['group_id'], $spresult['perm_owner'],
                $spresult['perm_group'], $spresult['perm_members'], $spresult['perm_anon']) == 3) &&
                SEC_hasRights ('staticpages.edit')) {
                $retval .= '<p align="center"><a href="' . $_CONF['site_admin_url']
                        . '/plugins/staticpages/index.php?mode=edit&amp;sp_id='
                        . $spresult['sp_id'] . '">';
                $retval .= $LANG_STATIC['edit'] . '</a></p>';
            }

            if (($spresult['sp_inblock'] == 1) && !empty ($spresult['sp_title'])
                && (($where != 0) || ($spresult['sp_format'] != 'blankpage'))) {
                $retval .= COM_endBlock (COM_getBlockTemplate ('_staticpages_centerblock', 'footer'));
            }

            if ($where == 0) {
                if ($spresult['sp_format'] == 'allblocks') {
                    $retval .= COM_siteFooter (true);
                } else if ($spresult['sp_format'] != 'blankpage') {
                    $retval .= COM_siteFooter ();
                }
            }

            // increment hit counter for page
            DB_query ("UPDATE {$_TABLES['staticpage']} SET sp_hits = sp_hits + 1 WHERE sp_id = '{$spresult['sp_id']}'");
        }
    }

    return $retval;
}

/**
* A user is about to be deleted. Update ownership of any static pages owned
* by that user or delete them.
*
* @param   uid   int   User id of deleted user
*
*/
function plugin_user_delete_staticpages($uid)
{
    global $_TABLES, $_SP_CONF;

    if (DB_count ($_TABLES['staticpage'], 'sp_uid', $uid) +
            DB_count ($_TABLES['staticpage'], 'owner_id', $uid) == 0) {
        return;
    }

    if ($_SP_CONF['delete_pages'] == 1) {
        // delete the pages
        DB_query ("DELETE FROM {$_TABLES['staticpage']} WHERE (sp_uid = $uid) OR (owner_id = $uid)");
    } else {
        // assign ownership to a user from the Root group
        $rootgroup = DB_getItem ($_TABLES['groups'], 'grp_id',
                                 "grp_name = 'Root'");
        $result = DB_query ("SELECT DISTINCT ug_uid FROM {$_TABLES['group_assignments']} WHERE ug_main_grp_id = $rootgroup ORDER BY ug_uid LIMIT 1");
        $A = DB_fetchArray ($result);
        $rootuser = $A['ug_uid'];

        DB_query ("UPDATE {$_TABLES['staticpage']} SET sp_uid = $rootuser WHERE sp_uid = $uid");
        DB_query ("UPDATE {$_TABLES['staticpage']} SET owner_id = $rootuser WHERE owner_id = $uid");
    }
}


/**
* Return the current version of code.
* Used in the Plugin Editor to show the registered version and code version
*/
function plugin_chkVersion_staticpages()
{
    global $_SP_CONF;

    return $_SP_CONF['version'];
}

/**
* Implements the [staticpage:] autotag.
*
*/
function plugin_autotags_staticpages ($op, $content = '', $autotag = '')
{
    global $_CONF, $_TABLES;

    if ($op == 'tagname' ) {
        return 'staticpage';
    } else if ($op == 'parse') {
        $sp_id = COM_applyFilter ($autotag['parm1']);
        $url = COM_buildUrl ($_CONF['site_url'] . '/staticpages/index.php?page='
                             . $sp_id);
        if (empty ($autotag['parm2'])) {
            $linktext = stripslashes (DB_getItem ($_TABLES['staticpage'],
                                      'sp_title', "sp_id = '$sp_id'"));
        } else {
            $linktext = $autotag['parm2'];
        }
        $link = '<a href="' . $url . '">' . $linktext . '</a>';
        $content = str_replace ($autotag['tagstr'], $link, $content);

        return $content;
    }
}

/**
* Returns the URL of the plugin's icon
*
* @return   string      URL of the icon
*
*/
function plugin_geticon_staticpages ()
{
    global $_CONF;

    return $_CONF['site_url'] . '/staticpages/images/staticpages.png';
}

/**
* Update the Static Pages plugin
*
* @return   int     Number of message to display (true = generic success msg)
*
*/
function plugin_upgrade_staticpages ()
{
    global $_TABLES, $_SP_CONF;

    // the plugin needs this function so complain when it doesn't exist
    if (!function_exists ('SEC_getGroupDropdown')) {
        return 3002;
    }

    // no db changes - just update the version number
    DB_query ("UPDATE {$_TABLES['plugins']} SET pi_version = '{$_SP_CONF['version']}' WHERE pi_name = 'staticpages'");

    return true;
}

/**
* Removes the data structures for this plugin from the Geeklog database
*
* This may get called by the install routine to undo anything done to this
* point.  To do that, $steps will have a list of steps to undo
*
* @steps   Array    Holds all the steps that have been completed by the install
*
*/
function plugin_uninstall_staticpages($steps = '')
{
    global $_TABLES;

    // Uninstalls the static pages plugin

    if (empty($steps) OR $steps['createtable'] == 1) {
        // Remove the staticpage table
        COM_errorLog('Dropping staticpage table',1);
        DB_query("DROP TABLE {$_TABLES['staticpage']}");
        COM_errorLog('...success',1);
    }

    // Remove security for this plugin

    // Remove the static page admin group
    $grp_id = DB_getItem($_TABLES['groups'], 'grp_id', "grp_name = 'Static Page Admin'");

    if (empty($steps) OR $steps['insertgroup'] == 1) {
        COM_errorLog('Attempting to remove the Static Page Admin Group', 1);
        DB_query("DELETE FROM {$_TABLES['groups']} WHERE grp_id = $grp_id");
        COM_errorLog('...success',1);
    }

    // Remove related features
    $edit_id = DB_getItem($_TABLES['features'], 'ft_id', "ft_name = 'staticpages.edit'");
    $delete_id = DB_getItem($_TABLES['features'], 'ft_id', "ft_name = 'staticpages.delete'");
    $php_id = DB_getItem($_TABLES['features'], 'ft_id', "ft_name = 'staticpages.PHP'");

    if (empty($steps) OR $steps['addededittogroup'] == 1) {
        // Remove access to those features
        COM_errorLog('Attempting to remove rights to staticpage.edit from all groups',1);
        DB_query("DELETE FROM {$_TABLES['access']} WHERE acc_ft_id = $edit_id");
        COM_errorLog('...success',1);
    }

    if (empty($steps) OR $steps['addeddeletetogroup'] == 1) {
        // Remove access to those features
        COM_errorLog('Attempting to remove rights to staticpage.delete from all groups',1);
        DB_query("DELETE FROM {$_TABLES['access']} WHERE acc_ft_id = $delete_id");
        COM_errorLog('...success',1);
    }

    if (empty($steps) OR $steps['addedphptogroup'] == 1) {
        // Remove access to those features
        COM_errorLog('Attempting to remove rights to staticpage.PHP from all groups',1);
        DB_query("DELETE FROM {$_TABLES['access']} WHERE acc_ft_id = $php_id");
        COM_errorLog('...success',1);
    }

    if (empty($steps) OR $steps['addedrootuserstogroup'] == 1) {
        // Remove root users from the group
        COM_errorLog('Attempting to remove root users from admin of static pages');
        DB_query("DELETE FROM {$_TABLES['group_assignments']} WHERE ug_main_grp_id = $grp_id");
        COM_errorLog('...success',1);
    }

    if (empty($steps) OR $steps['insertedfeatureedit'] == 1) {
        COM_errorLog('Attempting to remove the staticpage.edit feature',1);
        DB_query("DELETE FROM {$_TABLES['features']} WHERE ft_id = $edit_id");
        COM_errorLog('...success',1);
    }

    if (empty($steps) OR $steps['insertedfeaturedelete'] == 1) {
        COM_errorLog('Attempting to remove the staticpage.delete feature',1);
        DB_query("DELETE FROM {$_TABLES['features']} WHERE ft_id = $delete_id");
        COM_errorLog('...success',1);
    }

    if (empty($steps) OR $steps['insertedphpfeature'] == 1) {
        COM_errorLog('Attempting to remove the staticpage.PHP feature',1);
        DB_query("DELETE FROM {$_TABLES['features']} WHERE ft_id = $php_id");
        COM_errorLog('...success',1);
    }

    // Unregister the plugin with Geeklog
    // Always attempt to remove these entries or lib-common.php would still
    // try and read our functions.inc file ...
    COM_errorLog('Attempting to unregister the plugin from Geeklog',1);
    DB_query("DELETE FROM {$_TABLES['plugins']} WHERE pi_name = 'staticpages'");
    COM_errorLog('...success',1);

    COM_errorLog('leaving plugin_uninstall_staticpages',1);

    return true;
}

/**
* Get path for the template files.
*
* @param    string  $path   subdirectory within the base template path
* @return   string          full path to template directory
*
*/
function staticpages_templatePath ($path = '')
{
    global $_CONF;

    if (empty ($path)) {
        $layout_path = $_CONF['path_layout'] . 'staticpages';
    } else {
        $layout_path = $_CONF['path_layout'] . 'staticpages/' . $path;
    }

    if (is_dir ($layout_path)) {
        $retval = $layout_path;
    } else {
        $retval = $_CONF['path'] . 'plugins/staticpages/templates';
        if (!empty ($path)) {
            $retval .= '/' . $path;
        }
    }

    return $retval;
}

function plugin_getListField_staticpages($fieldname, $fieldvalue, $A, $icon_arr)
{
    global $_CONF, $LANG_ADMIN, $LANG_STATIC, $_TABLES;

    switch($fieldname) {
        case "edit":
            $retval = "<a href=\"{$_CONF['site_admin_url']}/plugins/staticpages/index.php?mode=edit&amp;sp_id={$A['sp_id']}\">{$icon_arr['edit']}</a>";
            break;
        case "copy":
            $retval = "<a href=\"{$_CONF['site_admin_url']}/plugins/staticpages/index.php?mode=clone&amp;sp_id={$A['sp_id']}\">{$icon_arr['copy']}</a>";
            break;
        case "sp_title":
            $sp_title = stripslashes ($A['sp_title']);
            $url = COM_buildUrl ($_CONF['site_url'] .
                                 '/staticpages/index.php?page=' . $A['sp_id']);
            $retval = '<a href="' . $url . '" title="'
                    . $LANG_STATIC['title_display'] . '">' . $sp_title . '</a>';
            break;
        case "sp_uid":
            $retval = COM_getDisplayName ($A['sp_uid']);
            break;
        case "sp_centerblock":
            if ($A['sp_centerblock']) {
                switch ($A['sp_where']) {
                    case '1': $where = $LANG_STATIC['centerblock_top']; break;
                    case '2': $where = $LANG_STATIC['centerblock_feat']; break;
                    case '3': $where = $LANG_STATIC['centerblock_bottom']; break;
                    default:  $where = $LANG_STATIC['centerblock_entire']; break;
                }
                $retval = $where;
            } else {
                $retval = $LANG_STATIC['centerblock_no'];
            }
            break;
        case "unixdate":
            $retval = strftime ($_CONF['daytime'], $A['unixdate']);
            break;
        default:
            $retval = $fieldvalue;
            break;
    }
    return $retval;
}

/**
* Render the actual content of a static page (without any surrounding blocks)
*
* @param    string  $sp_content the content (HTML or PHP source)
* @param    int     $sp_php     flag: 1 = content is PHP source, 0 = is HTML
* @return   string              rendered content (HTML)
*
*/
function SP_render_content ($sp_content, $sp_php)
{
    global $_SP_CONF, $LANG_STATIC;

    $retval = '';

    if ($_SP_CONF['allow_php'] == 1) {
        // Check for type (ie html or php)
        if ($sp_php == 1) {
            $retval .= eval ($sp_content);
        } else if ($sp_php == 2) {
            ob_start ();
            eval ($sp_content);
            $retval .= ob_get_contents ();
            ob_end_clean ();
        } else {
            $retval .= PLG_replacetags ($sp_content);
        }
    } else {
        if ($sp_php != 0) {
            COM_errorLog ("PHP in static pages is disabled. Can not display page '$page'.", 1);
            $retval .= $LANG_STATIC['deny_msg'];
        } else {
            $retval .= PLG_replacetags ($sp_content);
        }
    }

    return $retval;
}

?>
