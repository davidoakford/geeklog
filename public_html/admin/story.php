<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog 1.4                                                               |
// +---------------------------------------------------------------------------+
// | story.php                                                                 |
// |                                                                           |
// | Geeklog story administration page.                                        |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2000-2006 by the following authors:                         |
// |                                                                           |
// | Authors: Tony Bibbs        - tony AT tonybibbs DOT com                    |
// |          Mark Limburg      - mlimburg AT users DOT sourceforge DOT net    |
// |          Jason Whittenburg - jwhitten AT securitygeeks DOT com            |
// |          Dirk Haun         - dirk AT haun-online DOT de                   |
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
// $Id: story.php,v 1.248 2006/12/10 12:08:40 dhaun Exp $

/**
* This is the Geeklog story administration page.
*
* @author   Jason Whittenburg
* @author   Tony Bibbs <tony AT tonybibbs DOT com>
*
*/

/**
* Geeklog commong function library
*/
require_once ('../lib-common.php');
require_once ($_CONF['path_system'] . 'lib-story.php');

/**
* Security check to ensure user even belongs on this page
*/
require_once ('auth.inc.php');

// Set this to true if you want to have this code output debug messages to
// the error log
$_STORY_VERBOSE = false;

$display = '';

if (!SEC_hasRights('story.edit')) {
    $display .= COM_siteHeader ('menu', $MESSAGE[30]);
    $display .= COM_startBlock ($MESSAGE[30], '',
                                COM_getBlockTemplate ('_msg_block', 'header'));
    $display .= $MESSAGE[31];
    $display .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
    $display .= COM_siteFooter ();
    COM_accessLog("User {$_USER['username']} tried to illegally access the story administration screen.");
    echo $display;
    exit;
}


// Uncomment the line below if you need to debug the HTTP variables being passed
// to the script.  This will sometimes cause errors but it will allow you to see
// the data being passed in a POST operation
// debug($_POST);


/**
* Returns a list of all users and their user ids, wrapped in <option> tags.
*
* @param    int     uid     current user (to be displayed as selected)
* @return   string          string with <option> tags, to be wrapped in <select>
*
*/
function userlist ($uid = 0)
{
    global $_TABLES;

    $retval = '';

    $result = DB_query ("SELECT uid,username FROM {$_TABLES['users']} WHERE uid > 1 ORDER BY username");

    while ($A = DB_fetchArray ($result)) {
        $retval .= '<option value="' . $A['uid'] . '"';
        if ($uid == $A['uid']) {
            $retval .= ' selected="selected"';
        }
        $retval .= '>' . $A['username'] . '</option>' . LB;
    }

    return $retval;
}

function liststories()
{
    global $_CONF, $_TABLES, $_IMAGE_TYPE,
           $LANG09, $LANG_ADMIN, $LANG_ACCESS, $LANG24;

    require_once( $_CONF['path_system'] . 'lib-admin.php' );

    $retval = '';

    if (!empty ($_GET['tid'])) {
        $current_topic = COM_applyFilter($_GET['tid']);
    } elseif (!empty ($_POST['tid'])) {
        $current_topic = COM_applyFilter($_POST['tid']);
    } else {
        $current_topic = $LANG09[9];
    }

    if ($current_topic == $LANG09[9]) {
        $excludetopics = '';
        $seltopics = '';
        $topicsql = "SELECT tid,topic FROM {$_TABLES['topics']}" . COM_getPermSQL ();
        $tresult = DB_query( $topicsql );
        $trows = DB_numRows( $tresult );
        if( $trows > 0 )
        {
            $excludetopics .= ' (';
            for( $i = 1; $i <= $trows; $i++ )  {
                $T = DB_fetchArray ($tresult);
                if ($i > 1)  {
                    $excludetopics .= ' OR ';
                }
                $excludetopics .= "tid = '{$T['tid']}'";
                $seltopics .= '<option value="' .$T['tid']. '"';
                if ($current_topic == "{$T['tid']}") {
                    $seltopics .= ' selected="selected"';
                }
                $seltopics .= '>' . $T['topic'] . '</option>' . LB;
            }
            $excludetopics .= ') ';
        }
    } else {
        $excludetopics = " tid = '$current_topic' ";
        $seltopics = COM_topicList ('tid,topic', $current_topic, 1, true);
    }

    $alltopics = '<option value="' .$LANG09[9]. '"';
    if ($current_topic == $LANG09[9]) {
        $alltopics .= ' selected="selected"';
    }
    $alltopics .= '>' .$LANG09[9]. '</option>' . LB;
    $filter = $LANG_ADMIN['topic']
        . ': <select name="tid" style="width: 125px" onchange="this.form.submit()">'
        . $alltopics . $seltopics . '</select>';

    $header_arr = array(
        array('text' => $LANG_ADMIN['edit'], 'field' => 'edit', 'sort' => false));

    $header_arr[] = array('text' => $LANG_ADMIN['title'], 'field' => 'title', 'sort' => true);
    $header_arr[] = array('text' => $LANG_ACCESS['access'], 'field' => 'access', 'sort' => false);
    $header_arr[] = array('text' => $LANG24[34], 'field' => 'draft_flag', 'sort' => true);
    $header_arr[] = array('text' => $LANG24[7], 'field' => 'username', 'sort' => true); //author
    $header_arr[] = array('text' => $LANG24[15], 'field' => 'unixdate', 'sort' => true); //date
    $header_arr[] = array('text' => $LANG_ADMIN['topic'], 'field' => 'tid', 'sort' => true);
    $header_arr[] = array('text' => $LANG24[32], 'field' => 'featured', 'sort' => true);

    if (SEC_hasRights ('story.ping') && ($_CONF['trackback_enabled'] ||
            $_CONF['pingback_enabled'] || $_CONF['ping_enabled'])) {
        $header_arr[] = array('text' => $LANG24[20], 'field' => 'ping', 'sort' => false);
    }

    $defsort_arr = array('field' => 'unixdate', 'direction' => 'desc');

    $menu_arr = array (
        array('url' => $_CONF['site_admin_url'] . '/story.php?mode=edit',
              'text' => $LANG_ADMIN['create_new'])
    );

    $menu_arr[] = array('url' => $_CONF['site_admin_url'],
                          'text' => $LANG_ADMIN['admin_home']);

    $text_arr = array('has_menu' =>  true,
                      'has_extras'   => true,
                      'title' => $LANG24[22], 'instructions' => $LANG24[23],
                      'icon' => $_CONF['layout_url'] . '/images/icons/story.' . $_IMAGE_TYPE,
                      'form_url' => $_CONF['site_admin_url'] . "/story.php");

    $sql = "SELECT {$_TABLES['stories']}.*, {$_TABLES['users']}.username, {$_TABLES['users']}.fullname, "
          ."UNIX_TIMESTAMP(date) AS unixdate  FROM {$_TABLES['stories']} "
          ."LEFT JOIN {$_TABLES['users']} ON {$_TABLES['stories']}.uid={$_TABLES['users']}.uid "
          ."WHERE 1=1 ";

    if (!empty ($excludetopics)) {
        $excludetopics = 'AND ' . $excludetopics;
    }
    $query_arr = array('table' => 'stories',
                       'sql' => $sql,
                       'query_fields' => array('title', 'introtext', 'bodytext', 'sid', 'tid'),
                       'default_filter' => $excludetopics . COM_getPermSQL ('AND'),);

    $retval .= ADMIN_list ("story", "ADMIN_getListField_stories", $header_arr, $text_arr,
                            $query_arr, $menu_arr, $defsort_arr, $filter);
    return $retval;
}

