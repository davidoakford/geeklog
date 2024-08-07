<?php

###############################################################################
# english.php
# This is the english language page for GeekLog!
# Special thanks to Mischa Polivanov for his work on this project
#
# Copyright (C) 2000 Jason Whittenburg
# jwhitten@securitygeeks.com
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
###############################################################################

$LANG_CHARSET = 'Windows-1251';

###############################################################################
# Array Format:
# $LANGXX[YY]:  $LANG - variable name
#               XX    - file id number
#               YY    - phrase id number
###############################################################################

###############################################################################
# USER PHRASES - These are file phrases used in end user scripts
###############################################################################

###############################################################################
# lib-common.php

$LANG01 = array(
    1 => '��������� ��:',
    2 => '������� ������',
    3 => '���� ���������',
    4 => '����������',
    5 => '��������',
    6 => '���������',
    7 => '��������� �� �����������',
    8 => '�����',
    9 => '����� �������:',
    10 => '����� �����',
    11 => '��������',
    12 => '�������',
    13 => '����',
    14 => '������',
    15 => '�������',
    16 => '����������',
    17 => '�����������',
    18 => 'SQL Query',
    19 => '�����',
    20 => '������������� ����������:',
    21 => '���',
    22 => 'User ID',
    23 => '���� �� ���������',
    24 => '��������',
    25 => '��������',
    26 => '������ �� Lameland �� ���� ����������� �� �����������, ����������� �� ������������.',
    27 => '���-���� ����������',
    28 => '������',
    29 => '���� ���������.',
    30 => '��-����� ��������',
    31 => 'HTML ��������:',
    32 => '������, ��������� ���',
    33 => '������, log ������ �� � �������� �� ������',
    34 => '������',
    35 => '�����',
    36 => '��',
    37 => '���� ������������� ��������',
    38 => 'Content Syndication',
    39 => '������',
    40 => 'You have <tt>register_globals = Off</tt> in your <tt>php.ini</tt>. However, Geeklog requires <tt>register_globals</tt> to be <strong>on</strong>. Before you continue, please set it to <strong>on</strong> and restart your web server.',
    41 => '�������� �����������',
    42 => '�����:',
    43 => '�������',
    44 => 'Parent',
    45 => 'MySQL Error Number',
    46 => 'MySQL Error Message',
    47 => '������������� �������',
    48 => '������',
    49 => '���������',
    50 => 'Error with SQL statement',
    51 => 'help',
    52 => '���',
    53 => 'Admin Home',
    54 => '������ �� ���� �� ���� �������.',
    55 => '������ ���',
    56 => '��������',
    57 => '������',
    58 => '����',
    59 => "��� ��� ������ �����������?  ������������� �� ���� <a href=\"{$_CONF['site_url']}/users.php?mode=new\">��� ����������</a>",
    60 => '��������',
    61 => '�����������',
    62 => '����',
    63 => '��������� �� �����������',
    64 => '������� �� �������',
    65 => '���������',
    66 => '���� ��������',
    67 => '����� ����� � ',
    68 => 'home',
    69 => 'contact',
    70 => '�������',
    71 => '������� ����������',
    72 => '������',
    73 => '����� ������',
    74 => '��������',
    75 => '�������',
    76 => '����������',
    77 => 'Plugins',
    78 => '���������� �������',
    79 => '����� ����',
    80 => '���������� �� ����������',
    81 => '���������� ���� ����������',
    82 => '����',
    83 => '���������',
    84 => '������',
    85 => '���� ���������� 48 ����',
    86 => '���� ���� ���������',
    87 => '���� ���������� ��� �������',
    88 => '���� ���� ������',
    89 => '���� ���� �������',
    90 => 'Home',
    91 => '���������� � ���������� ��',
    92 => '�������',
    93 => 'Copyright �2000 - 2003',
    94 => '������ ����� ��������.',
    95 => 'Powered By',
    96 => '�����',
    97 => '������ � ����',
    98 => 'Plug-ins',
    99 => '����������',
    100 => '���� ���� ����������',
    101 => '������� �� �����',
    102 => '������� �� �����',
    103 => 'Back-up �� ������ �����',
    104 => '��',
    105 => 'Mail Users',
    106 => '��������',
    107 => 'GL Version Test',
    108 => 'Clear cache',
    109 => 'Report abuse',
    110 => 'Report this post to the site admin',
    111 => 'View PDF Version',
    112 => 'Registered Users',
    113 => 'Documentation',
    114 => 'TRACKBACKS',
    115 => 'No new trackback comments',
    116 => 'Trackback',
    117 => 'Directory',
    118 => 'Please continue reading on the next page:',
    119 => "Lost your <a href=\"{$_CONF['site_url']}/users.php?mode=getpassword\">password</a>?",
    120 => 'Permanent link to this comment',
    121 => 'Comments (%d)',
    122 => 'Trackbacks (%d)',
    123 => 'All HTML is allowed',
    124 => 'Click to delete all checked items',
    125 => 'Are you sure you want to Delete all checked items?',
    126 => 'Select or de-select all items'
);

###############################################################################
# comment.php

$LANG03 = array(
    1 => '���������� ��������',
    2 => 'Post Mode',
    3 => '�����',
    4 => '������ ������',
    5 => '������������� ���',
    6 => '�� �� ����������� ��������, � ���������� �� �� �����������.��� ��� ��� ������ ������, ������ �� ��������� ����� ���� ��������� �������� ������ ������.',
    7 => '���������� �� �������� ���� ���������� ����� ',
    8 => " �������.   ���� ���� ������� �� �� ������� ���-�����\n{$_CONF['commentspeedlimit']} �������, ����� �� ����������� ��� ��������",
    9 => '��������',
    10 => 'Send Report',
    11 => '������� ��������',
    12 => '���� ��������� �������� Title � Comment, �� �� ��������� ������ �������� �������.',
    13 => '����������',
    14 => '�������',
    15 => 'Report this post',
    16 => '��������',
    17 => '������',
    18 => '�����',
    19 => '���� �� �� ������������ �� ������.',
    20 => '����������� �� ���� ����������� ����, �������, �� ������ ���������� ������� �� ���������� � ���.',
    21 => '����� �� �������� ���� ��������� ���������, ��������� ����, ����� ���� �� �����������.',
    22 => '�������� ������ � ����� ����, �� ����� �� ����� ���� �� ����� ��� ��� ��� ������ ���������.',
    23 => '������ e-mail ����� ���� �� ���� ����������.',
    24 => '�������� ����������',
    25 => 'Are you sure you want to report this post to the site admin?',
    26 => '%s reported the following abusive comment post:',
    27 => 'Abuse report'
);

###############################################################################
# users.php

