<?php

###############################################################################
# german_formal_utf-8.php
#
# This is the formal German language file for the Geeklog Calendar Plugin
#
# Copyright (C) 2006 Dirk Haun
# dirk AT haun-online DOT de
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

###############################################################################
# Array Format: 
# $LANGXX[YY]:	$LANG - variable name
#		  	XX - file id number
#			YY - phrase id number
###############################################################################

# index.php
$LANG_CAL_1 = array(
    1 => 'Terminkalender',
    2 => 'Es gibt keine Termine anzuzeigen.',
    3 => 'Wann',
    4 => 'Wo',
    5 => 'Beschreibung',
    6 => 'Termin hinzufügen',
    7 => 'Anstehende Termine',
    8 => 'Wenn Sie diesen Termin zu Ihrem Kalender hinzufügen, können Sie sich schneller einen Überblick über die Termine verschaffen, die Sie interessieren, indem Sie einfach auf "Mein Kalender" klicken.',
    9 => 'Zu Meinem Kalender hinzufügen',
    10 => 'Aus Meinem Kalender entfernen',
    11 => 'Termin wird zum Kalender von %s hinzugefügt',
    12 => 'Termin',
    13 => 'Beginnt',
    14 => 'Endet',
    15 => 'Zurück zum Kalender',
    16 => 'Kalender',
    17 => 'Startdatum',
    18 => 'Enddatum',
    19 => 'Beiträge: Kalender',
    20 => 'Titel',
    21 => 'Startdatum',
    22 => 'URL',
    23 => 'Meine Termine',
    24 => 'Allgemeine Termine',
    25 => 'Es stehen keine Termine an',
    26 => 'Einen Termin einreichen',
    27 => "Wenn Sie einen Termin bei {$_CONF['site_name']} einreichen, wird er in den Kalender aufgenommen, von wo aus ihn andere User in ihren persönlichen Kalender übernehmen können. Dies ist <b>NICHT</b> dazu gedacht, private Termine und Ereignisse wie etwa Geburtstage zu verwalten.<br><br>Wenn Sie einen Termin einreichen, wird er an die Administratoren weitergeleitet und sobald er von diesen akzeptiert wird, wird er im Kalender erscheinen.",
    28 => 'Titel',
    29 => 'Endzeit',
    30 => 'Startzeit',
    31 => 'Ganztägiger Termin',
    32 => 'Addresse, Zeile 1',
    33 => 'Addresse, Zeile 2',
    34 => 'Stadt',
    35 => 'Bundesland',
    36 => 'Postleitzahl',
    37 => 'Art des Termins',
    38 => 'Termin-Arten ändern',
    39 => 'Ort',
    40 => 'Termin hinzufügen zu',
    41 => 'Kalender',
    42 => 'Persönlicher Kalender',
    43 => 'Link',
    44 => 'HTML ist nicht erlaubt',
    45 => 'Abschicken',
    46 => 'Anzahl Termine',
    47 => 'Top Ten der Termine',
    48 => 'Angezeigt',
    49 => 'Es gibt keine Termine oder sie wurden von niemandem gelesen.',
    50 => 'Termine',
    51 => 'Löschen'
);

$_LANG_CAL_SEARCH = array(
    'results' => 'Gefundene Termine',
    'title' => 'Titel',
    'date_time' => 'Datum und Uhrzeit',
    'location' => 'Ort',
    'description' => 'Beschreibung'

);

###############################################################################
# calendar.php ($LANG30)

$LANG_CAL_2 = array(
    8 => 'Neuer Termin',
    9 => 'Termin',
    10 => 'Termine am',
    11 => 'Kalender',
    12 => 'Mein Kalender',
    25 => 'Zurück zum ',
    26 => 'ganztägig',
    27 => 'Woche',
    28 => 'Persönlicher Kalender für',
    29 => 'Öffentlicher Kalender',
    30 => 'Termin löschen',
    31 => 'Hinzufügen',
    32 => 'Termin',
    33 => 'Datum',
    34 => 'Uhrzeit',
    35 => 'Neuer Termin',
    36 => 'Abschicken',
    37 => 'Der persönliche Kalender ist auf dieser Website nicht verfügbar.',
    38 => 'Persönlicher Termin-Editor',
    39 => 'Tag',
    40 => 'Woche',
    41 => 'Monat',
    42 => 'Neuer Termin',
    43 => 'Beiträge: Termine'
);

###############################################################################
# admin/event.php (LANG22)

$LANG_CAL_ADMIN = array(
    1 => 'Termin-Editor',
    2 => 'Fehler',
    3 => 'Titel',
    4 => 'URL',
    5 => 'Startdatum',
    6 => 'Enddatum',
    7 => 'Ort',
    8 => 'Beschreibung',
    9 => '(mit http://)',
    10 => 'Es müssen mindestens Datum und Uhrzeit, Titel und Beschreibung eingegeben werden!',
    11 => 'Kalender-Manager',
    12 => 'Auf das Ändern-Icon klicken, um einen Termin zu ändern oder zu löschen. Mit Neu anlegen (s.o.) wird ein neuer Termin angelegt. Das Kopie-Icon erzeugt eine Kopie eines vorhandenen Termins.',
    13 => 'Autor',
    14 => 'Startdatum',
    15 => 'Enddatum',
    16 => 'Zugriff verweigert',
    17 => "Sie haben keine Zugriffsrechte für diesen Termin. Dieser Zugriffsversuch wurde protokolliert. <a href=\"{$_CONF['site_admin_url']}/plugins/calendar/index.php\">Zurück zum Administrator-Menü</a>.",
    18 => '',
    19 => '',
    20 => 'Speichern',
    21 => 'Abbruch',
    22 => 'Löschen',
    23 => 'Ungültiges Startdatum.',
    24 => 'Ungültiges Enddatum.',
    25 => 'Enddatum ist vor dem Startdatum.'
);

$LANG_CAL_MESSAGE = array(
    'save'      => 'Der Termin wurde gespeichert.',
    'delete'    => 'Der Termin wurde gelöscht.',
    'private'   => 'Der Termin wurde in Ihren Kalender eingetragen.',
    'login'     => 'Sie müssen angemeldet sein, um auf Ihren persönlichen Kalender zugreifen zu können.',
    'removed'   => 'Der Termin wurde aus Ihrem persönlichen Kalender entfernt',
    'noprivate' => 'Persönliche Kalender sind auf dieser Site nicht verfügbar.',
    'unauth'    => 'Sie haben keinen Zugriff auf die Termin-Administrationsseite. Alle Versuche, auf Bereiche ohne entsprechende Berechtigung zuzugreifen, werden protokolliert.'
);

$PLG_calendar_MESSAGE4  = "Danke für Ihren Beitrag zu {$_CONF['site_name']}. Ihr Termin wurde an unser Team weitergeleitet. Wenn er akzeptiert wird, wird er bald im <a href=\"{$_CONF['site_url']}/calendar/index.php\">Kalender</a> aufgelistet werden.";
$PLG_calendar_MESSAGE17 = 'Ihr Termin wurde gespeichert.';
$PLG_calendar_MESSAGE18 = 'Der Termin wurde gelöscht.';
$PLG_calendar_MESSAGE24 = 'Der Termin wurde in Ihren Kalender eingetragen.';
$PLG_calendar_MESSAGE26 = 'Der Termin wurde gelöscht.';

?>