/**
* Shows story editor
*
* Displays the story entry form
*
* @param    string      $sid            ID of story to edit
* @param    string      $mode           'preview', 'edit', 'editsubmission'
* @param    string      $errormsg       a message to display on top of the page
* @param    string      $currenttopic   topic selection for drop-down menu
* @return   string      HTML for story editor
*
*/
function storyeditor($sid = '', $mode = '', $errormsg = '', $currenttopic = '')
{
    global $_CONF, $_GROUPS, $_TABLES, $_USER, $LANG24, $LANG_ACCESS,
           $LANG_ADMIN, $MESSAGE;

    $display = '';

    if (!isset ($_CONF['hour_mode'])) {
        $_CONF['hour_mode'] = 12;
    }

    if (!empty ($errormsg)) {
        $display .= COM_startBlock($LANG24[25], '',
                            COM_getBlockTemplate ('_msg_block', 'header'));
        $display .= $errormsg;
        $display .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
    }

    if (!empty ($currenttopic)) {
        $allowed = DB_getItem ($_TABLES['topics'], 'tid',
                                "tid = '" . addslashes ($currenttopic) . "'" .
                                COM_getTopicSql ('AND'));

        if ($allowed != $currenttopic) {
            $currenttopic = '';
        }
    }

    if (!empty ($sid) && ($mode == 'edit')) {
        $msql = array();
        $msql['mysql'] = "SELECT STRAIGHT_JOIN s.*, UNIX_TIMESTAMP(s.date) AS unixdate, "
         . "u.username, u.fullname, u.photo, t.topic, t.imageurl, UNIX_TIMESTAMP(s.expire) AS expiredate "
         . "FROM {$_TABLES['stories']} AS s, {$_TABLES['users']} AS u, {$_TABLES['topics']} AS t "
         . "WHERE (s.uid = u.uid) AND (s.tid = t.tid) AND (sid = '$sid')";

        $msql['mssql'] = "SELECT STRAIGHT_JOIN s.sid, s.uid, s.draft_flag, s.tid, s.date, s.title, CAST(s.introtext AS text) AS introtext, CAST(s.bodytext AS text) AS bodytext, s.hits, s.numemails, s.comments, s.trackbacks, s.related, s.featured, s.show_topic_icon, s.commentcode, s.trackbackcode, s.statuscode, s.expire, s.postmode, s.frontpage, s.in_transit, s.owner_id, s.group_id, s.perm_owner, s.perm_group, s.perm_members, s.perm_anon, s.advanced_editor_mode,"
         ." UNIX_TIMESTAMP(s.date) AS unixdate, "
         . "u.username, u.fullname, u.photo, t.topic, t.imageurl, UNIX_TIMESTAMP(s.expire) AS expiredate "
         . "FROM {$_TABLES['stories']} AS s, {$_TABLES['users']} AS u, {$_TABLES['topics']} AS t "
         . "WHERE (s.uid = u.uid) AND (s.tid = t.tid) AND (sid = '$sid')";

        $result = DB_query ($msql);
        $A = DB_fetchArray ($result);

        $access = SEC_hasAccess($A['owner_id'],$A['group_id'],$A['perm_owner'],$A['perm_group'],$A['perm_members'],$A['perm_anon']);
        $access = min ($access, SEC_hasTopicAccess ($A['tid']));
        if ($access == 2) {
            $display .= COM_startBlock($LANG_ACCESS['accessdenied'], '',
                                COM_getBlockTemplate ('_msg_block', 'header'));
            $display .= $LANG24[41];
            $display .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
            $display .= STORY_renderArticle ($A, 'p');
            COM_accessLog("User {$_USER['username']} tried to illegally edit story $sid.");
            return $display;
        } else if ($access == 0) {
            $display .= COM_startBlock($LANG_ACCESS['accessdenied'], '',
                                COM_getBlockTemplate ('_msg_block', 'header'));
            $display .= $LANG24[42];
            $display .= COM_endBlock(COM_getBlockTemplate ('_msg_block', 'footer'));
            COM_accessLog("User {$_USER['username']} tried to illegally access story $sid.");
            return $display;
        }
        $A['old_sid'] = $A['sid'];
        if ($A['postmode'] == 'plaintext') {
            $A['introtext'] = COM_undoClickableLinks ($A['introtext']);
            $A['bodytext'] = COM_undoClickableLinks ($A['bodytext']);
        }
    } elseif (!empty ($sid) && ($mode == 'editsubmission')) {
        $result = DB_query ("SELECT STRAIGHT_JOIN s.*, UNIX_TIMESTAMP(s.date) AS unixdate, "
         . "u.username, u.fullname, u.photo, t.topic, t.imageurl, t.group_id, "
         . "t.perm_owner, t.perm_group, t.perm_members, t.perm_anon "
         . "FROM {$_TABLES['storysubmission']} AS s, {$_TABLES['users']} AS u, {$_TABLES['topics']} AS t "
         . "WHERE (s.uid = u.uid) AND (s.tid = t.tid) AND (sid = '$sid')");
        if (DB_numRows ($result) > 0) {
            $A = DB_fetchArray($result);
            if (isset ($_CONF['draft_flag'])) {
                $A['draft_flag'] = $_CONF['draft_flag'];
            } else {
                $A['draft_flag'] = 0;
            }
            if (isset ($_CONF['show_topic_icon'])) {
                $A['show_topic_icon'] = $_CONF['show_topic_icon'];
            } else {
                $A['show_topic_icon'] = 1;
            }
            $A['commentcode'] = $_CONF['comment_code'];
            $A['trackbackcode'] = $_CONF['trackback_code'];
            $A['featured'] = 0;
            $A['expire'] = '0000-00-00 00:00:00';
            $A['expiredate'] = 0;
            if (DB_getItem ($_TABLES['topics'], 'archive_flag',
                    "tid = '{$A['tid']}'") == 1) {
                $A['frontpage'] = 0;
            } else if (isset ($_CONF['frontpage'])) {
                $A['frontpage'] = $_CONF['frontpage'];
            } else {
                $A['frontpage'] = 1;
            }
            $A['comments'] = 0;
            $A['trackbacks'] = 0;
            $A['numemails'] = 0;
            $A['statuscode'] = 0;
            $A['owner_id'] = $A['uid'];
            $access = 3;
            $A['old_sid'] = $A['sid'];
            $A['title'] = htmlspecialchars ($A['title']);
            if (!isset ($A['bodytext'])) {
                $A['bodytext'] = '';
            }
            if ($A['postmode'] == 'plaintext') {
                $A['introtext'] = COM_undoClickableLinks ($A['introtext']);
                if (!empty ($A['bodytext'])) {
                    $A['bodytext'] = COM_undoClickableLinks ($A['bodytext']);
                }
            }
        } else {
            // that submission doesn't seem to be there any more (may have been
            // handled by another Admin) - take us back to the moderation page
            return COM_refresh ($_CONF['site_admin_url'] . '/moderation.php');
        }
    } elseif ($mode == 'edit') {
        $A['sid'] = COM_makesid();
        $A['old_sid'] = '';
        if (isset ($_CONF['draft_flag'])) {
            $A['draft_flag'] = $_CONF['draft_flag'];
        } else {
            $A['draft_flag'] = 0;
        }
        if (isset ($_CONF['show_topic_icon'])) {
            $A['show_topic_icon'] = $_CONF['show_topic_icon'];
        } else {
            $A['show_topic_icon'] = 1;
        }
        $A['uid'] = $_USER['uid'];
        $A['unixdate'] = time();
        $A['expiredate'] = time();
        $A['commentcode'] = $_CONF['comment_code'];
        $A['trackbackcode'] = $_CONF['trackback_code'];
        $A['title'] = '';
        $A['introtext'] = '';
        $A['bodytext'] = '';
        if (isset ($_CONF['frontpage'])) {
            $A['frontpage'] = $_CONF['frontpage'];
        } else {
            $A['frontpage'] = 1;
        }
        $A['hits'] = 0;
        $A['comments'] = 0;
        $A['trackbacks'] = 0;
        $A['numemails'] = 0;

        if (isset ($_CONF['advanced_editor']) && $_CONF['advanced_editor'] &&
                ($_CONF['postmode'] != 'plaintext')) {
            $A['advanced_editor_mode'] = 1;
            $A['postmode'] = 'adveditor';
        } else {
            $A['advanced_editor_mode'] = 0;
            $A['postmode'] = $_CONF['postmode'];
        }

        $A['statuscode'] = 0;
        $A['featured'] = 0;
        $A['owner_id'] = $_USER['uid'];
        if (isset ($_GROUPS['Story Admin'])) {
            $A['group_id'] = $_GROUPS['Story Admin'];
        } else {
            $A['group_id'] = SEC_getFeatureGroup ('story.edit');
        }
        SEC_setDefaultPermissions ($A, $_CONF['default_permissions_story']);
        $access = 3;
    } else {
        $A = $_POST;
        $res = DB_query("SELECT username, fullname, photo FROM {$_TABLES['users']} WHERE uid = {$A['uid']}");
        $A += DB_fetchArray($res);
        $A['tid'] = COM_applyFilter ($A['tid']);
        $res = DB_query("SELECT topic, imageurl FROM {$_TABLES['topics']} WHERE tid = '{$A['tid']}'");
        $A += DB_fetchArray($res);
        if (empty ($A['ampm'])) {
            $A['ampm'] = $A['publish_ampm'];
        }
        if (isset ($A['draft_flag']) && ($A['draft_flag'] == 'on')) {
            $A['draft_flag'] = 1;
        } else {
            $A['draft_flag'] = 0;
        }
        if (isset ($A['show_topic_icon']) && ($A['show_topic_icon'] == 'on')) {
            $A['show_topic_icon'] = 1;
        } else {
            $A['show_topic_icon'] = 0;
        }
        if (!isset ($A['statuscode'])) {
            $A['statuscode'] = 0;
        }

        // Convert array values to numeric permission values
        list($A['perm_owner'],$A['perm_group'],$A['perm_members'],$A['perm_anon']) = SEC_getPermissionValues($A['perm_owner'],$A['perm_group'],$A['perm_members'],$A['perm_anon']);
        if ($A['postmode'] == 'html' OR $A['postmode'] == 'adveditor') {
            $A['introtext'] = COM_checkHTML(COM_checkWords($A['introtext']));
            $A['bodytext'] = COM_checkHTML(COM_checkWords($A['bodytext']));
            $A['title'] = COM_checkHTML(htmlspecialchars(COM_checkWords($A['title'])));
        } else {
            $A['introtext'] = COM_undoClickableLinks (htmlspecialchars(COM_checkWords($A['introtext'])));
            $A['bodytext'] = COM_undoClickableLinks (htmlspecialchars(COM_checkWords($A['bodytext'])));
            $A['title'] = htmlspecialchars(COM_checkWords($A['title']));
        }
        $A['title'] = strip_tags($A['title']);
        $access = 3;
    }

    // Load HTML templates
    $story_templates = new Template($_CONF['path_layout'] . 'admin/story');
    if ( isset ($_CONF['advanced_editor']) && ($_CONF['advanced_editor'] == 1 )
        && file_exists ($_CONF['path_layout'] . 'admin/story/storyeditor_advanced.thtml')) {
        $advanced_editormode = true;
        $story_templates->set_file(array('editor'=>'storyeditor_advanced.thtml'));
        $story_templates->set_var ('change_editormode', 'onChange="change_editmode(this);"');

        require_once ($_CONF['path_system'] . 'classes/navbar.class.php');

        $story_templates->set_var ('show_preview', 'none');
        $story_templates->set_var ('lang_expandhelp', $LANG24[67]);
        $story_templates->set_var ('lang_reducehelp', $LANG24[68]);
        $story_templates->set_var ('lang_publishdate', $LANG24[69]);
        $story_templates->set_var ('lang_toolbar', $LANG24[70]);
        $story_templates->set_var ('toolbar1', $LANG24[71]);
        $story_templates->set_var ('toolbar2', $LANG24[72]);
        $story_templates->set_var ('toolbar3', $LANG24[73]);
        $story_templates->set_var ('toolbar4', $LANG24[74]);
        $story_templates->set_var ('toolbar5', $LANG24[75]);

        if ($A['advanced_editor_mode'] == 1 OR $A['postmode'] == 'adveditor') {
            $story_templates->set_var ('show_texteditor', 'none');
            $story_templates->set_var ('show_htmleditor', '');
        } else {
            $story_templates->set_var ('show_texteditor', '');
            $story_templates->set_var ('show_htmleditor', 'none');
        }
    } else {
        $story_templates->set_file(array('editor'=>'storyeditor.thtml'));
        $advanced_editormode = false;
    }
    $story_templates->set_var ('site_url',       $_CONF['site_url']);
    $story_templates->set_var ('site_admin_url', $_CONF['site_admin_url']);
    $story_templates->set_var ('layout_url',     $_CONF['layout_url']);
    $story_templates->set_var ('hour_mode',      $_CONF['hour_mode']);

    if (empty ($A['unixdate'])) {
        $publish_hour = $A['publish_hour'];
        if ($publish_hour == 12) {
            if ($A['ampm'] == 'am') {
                $publish_hour = 0;
            }
        } else if ($A['ampm'] == 'pm') {
            $publish_hour += 12;
        }
        $A['unixdate'] = strtotime ($A['publish_year'] . '-'
            . $A['publish_month'] . '-' . $A['publish_day'] . ' '
            . $publish_hour . ':' . $A['publish_minute'] . ':00');
    }

    if (!empty ($A['title'])) {

        $A['day'] = $A['unixdate'];
        if (empty ($A['hits'])) {
            $A['hits'] = 0;
        }

        $tmpsid = addslashes ($A['sid']);
        if (DB_count ($_TABLES['article_images'], 'ai_sid', $tmpsid) > 0) {
            $has_images = true;
        } else {
            $has_images = false;
        }

        $previewContent = '';
        if ($A['postmode'] == 'plaintext') {
            $B = $A;

            // if the plain-text story has images embedded, we'll have to do
            // some awkward back-and-forth conversion ...
            if ($has_images) {
                list ($B['introtext'], $B['bodytext']) = STORY_replace_images ($A['sid'], $B['introtext'], $B['bodytext']);
            }

            $B['introtext'] = COM_makeClickableLinks ($B['introtext']);
            if (!empty ($B['bodytext'])) {
                $B['bodytext'] = COM_makeClickableLinks ($B['bodytext']);
            }

            if ($has_images) {
                list ($errors, $B['introtext'], $B['bodytext']) = STORY_insert_images ($A['sid'], $B['introtext'], $B['bodytext']);
            }
            $previewContent = STORY_renderArticle ($B, 'p');

        } else {
            if ($has_images) {
                list ($errors, $A['introtext'], $A['bodytext']) = STORY_insert_images ($A['sid'], $A['introtext'], $A['bodytext']);
            }
            $previewContent = STORY_renderArticle ($A, 'p');
        }

        if ($advanced_editormode AND $previewContent != '' ) {
            $story_templates->set_var('preview_content', $previewContent);
        } else {
            $display = COM_startBlock ($LANG24[26], '',
                            COM_getBlockTemplate ('_admin_block', 'header'));
            $display .= $previewContent;
            $display .= COM_endBlock (COM_getBlockTemplate ('_admin_block', 'footer'));
        }
    }

    if ($advanced_editormode) {
        $navbar = new navbar;
        if (!empty ($previewContent)) {
            $navbar->add_menuitem($LANG24[79],'showhideEditorDiv("preview",0);return false;',true);
            $navbar->add_menuitem($LANG24[80],'showhideEditorDiv("editor",1);return false;',true);
            $navbar->add_menuitem($LANG24[81],'showhideEditorDiv("publish",2);return false;',true);
            $navbar->add_menuitem($LANG24[82],'showhideEditorDiv("images",3);return false;',true);
            $navbar->add_menuitem($LANG24[83],'showhideEditorDiv("archive",4);return false;',true);
            $navbar->add_menuitem($LANG24[84],'showhideEditorDiv("perms",5);return false;',true);
            $navbar->add_menuitem($LANG24[85],'showhideEditorDiv("all",6);return false;',true);
        }  else {
            $navbar->add_menuitem($LANG24[80],'showhideEditorDiv("editor",0);return false;',true);
            $navbar->add_menuitem($LANG24[81],'showhideEditorDiv("publish",1);return false;',true);
            $navbar->add_menuitem($LANG24[82],'showhideEditorDiv("images",2);return false;',true);
            $navbar->add_menuitem($LANG24[83],'showhideEditorDiv("archive",3);return false;',true);
            $navbar->add_menuitem($LANG24[84],'showhideEditorDiv("perms",4);return false;',true);
            $navbar->add_menuitem($LANG24[85],'showhideEditorDiv("all",5);return false;',true);
        }

        $navbar->set_selected($LANG24[80]);
        $story_templates->set_var ('navbar', $navbar->generate() );
    }

    $display .= COM_startBlock ($LANG24[5], '',
                        COM_getBlockTemplate ('_admin_block', 'header'));

    if (($access == 3) && !empty ($A['old_sid'])) {
        $delbutton = '<input type="submit" value="' . $LANG_ADMIN['delete']
                   . '" name="mode"%s>';
        $jsconfirm = ' onclick="return confirm(\'' . $MESSAGE[76] . '\');"';
        $story_templates->set_var ('delete_option',
                                   sprintf ($delbutton, $jsconfirm));
        $story_templates->set_var ('delete_option_no_confirmation',
                                   sprintf ($delbutton, ''));
    }
    if ($mode == 'editsubmission') {
        $story_templates->set_var ('submission_option',
                '<input type="hidden" name="type" value="submission">');
    }
    $story_templates->set_var ('lang_author', $LANG24[7]);
    $storyauthor = COM_getDisplayName ($A['uid']);
    $story_templates->set_var ('story_author', $storyauthor);
    $story_templates->set_var ('author', $storyauthor);
    $story_templates->set_var ('story_uid', $A['uid']);

    // user access info
    $story_templates->set_var('lang_accessrights',$LANG_ACCESS['accessrights']);
    $story_templates->set_var('lang_owner', $LANG_ACCESS['owner']);
    $ownername = COM_getDisplayName ($A['owner_id']);
    $story_templates->set_var('owner_username', DB_getItem ($_TABLES['users'],
                              'username', "uid = {$A['owner_id']}"));
    $story_templates->set_var('owner_name', $ownername);
    $story_templates->set_var('owner', $ownername);
    $story_templates->set_var('owner_id', $A['owner_id']);
    $story_templates->set_var('lang_group', $LANG_ACCESS['group']);
    $story_templates->set_var('group_dropdown',
                              SEC_getGroupDropdown ($A['group_id'], $access));
    $story_templates->set_var('lang_permissions', $LANG_ACCESS['permissions']);
    $story_templates->set_var('lang_perm_key', $LANG_ACCESS['permissionskey']);
    $story_templates->set_var('permissions_editor', SEC_getPermissionsHTML($A['perm_owner'],$A['perm_group'],$A['perm_members'],$A['perm_anon']));
    $story_templates->set_var('permissions_msg', $LANG_ACCESS['permmsg']);
    $curtime = COM_getUserDateTimeFormat($A['unixdate']);
    $story_templates->set_var('lang_date', $LANG24[15]);

    $publish_month  = date ('m', $A['unixdate']);
    $publish_day    = date ('d', $A['unixdate']);
    $publish_year   = date ('Y', $A['unixdate']);
    $publish_hour   = date ('H', $A['unixdate']);
    $publish_minute = date ('i', $A['unixdate']);
    $publish_second = date ('s', $A['unixdate']);
    $story_templates->set_var('publish_second', $publish_second);

    $publish_ampm = '';
    $publish_hour_24 = $publish_hour;
    if ($publish_hour >= 12) {
        if ($publish_hour > 12) {
            $publish_hour = $publish_hour - 12;
        }
        $ampm = 'pm';
    } else {
        $ampm = 'am';
    }
    $ampm_select = COM_getAmPmFormSelection ('publish_ampm', $ampm);
    $story_templates->set_var ('publishampm_selection', $ampm_select);

    $month_options = COM_getMonthFormOptions($publish_month);
    $story_templates->set_var('publish_month_options', $month_options);

    $day_options = COM_getDayFormOptions($publish_day);
    $story_templates->set_var('publish_day_options', $day_options);

    $year_options = COM_getYearFormOptions($publish_year);
    $story_templates->set_var('publish_year_options', $year_options);

    if ($_CONF['hour_mode'] == 24) {
        $hour_options = COM_getHourFormOptions ($publish_hour_24, 24);
    } else {
        $hour_options = COM_getHourFormOptions ($publish_hour);
    }
    $story_templates->set_var('publish_hour_options', $hour_options);

    $minute_options = COM_getMinuteFormOptions($publish_minute);
    $story_templates->set_var('publish_minute_options', $minute_options);

    $story_templates->set_var('publish_date_explanation', $LANG24[46]);
    $story_templates->set_var('story_unixstamp', $A['unixdate']);

    // Auto Story Archive or Delete Feature
    if (empty ($A['expiredate']) or date('Y', $A['expiredate']) < 2000) {
        $A['expiredate'] = time();
    }
    $expire_month  = date('m', $A['expiredate']);
    $expire_day    = date('d', $A['expiredate']);
    $expire_year   = date('Y', $A['expiredate']);
    $expire_hour   = date('H', $A['expiredate']);
    $expire_minute = date('i', $A['expiredate']);
    $expire_second = date('s', $A['expiredate']);
    $story_templates->set_var('expire_second', $expire_second);

    $expire_ampm = '';
    $expire_hour_24 = $expire_hour;
    if ($expire_hour >= 12) {
        if ($expire_hour > 12) {
            $expire_hour = $expire_hour - 12;
        }
        $ampm = 'pm';
    } else {
        $ampm = 'am';
    }
    $ampm_select = COM_getAmPmFormSelection ('expire_ampm', $ampm);
    if (empty ($ampm_select)) {
        // have a hidden field to 24 hour mode to prevent JavaScript errors
        $ampm_select = '<input type="hidden" name="expire_ampm" value="">';
    }
    $story_templates->set_var ('expireampm_selection', $ampm_select);

    $month_options = COM_getMonthFormOptions($expire_month);
    $story_templates->set_var('expire_month_options', $month_options);

    $day_options = COM_getDayFormOptions($expire_day);
    $story_templates->set_var('expire_day_options', $day_options);

    $year_options = COM_getYearFormOptions($expire_year);
    $story_templates->set_var('expire_year_options', $year_options);

    if ($_CONF['hour_mode'] == 24) {
        $hour_options = COM_getHourFormOptions ($expire_hour_24, 24);
    } else {
        $hour_options = COM_getHourFormOptions ($expire_hour);
    }
    $story_templates->set_var('expire_hour_options', $hour_options);

    $minute_options = COM_getMinuteFormOptions($expire_minute);
    $story_templates->set_var('expire_minute_options', $minute_options);

    $story_templates->set_var('expire_date_explanation', $LANG24[46]);
    $story_templates->set_var('story_unixstamp', $A['expiredate']);
    if ($A['statuscode'] == STORY_ARCHIVE_ON_EXPIRE) {
        $story_templates->set_var('is_checked2', 'checked="checked"');
        $story_templates->set_var('is_checked3', 'checked="checked"');
        $story_templates->set_var('showarchivedisabled', 'false');
    } elseif ($A['statuscode'] == STORY_DELETE_ON_EXPIRE) {
        $story_templates->set_var('is_checked2', 'checked="checked"');
        $story_templates->set_var('is_checked4', 'checked="checked"');
        $story_templates->set_var('showarchivedisabled', 'false');
    } else {
        $story_templates->set_var('showarchivedisabled', 'true');
    }
    $story_templates->set_var('lang_archivetitle', $LANG24[58]);
    $story_templates->set_var('lang_option', $LANG24[59]);
    $story_templates->set_var('lang_enabled', $LANG_ADMIN['enabled']);
    $story_templates->set_var('lang_story_stats', $LANG24[87]);
    $story_templates->set_var('lang_optionarchive', $LANG24[61]);
    $story_templates->set_var('lang_optiondelete', $LANG24[62]);
    $story_templates->set_var('lang_title', $LANG_ADMIN['title']);
    if ($A['postmode'] == 'plaintext') {
        $A['title'] = str_replace ('$', '&#36;', $A['title']);
    }

    $A['title'] = str_replace('{','&#123;',$A['title']);
    $A['title'] = str_replace('}','&#125;',$A['title']);
    $A['title'] = str_replace('"','&quot;',$A['title']);
    $story_templates->set_var('story_title', stripslashes ($A['title']));
    $story_templates->set_var('lang_topic', $LANG_ADMIN['topic']);
    if (empty ($A['tid']) && !empty ($currenttopic)) {
        $A['tid'] = $currenttopic;
    }
    if (empty ($A['tid'])) {
        $A['tid'] = DB_getItem ($_TABLES['topics'], 'tid',
                                'is_default = 1' . COM_getPermSQL ('AND'));
    }
    $story_templates->set_var ('topic_options',
                               COM_topicList ('tid,topic', $A['tid'], 1, true));
    $story_templates->set_var('lang_show_topic_icon', $LANG24[56]);
    if ($A['show_topic_icon'] == 1) {
        $story_templates->set_var('show_topic_icon_checked', 'checked="checked"');
    } else {
        $story_templates->set_var('show_topic_icon_checked', '');
    }
    $story_templates->set_var('lang_draft', $LANG24[34]);
    if (isset ($A['draft_flag']) && ($A['draft_flag'] == 1)) {
        $story_templates->set_var('is_checked', 'checked="checked"');
    }
    $story_templates->set_var ('lang_mode', $LANG24[3]);
    $story_templates->set_var ('status_options',
            COM_optionList ($_TABLES['statuscodes'], 'code,name',
                            $A['statuscode']));
    $story_templates->set_var ('comment_options',
            COM_optionList ($_TABLES['commentcodes'], 'code,name',
                            $A['commentcode']));
    $story_templates->set_var ('trackback_options',
            COM_optionList ($_TABLES['trackbackcodes'], 'code,name',
                            $A['trackbackcode']));

    if (($_CONF['onlyrootfeatures'] == 1 && SEC_inGroup('Root'))
        or ($_CONF['onlyrootfeatures'] !== 1)) {
        $featured_options = "<select name=\"featured\">" . LB
                          . COM_optionList ($_TABLES['featurecodes'], 'code,name', $A['featured'])
                          . "</select>" . LB;
    } else {
        $featured_options = '<input type="hidden" name="featured" value="0">';
    }
    $story_templates->set_var ('featured_options',$featured_options);
    $story_templates->set_var ('frontpage_options',
            COM_optionList ($_TABLES['frontpagecodes'], 'code,name',
                            $A['frontpage']));

    if ($A['postmode'] == 'plaintext') {
        $A['introtext'] = COM_undoClickableLinks ($A['introtext']);
        if (!empty ($A['bodytext'])) {
            $A['bodytext']  = COM_undoClickableLinks ($A['bodytext']);
        }
    }

    list($newintro, $newbody) = STORY_replace_images ($A['sid'],
              stripslashes ($A['introtext']), stripslashes ($A['bodytext']));

    if ($A['postmode'] == 'plaintext') {
        $newintro = str_replace('$','&#36;',$newintro);
        $newbody = str_replace('$','&#36;',$newbody);
    } else {
        // Insert [code] and [/code] if needed
        $newintro = str_replace('<pre><code>','[code]',$newintro);
        $newbody = str_replace('<pre><code>','[code]',$newbody);
        $newintro = str_replace('</code></pre>','[/code]',$newintro);
        $newbody = str_replace('</code></pre>','[/code]',$newbody);

        $newintro = htmlspecialchars ($newintro);
        $newbody = htmlspecialchars ($newbody);
    }

    $newintro = str_replace('{','&#123;',$newintro);
    $newintro = str_replace('}','&#125;',$newintro);
    $story_templates->set_var('story_introtext', $newintro);

    $newbody = str_replace('{','&#123;',$newbody);
    $newbody = str_replace('}','&#125;',$newbody);
    $story_templates->set_var('story_bodytext', $newbody);

    $story_templates->set_var('lang_introtext', $LANG24[16]);
    $story_templates->set_var('lang_bodytext', $LANG24[17]);
    $story_templates->set_var('lang_postmode', $LANG24[4]);
    $story_templates->set_var('lang_publishoptions',$LANG24[76]);
    $story_templates->set_var('lang_nojavascript',$LANG24[77]);
    $story_templates->set_var('no_javascript_return_link',sprintf($LANG24[78],$_CONF['site_admin_url'], $sid));
    $post_options = COM_optionList($_TABLES['postmodes'],'code,name',$A['postmode']);

    // If Advanced Mode - add post option and set default if editing story created with Advanced Editor
    if ($_CONF['advanced_editor'] == 1) {
        if ($A['advanced_editor_mode'] == 1 OR $A['postmode'] == 'adveditor') {
            $post_options .= '<option value="adveditor" selected="selected">'.$LANG24[86].'</option>';
        } else {
            $post_options .= '<option value="adveditor">'.$LANG24[86].'</option>';
        }
    }
    $story_templates->set_var('post_options',$post_options );
    $story_templates->set_var('lang_allowed_html', COM_allowedHTML());
    $fileinputs = '';
    $saved_images = '';
    if ($_CONF['maximagesperarticle'] > 0) {
        $story_templates->set_var('lang_images', $LANG24[47]);
        $icount = DB_count($_TABLES['article_images'],'ai_sid', $A['sid']);
        if ($icount > 0) {
            $result_articles = DB_query("SELECT * FROM {$_TABLES['article_images']} WHERE ai_sid = '{$A['sid']}'");
            for ($z = 1; $z <= $icount; $z++) {
                $I = DB_fetchArray($result_articles);
                $saved_images .= $z . ') <a href="' . $_CONF['site_url'] . '/images/articles/' . $I['ai_filename'] . '">' . $I['ai_filename'] . '</a>';
                $saved_images .= '&nbsp;&nbsp;&nbsp;' . $LANG_ADMIN['delete'] . ': <input type="checkbox" name="delete[' .$I['ai_img_num'] . ']"><br>';
            }
        }

        $newallowed = $_CONF['maximagesperarticle'] - $icount;
        for ($z = $icount + 1; $z <= $_CONF['maximagesperarticle']; $z++) {
            $fileinputs .= $z . ') <input type="file" name="file' . $z . '">';
            if ($z < $_CONF['maximagesperarticle']) {
                $fileinputs .= '<br>';
            }
        }
        $fileinputs .= '<br>' . $LANG24[51];
        if ($_CONF['allow_user_scaling'] == 1) {
            $fileinputs .= $LANG24[27];
        }
        $fileinputs .= $LANG24[28] . '<br>';
    }
    $story_templates->set_var('saved_images', $saved_images);
    $story_templates->set_var('image_form_elements', $fileinputs);
    $story_templates->set_var('lang_hits', $LANG24[18]);
    $story_templates->set_var('story_hits', $A['hits']);
    $story_templates->set_var('lang_comments', $LANG24[19]);
    $story_templates->set_var('story_comments', $A['comments']);
    $story_templates->set_var('lang_trackbacks', $LANG24[29]);
    $story_templates->set_var('story_trackbacks', $A['trackbacks']);
    $story_templates->set_var('lang_emails', $LANG24[39]);
    $story_templates->set_var('story_emails', $A['numemails']);
    $story_templates->set_var('story_id', $A['sid']);
    $story_templates->set_var('old_story_id', $A['old_sid']);
    $story_templates->set_var('lang_sid', $LANG24[12]);
    $story_templates->set_var('lang_save', $LANG_ADMIN['save']);
    $story_templates->set_var('lang_preview', $LANG_ADMIN['preview']);
    $story_templates->set_var('lang_cancel', $LANG_ADMIN['cancel']);
    $story_templates->set_var('lang_delete', $LANG_ADMIN['delete']);
    $story_templates->parse('output','editor');
    $display .= $story_templates->finish($story_templates->get_var('output'));
    $display .= COM_endBlock (COM_getBlockTemplate ('_admin_block', 'footer'));

    return $display;
}