$LANG04 = array(
    1 => 'User Profile for',
    2 => '������������� ���',
    3 => '���',
    4 => '������',
    5 => 'Email',
    6 => '����',
    7 => '(����)���������',
    8 => 'PGP Key',
    9 => '������',
    10 => '���������� 10 ��������� �� �����������',
    11 => '���� ���������',
    12 => 'User Preferences for',
    13 => '����� ��������� �� e-mail',
    14 => '���� ������ � ���������� ��������. ��������� � �� � ������� ���������. �� �� ��������� ����, �� ������� � ���� ���� ������ � \'���������\'.',
    15 => "������ {$_CONF['site_name']} ����������� �� ��������� �������. �� �� � ����������, ������ �� �� �������, ����������� ������������ ��-����.",
    16 => '���� �� ����� ������',
    17 => '����� ������ �� ���������� !',
    18 => '���������� �� ��� e-mail �� � �������',
    19 => '������ ��� �/��� ����������� ���� ����������� !',
    20 => '���������� �� ��� e-mail �� � �������',
    21 => '������',
    22 => "Register with {$_CONF['site_name']}!",
    23 => "������������� � {$_CONF['site_name']} �� ���� ������� �� ����������� ��������� � �� ��������� ������/������� (��������, ������� �� ;))",
    24 => '�������� �� �� ���� ��������� �� ��������� �� ��� e-mail �����.',
    25 => '��������� ������ ?',
    26 => '�������� ������ ������������� ��� <em>�</em> email �����, � ����� ��� �� ������������. ���������� ��� �� ������� �������� �� �� �������� �� ����� e-mail.',
    27 => '������������� �� ���� !',
    28 => '������� ������',
    29 => 'logged out from',
    30 => '������� ��� ��',
    31 => '���������, ����� �������� ������� �� ��� �������',
    32 => '������',
    33 => 'Never publicly displayed',
    34 => '���� � ������ �������� ���',
    35 => '�������� ������, �� �� � ���������',
    36 => '������� � http://',
    37 => '��������� ��� ������ ���������',
    38 => '���� ���� �� ���� ��������� �� ����� !',
    39 => 'Your public PGP key to share',
    40 => '���� topic �����',
    41 => '����������� �� ����������',
    42 => '������ �� ������',
    43 => '���������� ���� ����������',
    44 => 'No boxes',
    45 => 'Display ����� ��',
    46 => '���������� �� �������/������ ��',
    47 => 'News box Configuration for',
    48 => '����',
    49 => '���� ������ � ������������',
    50 => '�� ���������, ��� ������ �������',
    51 => '���� ������',
    52 => '�� ������������ �',
    53 => '����������� �� e-mail �������� ���������� ����� �����',
    54 => '���������� ������ � ������, ����� ������ ������� �� ����������.',
    55 => '��� �������� ������ ���� ������������ �� ����������, �� ��� ������� ������������ ��������. ��� ������� ������������ ���������, ������ �������, �� ������������ �������� ����� ���������. ������������ �������� �� �������� � �������� ����� (bold).',
    56 => '������',
    57 => 'Display Mode',
    58 => '��������',
    59 => '����� �� �����������',
    60 => '�� ����� ����� ������� �� ������� ����������� ��?',
    61 => '����� ���-������ ��� ���-������� ?',
    62 => '�� ������������ � 100',
    63 => "������ ������ ���� ��������� �� ��������� �� ��� e-mail �����. ���� ��������� ������������ � �����������. ��������� �� ����������� {$_CONF['site_name']}",
    64 => '��������� �� ����������� ��',
    65 => '�������� �� ������� ������',
    66 => "�������� ��� �������� ��� ����������� �� ������ ������������� ��� �/��� ������. ���� �������� ������ ! <a href=\"{$_CONF['site_url']}/users.php?mode=new\">��� ����������</a>",
    67 => 'Member Since',
    68 => '������� �� ��',
    69 => '����� ����� ���� ���� ��������, ������� �� ������ ��������� �� ������� ?',
    70 => "������� ������������ � �������� ��� �� {$_CONF['site_name']}",
    71 => "���� �� ���-�������� �������� �� {$_CONF['site_name']} � ����, �� ������ �� ������� ������� �� ���� � ������� ��� �� �����. �� ����� ������ �� �� <a href=\"{$_CONF['site_url']}/users.php?mode=new\">������������</a> � {$_CONF['site_name']}.  ����� ����������� ? ������ �� ������� ���� log-in ������� ������ !",
    72 => '����',
    73 => '����',
    74 => '��������� ������� �� ����� !',
    75 => 'Emailed Topics for',
    76 => '��� �������� ���� �� ������� �� �������� ������ �������, ����������� � ��� �� ������ ��� ������. �������� ������, �� ����� ��� �������������� !',
    77 => '������',
    78 => '�������� ������ !',
    79 => '�������� ���, �� �� �������� ����������.',
    80 => '����',
    81 => '������� email',
    82 => '���������� 10 ���������� �� �����������',
    83 => '���������� �� ��������� �� �����������',
    84 => '��� ���� �� �����������:',
    85 => '��� ���� �� �����������:',
    86 => '������ ������ ������� ��',
    87 => '������ ������������� ���',
    88 => "����� (�������� ���) � ������� �� ����� �������� �� ����� ������ \"%s\" �� {$_CONF['site_name']}, <{$_CONF['site_url']}>.\n\n��� ������ �� ��������� ������ ������, ���� �������� �� ������� ���� link:\n\n",
    89 => "��� �� ������� �������, ����������� ���� ��������� � ������ ������ �� ������ �����������.\n\n",
    90 => '������ �� �������� ������ ������ �� ����� ������ � ������ ��-����.  ������ ����� ������ �� � ������� ������ �� ��������� ���� �����.',
    91 => '����� ���� ������',
    92 => '������ ������ �� ������',
    93 => '�� �������� ��� ��������� �� ������� �������� �� ����� %d �������. ���������� �� ��������� %d ������� ����� ��� �������.',
    94 => '��������� �� ������"%s"',
    95 => '��������  ������ "��������� �� ������" , �� �� ����������� ������ ������������� �� �� ������ ���� � �����. ���� �������� ��������, �� ������ �������� � ���������, ��������� �� ���� ������ <strong>����</strong> �� ����� ������� � �� ����� ����������� ���� ��������� �� �������� ���������.',
    96 => '��������� �� ������',
    97 => '���������� ����������� �� ������� ��',
    98 => '������� �� ���, �� ������� �� �������� ������ �����������? ������ �� ��������� ����, ���� �� ������ �� �� ������� � ���� ���� ������ (����� ��� �� �� ��������� ���� ������). ��� ��� �������, �������� ������ "��������� �� ������" ��-����.',
    99 => 'Privacy ����� ��',
    100 => 'Email from Admin',
    101 => 'Allow email from Site Admins',
    102 => 'Email �� �����������',
    103 => '������� email �� ����� �����������',
    104 => '�������� ��������������� �� ��� ������ ��� ������',
    105 => '�������� ��������������� �� ��� � "��� � ������"',
    106 => 'Location',
    107 => 'Shown in your public profile',
    108 => 'Confirm new password',
    109 => 'Enter the New password again here',
    110 => 'Current Password',
    111 => 'Please enter your Current password',
    112 => 'You have exceeded the number of allowed login attempts.  Please try again later.',
    113 => 'Login Attempt Failed',
    114 => 'Account Disabled',
    115 => 'Your account has been disabled, you may not login. Please contact an Administrator.',
    116 => 'Account Awaiting Activation',
    117 => 'Your account is currently awaiting activation by an administrator. You will not be able to login until your account has been approved.',
    118 => "Your {$_CONF['site_name']} account has now been activated by an administrator. You may now login to the site at the url below using your username (<username>) and password as previously emailed to you.",
    119 => 'If you have forgotten your password, you may request a new one at this url:',
    120 => 'Account Activated',
    121 => 'Service',
    122 => 'Sorry, new user registration is disabled',
    123 => "Are you a <a href=\"{$_CONF['site_url']}/users.php?mode=new\">new user</a>?",
    124 => 'Confirm Email',
    125 => 'You have to enter the same email address in both fields!',
    126 => 'Please repeat for confirmation',
    127 => 'To change any of these settings, you will have to enter your current password.',
    128 => 'Your Name',
    129 => 'Password &amp; Email',
    130 => 'About You',
    131 => 'Daily Digest Options',
    132 => 'Daily Digest Feature',
    133 => 'Comment Display',
    134 => 'Comment Options',
    135 => '<li>Default mode for how comments will be displayed</li><li>Default order to display comments</li><li>Set maximum number of comments to show - default is 100</li>',
    136 => 'Exclude Topics and Authors',
    137 => 'Filter Story Content',
    138 => 'Misc Settings',
    139 => 'Layout and Language',
    140 => '<li>No Topic Icons if checked will not display the story topic icons</li><li>No boxes if checked will only show the Admin Menu, User Menu and Topics<li>Set the maximum number of stories to show per page</li><li>Set your theme and perferred date format</li>',
    141 => 'Privacy Settings',
    142 => 'The default setting is to allow users & admins to email fellow site members and show your status as online. Un-check these options to protect your privacy.',
    143 => 'Filter Block Content',
    144 => 'Show & hide boxes',
    145 => 'Your Public Profile',
    146 => 'Password and email',
    147 => 'Edit your account password, email and autologin feature. You will need to enter the same password or email address twice as a confirmation.',
    148 => 'User Information',
    149 => 'Modify your user information that will be shown to other users.<li>The signature will be added to any comments or forum posts you made</li><li>The BIO is a brief summary of yourself to share</li><li>Share your PGP Key</li>',
    150 => 'Warning: Javascript recommended for enhanced functionality',
    151 => 'Preview',
    152 => 'Username & Password',
    153 => 'Layout & Language',
    154 => 'Content',
    155 => 'Privacy',
    156 => 'Delete Account'
);

###############################################################################
# index.php

$LANG05 = array(
    1 => '���� ��������� ������',
    2 => '���� ��������� ������.  ���� �� ���� ������� ������ � ���� ������ ��� ��� ��������� ����������� �� ����� ��� ������ �� ������� �� ��������� �� �������.',
    3 => ' �� ���� %s',
    4 => '�����',
    5 => '�������� ��������',
    6 => '�������� ��������',
    7 => 'First',
    8 => 'Last'
);

###############################################################################
# profiles.php

