<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog 1.4                                                               |
// +---------------------------------------------------------------------------+
// | comment.php                                                               |
// |                                                                           |
// | Let user comment on a story or plugin.                                    |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2000-2006 by the following authors:                         |
// |                                                                           |
// | Authors: Tony Bibbs        - tony@tonybibbs.com                           |
// |          Mark Limburg      - mlimburg@users.sourceforge.net               |
// |          Jason Whittenburg - jwhitten@securitygeeks.com                   |
// |          Dirk Haun         - dirk@haun-online.de                          |
// |          Vincent Furia     - vinny01 AT users DOT sourceforge DOT net     |
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
// $Id: comment.php,v 1.112 2006/12/11 11:49:17 dhaun Exp $

/**
* This file is responsible for letting user enter a comment and saving the
* comments to the DB.  All comment display stuff is in lib-common.php
*
* @author   Jason Whittenburg
* @author   Tony Bibbs  <tony@tonybibbs.com>
* @author   Vincent Furia <vinny01 AT users DOT sourceforge DOT net>
*
*/

/**
* Geeklog common function library
*/
require_once('lib-common.php');

/**
 * Geeklog comment function library
 */
require_once( $_CONF['path_system'] . 'lib-comment.php' );

// Uncomment the line below if you need to debug the HTTP variables being passed
// to the script.  This will sometimes cause errors but it will allow you to see
// the data being passed in a POST operation
// echo COM_debug($_POST);

/**
 * Handles a comment submission
 *
 * @copyright Vincent Furia 2005
 * @author Vincent Furia <vinny01 AT users DOT sourceforge DOT net>
 * @return string HTML (possibly a refresh)
 */
function handleSubmit()
{
    global $_CONF, $_TABLES, $_USER, $LANG03;

    $display = '';

    $type = COM_applyFilter ($_POST['type']);
    $sid = COM_applyFilter ($_POST['sid']);
    switch ( $type ) {
        case 'article':
            $commentcode = DB_getItem ($_TABLES['stories'], 'commentcode',
                                       "sid = '$sid'" . COM_getPermSQL('AND') . COM_getTopicSQL('AND'));
            if (!isset($commentcode) || $commentcode < 0) {
                return COM_refresh ($_CONF['site_url'] . '/index.php');
            }

            $ret = CMT_saveComment ( strip_tags ($_POST['title']), 
                $_POST['comment'], $sid, COM_applyFilter ($_POST['pid'], true), 
                'article', COM_applyFilter ($_POST['postmode']));

            if ( $ret > 0 ) { // failure //FIXME: some failures should not return to comment form
                $display .= COM_siteHeader ('menu', $LANG03[1])
                         . CMT_commentForm ($_POST['title'], $_POST['comment'],
                           $sid, COM_applyFilter($_POST['pid']), $type,
                           $LANG03[14], COM_applyFilter($_POST['postmode']))
                         . COM_siteFooter();
            } else { // success
                $comments = DB_count ($_TABLES['comments'], 'sid', $sid);
                DB_change ($_TABLES['stories'], 'comments', $comments, 'sid', $sid);
                COM_olderStuff (); // update comment count in Older Stories block
                $display = COM_refresh (COM_buildUrl ($_CONF['site_url']
                    . "/article.php?story=$sid"));
            }
            break;
        default: // assume plugin
            if ( !($display = PLG_commentSave($type, strip_tags ($_POST['title']), 
                                $_POST['comment'], $sid, COM_applyFilter ($_POST['pid'], true),
                                COM_applyFilter ($_POST['postmode']))) ) {
                $display = COM_refresh ($_CONF['site_url'] . '/index.php');
            }
            break;
    }

    return $display;
}

/**
 * Hanldes a comment submission
 *
 * @copyright Vincent Furia 2005
 * @author Vincent Furia <vinny01 AT users DOT sourceforge DOT net>
 * @return string HTML (possibly a refresh)
 */