/**
* Saves story to database
*
* @param    string      $type           story submission or (new) story
* @param    string      $sid            ID of story to save
* @param    int         $uid            ID of user that wrote the story
* @param    string      $tid            Topic ID story belongs to
* @param    string      $title          Title of story
* @param    string      $introtext      Introduction text
* @param    string      $bodytext       Text of body
* @param    int         $hits           Number of times story has been viewed
* @param    string      $unixdate       Date story was originally saved
* @param    int         $featured       Flag on whether or not this is a featured article
* @param    string      $commentcode    Indicates if comments are allowed to be made to article
* @param    string      $trackbackcode  Indicates if trackbacks are allowed to be made to article
* @param    string      $statuscode     Status of the story
* @param    string      $postmode       Is this HTML or plain text?
* @param    string      $frontpage      Flag indicates if story will appear on front page and topic or just topic
* @param    int         $draft_flag     Flag indicates if story is a draft or not
* @param    int         $numemails      Number of times this story has been emailed to someone
* @param    int         $owner_id       ID of owner (not necessarily the author)
* @param    int         $group_id       ID of group story belongs to
* @param    int         $perm_owner     Permissions the owner has on story
* @param    int         $perm_group     Permissions the group has on story
* @param    int         $perm_member    Permissions members have on story
* @param    int         $perm_anon      Permissions anonymous users have on story
* @param    int         $delete         String array of attached images to delete from article
*
*/
function submitstory($type='',$sid,$uid,$tid,$title,$introtext,$bodytext,$hits,$unixdate,$expiredate,$featured,$commentcode,$trackbackcode,$statuscode,$postmode,$frontpage,$draft_flag,$numemails,$owner_id,$group_id,$perm_owner,$perm_group,$perm_members,$perm_anon,$delete,$show_topic_icon,$old_sid)
{
    global $_CONF, $_TABLES, $_USER, $LANG24, $MESSAGE;

    // Convert array values to numeric permission values
    list($perm_owner,$perm_group,$perm_members,$perm_anon) = SEC_getPermissionValues($perm_owner,$perm_group,$perm_members,$perm_anon);

    // fix for bug in advanced editor
    if ($_CONF['advanced_editor'] && ($bodytext == '<br>')) {
        $bodytext = '';
    }
    $sid = COM_sanitizeID ($sid);

    $duplicate_sid = false;
    $delete_old_story = false;
    $access = 0;
    if (DB_count ($_TABLES['stories'], 'sid', $sid) > 0) {
        if ($sid != $old_sid) {
            $duplicate_sid = true;
        }
        $result = DB_query ("SELECT owner_id,group_id,perm_owner,perm_group,perm_members,perm_anon FROM {$_TABLES['stories']} WHERE sid = '{$sid}'");
        $A = DB_fetchArray ($result);
        $access = SEC_hasAccess ($A['owner_id'], $A['group_id'],
                $A['perm_owner'], $A['perm_group'], $A['perm_members'],
                $A['perm_anon']);
    } else {
        if (!empty ($old_sid) && ($sid != $old_sid)) {
            $delete_old_story = true;
        }
        $access = SEC_hasAccess ($owner_id, $group_id, $perm_owner, $perm_group,
                $perm_members, $perm_anon);
    }
    if (($access < 3) || (SEC_hasTopicAccess ($tid) < 2) || !SEC_inGroup ($group_id)) {
        $display .= COM_siteHeader ('menu', $MESSAGE[30]);
        $display .= COM_startBlock ($MESSAGE[30], '',
                            COM_getBlockTemplate ('_msg_block', 'header'));
        $display .= $MESSAGE[31];
        $display .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
        $display .= COM_siteFooter ();
        COM_accessLog("User {$_USER['username']} tried to illegally submit or edit story $sid.");
        echo $display;
        exit;
    } elseif ($duplicate_sid) {
        $display .= COM_siteHeader ('menu', $LANG24[5]);
        $display .= COM_errorLog ($LANG24[24], 2);
        $display .= storyeditor ($sid);
        $display .= COM_siteFooter ();
        echo $display;
        exit;
    } elseif (!empty($title) && !empty($introtext)) {
        $date = date ('Y-m-d H:i:s', $unixdate);
        $expire = date ('Y-m-d H:i:s', $expiredate);

        if (empty($hits)) {
            $hits = 0;
        }

        // Get draft flag value
        if ($draft_flag == 'on') {
            $draft_flag = 1;
        } else {
            $draft_flag = 0;
        }

        if (DB_getItem ($_TABLES['topics'], 'tid', "archive_flag=1") == $tid) {
            $featured = 0;
            $frontpage = 0;
            $statuscode = STORY_ARCHIVE_ON_EXPIRE;
        }

        if ($featured == '1') {
            // there can only be one non-draft featured story
            if ($draft_flag == 0 AND $unixdate <= time()) {
                $id[1] = 'featured';
                $values[1] = 1;
                $id[2] = 'draft_flag';
                $values[2] = 0;
                DB_change($_TABLES['stories'],'featured','0',$id,$values);
            }
        }

        if (empty($numemails)) {
            $numemails = 0;
        }

        if ($show_topic_icon == 'on') {
            $show_topic_icon = 1;
        } else {
            $show_topic_icon = 0;
        }

        // Clean up the text
        if ($postmode == 'html' OR $postmode == 'adveditor') {
            // Advanced Editor: Are you editing this story and switching mode from text to html
            if ( (DB_count($_TABLES['stories'],'sid',$sid) == 1) AND
                 (DB_getItem($_TABLES['stories'], 'postmode',"sid='$sid'") == 'plaintext') AND
                 ($_CONF['advanced_editor'] == 1) ) {
                     $introtext = str_replace("\n",'<br>',$introtext);
            }
            $introtext = COM_checkHTML (COM_checkWords ($introtext));
            $bodytext = COM_checkHTML (COM_checkWords ($bodytext));
        } else {
            $introtext = htmlspecialchars (COM_checkWords ($introtext));
            $bodytext = htmlspecialchars (COM_checkWords ($bodytext));
        }

        $title = addslashes(htmlspecialchars(strip_tags(COM_checkWords($title))));
        $comments   = DB_count ($_TABLES['comments'], array ('sid', 'type'),
                                array ($sid, 'article'));
        $trackbacks = DB_count ($_TABLES['trackback'], array ('sid', 'type'),
                                array ($sid, 'article'));

        // Delete any images if needed
        for ($i = 1; $i <= count($delete); $i++) {
            $ai_filename = DB_getItem ($_TABLES['article_images'],'ai_filename', "ai_sid = '$sid' AND ai_img_num = " . key ($delete));
            STORY_deleteImage ($ai_filename);

            DB_query ("DELETE FROM {$_TABLES['article_images']} WHERE ai_sid = '$sid' AND ai_img_num = " . key ($delete));
            next ($delete);
        }

        // OK, let's upload any pictures with the article
        if (DB_count($_TABLES['article_images'], 'ai_sid', $sid) > 0) {
            $index_start = DB_getItem($_TABLES['article_images'],'max(ai_img_num)',"ai_sid = '$sid'") + 1;
        } else {
            $index_start = 1;
        }

        if (count($_FILES) > 0 AND $_CONF['maximagesperarticle'] > 0) {
            require_once($_CONF['path_system'] . 'classes/upload.class.php');
            $upload = new upload();

            if (isset ($_CONF['debug_image_upload']) && $_CONF['debug_image_upload']) {
                $upload->setLogFile ($_CONF['path'] . 'logs/error.log');
                $upload->setDebug (true);
            }
            $upload->setMaxFileUploads ($_CONF['maximagesperarticle']);
            if (!empty($_CONF['image_lib'])) {
                if ($_CONF['image_lib'] == 'imagemagick') {
                    // Using imagemagick
                    $upload->setMogrifyPath ($_CONF['path_to_mogrify']);
                } elseif ($_CONF['image_lib'] == 'netpbm') {
                    // using netPBM
                    $upload->setNetPBM ($_CONF['path_to_netpbm']);
                } elseif ($_CONF['image_lib'] == 'gdlib') {
                    // using the GD library
                    $upload->setGDLib ();
                }
                $upload->setAutomaticResize(true);
                if (isset ($_CONF['debug_image_upload']) && $_CONF['debug_image_upload']) {
                    $upload->setLogFile ($_CONF['path'] . 'logs/error.log');
                    $upload->setDebug (true);
                }
                if ($_CONF['keep_unscaled_image'] == 1) {
                    $upload->keepOriginalImage (true);
                } else {
                    $upload->keepOriginalImage (false);
                }
            }
            $upload->setAllowedMimeTypes (array (
                    'image/gif'   => '.gif',
                    'image/jpeg'  => '.jpg,.jpeg',
                    'image/pjpeg' => '.jpg,.jpeg',
                    'image/x-png' => '.png',
                    'image/png'   => '.png'
                    ));
            if (!$upload->setPath($_CONF['path_images'] . 'articles')) {
                $display = COM_siteHeader ('menu', $LANG24[30]);
                $display .= COM_startBlock ($LANG24[30], '', COM_getBlockTemplate ('_msg_block', 'header'));
                $display .= $upload->printErrors (false);
                $display .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
                $display .= COM_siteFooter ();
                echo $display;
                exit;
            }

            // NOTE: if $_CONF['path_to_mogrify'] is set, the call below will
            // force any images bigger than the passed dimensions to be resized.
            // If mogrify is not set, any images larger than these dimensions
            // will get validation errors
            $upload->setMaxDimensions($_CONF['max_image_width'], $_CONF['max_image_height']);
            $upload->setMaxFileSize($_CONF['max_image_size']); // size in bytes, 1048576 = 1MB

            // Set file permissions on file after it gets uploaded (number is in octal)
            $upload->setPerms('0644');
            $filenames = array();
            $end_index = $index_start + $upload->numFiles() - 1;
            for ($z = $index_start; $z <= $end_index; $z++) {
                $curfile = current($_FILES);
                if (!empty($curfile['name'])) {
                    $pos = strrpos($curfile['name'],'.') + 1;
                    $fextension = substr($curfile['name'], $pos);
                    $filenames[] = $sid . '_' . $z . '.' . $fextension;
                }
                next($_FILES);
            }
            $upload->setFileNames($filenames);
            reset($_FILES);
            $upload->setDebug(true);
            $upload->uploadFiles();

            if ($upload->areErrors()) {
                $retval = COM_siteHeader('menu', $LANG24[30]);
                $retval .= COM_startBlock ($LANG24[30], '',
                               COM_getBlockTemplate ('_msg_block', 'header'));
                $retval .= $upload->printErrors(false);
                $retval .= COM_endBlock(COM_getBlockTemplate ('_msg_block', 'footer'));
                $retval .= COM_siteFooter();
                echo $retval;
                exit;
            }

            reset($filenames);
            for ($z = $index_start; $z <= $end_index; $z++) {
                DB_query("INSERT INTO {$_TABLES['article_images']} (ai_sid, ai_img_num, ai_filename) VALUES ('$sid', $z, '" . current($filenames) . "')");
                next($filenames);
            }
        }

        if ($postmode == 'plaintext') {
            $introtext = COM_makeClickableLinks ($introtext);
            $bodytext = COM_makeClickableLinks ($bodytext);
        }

        if ($_CONF['maximagesperarticle'] > 0) {
            if ($delete_old_story) {
                // story id has changed - update article_images table first
                DB_query ("UPDATE {$_TABLES['article_images']} SET ai_sid = '{$sid}' WHERE ai_sid = '{$old_sid}'");
            }
            list($errors, $introtext, $bodytext) = STORY_insert_images($sid, $introtext, $bodytext);
            if (count($errors) > 0) {
                $display = COM_siteHeader ('menu', $LANG24[54]);
                $display .= COM_startBlock ($LANG24[54], '',
                                COM_getBlockTemplate ('_msg_block', 'header'));
                $display .= $LANG24[55] . '<p>';
                for ($i = 1; $i <= count($errors); $i++) {
                    $display .= current($errors) . '<br>';
                    next($errors);
                }
                $display .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
                $display .= storyeditor($sid);
                $display .= COM_siteFooter();
                echo $display;
                exit;
            }
        }

        // Get the related URLs
        $related = addslashes (implode ("\n",
                        STORY_extractLinks ("$introtext $bodytext")));

        $introtext = addslashes ($introtext);
        $bodytext = addslashes ($bodytext);

        // Set Advanced Editor Mode option but save it still has html mode
        if ($postmode == 'adveditor') {
            $postmode = 'html';
            $advanced_editor_mode = 1;
        } else {
            $advanced_editor_mode = 0;
        }

        DB_save ($_TABLES['stories'], 'sid,uid,tid,title,introtext,bodytext,hits,date,comments,trackbacks,related,featured,commentcode,trackbackcode,statuscode,expire,postmode,frontpage,draft_flag,numemails,owner_id,group_id,perm_owner,perm_group,perm_members,perm_anon,show_topic_icon,in_transit,advanced_editor_mode', "'$sid',$uid,'$tid','$title','$introtext','$bodytext',$hits,FROM_UNIXTIME($unixdate),'$comments','$trackbacks','$related',$featured,'$commentcode','$trackbackcode','$statuscode',FROM_UNIXTIME($expiredate),'$postmode','$frontpage',$draft_flag,$numemails,$owner_id,$group_id,$perm_owner,$perm_group,$perm_members,$perm_anon,$show_topic_icon,1,$advanced_editor_mode");

        // If this is done as part of the moderation then delete the submission
        if (empty ($old_sid)) {
            $del_sid = $sid;
        } else {
            $del_sid = $old_sid;
        }
        DB_delete ($_TABLES['storysubmission'], 'sid', $del_sid);

        // if the story id has changed, delete the story with the old id
        if ($delete_old_story && !empty ($old_sid)) {
            DB_delete ($_TABLES['stories'], 'sid', $old_sid);
            DB_query ("UPDATE {$_TABLES['comments']} SET sid = '$sid' WHERE type = 'article' AND sid = '$old_sid'");
            DB_query ("UPDATE {$_TABLES['trackback']} SET sid = '$sid' WHERE type = 'article' AND sid = '$old_sid'");
        }

        // see if any plugins want to act on that story
        $plugin_error = PLG_itemSaved ($sid, 'article');

        // always clear 'in_transit' flag
        DB_change ($_TABLES['stories'], 'in_transit', 0, 'sid', $sid);

        // in case of an error go back to the story editor
        if ($plugin_error !== false) {
            $display .= COM_siteHeader ('menu', $LANG24[5]);
            $display .= storyeditor ($sid, 'retry', $plugin_error);
            $display .= COM_siteFooter ();
            echo $display;
            exit;
        }

        // update feed(s) and Older Stories block
        COM_rdfUpToDateCheck ('geeklog', $tid, $sid);
        COM_olderStuff ();

        if ($type == 'submission') {
            echo COM_refresh ($_CONF['site_admin_url'] . '/moderation.php?msg=9');
        } else {
            echo COM_refresh ($_CONF['site_admin_url'] . '/story.php?msg=9');
        }
        exit;
    } else {
        $display .= COM_siteHeader('menu', $LANG24[5]);
        $display .= COM_errorLog($LANG24[31], 2);
        $display .= storyeditor($sid);
        $display .= COM_siteFooter();
        echo $display;
        exit;
    }
}