$LANG08 = array(
    1 => '������ �� ������ ��� ����������� �� ������ ���������. ���� �������� ������.',
    2 => '����������� �� ��������� �������.',
    3 => '���� ������� ��, �� ���������� ������� e-mail ����� � Reply �������.',
    4 => 'Please fill in the Your Name, Reply To, Subject and Message fields',
    5 => '������: ���� ����� ����������.',
    6 => '������.',
    7 => '������ ��',
    8 => '���',
    9 => '����',
    10 => '������� e-mail ��',
    11 => '������ ���:',
    12 => '�������� ��:',
    13 => '����:',
    14 => '���������:',
    15 => 'HTML-�� ���� �� ���� ��������.',
    16 => '������� ���������',
    17 => '������� �� �������',
    18 => '�� ���',
    19 => '�� e-mail �����',
    20 => '�� ���',
    21 => '�� Email �����',
    22 => '������� �� ����������� �� ������ ������',
    23 => "���� e-mail � �������� �� ��� �� %s at %s ������ ���������� ������� �� ������������ �� � {$_CONF['site_url']}.  ���� �� � ���� � ������� e-mail �� � ������� � ������ �� ��-��������� ��������.",
    24 => 'Comment on this story at',
    25 => '������ �� ��� �������, �� �� ���������� ���� �������.',
    26 => '���� ����� �� �� ������� �� ��������� email �� �������� �� ��� ����������.  ������ ������ �� ������������.',
    27 => '������ ���������',
    28 => '%s wrote: ',
    29 => "This is the daily digest from {$_CONF['site_name']} for ",
    30 => ' Daily Newsletter for ',
    31 => 'Title',
    32 => 'Date',
    33 => 'Read the full article at',
    34 => 'End of Message',
    35 => 'Sorry, this user prefers not to receive any emails.'
);

###############################################################################
# search.php

$LANG09 = array(
    1 => '������ �������',
    2 => '������� ����',
    3 => '����',
    4 => '������',
    5 => '���',
    6 => '����������',
    7 => '���������',
    8 => '������',
    9 => '������',
    10 => '�����',
    11 => '��������� �� ���������',
    12 => '����������',
    13 => '��������� �� ���������: ���� ����������',
    14 => '���� ���������� �� ������ �������',
    15 => '�������� ������.',
    16 => '��������',
    17 => '����',
    18 => '�����',
    19 => "����� �� ������ ���� ����� �� {$_CONF['site_name']}",
    20 => '����',
    21 => '��',
    22 => '(������ �� ������ ����-��-��)',
    23 => '��������',
    24 => '������� �� %d ���������',
    25 => '�������� ��',
    26 => '�������� ',
    27 => '�������',
    28 => '���� ������� ���������� ��� ��������, ��������� � ������ �������',
    29 => '��������� ��� ������������ � �����������',
    30 => '���� ������� ���������',
    31 => '���� plug-in �� ����� ����',
    32 => '�������',
    33 => 'URL',
    34 => '�����',
    35 => '����� ���',
    36 => '���� ������� �������',
    37 => '��������� � ���������',
    38 => '��������� ��� ��������',
    39 => '������',
    40 => '�������',
    41 => '������ ������� ������ �� � �� ������� ��� �������.',
    42 => '���� ����������� �������� ������ �� ������: ����-��-�� (������-�����-���).',
    43 => '����� �����',
    44 => '������ ����',
    45 => '��� �� � �� ������',
    46 => '������',
    47 => '�����',
    48 => '�����',
    49 => '����',
    50 => '���������',
    51 => '����',
    52 => '�������',
    53 => '�������� � ������������',
    54 => '��������� � �����������',
    55 => 'the phrase',
    56 => '�',
    57 => '���',
    58 => 'More results &gt;&gt;',
    59 => 'Results',
    60 => 'per page',
    61 => 'Refine search'
);

###############################################################################
# stats.php

$LANG10 = array(
    1 => '����������',
    2 => '��� ���� ���������',
    3 => '���������� (���������) � ���������',
    4 => '������ (��������) � ���������',
    5 => '������ (���������) � ���������',
    6 => '������� � ���������',
    7 => '������� ���-������ ����������',
    8 => '�������� �� ������������',
    9 => '��������',
    10 => '�������� ���� ������� ���������� �� ���� ���� ��� ���� ����� �� � ���������.',
    11 => '���-������������� ����������.',
    12 => '���������',
    13 => '�������� ���� ������� ���������� �� ����� ��� � ����� �� ��� �� � ������� ��������.',
    14 => '������� ���-����� ������',
    15 => '������',
    16 => '�������',
    17 => '�������� ���� ������� ������ ��� ����� �� � ��������.',
    18 => '������� ���-���������� �����',
    19 => '������',
    20 => '���������',
    21 => '�������� �� ���� ������� ������ ��� ����� �� � ��������� ����� �� ���.',
    22 => '������� ���-����������� �� email ����������',
    23 => 'Email-�',
    24 => '�������� �� ���� ������� ��������� �� e-mail ����������.',
    25 => 'Top Ten Trackback Commented Stories',
    26 => 'No trackback comments found.',
    27 => 'Number of active users',
    28 => 'Top Ten Events',
    29 => 'Event',
    30 => 'Hits',
    31 => 'It appears that there are no events on this site or no one has ever clicked on one.'
);

###############################################################################
# article.php

$LANG11 = array(
    1 => '������ ������',
    2 => '������� �� �������',
    3 => '���������',
    4 => '����� �� ������������',
    5 => 'PDF Story Format'
);

###############################################################################
# submit.php

$LANG12 = array(
    1 => '�� �� ��������� %s ������ �� ��� ������ ���� ����������.',
    2 => '����',
    3 => '��� ����������',
    4 => '������� �������',
    5 => '������� ����',
    6 => '������� ����������',
    7 => '������� �� �� ��� �������',
    8 => '�������',
    9 => '������ ������� ���������� � ���� ���� �� ��������� �� �������� �������� �����������...<ul><li>��������� ������ ������, �� �� ������������<li>��������� ����� ����������<li>������������ URL ��������</ul>',
    10 => '��������',
    11 => 'URL',
    12 => '���� �� ���������',
    13 => '���� �� �����������',
    14 => '�����',
    15 => '��������',
    16 => '��� ��� ��� ����, ���� ��������',
    17 => '���������',
    18 => '�����',
    19 => '������� �����',
    20 => '������: ���� ������ ���������',
    21 => '������ �������� "�����", ���� ���� ���� ����� ���� ��� �� �����������.',
    22 => '������: ������� ����� ������',
    23 => '���� ��������� ������ ������.  ������ ������ �� ������������.',
    24 => '������� �� ��������',
    25 => '������ %s ����� ���� �������� �������.',
    26 => 'Speed Limit',
    27 => '���',
    28 => '������',
    29 => '����������',
    30 => '���������� �� ���������� � ����� ',
    31 => " �������.  �������� �� ���� {$_CONF['speedlimit']} �������, ������ ������ �� �������� ������",
    32 => '������������� �������',
    33 => '����� �� ������������',
    34 => '�����',
    35 => 'HTML �� � ���������',
    36 => '����� �� ����������',
    37 => "Submitting an event to {$_CONF['site_name']} will put your event on the master calendar where users can optionally add your event to their personal calendar. This feature is <b>NOT</b> meant to store your personal events such as birthdays and anniversaries.<br><br>Once you submit your event it will be sent to our administrators and if approved, your event will appear on the master calendar.",
    38 => '������ ��������� ���',
    39 => '��� ��������',
    40 => '����� ��������',
    41 => '����',
    42 => '������',
    43 => '������� ���� ������ ���',
    44 => '����� 1',
    45 => '����� 2',
    46 => '����/����',
    47 => '���',
    48 => '�������� ���',
    49 => '��� �� ���������',
    50 => '���������� ���� �� ���������',
    51 => '�����',
    52 => '������',
    53 => '�����������'
);

###############################################################################
# ADMIN PHRASES - These are file phrases used in admin scripts
###############################################################################

###############################################################################
# admin/auth.inc.php

$LANG20 = array(
    1 => '������� �� ����������',
    2 => '����� ! ������ ����������',
    3 => '��������� ������������� ������',
    4 => '���:',
    5 => '������:',
    6 => '����� ������ �� ���� �������� �� ���������� � �������.<br>���� �������� � ���� �� ����������� �����������.',
    7 => '����'
);

###############################################################################
# admin/block.php

