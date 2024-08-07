<?php

/**
* File: IPofUrl.Examine.class.php
* This is the Personal BlackList Examine class for the Geeklog Spam-X plugin
*
* Copyright (C) 2004-2006 by the following authors:
* Author        Tom Willett        tomw AT pigstye DOT net
*
* Licensed under GNU General Public License
*
* $Id: IPofUrl.Examine.class.php,v 1.5 2006/06/25 08:40:54 dhaun Exp $
*/

if (strpos ($_SERVER['PHP_SELF'], 'IPofUrl.Examine.class.php') !== false) {
    die ('This file can not be used on its own!');
}

/**
* Include Abstract Examine Class
*/
require_once($_CONF['path'] . 'plugins/spamx/' . 'BaseCommand.class.php');

/**
* html_entity_decode is only available as of PHP 4.3.0
*/
if (!function_exists ('html_entity_decode')) {
    require_once ('PHP/Compat.php');

    PHP_Compat::loadFunction ('html_entity_decode');
}

/**
* Examines Comment according to Personal BLacklist
*
* @author Tom Willett tomw AT pigstye DOT net
*/

class IPofUrl extends BaseCommand {
    /**
     * No Constructor Use BaseCommand constructor
     */
    /**
     * Here we do the work
     */
    function execute($comment)
    {
        global $_CONF, $_TABLES, $_USER, $LANG_SX00, $result;

        if (isset ($_USER['uid']) && ($_USER['uid'] > 1)) {
            $uid = $_USER['uid'];
        } else {
            $uid = 1;
        }

        /**
         * Check for IP of url in blacklist
         */
        /*
        * regex to find urls $2 = fqd
        */
        $regx = '(ftp|http|file)://([^/\\s]+)';
        $num = preg_match_all ("#{$regx}#", html_entity_decode ($comment), $urls);

        $result = DB_query ("SELECT value FROM {$_TABLES['spamx']} WHERE name='IPofUrl'", 1);
        $nrows = DB_numRows ($result);

        $ans = 0;
        for ($j = 1; $j <= $nrows; $j++) {
            list ($val) = DB_fetchArray ($result);
            for ($i = 0; $i < $num; $i++) {
              $ip = gethostbyname ($urls[2][$i]);
              if ($val == $ip) {
                $ans = 1; // quit on first positive match
                SPAMX_log ($LANG_SX00['foundspam'] . $urls[2][$i] .
                           $LANG_SX00['foundspam2'] . $uid .
                           $LANG_SX00['foundspam3'] . $_SERVER['REMOTE_ADDR']);
                break;
              }
            }
            if ($ans == 1) {
              break;
            }
        }
        return $ans;
    }
}

?>