// MAIN
$mode = '';
if (isset($_REQUEST['mode'])){
    $mode = COM_applyFilter ($_REQUEST['mode']);
}

if (isset($_REQUEST['editopt'])){
    $editopt = COM_applyFilter ($_REQUEST['editopt']);
    if ($editopt == 'default') {
        $_CONF['advanced_editor'] = false;
    }
}

$display = '';
if (($mode == $LANG_ADMIN['delete']) && !empty ($LANG_ADMIN['delete'])) {
    $sid = COM_applyFilter ($_POST['sid']);
    $type = '';
    if (isset ($_POST['type'])) {
        $type = COM_applyFilter ($_POST['type']);
    }
    if (!isset ($sid) || empty ($sid)) {
        COM_errorLog ('Attempted to delete story sid=' . $sid);
        echo COM_refresh ($_CONF['site_admin_url'] . '/story.php');
    } else if ($type == 'submission') {
        $tid = DB_getItem ($_TABLES['storysubmission'], 'tid', "sid = '$sid'");
        if (SEC_hasTopicAccess ($tid) < 3) {
            COM_accessLog ("User {$_USER['username']} tried to illegally delete story submission $sid.");
            echo COM_refresh ($_CONF['site_admin_url'] . '/index.php');
        } else {
            DB_delete ($_TABLES['storysubmission'], 'sid', $sid,
                       $_CONF['site_admin_url'] . '/moderation.php');
        }
    } else {
        echo STORY_deleteStory ($sid);
    }
} else if (($mode == $LANG_ADMIN['preview']) && !empty ($LANG_ADMIN['preview'])) {
    $display .= COM_siteHeader('menu', $LANG24[5]);
    $editor = '';
    if (!empty ($_GET['editor'])) {
        $editor = COM_applyFilter ($_GET['editor']);
    }
    $display .= storyeditor (COM_applyFilter ($_POST['sid']), 'preview', '', '',
                             $editor);
    $display .= COM_siteFooter();
    echo $display;
} else if ($mode == 'edit') {
    $display .= COM_siteHeader('menu', $LANG24[5]);
    $sid = '';
    if (isset ($_GET['sid'])) {
        $sid = COM_applyFilter ($_GET['sid']);
    }
    $topic = '';
    if (isset ($_GET['topic'])) {
        $topic = COM_applyFilter ($_GET['topic']);
    }
    $editor = '';
    if (isset ($_GET['editor'])) {
        $editor = COM_applyFilter ($_GET['editor']);
    }
    $display .= storyeditor ($sid, $mode, '', $topic, $editor);
    $display .= COM_siteFooter();
    echo $display;
} else if ($mode == 'editsubmission') {
    $display .= COM_siteHeader('menu', $LANG24[5]);
    $display .= storyeditor (COM_applyFilter ($_GET['id']), $mode);
    $display .= COM_siteFooter();
    echo $display;
} else if (($mode == $LANG_ADMIN['save']) && !empty ($LANG_ADMIN['save'])) {
    $publish_hour = COM_applyFilter ($_POST['publish_hour'], true);
    if (isset ($_CONF['hour_mode']) && ($_CONF['hour_mode'] == 24)) {
        if ($publish_hour >= 12) {
            if ($publish_hour > 12) {
                $publish_hour -= 12;
            }
            $publish_ampm = 'pm';
        } else {
            if ($publish_hour == 0) {
                $publish_hour = 12;
            }
            $publish_ampm = 'am';
        }
    } else {
        $publish_ampm = COM_applyFilter ($_POST['publish_ampm']);
    }
    $publish_minute = COM_applyFilter ($_POST['publish_minute'], true);
    $publish_second = COM_applyFilter ($_POST['publish_second'], true);
    if ($publish_ampm == 'pm') {
        if ($publish_hour < 12) {
            $publish_hour = $publish_hour + 12;
        }
    }
    if ($publish_ampm == 'am' AND $publish_hour == 12) {
        $publish_hour = '00';
    }
    $publish_year = COM_applyFilter ($_POST['publish_year'], true);
    $publish_month = COM_applyFilter ($_POST['publish_month'], true);
    $publish_day = COM_applyFilter ($_POST['publish_day'], true);
    $unixdate = strtotime("$publish_month/$publish_day/$publish_year $publish_hour:$publish_minute:$publish_second");

    $archiveflag = 0;
    if (isset ($_POST['archiveflag'])) {
        $archiveflag = COM_applyFilter ($_POST['archiveflag'], true);
    }
    if ($archiveflag != 1) {
        $statuscode = 0;
    }

    $expire_hour = COM_applyFilter ($_POST['expire_hour'], true);
    if (isset ($_CONF['hour_mode']) && ($_CONF['hour_mode'] == 24)) {
        if ($expire_hour >= 12) {
            if ($expire_hour > 12) {
                $expire_hour -= 12;
            }
            $expire_ampm = 'pm';
        } else {
            if ($expire_hour == 0) {
                $expire_hour = 12;
            }
            $expire_ampm = 'am';
        }
    } else {
        $expire_ampm = COM_applyFilter ($_POST['expire_ampm']);
    }
    $expire_minute = COM_applyFilter ($_POST['expire_minute'], true);
    $expire_second = COM_applyFilter ($_POST['expire_second'], true);
    $expire_year = COM_applyFilter ($_POST['expire_year'], true);
    $expire_month = COM_applyFilter ($_POST['expire_month'], true);
    $expire_day = COM_applyFilter ($_POST['expire_day'], true);

    if (isset ($expire_hour))  {
        if ($expire_ampm == 'pm') {
            if ($expire_hour < 12) {
                $expire_hour = $expire_hour + 12;
            }
        }
        if ($expire_ampm == 'am' AND $expire_hour == 12) {
            $expire_hour = '00';
        }
        $expiredate = strtotime("$expire_month/$expire_day/$expire_year $expire_hour:$expire_minute:$expire_second");
    } else {
        $expiredate = time();
    }
    $uid = COM_applyFilter ($_POST['uid'], true);
    $type = '';
    if (isset ($_POST['type'])) {
        $type = COM_applyFilter ($_POST['type']);
    }

    submitstory ($type, COM_applyFilter ($_POST['sid']), $uid,
                 COM_applyFilter ($_POST['tid']),
                 COM_stripslashes ($_POST['title']),
                 COM_stripslashes ($_POST['introtext']),
                 COM_stripslashes ($_POST['bodytext']),
                 COM_applyFilter ($_POST['hits'], true), $unixdate, $expiredate,
                 COM_applyFilter ($_POST['featured'], true),
                 COM_applyFilter ($_POST['commentcode'], true),
                 COM_applyFilter ($_POST['trackbackcode'], true),
                 COM_applyFilter ($_POST['statuscode'], true),
                 trim(COM_applyFilter ($_POST['postmode'])),
                 COM_applyFilter ($_POST['frontpage'], true),
                 COM_applyFilter ($_POST['draft_flag']),
                 COM_applyFilter ($_POST['numemails'], true),
                 COM_applyFilter ($_POST['owner_id'], true),
                 COM_applyFilter ($_POST['group_id'], true),
                 $_POST['perm_owner'], $_POST['perm_group'],
                 $_POST['perm_members'], $_POST['perm_anon'], $_POST['delete'],
                 COM_applyFilter ($_POST['show_topic_icon']),
                 COM_applyFilter ($_POST['old_sid']));
} else { // 'cancel' or no mode at all
    $type = '';
    if (isset($_POST['type'])){
        $type = COM_applyFilter ($_POST['type']);
    }
    if (($mode == $LANG24[10]) && !empty ($LANG24[10]) &&
            ($type == 'submission')) {
        $display = COM_refresh ($_CONF['site_admin_url'] . '/moderation.php');
    } else {
        $display .= COM_siteHeader('menu', $LANG24[22]);
        $msg = "";
        if (isset($_GET['msg'])) {
            $msg = COM_applyFilter($_GET['msg'], true);
        }
        $display .= COM_showMessage ($msg);
        $display .= liststories();
        $display .= COM_siteFooter();
    }
    echo $display;
}

?>