$LANG21 = array(
    1 => '������������ ��������������� �����',
    2 => '������ ������������ ����� �� �������� �� ���� ����.',
    3 => '�������� �� ������� (� ����� �����)',
    4 => 'There was a problem reading this feed (see error.log for details).',
    5 => '��� �� ����',
    6 => '����',
    7 => '������',
    8 => '���� �� ��������� �� ����',
    9 => '��� �� �����',
    10 => '��� �� �����',
    11 => '���� ������',
    12 => '�������� ����',
    13 => '����� �� ���� ������',
    14 => 'RDF URL',
    15 => '�������� RDF ������������',
    16 => '����� �� ���� ��������',
    17 => '���������� �� ����',
    18 => '���� ��������� �������� �� ����, ���� �� ��������� �� ���� � ������ ���������� �� ����',
    19 => '���� ��������',
    20 => '�������� �� ����',
    21 => '���� �� ��������� �� ����',
    22 => '��� ����',
    23 => '���� ���',
    24 => '���� ����',
    25 => '�� �� ������������ ��� �������� ���� �������� ����� ���� �� ����.  �� �� ��������� ��� �������� �� ��� ���� �� ����.',
    26 => '���� Layout',
    27 => 'PHP ����',
    28 => '����� �� PHP ����',
    29 => '������� �� ����',
    30 => '��� ������ ���� �� ��������� �� �������� PHP, �������� ����� �� ��������� ��-����.  ��������� ������ �� ������� � ���������� "phpblock_" (e.g. phpblock_getweather).  ��� ���� ���� ���������� ��������� ���� �� ���� ��������.  ���� � ��������� � ��� ����, ����� ���� �� �� ������� ������ ���� �� �� ����� �� ������� �������� �������. �� ���������� ������ ����� "()" ���� ������ �������.  ���������� �� �� ������� PHP ���� �  /path/to/geeklog/system/lib-custom.php.  ���� �� ������� �� ���� �� ������ ��� ��� ���� �� ������������� Geeklog.',
    31 => '������ ��� PHP �����.  ���������, %s, �� ����������.',
    32 => '������, �������� ����(��)',
    33 => '������ �������� URL �� .rdf ����� �� �������� �������',
    34 => '������ �������� �������� � ������� �� PHP blocks',
    35 => '������ �������� �������� � ���������� �� normal blocks',
    36 => '������ �������� ���������� �� layout blocks',
    37 => '���� ��� �� PHP block ���������',
    38 => '��������� �� PHP ��������� ������ �� ���� ���������� \'phpblock_\' (�������� phpblock_getweather).  ������������ \'phpblock_\' �� ������� ������ ������� �� ��������� �� ��������������� ������������ �� ���������� ���.',
    39 => '���������',
    40 => '����',
    41 => '�����',
    42 => '������ �� ��������� ���� ��� � ���� �� ��������� �� Geeklog default ���������',
    43 => '���� �� ������� ��������',
    44 => '�������� �������',
    45 => "�������� �� �� ������� � ���� �� ������ ������ ������.  ���� ���� �� �������. ���� <a href=\"{$_CONF['site_admin_url']}/block.php\">������� �� � ���������������� �����</a>.",
    46 => '��� ����',
    47 => 'Admin Home',
    48 => '��� �� ����',
    49 => ' (���� ������ ������ � � �������� ���)',
    50 => 'URL ����� �� �������� (Help) ����',
    51 => '����������� http://',
    52 => '��� �������� ���� ������, ��������� ����� �� ���� ���� ���� �� ���� ��������',
    53 => '����������',
    54 => '������',
    55 => '�����',
    56 => '������',
    57 => 'Move Block Down',
    58 => 'Move Block Up',
    59 => 'Move block to the right side',
    60 => 'Move block to the left side',
    61 => 'No Title',
    62 => 'Article Limit',
    63 => 'Bad Block Title',
    64 => 'Your Title must not be empty and cannot contain HTML!',
    65 => 'Order',
    66 => 'Autotags',
    67 => 'Check to allow autotags'
);

###############################################################################
# admin/story.php

$LANG24 = array(
    1 => '������',
    2 => '�����',
    3 => '���',
    4 => '��� �� �����������',
    5 => '����������� �� ����������',
    6 => '���� ������� ���������� � ���������',
    7 => '�����',
    8 => '������',
    9 => '�������',
    10 => '������',
    11 => '������',
    12 => 'ID',
    13 => '��������',
    14 => '����',
    15 => '����',
    16 => '����� - ���������',
    17 => '����� - �������',
    18 => '������',
    19 => '���������',
    20 => 'Ping',
    21 => 'Send Ping',
    22 => '������ ��������',
    23 => '�� �� ������������ ��� �������� ������ ����������, �������� ����� ������� ����� ����. �� �� � ������ �������� ����� ������� ��������. �� �� ��������� ���� ���������� �������� �� \'������� ����������\' ������.',
    24 => 'The ID you chose for this story is already in use. Please use another ID.',
    25 => 'Error when saving story',
    26 => '�������',
    27 => 'If you use [unscaledX] instead of [imageX], the image will be inserted at its original dimensions.',
    28 => '<p><b>PREVIEWING</b>: Previewing a story with images attached is best done by saving the article as a draft INSTEAD OF hitting the preview button.  Use the preview button only when images are not attached.',
    29 => 'Trackbacks',
    30 => 'File Upload Errors',
    31 => '���� ��������� �����, �������� � ���� ����� - ���������',
    32 => 'Featured',
    33 => '���� �� ��� ���� ���� ����������',
    34 => '�������',
    35 => '��',
    36 => '��',
    37 => '��� ��',
    38 => '��� ��',
    39 => 'Emails',
    40 => '�������� �������',
    41 => "�������� �� �� ������� � �������, �� ����� ������ ������.  ���� ���� �� ����������� � �������.  ������ �� ������ �������� � ����� ������ ����. ���� <a href=\"{$_CONF['site_admin_url']}/story.php\">������� �� �� ����������������� �����</a> ������ ��� �����.",
    42 => "�������� �� �� ������� � �������, �� ����� ������ ������. ���� ���� �� ������� . ���� <a href=\"{$_CONF['site_admin_url']}/story.php\">������� �� �� ����������������� �����</a>.",
    43 => '���� ����������',
    44 => 'Admin Home',
    45 => '������',
    46 => '<b>NOTE:</b> if you modify this date to be in the future, this article will not be published until that date.  That also means the story will not be included in your RDF headline feed and it will be ignored by the search and statistics pages.',
    47 => 'Images',
    48 => 'image',
    49 => 'right',
    50 => 'left',
    51 => 'To add one of the images you are attaching to this article you need to insert specially formatted text.  The specially formatted text is [imageX], [imageX_right] or [imageX_left] where X is the number of the image you have attached.  NOTE: You must use the images you attach.  If you do not you will be unable to save your story.<BR><P><B>PREVIEWING</B>: Previewing a story with images attached is best done by saving the article as a draft INSTEAD OF hitting the preview button.  Use the preview button only when images are not attached.',
    52 => '������',
    53 => 'was not used.  You must include this image in the intro or body before you can save your changes',
    54 => 'Attached Images Not Used',
    55 => 'The following errors occured while trying to save your story.  Please correct these errors before saving',
    56 => 'Show Topic Icon',
    57 => 'View unscaled image',
    58 => 'Story Management',
    59 => 'Option',
    60 => 'Enabled',
    61 => 'Auto Archive',
    62 => 'Auto Delete',
    63 => '',
    64 => '',
    65 => '',
    66 => '',
    67 => 'Expand the Content Edit Area size',
    68 => 'Reduce the Content Edit Area size',
    69 => 'Publish Story Date',
    70 => 'Toolbar Selection',
    71 => 'Basic Toolbar',
    72 => 'Common Toolbar',
    73 => 'Advanced Toolbar',
    74 => 'Advanced II Toolbar',
    75 => 'Full Featured',
    76 => 'Publish Options',
    77 => 'Javascript needs to be enabled for Advanced Editor. Option can be disabled in the main site config.php',
    78 => 'Click <a href="%s/story.php?mode=edit&amp;sid=%s&amp;editopt=default">here</a> to use default editor',
    79 => 'Preview',
    80 => 'Editor',
    81 => 'Publish Options',
    82 => 'Images',
    83 => 'Archive Options',
    84 => 'Permissions',
    85 => 'Show All',
    86 => 'Advanced Editor',
    87 => 'Story Stats'
);

###############################################################################
# admin/topic.php