function handleDelete()
{
    global $_CONF, $_TABLES;

    $type = COM_applyFilter ($_REQUEST['type']);
    $sid = COM_applyFilter ($_REQUEST['sid']);
    switch ( $type ) {
        case 'article':
            $has_editPermissions = SEC_hasRights ('story.edit');
            $result = DB_query ("SELECT owner_id,group_id,perm_owner,perm_group,perm_members,perm_anon FROM {$_TABLES['stories']} WHERE sid = '$sid'");
            $A = DB_fetchArray ($result);

            if ($has_editPermissions && SEC_hasAccess ($A['owner_id'],
                    $A['group_id'], $A['perm_owner'], $A['perm_group'],
                    $A['perm_members'], $A['perm_anon']) == 3) {
                CMT_deleteComment(COM_applyFilter($_REQUEST['cid'], true), $sid, 'article');
                $comments = DB_count ($_TABLES['comments'], 'sid', $sid);
                DB_change ($_TABLES['stories'], 'comments', $comments,
                           'sid', $sid);
                $display .= COM_refresh (COM_buildUrl ($_CONF['site_url']
                                . "/article.php?story=$sid") . '#comments');
            } else {
                COM_errorLog ("User {$_USER['username']} (IP: {$_SERVER['REMOTE_ADDR']}) "
                            . "tried to illegally delete comment $cid from $type $sid");
                $display .= COM_refresh ($_CONF['site_url'] . '/index.php');
            }
            break;
        default: //assume plugin
            if ( !($display = PLG_commentDelete($type, 
                                COM_applyFilter($_REQUEST['cid'], true), $sid)) ) {
                $display = COM_refresh ($_CONF['site_url'] . '/index.php');
            }
            break;
    }

    return $display;
}

/**
 * Handles a comment view request
 *
 * @copyright Vincent Furia 2005
 * @author Vincent Furia <vinny01 AT users DOT sourceforge DOT net>
 * @param boolean $view View or display (true for view)
 * @return string HTML (possibly a refresh)
 */
function handleView($view = true)
{
    global $_CONF, $_TABLES, $_USER, $LANG_ACCESS;

    $display = '';

    if ($view) {
        $cid = COM_applyFilter ($_REQUEST['cid'], true);
    } else {
        $cid = COM_applyFilter ($_REQUEST['pid'], true);
    }

    if ($cid <= 0) {
        return COM_refresh($_CONF['site_url'] . '/index.php');
    }
    
    $sql = "SELECT sid, title, type FROM {$_TABLES['comments']} WHERE cid = $cid";
    $A = DB_fetchArray( DB_query($sql) );
    $sid   = $A['sid'];
    $title = $A['title'];
    $type  = $A['type'];

    $format = $_CONF['comment_mode'];
    if( isset( $_REQUEST['format'] )) {
        $format = COM_applyFilter( $_REQUEST['format'] );
    }
    if ( $format != 'threaded' && $format != 'nested' && $format != 'flat' ) {
        if ( $_USER['uid'] > 1 ) {
            $format = DB_getItem( $_TABLES['usercomment'], 'commentmode', 
                                  "uid = {$_USER['uid']}" );
        } else {
            $format = $_CONF['comment_mode'];
        }
    }

    switch ( $type ) {
        case 'article':
            $sql = 'SELECT COUNT(*) AS count, owner_id, group_id, perm_owner, perm_group, '
                 . "perm_members, perm_anon FROM {$_TABLES['stories']} WHERE (sid = '$sid') "
                 . 'AND (draft_flag = 0) AND (commentcode = 0) AND (date <= NOW())' . COM_getPermSQL('AND') 
                 . COM_getTopicSQL('AND') . ' GROUP BY sid,owner_id, group_id, perm_owner, perm_group,perm_members, perm_anon ';
            $result = DB_query ($sql);
            $B = DB_fetchArray ($result);
            $allowed = $B['count'];

            if ( $allowed == 1 ) {
                $delete_option = ( SEC_hasRights( 'story.edit' ) &&
                    ( SEC_hasAccess( $B['owner_id'], $B['group_id'],
                        $B['perm_owner'], $B['perm_group'], $B['perm_members'],
                        $B['perm_anon'] ) == 3 ) );
                $order = '';
                if (isset ( $_REQUEST['order'])) {
                    $order = COM_applyFilter ($_REQUEST['order']);
                }
                $page = 0;
                if (isset ($_REQUEST['page'])) {
                    $page = COM_applyFilter ($_REQUEST['page'], true);
                }
                $display .= CMT_userComments ($sid, $title, $type, $order,
                                $format, $cid, $page, $view, $delete_option);
            } else {
                $display .= COM_startBlock ($LANG_ACCESS['accessdenied'], '',
                                    COM_getBlockTemplate ('_msg_block', 'header'))
                         . $LANG_ACCESS['storydenialmsg']
                         . COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
            }
            break;

        default: // assume plugin
            if ( !($display = PLG_displayComment($type, $sid, $cid, $title,
                                  COM_applyFilter ($_REQUEST['order']), $format, 
                                  COM_applyFilter ($_REQUEST['page'], true), $view)) ) {
                return COM_refresh($_CONF['site_url'] . '/index.php');
            }
            break;
    }

    return COM_siteHeader() . $display . COM_siteFooter();
}