$LANG27 = array(
    1 => '�������� �� ����',
    2 => '���� �����',
    3 => '���� ���',
    4 => '���� �����������',
    5 => '(�� ����������� ���������)',
    6 => '����������� �� ���� ������� ������ � ���.',
    7 => '���� ��������� ������ �� ������ � ������� ���, ����� � ������ ����� ������',
    8 => 'Topic ��������',
    9 => '�� �� ������������ ��� �������� ����, �������� �� ���.  �� �� ��������� ���� ������ �������� �� ������ \'���� ����\' �����. �� �������� ���� �� ������ �� ����� ����.  ������ �� ������������ � ���������� ��� ��������� (*).',
    10 => '��������',
    11 => '����������/��������',
    12 => '�������� �������',
    13 => "�������� �� �� ������� � ����, �� ����� ������ ������. ���� �� ���������� � �����. ���� <a href=\"{$_CONF['site_admin_url']}/topic.php\">������� �� �� ����������������� �����</a>.",
    14 => '����� �� ����������',
    15 => '�������',
    16 => '�� ������������ �',
    17 => '���� ����',
    18 => 'Admin Home',
    19 => '������',
    20 => '������',
    21 => '������',
    22 => 'Default',
    23 => '������� ���� ���� default �� ������ ���������',
    24 => '(*)',
    25 => 'Archive Topic',
    26 => 'make this the default topic for archived stories. Only one topic allowed.',
    27 => 'Or Upload Topic Icon',
    28 => 'Maximum',
    29 => 'File Upload Errors'
);

###############################################################################
# admin/user.php

$LANG28 = array(
    1 => 'User Editor',
    2 => 'User ID',
    3 => '����������',
    4 => '����� ���',
    5 => '������',
    6 => '���� �� ���������',
    7 => 'Email �����',
    8 => 'HomePage',
    9 => '(�� ����������� ���������)',
    10 => '���� ��������� ������� � ��������������� ��� � e-mail �����',
    11 => 'User ��������',
    12 => '�� �� ������������ ��� �������� ����� ����������, �������� �� ����.  �� �� ��������� ��� ���������� �������� �� ������ \'��� ����������\'. ������ �� ��������� ����� ������ �������� �� ����� �� ������������ ���, email ��� ����� ��� (��������. *oja* or *.dba).',
    13 => 'SecLev',
    14 => 'Reg. Date',
    15 => '���� �����������',
    16 => 'Admin Home',
    17 => 'changepw',
    18 => '������',
    19 => '������',
    20 => '������',
    21 => 'The username you tried saving already exists.',
    22 => 'Error',
    23 => '������� �����������',
    24 => '������ (�������) �������� �� �����������',
    25 => '������ �� �������� ��������� ���� ����������� � ���������. ������ ������ �� import-���� ����� ������� ���� � ����� � ������ ���� ����� ���, ������������� ��� � e-mail. ����� ������� ���������� �� ���� �������� �� ������ ������ ���� e-mail. ��� ���������� �� ������������ �� ������ �� �������� ��������, ���� �� � �������������� �� ������ ����� ������� !',
    26 => 'Search',
    27 => 'Limit Results',
    28 => 'Check here to delete this picture',
    29 => 'Path',
    30 => 'Import',
    31 => 'New Users',
    32 => 'Done proccessing. Imported %d and encountered %d failures',
    33 => 'submit',
    34 => '������: ������ �� �������� ����.',
    35 => 'Last Login',
    36 => '(never)',
    37 => 'UID',
    38 => 'Group Listing',
    39 => 'Password (again)',
    40 => 'Registration Date',
    41 => 'Last login Date',
    42 => 'Banned',
    43 => 'Awaiting Activation',
    44 => 'Awaiting Authorization',
    45 => 'Active',
    46 => 'User Status',
    47 => 'Edit',
    48 => 'Show Admin Groups',
    49 => 'Admin Group',
    50 => 'Check to allow filtering this group as an Admin Use Group',
    51 => 'Online Days',
    52 => '<br>Note: "Online Days" is the number of days between the first registration and the last login.',
    53 => 'registered',
    54 => 'Batch Delete',
    55 => 'This only works if you have <code>$_CONF[\'lastlogin\'] = true;</code> in your config.php',
    56 => 'Please choose the type of user you want to delete and press "Update List". Then, uncheck those from the list you do not want to delete and press "Delete". Please note that you will only delete those that are currently visible in case the list spans over several pages.',
    57 => 'Phantom users',
    58 => 'Short-Time Users',
    59 => 'Old Users',
    60 => 'Users that registered more than ',
    61 => ' months ago, but never logged in.',
    62 => 'Users that registered more than ',
    63 => ' months ago, then logged in within 24 hours, but since then never came back to your site.',
    64 => 'Normal users, who simply did not visit your site since ',
    65 => ' months.',
    66 => 'Update List',
    67 => 'Months since registration',
    68 => 'Online Hours',
    69 => 'Offline Months',
    70 => 'could not be deleted',
    71 => 'sucessfully deleted',
    72 => 'No User selected for deletion',
    73 => 'Are You sure you want to permanently delete ALL selected users?',
    74 => 'Recent Users',
    75 => 'Users that registered in the last ',
    76 => ' months'
);

###############################################################################
# admin/moderation.php

$LANG29 = array(
    1 => '������',
    2 => '������',
    3 => '����������',
    4 => 'Profile',
    10 => '��������',
    11 => 'Start Date',
    12 => 'URL',
    13 => '���������',
    14 => '����',
    15 => '����',
    16 => '������������� ���',
    17 => '����� ���',
    18 => 'E-mail',
    34 => 'Admin Panel',
    35 => '��������� ��������',
    36 => '��������� ������',
    37 => '��������� �������',
    38 => '�������',
    39 => '���� ��������� ��������, ����� �� ����������� ��� ��������.',
    40 => 'User Submissions'
);

###############################################################################
# admin/mail.php

$LANG31 = array(
    1 => "{$_CONF['site_name']} Mail Utility",
    2 => 'From',
    3 => 'Reply-to',
    4 => 'Subject',
    5 => 'Body',
    6 => 'Send to:',
    7 => 'All users',
    8 => 'Admin',
    9 => 'Options',
    10 => 'HTML',
    11 => 'Urgent message!',
    12 => 'Send',
    13 => 'Reset',
    14 => 'Ignore user settings',
    15 => 'Error when sending to: ',
    16 => 'Successfully sent messages to: ',
    17 => "<a href={$_CONF['site_admin_url']}/mail.php>Send another message</a>",
    18 => 'To',
    19 => 'NOTE: if you wish to send a message to all site members, select the Logged-in Users group from the drop down.',
    20 => "Successfully sent <successcount> messages and unsuccessfully sent <failcount> messages.  If you need them, the details of each message attempts is below.  Otherwise you can <a href=\"{$_CONF['site_admin_url']}/mail.php\">Send another message</a> or you can <a href=\"{$_CONF['site_admin_url']}/moderation.php\">go back to the administration page</a>.",
    21 => 'Failures',
    22 => 'Successes',
    23 => 'No failures',
    24 => 'No successes',
    25 => '-- Select Group --',
    26 => 'Please fill in all the fields on the form and select a group of users from the drop down.'
);

###############################################################################
# admin/plugins.php

$LANG32 = array(
    1 => 'Installing plugins could possibly cause damage to your Geeklog installation and, possibly, to your system.  It is important that you only install plugins downloaded from the <a href="http://www.geeklog.net" target="_blank">Geeklog Homepage</a> as we thoroughly test all plugins submitted to our site on a variety of operating systems.  It is important that you understand that the plugin installation process will require the execution of a few filesystem commands which could lead to security problems particularly if you use plugins from third party sites.  Even with this warning you are getting, we do not gaurantee the success of any installation nor are we liable for damage caused by installing a Geeklog plugin.  In other words, install at your own risk.  For the wary, directions on how to manually install a plugin is included with each plugin package.',
    2 => 'Plug-in Installation Disclaimer',
    3 => 'Plug-in Installation Form',
    4 => 'Plug-in File',
    5 => 'Plug-in List',
    6 => 'Warning: Plug-in Already Installed!',
    7 => 'The plug-in you are trying to install already exists.  Please delete the plugin before re-installing it',
    8 => 'Plugin Compatibility Check Failed',
    9 => 'This plugin requires a newer version of Geeklog. Either upgrade your copy of <a href="http://www.geeklog.net">Geeklog</a> or get a newer version of the plug-in.',
    10 => '<br><b>There are no plugins currently installed.</b><br><br>',
    11 => 'To modify or delete a plug-in, click on that plug-in\'s number below. To learn more about a plug-in, click the plug-in name and you will be directed to that plug-in\'s website. To install or upgrade a plug-in please consult it\'s documentation.',
    12 => 'no plugin name provided to plugineditor()',
    13 => 'Plugin Editor',
    14 => 'New Plug-in',
    15 => 'Admin Home',
    16 => 'Plug-in Name',
    17 => 'Plug-in Version',
    18 => 'Geeklog Version',
    19 => 'Enabled',
    20 => 'Yes',
    21 => 'No',
    22 => 'Install',
    23 => '������',
    24 => '������',
    25 => 'Delete',
    26 => 'Plug-in Name',
    27 => 'Plug-in Homepage',
    28 => 'Plug-in Version',
    29 => 'Geeklog Version',
    30 => 'Delete Plug-in?',
    31 => 'Are you sure you want to delete this plug-in?  By doing so you will remove all the data and data structures that this plug-in uses.  If you are sure, click delete again on the form below.',
    32 => '<p><b>Error AutoLink tag not correct format</b></p>',
    33 => 'Code Version',
    34 => 'Update',
    35 => 'Edit',
    36 => 'Code',
    37 => 'Data',
    38 => 'Update!'
);

###############################################################################
# admin/syndication.php

$LANG33 = array(
    1 => 'create feed',
    2 => 'save',
    3 => 'delete',
    4 => 'cancel',
    10 => 'Content Syndication',
    11 => 'New Feed',
    12 => 'Admin Home',
    13 => 'To modify or delete a feed, click on the feed\'s title below. To create a new feed, click on New Feed above.',
    14 => 'Title',
    15 => 'Type',
    16 => 'Filename',
    17 => 'Format',
    18 => 'last updated',
    19 => 'Enabled',
    20 => 'Yes',
    21 => 'No',
    22 => '<i>(no feeds)</i>',
    23 => 'all Stories',
    24 => 'Feed Editor',
    25 => 'Feed Title',
    26 => 'Limit',
    27 => 'Length of entries',
    28 => '(0 = no text, 1 = full text, other = limit to that number of chars.)',
    29 => 'Description',
    30 => 'Last Update',
    31 => 'Character Set',
    32 => 'Language',
    33 => 'Contents',
    34 => 'Entries',
    35 => 'Hours',
    36 => 'Select type of feed',
    37 => 'You have at least one plugin installed that supports content syndication. Below you will need to select whether you want to create a Geeklog feed or a feed from one of the plugins.',
    38 => 'Error: Missing Fields',
    39 => 'Please fill in the Feed Title, Description, and Filename.',
    40 => 'Please enter a  number of entries or number of hours.',
    41 => 'Links',
    42 => 'Events',
    43 => 'All',
    44 => 'None',
    45 => 'Header-link in topic',
    46 => 'Limit Results',
    47 => 'Search',
    48 => 'Edit',
    49 => 'Feed Logo',
    50 => "Relative to site url ({$_CONF['site_url']})",
    51 => 'The filename you have chosen is already used by another feed. Please choose a different one.',
    52 => 'Error: existing Filename'
);

###############################################################################
# confirmation and error messages

$MESSAGE = array(
    1 => "Your password has been emailed to you and should arrive momentarily. Please follow the directions in the message and we thank-you for using {$_CONF['site_name']}",
    2 => "Thank-you for submitting your story to {$_CONF['site_name']}.  It has been submitted to our staff for approval. If approved, your story will be available for others to read on our site.",
    3 => "Thank-you for submitting a link to {$_CONF['site_name']}.  It has been submitted to our staff for approval.  If approved, your link will be seen in the <a href={$_CONF['site_url']}/links.php>links</a> section.",
    4 => "Thank-you for submitting an event to {$_CONF['site_name']}.  It has been submitted to our staff for approval.  If approved, your event will be seen in our <a href={$_CONF['site_url']}/calendar.php>calendar</a> section.",
    5 => 'Your account information has been successfully saved.',
    6 => 'Your display preferences have been successfully saved.',
    7 => 'Your comment preferences have been successfully saved.',
    8 => 'You have been successfully logged out.',
    9 => '������������ �� �� �������� �������.',
    10 => 'The story has been successfully deleted.',
    11 => 'Your block has been successfully saved.',
    12 => 'The block has been successfully deleted.',
    13 => 'Your topic has been successfully saved.',
    14 => 'The topic and all it\'s stories and blocks have been successfully deleted.',
    15 => 'Your link has been successfully saved.',
    16 => 'The link has been successfully deleted.',
    17 => 'Your event has been successfully saved.',
    18 => 'The event has been successfully deleted.',
    19 => 'Your poll has been successfully saved.',
    20 => 'The poll has been successfully deleted.',
    21 => 'The new user has been successfully saved.',
    22 => 'The user has been successfully deleted',
    23 => 'Error trying to add an event to your calendar. There was no event id passed.',
    24 => 'The event has been saved to your calendar',
    25 => 'Cannot open your personal calendar until you login',
    26 => 'Event was successfully removed from your personal calendar',
    27 => 'Message successfully sent.',
    28 => 'The plug-in has been successfully saved',
    29 => 'Sorry, personal calendars are not enabled on this site',
    30 => 'Access Denied',
    31 => 'Sorry, you do not have access to the story administration page.  Please note that all attempts to access unauthorized features are logged',
    32 => 'Sorry, you do not have access to the topic administration page.  Please note that all attempts to access unauthorized features are logged',
    33 => 'Sorry, you do not have access to the block administration page.  Please note that all attempts to access unauthorized features are logged',
    34 => 'Sorry, you do not have access to the link administration page.  Please note that all attempts to access unauthorized features are logged',
    35 => 'Sorry, you do not have access to the event administration page.  Please note that all attempts to access unauthorized features are logged',
    36 => 'Sorry, you do not have access to the poll administration page.  Please note that all attempts to access unauthorized features are logged',
    37 => 'Sorry, you do not have access to the user administration page.  Please note that all attempts to access unauthorized features are logged',
    38 => 'Sorry, you do not have access to the plugin administration page.  Please note that all attempts to access unauthorized features are logged',
    39 => 'Sorry, you do not have access to the mail administration page.  Please note that all attempts to access unauthorized features are logged',
    40 => 'System Message',
    41 => 'Sorry, you do not have access to the word replacement page.  Please note that all attempts to access unauthorized features are logged',
    42 => 'Your word has been successfully saved.',
    43 => 'The word has been successfully deleted.',
    44 => 'The plug-in was successfully installed!',
    45 => 'The plug-in was successfully deleted.',
    46 => 'Sorry, you do not have access to the database backup utility.  Please note that all attempts to access unauthorized features are logged',
    47 => 'This functionality only works under *nix.  If you are running *nix as your operating system then your cache has been successfully cleared. If you are on Windows, you will need to search for files name adodb_*.php and remove them manually.',
    48 => "Thank you for applying for a membership with {$_CONF['site_name']}. Our team will review your application. If approved, your password will be emailed to you at the email address you just entered.",
    49 => 'Your group has been successfully saved.',
    50 => 'The group has been successfully deleted.',
    51 => 'This username is already in use. Please choose another one.',
    52 => 'The email address provided does not appear to be a valid email address.',
    53 => 'Your new password has been accepted. Please use your new password below to log in now.',
    54 => 'Your request for a new password has expired. Please try again below.',
    55 => 'An email has been sent to you and should arrive momentarily. Please follow the directions in the message to set a new password for your account.',
    56 => 'The email address provided is already in use for another account.',
    57 => 'Your account has been successfully deleted.',
    58 => 'Your feed has been successfully saved.',
    59 => 'The feed has been successfully deleted.',
    60 => 'The plugin was successfully updated',
    61 => 'Plugin %s: Unknown message placeholder',
    62 => 'The trackback comment has been deleted.',
    63 => 'An error occurred when deleting the trackback comment.',
    64 => 'Your trackback comment has been successfully sent.',
    65 => 'Weblog directory service successfully saved.',
    66 => 'The weblog directory service has been deleted.',
    67 => 'The new password does not match the confirmation password!',
    68 => 'You have to enter the correct current password.',
    69 => 'Your account has been blocked!',
    70 => 'Your account is awaiting administrator approval.',
    71 => 'Your account has now been confirmed and is awaiting administrator approval.',
    72 => 'An error occured while attempting to install the plugin. See error.log for details.',
    73 => 'An error occured while attempting to uninstall the plugin. See error.log for details.',
    74 => 'The pingback has been successfully sent.',
    75 => 'Trackbacks must be sent using a POST request.',
    76 => 'Do you really want to delete this item?',
    77 => 'WARNING:<br>You have set your default encoding to UTF-8. However, your server does not support multibyte encodings. Please install mbstring functions for PHP or choose a different character set/language.',
    78 => 'Please make sure that the email address and the confirmation email address are the same.',
    79 => 'The page you have been trying to open refers to a function that no longer exists on this site.',
    80 => 'The plugin that created this feed is currently disabled. You will not be able to edit this feed until you re-enable the parent plugin.',
    81 => 'You may have mistyped your login credentials.  Please try logging in again below.',
    82 => 'You have exceeded the number of allowed login attempts.  Please try again later.',
    83 => 'To change your password, email address, or for how long to remember you, please enter your current password.',
    84 => 'To delete your account, please enter your current password.'
);

###############################################################################