// MAIN
$display = '';

// If reply specified, force comment submission form
if (isset ($_REQUEST['reply'])) {
    $_REQUEST['mode'] = '';
}

$mode = '';
if (!empty ($_REQUEST['mode'])) {
    $mode = COM_applyFilter ($_REQUEST['mode']);
}
switch ($mode) {
case $LANG03[14]: // Preview
    $display .= COM_siteHeader('menu', $LANG03[14])
             . CMT_commentForm (strip_tags ($_POST['title']), $_POST['comment'],
                    COM_applyFilter ($_POST['sid']),
                    COM_applyFilter ($_POST['pid'], true),
                    COM_applyFilter ($_POST['type']), $mode,
                    COM_applyFilter ($_POST['postmode']))
             . COM_siteFooter(); 
    break;

case $LANG03[11]: // Submit Comment
    $display .= handleSubmit();  // moved to function for readibility
    break;

case 'delete':
    $display .= handleDelete();  // moved to function for readibility
    break;

case 'view':
    $display .= handleView(true);  // moved to function for readibility
    break;

case 'display':
    $display .= handleView(false);  // moved to function for readibility
    break;

case 'report':
    $display .= COM_siteHeader ('menu', $LANG03[27])
              . CMT_reportAbusiveComment (COM_applyFilter ($_GET['cid'], true),
                                          COM_applyFilter ($_GET['type']))
              . COM_siteFooter ();
    break;

case 'sendreport':
    $display .= CMT_sendReport (COM_applyFilter ($_POST['cid'], true),
                                COM_applyFilter ($_POST['type']));
    break;

default:  // New Comment
    $sid = COM_applyFilter ($_REQUEST['sid']);
    $type = COM_applyFilter ($_REQUEST['type']);
    $title = '';
    if (isset ($_REQUEST['title'])) {
        $title = strip_tags ($_REQUEST['title']);
    }
    $postmode = $_CONF['postmode'];
    if (isset ($_REQUEST['postmode'])) {
        $postmode = COM_applyFilter ($_REQUEST['postmode']);
    }

    if (!empty ($sid) && !empty ($type)) { 
        if (empty ($title)) {
            if ($type == 'article') {
                $title = DB_getItem ($_TABLES['stories'], 'title',
                                     "sid = '{$sid}'" . COM_getPermSQL('AND') . COM_getTopicSQL('AND'));
            }
            $title = str_replace ('$', '&#36;', $title);
            // CMT_commentForm expects non-htmlspecial chars for title...
            $title = str_replace ( '&amp;', '&', $title );
            $title = str_replace ( '&quot;', '"', $title );
            $title = str_replace ( '&lt;', '<', $title );
            $title = str_replace ( '&gt;', '>', $title );
        }
        $display .= COM_siteHeader('menu', $LANG03[1])
                 . CMT_commentForm ($title, '', $sid,
                        COM_applyFilter ($_REQUEST['pid'], true), $type, $mode,
                        $postmode)
                 . COM_siteFooter();
    } else {
        $display .= COM_refresh($_CONF['site_url'] . '/index.php');
    }
    break;
}

echo $display;

?>