$LANG_ACCESS = array(
    'access' => 'Access',
    'ownerroot' => 'Owner/Root',
    'group' => 'Group',
    'readonly' => 'Read-Only',
    'accessrights' => 'Access Rights',
    'owner' => 'Owner',
    'grantgrouplabel' => 'Grant Above Group Edit Rights',
    'permmsg' => 'NOTE: members is all logged in members of the site and anonymous is all users browsing the site that aren\'t logged in.',
    'securitygroups' => 'Security Groups',
    'editrootmsg' => "Even though you are a User Administrator, you can't edit a root user without first being a root user yourself.  You can edit all other users except root users. Please note that all attempts to illegally edit root users are logged.  Please go back to the <a href=\"{$_CONF['site_admin_url']}/user.php\">User Administration page</a>.",
    'securitygroupsmsg' => 'Select the checkboxes for the groups you want the user to belong to.',
    'groupeditor' => 'Group Editor',
    'description' => 'Description',
    'name' => 'Name',
    'rights' => 'Rights',
    'missingfields' => 'Missing Fields',
    'missingfieldsmsg' => 'You must supply the name and a description for a group',
    'groupmanager' => 'Group Manager',
    'newgroupmsg' => 'To modify or delete a group, click on that group below. To create a new group click new group above. Please note that core groups cannot be deleted because they are used in the system.',
    'groupname' => 'Group Name',
    'coregroup' => 'Core Group',
    'yes' => 'Yes',
    'no' => 'No',
    'corerightsdescr' => "This group is a core {$_CONF['site_name']} Group.  Therefore the rights for this group cannot be edited.  Below is a read-only list of the rights this group has access to.",
    'groupmsg' => 'Security Groups on this site are hierarchical.  By adding this group to any of the groups below you will giving this group the same rights that those groups have.  Where possible it is encouraged you use the groups below to give rights to a group.  If you need this group to have custom rights then you can select the rights to various site features in the section below called \'Rights\'.  To add this group to any of the ones below simply check the box next to the group(s) that you want.',
    'coregroupmsg' => "This group is a core {$_CONF['site_name']} Group.  Therefore the groups that this group belongs to cannot be edited.  Below is a read-only list of the groups this group belongs to.",
    'rightsdescr' => 'A groups access to a certain right below can be given directly to the group OR to a different group that this group is a part of.  The ones you see below without a checkbox are the rights that have been given to this group because it belongs to another group with that right.  The rights with checkboxes below are rights that can be given directly to this group.',
    'lock' => 'Lock',
    'members' => 'Members',
    'anonymous' => 'Anonymous',
    'permissions' => 'Permissions',
    'permissionskey' => 'R = read, E = edit, edit rights assume read rights',
    'edit' => 'Edit',
    'none' => 'None',
    'accessdenied' => 'Access Denied',
    'storydenialmsg' => "You do not have access to view this story.  This could be because you aren't a member of {$_CONF['site_name']}.  Please <a href=users.php?mode=new> become a member</a> of {$_CONF['site_name']} to receive full membership access!",
    'nogroupsforcoregroup' => 'This group doesn\'t belong to any of the other groups',
    'grouphasnorights' => 'This group doesn\'t have access to any of the administrative features of this site',
    'newgroup' => 'New Group',
    'adminhome' => 'Admin Home',
    'save' => 'save',
    'cancel' => 'cancel',
    'delete' => 'delete',
    'canteditroot' => 'You have tried to edit the Root group but you are not in the Root group yourself therefore your access to this group is denied.  Please contact the system administrator if you feel this is an error',
    'listusers' => 'List Users',
    'listthem' => 'list',
    'usersingroup' => 'Users in group %s',
    'usergroupadmin' => 'User Group Administration',
    'add' => 'Add',
    'remove' => 'Remove',
    'availmembers' => 'Available Members',
    'groupmembers' => 'Group Members',
    'canteditgroup' => 'To edit this group, you have to be a member of the group. Please contact the system administrator if you feel this is an error.',
    'cantlistgroup' => 'To see the members of this group, you have to be a member yourself. Please contact the system administrator if you feel this is an error.',
    'editgroupmsg' => 'To modify the group membership, click on the member names(s) and use the add or remove buttons. If the member is a member of the group, their name will appear on the right side only. Once you are complete - press <b>Save</b> to update the group and return to the main group admin page.',
    'listgroupmsg' => 'Listing of all current members in the group: <b>%s</b>',
    'search' => 'Search',
    'submit' => 'Submit',
    'limitresults' => 'Limit Results',
    'group_id' => 'Group ID',
    'plugin_access_denied_msg' => 'You are illegally trying access a plugin administration page.  Please note that all attempts to illegally access this page are logged.',
    'groupexists' => 'Group name already exists',
    'groupexistsmsg' => 'There is already a group with this name. Group names must be unique.'
);

###############################################################################
# admin/database.php

$LANG_DB_BACKUP = array(
    'last_ten_backups' => 'Last 10 Back-ups',
    'do_backup' => 'Do Backup',
    'backup_successful' => 'Database back up was successful.',
    'db_explanation' => 'To create a new backup of your Geeklog system, hit the button below',
    'not_found' => "Incorrect path or mysqldump utility not executable.<br>Check <strong>\$_DB_mysqldump_path</strong> definition in config.php.<br>Variable currently defined as: <var>{$_DB_mysqldump_path}</var>",
    'zero_size' => 'Backup Failed: Filesize was 0 bytes',
    'path_not_found' => "{$_CONF['backup_path']} does not exist or is not a directory",
    'no_access' => "ERROR: Directory {$_CONF['backup_path']} is not accessible.",
    'backup_file' => 'Backup file',
    'size' => 'Size',
    'bytes' => 'Bytes',
    'total_number' => 'Total number of backups: %d'
);

###############################################################################

$LANG_BUTTONS = array(
    1 => 'Home',
    2 => 'Contact',
    3 => 'Get Published',
    4 => 'Links',
    5 => 'Polls',
    6 => 'Calendar',
    7 => 'Site Stats',
    8 => 'Personalize',
    9 => 'Search',
    10 => '��������� �������',
    11 => 'Directory'
);

###############################################################################
# 404.php

$LANG_404 = array(
    1 => '404 Error',
    2 => 'Gee, I\'ve looked everywhere but I can not find <b>%s</b>.',
    3 => "<p>We're sorry, but the file you have requested does not exist. Please feel free to check the <a href=\"{$_CONF['site_url']}\">main page</a> or the <a href=\"{$_CONF['site_url']}/search.php\">search page</a> to see if you can find what you lost."
);

###############################################################################
# login form

$LANG_LOGIN = array(
    1 => 'Login required',
    2 => 'Sorry, to access this area you need to be logged in as a user.',
    3 => 'Login',
    4 => 'New User'
);

###############################################################################
# pdfgenerator.php

$LANG_PDF = array(
    1 => 'The PDF feature has been disabled',
    2 => 'The document provided was not rendered. The document was received but could not be processed.  Please make sure to submit only html formatted documents that have been written to the xHTML standard. Please note that overly complex html documents may not render correctly or at all.The document resulting from your attempt was 0 bytes in length, and has been deleted. If you\'re sure that your document should render fine, please re-submit it.',
    3 => 'Unknown error during PDF generation',
    4 => "No page data was given or you want to use the ad-hoc PDF generation tool below.  If you think you are getting this page\n          in error then please contact the system administrator.  Otherwise, you may use the form below to generate PDF's in an ad-hoc fashion.",
    5 => 'Loading your document.',
    6 => 'Please wait while your document is loaded.',
    7 => 'You may right click the button below and choose \'save target...\' or \'save link location...\' to save a copy of your document.',
    8 => "The path given in the configuration file to the HTMLDoc binary is invalid or this system cannot execute it.  Please contact the site administrator if this problem\n          persists.",
    9 => 'PDF Generator',
    10 => "This is the Ad-hoc PDF Generation tool. It will attempt to convert any URL you give into a PDF.  Please note that some web pages will not render properly with this feature.  This\n           is a limitation of the HTMLDoc PDF generation tool and such errors should not be reported to the administrators of this site",
    11 => 'URL',
    12 => 'Generate PDF!',
    13 => 'The PHP configuration on this server does not allow URLs to be used with the fopen() command.  The system administrator must edit the php.ini file and set allow_url_fopen to On',
    14 => 'The PDF you requested either does not exist or you tried to illegally access a file.'
);

###############################################################################
# trackback.php

$LANG_TRB = array(
    'trackback' => 'Trackback',
    'from' => 'from',
    'tracked_on' => 'Tracked on',
    'read_more' => '[read more]',
    'intro_text' => 'Here\'s what others have to say about \'%s\':',
    'no_comments' => 'No trackback comments for this entry.',
    'this_trackback_url' => 'Trackback URL for this entry:',
    'num_comments' => '%d trackback comments',
    'send_trackback' => 'Send Pings',
    'preview' => 'Preview',
    'editor_title' => 'Send trackback comment',
    'trackback_url' => 'Trackback URL',
    'entry_url' => 'Entry URL',
    'entry_title' => 'Entry Title',
    'blog_name' => 'Site Name',
    'excerpt' => 'Excerpt',
    'truncate_warning' => 'Note: The receiving site may truncate your excerpt',
    'button_send' => 'Send',
    'button_preview' => 'Preview',
    'send_error' => 'Error',
    'send_error_details' => 'Error when sending trackback comment:',
    'url_missing' => 'No Entry URL',
    'url_required' => 'Please enter at least a URL for the entry.',
    'target_missing' => 'No Trackback URL',
    'target_required' => 'Please enter a trackback URL',
    'error_socket' => 'Could not open socket.',
    'error_response' => 'Response not understood.',
    'error_unspecified' => 'Unspecified error.',
    'select_url' => 'Select Trackback URL',
    'not_found' => 'Trackback URL not found',
    'autodetect_failed' => 'Geeklog could not detect the Trackback URL for the post you want to send your comment to. Please enter it manually below.',
    'trackback_explain' => 'From the links below, please select the URL you want to send your Trackback comment to. Geeklog will then try to determine the correct Trackback URL for that post. Or you can <a href="%s">enter it manually</a> if you know it already.',
    'no_links_trackback' => 'No links found. You can not send a Trackback comment for this entry.',
    'pingback' => 'Pingback',
    'pingback_results' => 'Pingback results',
    'send_pings' => 'Send Pings',
    'send_pings_for' => 'Send Pings for "%s"',
    'no_links_pingback' => 'No links found. No Pingbacks were sent for this entry.',
    'pingback_success' => 'Pingback sent.',
    'no_pingback_url' => 'No pingback URL found.',
    'resend' => 'Resend',
    'ping_all_explain' => 'You can now notify the sites you linked to (<a href="http://en.wikipedia.org/wiki/Pingback">Pingback</a>), advertise that your site has been updated by pinging weblog directory services, or send a <a href="http://en.wikipedia.org/wiki/Trackback">Trackback</a> comment in case you wrote about a post on someone else\'s site.',
    'pingback_button' => 'Send Pingback',
    'pingback_short' => 'Send Pingbacks to all sites linked from this entry.',
    'pingback_disabled' => '(Pingback disabled)',
    'ping_button' => 'Send Ping',
    'ping_short' => 'Ping weblog directory services.',
    'ping_disabled' => '(Ping disabled)',
    'trackback_button' => 'Send Trackback',
    'trackback_short' => 'Send a Trackback comment.',
    'trackback_disabled' => '(Trackback disabled)',
    'may_take_a_while' => 'Please note that sending Pingbacks and Pings may take a while.',
    'ping_results' => 'Ping results',
    'unknown_method' => 'Unknown ping method',
    'ping_success' => 'Ping sent.',
    'error_site_name' => 'Please enter the site\'s name.',
    'error_site_url' => 'Please enter the site\'s URL.',
    'error_ping_url' => 'Please enter a valid Ping URL.',
    'no_services' => 'No weblog directory services configured.',
    'services_headline' => 'Weblog Directory Services',
    'service_explain' => 'To modify or delete a weblog directory service, click on the edit icon of that service below. To add a new weblog directory service, click on "Create New" above.',
    'service' => 'Service',
    'ping_method' => 'Ping method',
    'service_website' => 'Website',
    'service_ping_url' => 'URL to ping',
    'ping_standard' => 'Standard Ping',
    'ping_extended' => 'Extended Ping',
    'ping_unknown' => '(unknown method)',
    'edit_service' => 'Edit Weblog Directory Service',
    'trackbacks' => 'Trackbacks',
    'editor_intro' => 'Prepare your trackback comment for <a href="%s">%s</a>.',
    'editor_intro_none' => 'Prepare your trackback comment.',
    'trackback_note' => 'To send a trackback comment for a story, go to the list of stories and click on "Send Ping" for the story. To send a trackback that is not related to a story, <a href="%s">click here</a>.',
    'pingback_explain' => 'Enter a URL to send the Pingback to. The pingback will point to your site\'s homepage.',
    'pingback_url' => 'Pingback URL',
    'site_url' => 'This site\'s URL',
    'pingback_note' => 'To send a pingback for a story, go to the list of stories and click on "Send Ping" for the story. To send a pingback that is not related to a story, <a href="%s">click here</a>.',
    'pbtarget_missing' => 'No Pingback URL',
    'pbtarget_required' => 'Please enter a pingback URL',
    'pb_error_details' => 'Error when sending the pingback:',
    'delete_trackback' => 'To delete this Trackback click: '
);

###############################################################################
# directory.php

$LANG_DIR = array(
    'title' => 'Article Directory',
    'title_year' => 'Article Directory for %d',
    'title_month_year' => 'Article Directory for %s %d',
    'nav_top' => 'Back to Article Directory',
    'no_articles' => 'No articles.'
);

###############################################################################
# "What's New" Time Strings
# 
# For the first two strings, you can use the following placeholders.
# Order them so it makes sense in your language:
# %i    item, "Stories"
# %n    amount, "2", "20" etc.
# %t    time, "2" (weeks)
# %s    scale, "hrs", "weeks"

$LANG_WHATSNEW = array(
    'new_string' => '%n new %i in the last %t %s',
    'new_last' => 'last %t %s',
    'minutes' => 'minutes',
    'hours' => 'hours',
    'days' => 'days',
    'weeks' => 'weeks',
    'months' => 'months',
    'minute' => 'minute',
    'hour' => 'hour',
    'day' => 'day',
    'week' => 'week',
    'month' => 'month'
);

###############################################################################
# Month names

$LANG_MONTH = array(
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    5 => 'May',
    6 => 'June',
    7 => 'July',
    8 => 'August',
    9 => 'September',
    10 => 'October',
    11 => 'November',
    12 => 'December'
);

###############################################################################
# Weekdays

$LANG_WEEK = array(
    1 => '������',
    2 => '����������',
    3 => '�������',
    4 => '�����',
    5 => '���������',
    6 => '�����',
    7 => '������'
);

###############################################################################
# Admin - Strings
# 
# These are some standard strings used by core functions as well as plugins to
# display administration lists and edit pages

$LANG_ADMIN = array(
    'search' => 'Search',
    'limit_results' => 'Limit Results',
    'submit' => 'Submit',
    'edit' => 'Edit',
    'edit_adv' => 'Adv. Edit',
    'admin_home' => 'Admin Home',
    'create_new' => 'Create New',
    'create_new_adv' => 'Create New (Adv.)',
    'enabled' => 'Enabled',
    'title' => 'Title',
    'type' => 'Type',
    'topic' => 'Topic',
    'help_url' => 'Help File URL',
    'save' => 'Save',
    'cancel' => 'Cancel',
    'delete' => 'Delete',
    'delete_sel' => 'Delete selected',
    'copy' => 'Copy',
    'no_results' => '- No entries found -',
    'data_error' => 'There was an error processing the subscription data. Please check the data source.',
    'preview' => 'Preview',
    'records_found' => 'Records found'
);

###############################################################################
# Localisation of the texts for the various drop-down menus that are actually
# stored in the database. If these exist, they override the texts from the
# database.

$LANG_commentcodes = array(
    0 => 'Comments Enabled',
    -1 => 'Comments Disabled'
);


$LANG_commentmodes = array(
    'flat' => 'Flat',
    'nested' => 'Nested',
    'threaded' => 'Threaded',
    'nocomment' => 'No Comments'
);

$LANG_cookiecodes = array(
    0 => '(don\'t)',
    3600 => '1 Hour',
    7200 => '2 Hours',
    10800 => '3 Hours',
    28800 => '8 Hours',
    86400 => '1 Day',
    604800 => '1 Week',
    2678400 => '1 Month'
);

$LANG_dateformats = array(
    0 => 'System Default'
);

$LANG_featurecodes = array(
    0 => 'Not Featured',
    1 => 'Featured'
);

$LANG_frontpagecodes = array(
    0 => 'Show Only in Topic',
    1 => 'Show on Front Page'
);

$LANG_postmodes = array(
    'plaintext' => 'Plain Old Text',
    'html' => 'HTML Formatted'
);

$LANG_sortcodes = array(
    'ASC' => 'Oldest First',
    'DESC' => 'Newest First'
);

$LANG_trackbackcodes = array(
    0 => 'Trackback Enabled',
    -1 => 'Trackback Disabled'
);

?>