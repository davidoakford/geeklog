<?php

###############################################################################
# swedish.php
# This is the swedish language page for GeekLog!
# Translation by: Markus Berg <kelvin@lysator.liu.se>
#
# Credits from original english.php:
#
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

$LANG_CHARSET = 'iso-8859-1';

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
    1 => 'Skrivet av:',
    2 => 'l�s mer',
    3 => 'kommentar(er)',
    4 => 'Redigera',
    5 => 'R�sta',
    6 => 'Resultat',
    7 => 'R�stresultat',
    8 => 'r�ster',
    9 => 'Administrat�rsfunktioner:',
    10 => 'Bidrag',
    11 => 'Artiklar',
    12 => 'Block',
    13 => '�mnen',
    14 => 'L�nkar',
    15 => 'Aktiviteter',
    16 => 'Omr�stningar',
    17 => 'Anv�ndare',
    18 => 'SQL Query',
    19 => 'Logga ut',
    20 => 'Anv�ndarinformation:',
    21 => 'Anv�ndarnamn',
    22 => 'Anv�ndarnamn',
    23 => 'S�kerhetsniv�',
    24 => 'Anonym',
    25 => 'Skriv ett inl�gg',
    26 => 'F�ljande inl�gg �gs av de personer som gjort dem.  Denna sajt tar inget ansvar f�r det som s�gs.',
    27 => 'Senaste kommentar',
    28 => 'Radera',
    29 => 'Inga kommentarer.',
    30 => '�ldre artiklar',
    31 => 'Till�ten HTML:',
    32 => 'Error, felaktigt anv�ndarnamn',
    33 => 'Error, kunde inte skriva till logfilen',
    34 => 'Error',
    35 => 'Logga ut',
    36 => 'p�',
    37 => 'Inga artiklar',
    38 => 'Content Syndication',
    39 => 'Uppdatera',
    40 => 'Du har <tt>register_globals = Off</tt> i din <tt>php.ini</tt>. Geeklog kr�ver att <tt>register_globals</tt> �r p�slaget. Innan du forts�tter s� m�ste du s�tta det till <strong>on</strong> och starta om din webbserver.',
    41 => 'G�ster',
    42 => 'Skrivet av:',
    43 => 'Svara p� detta',
    44 => 'Upp',
    45 => 'MySQL Error Number',
    46 => 'MySQL felmeddelande',
    47 => 'Anv�ndarfunktioner',
    48 => 'Kontoinformation',
    49 => 'Inst�llningar',
    50 => 'Fel i SQL-f�rfr�gan',
    51 => 'hj�lp',
    52 => 'Ny',
    53 => 'Administrat�rsmeny',
    54 => 'Kunde inte �ppna filen.',
    55 => 'Fel vid',
    56 => 'R�sta',
    57 => 'L�senord',
    58 => 'Logga in',
    59 => "Har du inget konto?  <a href=\"{$_CONF['site_url']}/users.php?mode=new\">Anm�l dig h�r!</a>",
    60 => 'Diskutera...',
    61 => 'Skapa nytt konto',
    62 => 'ord',
    63 => 'Kommentarsinst.',
    64 => 'Eposta artikel till n�gon',
    65 => 'Version f�r utskrift',
    66 => 'Min kalender',
    67 => 'V�lkommen till ',
    68 => 'hem',
    69 => 'kontakt',
    70 => 's�k',
    71 => 'skriv artikel',
    72 => 'internetl�nkar',
    73 => 'tidigare omr�stningar',
    74 => 'kalender',
    75 => 'detaljerad s�kning',
    76 => 'statistik',
    77 => 'Plugin',
    78 => 'Kommande aktiviteter',
    79 => 'Nytt p� sajten',
    80 => 'artiklar de senaste',
    81 => 'artikel de senaste',
    82 => 'timmarna',
    83 => 'KOMMENTARER',
    84 => 'L�NKAR',
    85 => 'senaste 48 hrs',
    86 => 'Inga nya kommentarer',
    87 => 'senaste tv� veckorna',
    88 => 'Inga nya l�nkar',
    89 => 'Det finns inga kommande aktiviteter',
    90 => 'Hem',
    91 => 'Skapade denna sida p�',
    92 => 'sekunder',
    93 => 'Copyright',
    94 => 'Alla varum�rken och copyright p� denna sida �gs av deras respektive �gare.',
    95 => 'Powered By',
    96 => 'Grupper',
    97 => 'Ordlista',
    98 => 'Insticksmodul',
    99 => 'ARTIKLAR',
    100 => 'Inga nya artiklar',
    101 => 'Dina aktiviteter',
    102 => 'Sajtaktiviteter',
    103 => 'DB backup',
    104 => 'av',
    105 => 'Eposta anv�ndare',
    106 => 'visningar',
    107 => 'GL versionstest',
    108 => 'Radera buffert',
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
    1 => 'Skriv en kommentar',
    2 => 'Kommentarsl�ge',
    3 => 'Logga ut',
    4 => 'Skapa ett konto',
    5 => 'Anv�ndarnamn',
    6 => 'F�r att skriva en kommentar p� denna sajt m�ste man ha ett konto.  Om du inte har ett konto s� kan du anv�nda formul�ret nedan f�r att skapa ett.',
    7 => 'Din senaste kommentar var ',
    8 => " sekunder sedan.  P� denna sajt m�ste man v�nta minst {$_CONF['commentspeedlimit']} sekunder mellan kommentarer",
    9 => 'Kommentar',
    10 => 'Send Report',
    11 => 'Skicka in kommentar',
    12 => 'Du m�ste fylla i Titel- Kommentarsf�lten.',
    13 => 'Din information',
    14 => 'F�rhandsgranska',
    15 => 'Report this post',
    16 => 'Titel',
    17 => 'Error',
    18 => 'Att t�nka p�',
    19 => 'F�rs�k h�lla kommentarerna till �mnet.',
    20 => 'F�rs�k svara p� andra personers kommentarer ist�llet f�r att starta nya diskussioner.',
    21 => 'L�s andra personers kommentarer innan du g�r ditt inl�gg f�r att f�rhindra upprepning av det som redan sagts.',
    22 => 'Anv�nd en tydlig �renderad som beskriver vad ditt inl�gg handlar om.',
    23 => 'Din epostadress kommer INTE att vara publik.',
    24 => 'Anonym anv�ndare',
    25 => '�r du s�ker p� att du vill rapportera detta inl�gg till sajtadministrat�ren?',
    26 => '%s har rapporterat f�ljande inl�gg:',
    27 => 'Anm�l missbruk'
);

###############################################################################
# users.php

$LANG04 = array(
    1 => 'Anv�ndarprofil f�r',
    2 => 'Anv�ndarnamn',
    3 => 'F�r- och efternamn',
    4 => 'L�senord',
    5 => 'Epost',
    6 => 'Hemsida',
    7 => 'Personlig information',
    8 => 'PGP-nyckel',
    9 => 'Spara information',
    10 => 'De tio senaste kommentarerna f�r anv�ndare',
    11 => 'Inga anv�ndarkommentarer',
    12 => 'Anv�ndarinst�llningar f�r',
    13 => 'Eposta nattlig sammanst�llning',
    14 => 'Detta l�senord genereras av en slumpgenerator.  Du rekommenderas att omedelbart byta detta l�senord.  F�r att byta l�senord loggar man in och klickar p� Kontoinformation fr�n Anv�ndarfunktionsmenyn.',
    15 => "Ditt {$_CONF['site_name']} konto �r nu skapat.  F�r att anv�nda det m�ste du logga in med hj�lp av informationen nedan.  Spara detta mail f�r framtida bruk.",
    16 => 'Din kontoinformation',
    17 => 'Konto existerar inte',
    18 => 'Den angivna epostadressen verkar inte vara giltig',
    19 => 'Anv�ndarnamnet eller epostadressen existerar redan',
    20 => 'Den angivna epostadressen verkar inte vara giltig',
    21 => 'Error',
    22 => "Registrera med {$_CONF['site_name']}!",
    23 => "N�r du skapar ett anv�ndarkonto kommer du att f� ta del av {$_CONF['site_name']}:s f�rdelar och du kommer att f� m�jlighet att posta kommentarer och skicka in artiklar som dig sj�lv.  Om man inte har ett konto s� kan man bara medverka anonymt.  L�gg m�rke till att din epostadress <B>aldrig</B> kommer att visas offentligt p� denna sajt.",
    24 => 'Ditt l�senord kommer att skickas till den epostadress du anger.',
    25 => 'Har du gl�mt ditt l�senord?',
    26 => 'Ange ditt anv�ndarnamn <em>eller</em> din registrerade epostadress och klicka p� "Eposta l�senord" s� kommer ett nytt l�senord att skickas till den epostadress vi har i v�rt register.',
    27 => 'Registrera nu!',
    28 => 'Eposta l�senord',
    29 => 'loggade ut fr�n',
    30 => 'loggade in fr�n',
    31 => 'F�r att anv�nda denna funktion m�ste du vara inloggad',
    32 => 'Signatur',
    33 => 'Aldrig offentlig',
    34 => 'Detta �r ditt f�r- och efternamn',
    35 => 'Ange l�senord f�r att �ndra det',
    36 => 'B�rjar med http://',
    37 => 'L�ggs till dina kommentarer',
    38 => 'Det handlar om dig!  Alla kan l�sa detta',
    39 => 'Din publika PGP-nyckel att dela ut',
    40 => 'Inga �mnesikoner',
    41 => 'Beredd att moderera',
    42 => 'Datumformat',
    43 => 'Maximalt antal artiklar',
    44 => 'Inga block',
    45 => 'Artikelinst�llningar f�r',
    46 => 'Exkluderade saker f�r',
    47 => 'Konfiguration av nyhetsblock f�r',
    48 => '�mnen',
    49 => 'Inga ikoner i artiklar',
    50 => 'Klicka ur detta om du inte �r intresserad',
    51 => 'Bara artiklarna',
    52 => 'Sk�nsv�rdet �r',
    53 => 'Skicka mig dagens artiklar varje kv�ll',
    54 => 'Klicka i boxarna f�r de �mnen och f�rfattare vars artiklar du inte vill se.',
    55 => 'Om du l�mnar dessa tomma betyder det att du vill ha standardupps�ttningen med boxar.  Om du b�rjar v�lja s� m�ste du v�lja alla de som du vill se, eftersom standardvalet d�rmed f�rsvinner.  Standardboxarna �r markerade med fetstil.',
    56 => 'F�rfattare',
    57 => 'Visningsl�ge',
    58 => 'Sorteringsordning',
    59 => 'Kommentarsbegr�nsning',
    60 => 'Hur vill du att kommentarer ska visas?',
    61 => 'Nyaste eller �ldsta f�rst?',
    62 => 'Standardv�rdet �r 100',
    63 => "Ditt l�senord �r nu epostat till dig och det b�r anl�nda inom kort.  V�nligen f�lj instruktionerna d�ri.  Tack f�r att du anv�nder {$_CONF['site_name']}",
    64 => 'Kommentarsinst�llningar f�r',
    65 => 'F�rs�k att logga in igen',
    66 => "Det �r m�jligt att du har skrivit fel.  F�rs�k logga in igen.  �r du en <a href=\"{$_CONF['site_url']}/users.php?mode=new\">ny anv�ndare</a>?",
    67 => 'Medlem sedan',
    68 => 'Kom ih�g mig i',
    69 => 'Hur l�nge ska vi komma ih�g dig fr�n det att du loggar in?',
    70 => "Personliga inst�llningar f�r utseende och inneh�ll av {$_CONF['site_name']}",
    71 => "En av de b�sta funktionerna i {$_CONF['site_name']} �r att du kan g�ra personliga inst�llningar f�r det inneh�ll du vill se och du kan f�r�ndra utseendet p� sajten.  F�r att ta tillvara p� dessa funktioner m�ste du f�rst <a href=\"{$_CONF['site_url']}/users.php?mode=new\">registrera</a> med {$_CONF['site_name']}.  Redan medlem?  Anv�nd i s� fall inloggningsrutan till v�nster f�r att logga in!",
    72 => 'Utseende',
    73 => 'Spr�k',
    74 => 'F�r�ndra sajtens utseende!',
    75 => 'Epostade �mnen f�r',
    76 => 'Om du v�ljer ett �mne fr�n listan nedan s� kommer du att f� alla nya artiklar fr�n det �mnet mailat till dig varje kv�ll.  V�lj bara de �mnen som intresserar dig!',
    77 => 'Foto',
    78 => 'L�gg till ett fotografi p� dig sj�lv!',
    79 => 'Klicka i h�r f�r att radera denna bild',
    80 => 'Logga in',
    81 => 'Skicka epost',
    82 => 'Senaste tio artiklar f�r anv�ndare',
    83 => 'Kommentarsstatistik f�r anv�ndare',
    84 => 'Totalt antal artiklar:',
    85 => 'Totalt antal kommentarer:',
    86 => 'Finn alla inl�gg av',
    87 => 'Ditt anv�ndarnamn',
    88 => "N�gon (kanske du) har beg�rt ett nytt l�senord f�r ditt konto \"%s\" p� {$_CONF['site_name']}, <{$_CONF['site_url']}>.\n\nKlicka p� f�ljande l�nk om du verkligen vill nollst�lla ditt l�senord:\n\n",
    89 => "Om du inte vill g�ra detta s� �r det bara att ignorera detta mail (ditt l�senord kommer att vara of�r�ndrat).\n\n",
    90 => 'Ange ett nytt l�senord f�r ditt konto.  M�rk att ditt gamla l�senord �r giltigt tills du skickat in detta formul�r.',
    91 => 'S�tt nytt l�senord',
    92 => 'Ange nytt l�senord',
    93 => 'Din senaste l�senordsbeg�ran var f�r %d sekunder sedan.  Denna sajt kr�ver minst %d sekunder mellan l�senordsf�rfr�gningar.',
    94 => 'Radera konto "%s"',
    95 => 'Klicka p� "radera konto" knappen nedan f�r att radera ditt konto fr�n v�r databas. Notera att alla artiklar och kommentarer du postat fr�n detta konto inte kommer att raderas, utan kommer ist�llet att tillskrivas anv�ndaren "Anonymous".',
    96 => 'radera konto',
    97 => 'Bekr�fta kontoradering',
    98 => '�r du s�ker p� att du vill radera ditt konto?  Genom att radera ditt konto s� kommer du inte l�ngre att kunna logga in p� denna sajt (s�vida du inte f�rst skapar ett nytt konto).  Klicka p� "radera konto" i formul�ret nedan f�r att bekr�fta.',
    99 => 'Sekretessinst�llningar f�r',
    100 => 'Epost fr�n Admin',
    101 => 'Till�t epost fr�n sajtadministrat�rer',
    102 => 'Epost fr�n anv�ndare',
    103 => 'Till�t epost fr�n andra anv�ndare',
    104 => 'Visa online-status',
    105 => 'Jag vill synas i \'Vem �r h�r\'-blocket',
    106 => 'Plats',
    107 => 'Visas i din publika profil',
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
    1 => 'Det finns inga nyheter',
    2 => 'Det finns inga artiklar att visa.  Antingen finns det inga artiklar, eller s� �r dina artikelinst�llningar f�r restriktiva.',
    3 => ' i �mnet %s',
    4 => 'Dagens huvudartikel',
    5 => 'N�sta',
    6 => 'F�reg�ende',
    7 => 'F�rsta',
    8 => 'Sista'
);

###############################################################################
# profiles.php

$LANG08 = array(
    1 => 'Det blev alldeles fel n�r vi skulle skicka ditt meddelande.  F�rs�k igen.',
    2 => 'Meddelande skickat.',
    3 => 'Verifiera att det st�r en riktig epostadress i svarsf�ltet.',
    4 => 'Fyll i namn-, svarsadress-, �rende- och meddelandef�ltet',
    5 => 'Error: Anv�ndare existerar inte.',
    6 => 'Nu blev det fel.',
    7 => 'Anv�ndarprofil f�r',
    8 => 'Anv�ndarnamn',
    9 => 'Anv�ndarl�nk',
    10 => 'Skicka mail till',
    11 => 'Ditt namn:',
    12 => 'Svarsadress:',
    13 => '�rende:',
    14 => 'Meddelande:',
    15 => 'HTML kommer inte att �vers�ttas.',
    16 => 'Skicka meddelande',
    17 => 'Eposta artikel till n�gon',
    18 => 'Till namn',
    19 => 'Till epostadress',
    20 => 'Fr�n namn',
    21 => 'Fr�n epostadress',
    22 => 'Alla f�lt m�ste fyllas i',
    23 => "Detta brev har skickats till dig fr�n %s (%s) f�r att de trodde att du kunde vara intresserad av denna artikel fr�n {$_CONF['site_url']}.  Detta �r inte SPAM  och epostadresserna inblandade i detta har inte sparats.",
    24 => 'Kommentera denna artikel p�',
    25 => 'F�r att anv�nda denna funktion m�ste du vara inloggad.  Genom att kr�va inloggning f�rhindrar vi missbruk av detta system',
    26 => 'Detta formul�r l�ter dig s�nda epost till den valda anv�ndare.  Alla f�lt m�ste fyllas i.',
    27 => 'Kort meddelande',
    28 => '%s skrev: ',
    29 => "Detta �r den dagliga sammanst�llningen fr�n {$_CONF['site_name']} f�r ",
    30 => ' Dagligt nyhetsbrev f�r ',
    31 => 'Titel',
    32 => 'Datum',
    33 => 'L�s hela artikeln p�',
    34 => 'Slut p� meddelandet',
    35 => 'Beklagar, men denna anv�ndare vill inte ta emot n�gon epost.'
);

###############################################################################
# search.php

$LANG09 = array(
    1 => 'Detaljerad s�kning',
    2 => 'Nyckelord',
    3 => '�mne',
    4 => 'Samtliga',
    5 => 'Typ',
    6 => 'Artiklar',
    7 => 'Kommentarer',
    8 => 'F�rfattare',
    9 => 'Samtliga',
    10 => 'S�k',
    11 => 'S�kresultat',
    12 => 'tr�ffar',
    13 => 'S�kresultat:  inga tr�ffar',
    14 => 'Det fanns inga tr�ffar f�r din s�kning p�',
    15 => 'F�rs�k igen.',
    16 => 'Titel',
    17 => 'Datum',
    18 => 'F�rfattare',
    19 => "S�k igenom {$_CONF['site_name']} kompletta databas med nuvarande �ldre artiklar",
    20 => 'Datum',
    21 => 'till',
    22 => '(Datumformat ����-MM-DD)',
    23 => 'Visningar',
    24 => 'Fann %d post(er)',
    25 => 'S�kte efter',
    26 => 'post(er) ',
    27 => 'sekunder',
    28 => 'Ingen artikel eller kommentar matchar din s�kning',
    29 => 'Artikel- och kommentarsresultat',
    30 => 'Inga l�nkar matchade din s�kning',
    31 => 'Denna insticksmodul gav inga tr�ffar',
    32 => 'Aktivitet',
    33 => 'L�nk',
    34 => 'Plats',
    35 => 'Hela dagen',
    36 => 'Inga aktiviteter matchade din s�kning',
    37 => 'Aktivitetsresultat',
    38 => 'L�nkresultat',
    39 => 'L�nkar',
    40 => 'Aktiviteter',
    41 => 'Du m�ste s�ka p� minst tre tecken..',
    42 => 'Du m�ste anv�nda datumformatet ����-MM-DD (�r-m�nad-dag).',
    43 => 'exakt fras',
    44 => 'alla dessa ord',
    45 => 'n�got av dessa ord',
    46 => 'N�sta',
    47 => 'F�reg�ende',
    48 => 'F�rfattare',
    49 => 'Datum',
    50 => 'Tr�ffar',
    51 => 'L�nk',
    52 => 'Plats',
    53 => 'Artikelresultat',
    54 => 'Kommentarsresultat',
    55 => 'frasen',
    56 => 'OCH',
    57 => 'ELLER',
    58 => 'More results &gt;&gt;',
    59 => 'Results',
    60 => 'per page',
    61 => 'Refine search'
);

###############################################################################
# stats.php

$LANG10 = array(
    1 => 'Sajtstatistik',
    2 => 'Totalt antal tr�ffar p� sajten',
    3 => 'Artiklar(kommentarer) p� sajten',
    4 => 'Omr�stningar(svar) p� sajten',
    5 => 'L�nkar(tr�ffar) p� sajten',
    6 => 'Aktiviteter i sajtkalendern',
    7 => 'De tio mest l�sta artiklarna',
    8 => 'Artikeltitel',
    9 => 'Visningar',
    10 => 'Det verkar inte finnas n�gra artiklar p� den h�r sajten, eller s� har ingen av dom blivit l�sta.',
    11 => 'De tio mest kommenterade artiklarna',
    12 => 'Kommentarer',
    13 => 'Det verkar inte finnas n�gra artiklar p� den h�r sajten, eller s� har ingen av dom blivit kommenterade.',
    14 => 'De tio st�rsta omr�stningarna',
    15 => 'Omr�stningsfr�ga',
    16 => 'R�ster',
    17 => 'Det verkar inte finnas n�gra omr�stningar p� den h�r sajten, eller s� har ingen r�stat.',
    18 => 'Tio popul�raste l�nkarna',
    19 => 'L�nkar',
    20 => 'Tr�ffar',
    21 => 'Det verkar inte finnas n�gra l�nkar p� sajten, eller s� har ingen av dom blivit klickade.',
    22 => 'De tio mest epostade artiklarna',
    23 => 'g�nger',
    24 => 'Det verkar inte som om n�gon har epostat n�gon artikel fr�n den h�r sajten',
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
    1 => 'Besl�ktad info',
    2 => 'Eposta artikel till n�gon',
    3 => 'Skriv ut artikel',
    4 => 'Artikelalternativ',
    5 => 'Artikel i PDF-format'
);

###############################################################################
# submit.php

$LANG12 = array(
    1 => 'Man m�ste vara inloggad f�r att skicka in en %s.',
    2 => 'Logga in',
    3 => 'Ny anv�ndare',
    4 => 'Skicka in en aktivitet',
    5 => 'Skicka in en l�nk',
    6 => 'Skicka in en artikel',
    7 => 'Inloggning kr�vs',
    8 => 'Skicka',
    9 => "N�r du skriver en artikel till den h�r sajten s� �r det bra om du f�ljer dessa r�d: <UL><LI>Samtliga f�lt m�ste fyllas i<LI>Informationen ska vara korrekt<LI>Kontrollera alla l�nkar en extra g�ng</UL>\n",
    10 => 'Titel',
    11 => 'L�nk',
    12 => 'Startdatum',
    13 => 'Slutdatum',
    14 => 'Plats',
    15 => 'Beskrivning',
    16 => 'Om "Annan", specificera',
    17 => 'Kategori',
    18 => 'Annan',
    19 => 'L�s f�rst',
    20 => 'Error: Kategori saknas',
    21 => 'Du m�ste ange en ny kategori n�r du v�ljer "Annan"',
    22 => 'Error: F�lt saknas',
    23 => 'Fyll i samtliga f�lt i formul�ret.',
    24 => 'Sparad',
    25 => '%s har sparats.',
    26 => 'Hastighetsbegr�nsning',
    27 => 'Anv�ndarnamn',
    28 => '�mne',
    29 => 'Artikel',
    30 => 'Du skickade in en artikel f�r ',
    31 => " sekunder sedan.  Du m�ste v�nta minst {$_CONF['speedlimit']} sekunder mellan artiklar",
    32 => 'F�rhandsgranska',
    33 => 'F�rhandsgranska artikel',
    34 => 'Logga ut',
    35 => 'HTML-taggar �r inte till�tna',
    36 => 'Artikeltyp',
    37 => "N�r du skickar en aktivitet till {$_CONF['site_name']} s� hamnar den i den centrala kalendern. Denna funktion �r inte till f�r att lagra personlig information som f�delsedagar eller namnsdagar.<BR><BR>N�r du s�nder aktiviteten s� skickas den till en administrat�r som, om den blir godk�nd, l�gger upp den p� den centrala kalendern.",
    38 => 'L�gg aktivitet till',
    39 => 'Central kalender',
    40 => 'Personlig kalender',
    41 => 'Sluttid',
    42 => 'Starttid',
    43 => 'Heldagsaktivitet',
    44 => 'Adressrad 1',
    45 => 'Adressrad 2',
    46 => 'Stad',
    47 => 'Stat',
    48 => 'Postnummer',
    49 => 'Aktivitet',
    50 => 'Redigera aktivitetstyper',
    51 => 'Plats',
    52 => 'Radera',
    53 => 'Skapa konto'
);

###############################################################################
# ADMIN PHRASES - These are file phrases used in admin scripts
###############################################################################

###############################################################################
# admin/auth.inc.php

$LANG20 = array(
    1 => 'Autentisering kr�vs',
    2 => 'Felaktig inloggningsinformation',
    3 => 'Felaktigt l�senord f�r anv�ndare',
    4 => 'Anv�ndarnamn:',
    5 => 'L�senord:',
    6 => 'All tillg�ng till administrativa delar av denna webbsajt loggas och kontrolleras.<br />Denna sida �r bara till f�r beh�rig personal.',
    7 => 'logga in'
);

###############################################################################
# admin/block.php

$LANG21 = array(
    1 => 'Otillr�ckliga aministrat�rsr�ttigheter',
    2 => 'Du har inte tillr�ckliga r�ttigheter f�r att redigera detta block.',
    3 => 'Blockeditor',
    4 => 'There was a problem reading this feed (see error.log for details).',
    5 => 'Blocktitel',
    6 => '�mne',
    7 => 'Samtliga',
    8 => 'Block s�kerhetsniv�',
    9 => 'Blockordning',
    10 => 'Blocktyp',
    11 => 'Portalblock',
    12 => 'Normalt block',
    13 => 'Portalblocksinst�llningar',
    14 => 'RDF-l�nk',
    15 => 'Senaste RDF-uppdatering',
    16 => 'Normalblocksinst�llningar',
    17 => 'Blockinneh�ll',
    18 => 'Ange Blocktitel, s�kerhetsniv� och inneh�ll',
    19 => 'Blockadministrat�r',
    20 => 'Blocktitel',
    21 => 'Blocks�k.niv�',
    22 => 'Blocktyp',
    23 => 'Blockordning',
    24 => 'Block�mne',
    25 => 'Klicka p� ett block nedan f�r att f�r�ndra eller radera det.  Klicka p� "Nytt block" ovan f�r att skapa ett nytt block.',
    26 => 'Layoutblock',
    27 => 'PHP-block',
    28 => 'PHP-blockinst�llningar',
    29 => 'Blockfunktion',
    30 => 'Om du vill anv�nda PHP-kod i ditt block, ange namnet p� funktionen ovan.  Din funktion m�ste b�rja med prefixet "phpblock_" (t.ex. phpblock_getweather).  Om det inte har detta prefix kommer funktionen inte att kallas.  Detta g�rs f�r att f�rhindra personer som eventuellt har hackat din Geeklog-installation fr�n att exekvera godtycklig kod som kan skada ditt system.  S�tt inte tomma parenteser "()" efter ditt funktionsnamn.  Slutligen rekommenderas du att l�gga alla dina PHP-block i /path/to/geeklog/system/lib-custom.php.  D� kommer koden att vara kvar �ven n�r du uppdaterar till en ny version av GeekLog.',
    31 => 'Fel i PHP-block.  Funktionen \"%s\" existerar inte.',
    32 => 'Fel: F�lt saknas',
    33 => 'Du m�ste ange l�nken till .rdf-filen f�r portalblock',
    34 => 'Du m�ste ange titel och funktion av PHP-block',
    35 => 'Du m�ste ange titel och inneh�ll f�r normala block',
    36 => 'Du m�ste ange inneh�ll f�r layout-block',
    37 => 'Felaktigt funktionsnamn i PHP-blocket',
    38 => 'Funktioner f�r PHP-block m�ste ha prefixet \'phpblock_\' (ex. phpblock_getweather).  Detta �r en s�kerhetsfunktion som f�rhindrar eventuella crackare att exekvera godtycklig kod p� din server.',
    39 => 'Sida',
    40 => 'V�nster',
    41 => 'H�ger',
    42 => 'Du m�ste ange blockordning och s�kerhetsniv� f�r Geeklog:s standardblock',
    43 => 'Endast hemsidan',
    44 => '�tkomst nekad',
    45 => "Du �ger inte tillg�ng till detta block.  Denna incident har loggats.  G� tillbaka till <a href=\"{$_CONF['site_admin_url']}/block.php\">blockadministrationen</a>.",
    46 => 'Nytt block',
    47 => 'Administrat�rsmeny',
    48 => 'Blocknamn',
    49 => ' (inga mellanslag och namnet m�ste vara unikt)',
    50 => 'Hj�lpl�nk',
    51 => 'inkludera http://',
    52 => 'Om detta f�lt l�mnas tomt s� kommer inte hj�lpikonen f�r detta block att visas',
    53 => 'Aktiverad',
    54 => 'spara',
    55 => '�ngra',
    56 => 'radera',
    57 => 'Flytta block ner�t',
    58 => 'Flytta block upp�t',
    59 => 'Flytta block till h�ger sida',
    60 => 'Flytta block till v�nster sida',
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
    1 => 'Tidigare artiklar',
    2 => 'Senare artiklar',
    3 => 'L�ge',
    4 => 'Skrivl�ge',
    5 => 'Artikeleditor',
    6 => 'Det finns inga artiklar i systemet',
    7 => 'F�rfattare',
    8 => 'spara',
    9 => 'f�rhandsgranska',
    10 => '�ngra',
    11 => 'radera',
    12 => 'ID',
    13 => 'Titel',
    14 => '�mne',
    15 => 'Datum',
    16 => 'Ingress',
    17 => 'Br�dtext',
    18 => 'Tr�ffar',
    19 => 'Kommentarer',
    20 => 'Ping',
    21 => 'Send Ping',
    22 => 'Artikellista',
    23 => 'Klicka p� en artikels nummer nedan f�r att redigera eller radera den.  Klicka p� en artikels titel f�r att l�sa den artikeln.  Klicka p� "ny artikel" ovan f�r att skriva en ny artikel.',
    24 => 'The ID you chose for this story is already in use. Please use another ID.',
    25 => 'Error when saving story',
    26 => 'F�rhandsgranska artikel',
    27 => 'If you use [unscaledX] instead of [imageX], the image will be inserted at its original dimensions.',
    28 => '<p><b>PREVIEWING</b>: Previewing a story with images attached is best done by saving the article as a draft INSTEAD OF hitting the preview button.  Use the preview button only when images are not attached.',
    29 => 'Trackbacks',
    30 => 'Uppladdningsfel',
    31 => 'Du m�ste ange titel och ingress',
    32 => 'Huvudartikel',
    33 => 'Det kan bara finnas en huvudartikel',
    34 => 'Utkast',
    35 => 'Ja',
    36 => 'Nej',
    37 => 'Mer av',
    38 => 'Mer fr�n',
    39 => 'Epost',
    40 => '�tkomst nekad',
    41 => "Du �ger inte �tkomst till denna artikel.  Denna incident har loggats.  Du kan l�sa artikeln nedan.  G� tillbaka till <a href=\"{$_CONF['site_admin_url']}/story.php\">artikeladministrationen</a> n�r du �r klar.",
    42 => "Du �ger inte �tkomst till denna artikel.  Denna incident har loggats.  G� tillbaka till <a href=\"{$_CONF['site_admin_url']}/story.php\">artikeladministrationen</a>.",
    43 => 'Ny artikel',
    44 => 'Administrat�rsmeny',
    45 => 'Tillg�ng',
    46 => '<b>OBS:</b> om du anger ett framtida datum s� kommer inte artikeln att publiceras f�rr�n det datumet.  Det inneb�r ocks� att artikeln inte kommer att synas i din RDF-export och inte heller i s�k- eller statistiksidorna.',
    47 => 'Bilder',
    48 => 'image',
    49 => 'right',
    50 => 'left',
    51 => '<P>F�r att anv�nda bilderna du bifogar h�r m�ste du l�gga till specialtaggar i din artikel. Specialtaggarna �r [imageX], [imageX_right] eller [imageX_left] d�r X �r bildens nummer.  OBS: Du m�ste anv�nda alla bilder du bifogar.  Om du inte g�r det s� kommer du inte kunna spara din artikel.</P><P><B>F�rhandsgranskning</B>: F�r att f�rhandsgranska en artikel med bifogade bilder m�ste du lagra den som utkast ist�llet f�r att anv�nda "F�rhandsgranskning".  Anv�nd bara "F�rhandsgranskning" n�r artikeln saknar bilder.</P>',
    52 => 'Radera',
    53 => 'anv�ndes inte.  Du m�ste inkludera denna bild i ingressen eller br�dtexten innan du kan spara dina �ndringar',
    54 => 'Bifogade bilder anv�ndes inte',
    55 => 'Det blev fel n�r din artikel skulle sparas.  R�tta till dessa fel innan du sparar',
    56 => 'Visa �mnesikon',
    57 => 'Visa oskalad bild',
    58 => 'Artikeladministration',
    59 => 'Val',
    60 => 'Aktiverat',
    61 => 'Automatisk arkivering',
    62 => 'Automatisk radering',
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
    1 => '�mneseditor',
    2 => '�mnes-ID',
    3 => '�mnesnamn',
    4 => '�mnesikon',
    5 => '(anv�nd inte mellanslag)',
    6 => 'Om man raderar ett �mne s� raderas alla artiklar och block som �r associerade med detta �mne',
    7 => 'Ange �mnes-ID och �mnesnamn',
    8 => '�mnesadministrat�r',
    9 => 'Klicka p� ett �mne f�r att redigera eller radera det �mnet.  Klicka p� "Nytt �mne" ovan f�r att skapa ett nytt �mne.  Dina accessr�ttigheter st�r inom parentes.  Asterisken (*) anger standardv�rdet.',
    10 => 'Sorteringsordning',
    11 => 'Artiklar/sida',
    12 => '�tkomst nekad',
    13 => "Du �ger inte tillg�ng till detta �mne.  Denna incident har loggats.  G� tillbaka till <a href=\"{$_CONF['site_admin_url']}/topic.php\">�mnesadministrationen</a>.",
    14 => 'Sorteringsmetod',
    15 => 'alfabetisk',
    16 => 'standardv�rdet �r',
    17 => 'Nytt �mne',
    18 => 'Administrat�rsmeny',
    19 => 'spara',
    20 => '�ngra',
    21 => 'radera',
    22 => 'sk�nsv�rde',
    23 => 'G�r detta �mne till standardv�rde f�r nya artiklar',
    24 => '(*)',
    25 => 'Arkivera �mne',
    26 => 'g�r detta �mne till sk�nsv�rde f�r alla arkiverade artiklar.  Bara ett �mne till�ts.',
    27 => 'Or Upload Topic Icon',
    28 => 'Maximum',
    29 => 'File Upload Errors'
);

###############################################################################
# admin/user.php

$LANG28 = array(
    1 => 'Anv�ndareditor',
    2 => 'Anv�ndar-ID',
    3 => 'Anv�ndarnamn',
    4 => 'F�r- och efternamn',
    5 => 'L�senord',
    6 => 'S�kerhetsniv�',
    7 => 'Epostadress',
    8 => 'Hemsida',
    9 => '(anv�nd inte mellanslag)',
    10 => 'Du m�ste ange anv�ndarnamn och epostadress',
    11 => 'Anv�ndaradministrat�r',
    12 => 'Klicka p� en anv�ndare f�r att redigera eller radera den.  Klicka p� "Ny anv�ndare" ovan f�r att skapa en ny anv�ndare.  Du kan genomf�ra enkla s�kningar genom att ange delar av ett anv�ndarnamn, epostadress eller f�r- eller efternamn i s�kformul�ret nedan.',
    13 => 'S�kniv�',
    14 => 'Reg.datum',
    15 => 'Ny anv�ndare',
    16 => 'Administrat�rsmeny',
    17 => 'byt l�senord',
    18 => '�ngra',
    19 => 'radera',
    20 => 'spara',
    21 => 'Det anv�ndarnamnet existerar redan.',
    22 => 'Fel',
    23 => 'L�gg till i klump',
    24 => 'Klumpimportering av anv�ndare',
    25 => 'Du kan importera en klump anv�ndare till Geeklog.  Importfilen m�ste vara en tab-separerad textfil inneh�llande f�ljande f�lt: f�r- och efternamn, anv�ndarnamn epostadress.  Varje anv�ndare du importerar kommer att f� ett slumpm�ssigt l�senord via epost.  Du m�ste ange en anv�ndare per rad.  Om du inte f�ljer dessa instruktioner s� kan det bli strul som bara kan r�ttas till manuellt.  Var med andra ord mycket noggrann!',
    26 => 'S�k',
    27 => 'Begr�nsa tr�ffar',
    28 => 'Klicka h�r f�r att radera denna bild',
    29 => 'S�kv�g',
    30 => 'Importera',
    31 => 'Nya anv�ndare',
    32 => 'Klart!  Import klar av %d anv�ndare.  %d misslyckades',
    33 => 'skicka',
    34 => 'Fel:  Du m�ste ange en fil att skicka.',
    35 => 'Senaste inloggning',
    36 => '(aldrig)',
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
    1 => 'Godk�nn',
    2 => 'Radera',
    3 => 'Redigera',
    4 => 'Profil',
    10 => 'Titel',
    11 => 'Startdatum',
    12 => 'L�nk',
    13 => 'Kategori',
    14 => 'Datum',
    15 => '�mne',
    16 => 'Anv�ndarnamn',
    17 => 'F�r- och efternamn',
    18 => 'Epost',
    34 => 'Kontrollpanel',
    35 => 'Nya artiklar',
    36 => 'Nya l�nkar',
    37 => 'Nya aktiviteter',
    38 => 'Skicka',
    39 => 'F�r tillf�llet finns det inga bidrag att ta st�llning till',
    40 => 'Nya anv�ndare'
);

###############################################################################
# admin/mail.php

$LANG31 = array(
    1 => "{$_CONF['site_name']} Mail Utility",
    2 => 'Fr�n',
    3 => 'Svar till',
    4 => '�rende',
    5 => 'Inneh�ll',
    6 => 'Skicka till:',
    7 => 'Alla anv�ndare',
    8 => 'Administrat�r',
    9 => 'Inst�llningar',
    10 => 'HTML',
    11 => 'Viktigt meddelande!',
    12 => 'Skicka',
    13 => 'Reset',
    14 => 'Ignorera anv�ndarinst�llningar',
    15 => 'Fel vid epostande till: ',
    16 => 'Skickade epost till: ',
    17 => "<a href={$_CONF['site_admin_url']}/mail.php>Skicka ytterligare epost</a>",
    18 => 'Till',
    19 => 'OBS: V�lj "Inloggade anv�ndare" fr�n rullgardinsmenyn f�r att skicka epost till samtliga sajtmedlemmar.',
    20 => "Skickade <successcount> meddelanden och misslyckades att skicka <failcount> stycken.  Om du �r intresserad s� finns detaljerna f�r varje meddelande nedan.  Annars kan du <a href=\"{$_CONF['site_admin_url']}/mail.php\">s�nda ytterligare epost</a> eller g� tillbaka till <a href=\"{$_CONF['site_admin_url']}/moderation.php\">administrat�rsmenyn</a>.",
    21 => 'Misslyckad s�ndning',
    22 => 'Lyckad s�ndning',
    23 => 'Inga misslyckanden',
    24 => 'Inga meddelande s�nda',
    25 => '-- V�lj grupp --',
    26 => 'Ange alla f�lt i formul�ret och v�lj en grupp fr�n rullgardinsmenyn.'
);

###############################################################################
# admin/plugins.php

$LANG32 = array(
    1 => 'Att installera en insticksmodul kan skada din Geeklog-installation och m�jligtvis �ven ditt system.  Det �r viktigt att du bara installerar instickmoduler som du laddat hem fr�n <a href="http://www.geeklog.net" target="_blank">Geeklog:s hemsida</a> eftersom vi testar alla v�ra insticksmoduler p� ett flertal operativsystem.  Det �r viktigt att du f�rst�r att installationsprocessen kr�ver att ett f�tal filsystemskommandon kommer att exekveras.  Detta <EM>kan</EM> leda till s�kerhetsproblem -- s�rskilt om insticksmodulen kommer fr�n en tredje part.  Trots denna varning kan vi inte garantera n�gon installation.  Vi kan inte heller h�llas skadest�ndsskyldiga f�r eventuell skada som installationen av insticksmodulen kan orsaka.  Med andra ord: installera p� egen risk!  F�r den f�rsiktige finns det manuella installationsinstruktioner med varje insticksmodul.',
    2 => 'Insticksmodul installationsvarning',
    3 => 'Insticksmodul installationsformul�r',
    4 => 'Insticksmodulsfil',
    5 => 'Insticksmodulslista',
    6 => 'Varning:  insticksmodul redan installerad!',
    7 => 'Insticksmodulen du f�rs�ker installera existerar redan.  Radera insticksmodulen innan du f�rs�ker installera den igen',
    8 => 'Kompatibilitetstest f�r insticksmodul misslyckades',
    9 => 'Denna insticksmodul kr�ver en nyare version av Geeklog.  Du m�ste antingen uppgradera din <a href="http://www.geeklog.net">Geeklog-installation</a> eller h�mta en nyare version av insticksmodulen.',
    10 => '<br><b>Inga insticksmoduler �r installerade.</b><br><br>',
    11 => 'Klicka p� insticksmodulens namn f�r att f� information om den modulen, inklusive en l�nk till insticksmodulens webbsajt.  B�de den installerade versionen och versionen som insticksmodulen sj�lv rapporterar kommer att visas.  Detta hj�lper dig att se om en insticksmodul beh�ver uppgraderas.  L�s insticksmodulens manual om du vill ha information om hur man installerar eller uppgraderar den.',
    12 => 'inget namn p� insticksmodul skickades till plugineditor()',
    13 => 'Insticksmodulseditor',
    14 => 'Ny insticksmodul',
    15 => 'Administrat�rsmeny',
    16 => 'Namn p� insticksmodul',
    17 => 'Version p� insticksmodul',
    18 => 'Geeklog-version',
    19 => 'Aktiverad',
    20 => 'Ja',
    21 => 'Nej',
    22 => 'Installera',
    23 => 'Spara',
    24 => '�ngra',
    25 => 'Radera',
    26 => 'Namn p� insticksmodul',
    27 => 'Insticksmodulens hemsida',
    28 => 'Installerad version',
    29 => 'Geeklog-version',
    30 => 'Radera insticksmodul?',
    31 => '�r du s�ker p� att du vill radera denna insticksmodu?  Om du g�r det s� kommer du att radera alla filer, data, och datastrukturer som denna insticksmodul anv�nder.  Om du �r s�ker, klicka "radera" igen nedan.',
    32 => '<p><b>Error AutoLink m�rkord har inte korrekt format</b></p>',
    33 => 'Kodversion',
    34 => 'Uppdatera',
    35 => 'Edit',
    36 => 'Code',
    37 => 'Data',
    38 => 'Update!'
);

###############################################################################
# admin/syndication.php

$LANG33 = array(
    1 => 'skapa kanal',
    2 => 'spara',
    3 => 'radera',
    4 => 'avbryt',
    10 => 'Inneh�llsprenumeration',
    11 => 'Ny kanal',
    12 => 'Administrat�rsmeny',
    13 => 'F�r att �ndra eller radera en kanal m�ste du klicka p� dess l�nk nedan.  F�r att skapa en ny kanal s� m�ste du klicka p� "Ny kanal" ovan.',
    14 => 'Titel',
    15 => 'Typ',
    16 => 'Filnamn',
    17 => 'Format',
    18 => 'senast uppdaterad',
    19 => 'Aktiverad',
    20 => 'Ja',
    21 => 'Nej',
    22 => '<i>(inga kanaler)</i>',
    23 => 'alla artiklar',
    24 => 'Redigerar kanaler',
    25 => 'Kanaltitel',
    26 => 'Gr�ns',
    27 => 'Storlek p� inl�gg',
    28 => '(0 = ingen text, 1 = hela texten, annat = begr�nsat till angivet antal tecken.)',
    29 => 'Beskrivning',
    30 => 'Senaste uppdatering',
    31 => 'Teckenupps�ttning',
    32 => 'Spr�k',
    33 => 'Inneh�ll',
    34 => 'Inl�gg',
    35 => 'Timmar',
    36 => 'Kanaltyp',
    37 => 'Du har �tminstone en insticksmodul som st�der inneh�llskanaler.  Nedan m�ste du v�lja om du vill skapa en Geeklog-kanal eller en kanal fr�n en av insticksmodulerna.',
    38 => 'Error: F�lt saknas',
    39 => 'Fyll i Kanaltitel, beskrivning och filnamn.',
    40 => 'Fyll antingen i antal inl�gg eller ett antal timmar.',
    41 => 'L�nkar',
    42 => 'Aktiviteter',
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
    1 => "Ditt l�senord har epostats till dig och borde ankomma inom kort.  F�lj instruktionerna i meddelandet.  Tack f�r att du anv�nder {$_CONF['site_name']}",
    2 => "Tack f�r att du skickat din artikel till {$_CONF['site_name']}.  Den har nu skickats till v�r personal f�r godk�nnande.  Om den godk�nns s� kommer din artikel att publiceras p� v�r sajt.",
    3 => "Tack f�r att du skickat en l�nk till {$_CONF['site_name']}.  Den har nu skickats till v�r personal f�r godk�nnande.  Om den godk�nns s� kommer din l�nk att publiceras bland v�ra �vriga <a href={$_CONF['site_url']}/links.php>internetl�nkar</a>.",
    4 => "Tack f�r att du skickat en aktivitet till {$_CONF['site_name']}.  Den har nu skickats till v�r personal f�r godk�nnande.  Om den godk�nns s� kommer din aktivitet att synas i v�r <a href={$_CONF['site_url']}/calendar.php>kalender</a>.",
    5 => 'Din kontoinformation har lagrats.',
    6 => 'Dina artikelinst�llningar har lagrats.',
    7 => 'Dina kommentarsinst�llningar har lagrats.',
    8 => 'Du �r nu utloggad.',
    9 => 'Artikel sparad.',
    10 => 'Artikel raderad.',
    11 => 'Ditt block har nu sparats.',
    12 => 'Blocket har raderats.',
    13 => 'Ditt �mne har nu sparats.',
    14 => '�mnet och alla dess artiklar och block har nu raderats.',
    15 => 'Din l�nk har nu sparats.',
    16 => 'L�nken har raderats.',
    17 => 'Din aktivitet har sparats.',
    18 => 'Aktiviteten raderad.',
    19 => 'Din omr�stning har nu sparats.',
    20 => 'Omr�stningen raderad.',
    21 => 'Den nya anv�ndaren har nu sparats.',
    22 => 'Anv�ndaren har raderats',
    23 => 'Det blev fel n�r aktiviteten skulle sparast till din kalender.  Det saknas ett aktivitets-ID.',
    24 => 'Aktiviteten har sparats till din kalender',
    25 => 'Du m�ste vara inloggad f�r att komma �t din personliga kalender',
    26 => 'Aktiviteten raderad fr�n din personliga kalender',
    27 => 'Meddelande skickat.',
    28 => 'Insticksmodulen har sparats',
    29 => 'Personliga kalendrar �r inte aktiverade p� denna sajt',
    30 => '�tkomst nekad',
    31 => 'Du �ger inte tillg�ng till artikeladministrationen.  Denna incident har loggats.',
    32 => 'Du �ger inte tillg�ng till �mnesadministrationen.  Denna incident har loggats.',
    33 => 'Du �ger inte tillg�ng till blockadministrationen.  Denna incident har loggats.',
    34 => 'Du �ger inte tillg�ng till l�nkadministrationen.  Denna incident har loggats.',
    35 => 'Du �ger inte tillg�ng till aktivitetsadministrationen.  Denna incident har loggats.',
    36 => 'Du �ger inte tillg�ng till omr�stningsadministrationen.  Denna incident har loggats.',
    37 => 'Du �ger inte tillg�ng till anv�ndaradministrationen.  Denna incident har loggats.',
    38 => 'Du �ger inte tillg�ng till insticksmodulsadministrationen.  Denna incident har loggats.',
    39 => 'Du �ger inte tillg�ng till epostadministrationen.  Denna incident har loggats.',
    40 => 'Systemmeddelande',
    41 => 'Du �ger inte tillg�ng till ordbytesadministrationen.  Denna incident har loggats.',
    42 => 'Ditt ord har sparats.',
    43 => 'Ordet har raderats.',
    44 => 'Insticksmodulen installerad!',
    45 => 'Insticksmodulen raderad.',
    46 => 'Du �ger inte tillg�ng till databasbackupsadministrationen.  Denna incident har loggats.',
    47 => 'Denna funktion fungerar bara p� *nix.  Om du anv�nder *nix som ditt operativsystem s� har din buffert raderats.  Om du anv�nder Windows s� m�ste du s�ka efter filer som heter adodb_*.php och radera dom manuellt.',
    48 => "Tack f�r att du ans�kt om medlemsskap i {$_CONF['site_name']}. V�rt team kommer att se �ver din ans�kan och om den godk�nns s� kommer du att f� ett l�senord via epost.",
    49 => 'Din grupp har sparats.',
    50 => 'Gruppen har raderats.',
    51 => 'Detta anv�ndarnamn anv�nds redan.  V�lj ett annat.',
    52 => 'Den angivna epostadressen verkar inte vara giltig.',
    53 => 'Ditt nya l�senord �r nu lagrat.  Anv�nd ditt nya l�senord f�r att logga in nu.',
    54 => 'Tiden f�r din l�senordsbeg�ran har g�tt ut.  F�rs�k igen nedan.',
    55 => 'Ett meddelande har nu skickats till dig via epost och borde anl�nda inom kort.  F�lj instruktionerna i det meddelandet f�r att s�tta ett nytt l�senord p� ditt konto.',
    56 => 'Epostadressen du angivit anv�nds redan av ett annat konto.',
    57 => 'Ditt konto har raderats.',
    58 => 'Din kanal har lagrats.',
    59 => 'Kanalen har raderats.',
    60 => 'Insticksmodulen har uppdaterats',
    61 => 'Insticksmodul %s: Ok�nt meddelande',
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
    'access' => 'R�ttigheter',
    'ownerroot' => '�gare/root',
    'group' => 'Grupp',
    'readonly' => 'Endast l�s',
    'accessrights' => 'R�ttigheter',
    'owner' => '�gare',
    'grantgrouplabel' => 'Ge ovanst�ende grupp redigeringsr�ttigheter',
    'permmsg' => 'OBS: "medlemmar" �r alla inloggade sajtmedlemmar och "anonym" �r alla anv�ndare som l�ser sajten utan att ha loggat in.',
    'securitygroups' => 'S�kerhetsgrupper',
    'editrootmsg' => "Trots att du �r en anv�ndaradministrat�r s� kan du inte �ndra root-kontot utan att vara root sj�lv.  Du kan �ndra alla anv�ndare f�rutom root-anv�ndare.  Denna incident har loggats.  G� tillbaka till <a href=\"{$_CONF['site_admin_url']}/user.php\">anv�ndaradministrationen</a>.",
    'securitygroupsmsg' => 'Kryssa i vilka grupper anv�ndare ska vara med i.',
    'groupeditor' => 'Gruppeditor',
    'description' => 'Beskrivning',
    'name' => 'Namn',
    'rights' => 'R�ttigheter',
    'missingfields' => 'F�lt saknas',
    'missingfieldsmsg' => 'Du m�ste ange ett namn och en beskrivning p� gruppen',
    'groupmanager' => 'Gruppadministrat�r',
    'newgroupmsg' => 'Klicka p� en grupp f�r att �ndra eller radera den.  Klicka p� "Ny grupp" ovan f�r att skapa en ny grupp.  Notera att k�rngrupper inte kan raderas p� grund av att de kr�vs f�r att systemet ska fungera.',
    'groupname' => 'Gruppnamn',
    'coregroup' => 'K�rngrupp',
    'yes' => 'Ja',
    'no' => 'Nej',
    'corerightsdescr' => 'Detta �r en k�rngrupp och dess r�ttigheter kan inte modifieras.  Nedan finns en lista �ver de r�ttigheter denna grupp har tillg�ng till.',
    'groupmsg' => 'S�kerhetsgrupper p� denna sajt �r hierarkiskt organiserade.  Genom att l�gga denna grupp i n�gon annan grupp s� kommer den att �rva de r�ttigheter de grupperna �ger.  D�r det �r m�jligt rekommenderas du anv�nda de listade grupperna f�r att ge r�ttigheter till en grupp.  Om din grupp beh�ver skr�ddarsydda r�ttigheter s� kan du v�lja vilka specifika sajtegenskaper du vill delegera via rutan nedan.  F�r att g�ra denna grupp till medlem av n�gon annan grupp s� �r det bara att markera vilken/vilka via kryssrutorna nedan.',
    'coregroupmsg' => 'Detta �r en k�rngrupp och de grupper som denna grupp tillh�r kan inte modifieras.  Nedan finns en lista �ver vilka grupper denna grupp tillh�r.',
    'rightsdescr' => 'De egenskaper en grupp �ger kan antingen specificeras nedan eller genom att ge de egenskaperna till en grupp som den aktuella gruppen tillh�r.  De egenskaper nedan som saknar kryssrutor �r egenskaper som �rvts fr�n n�gon av de grupper som den aktuella gruppen �r med i.  De egenskaper som har kryssrutor kan delegeras direkt till denna grupp.',
    'lock' => 'L�s',
    'members' => 'Medlemmar',
    'anonymous' => 'Anonym',
    'permissions' => 'R�ttigheter',
    'permissionskey' => 'R = l�s, E = �ndra, r�ttighet att �ndra inneb�r automatiskt l�sr�ttigheter',
    'edit' => 'Modifiera',
    'none' => 'Ingen',
    'accessdenied' => '�tkomst nekad',
    'storydenialmsg' => "Du �ger inga r�ttigheter att l�sa denna artikel.  Det kan bero p� att du inte �r medlem i {$_CONF['site_name']}.  Du kan <a href=users.php?mode=new>skapa ett konto</a> f�r att f� tillg�ng till allt inneh�ll p� sajten!",
    'nogroupsforcoregroup' => 'Denna grupp �r inte medlem i n�gon annan grupp',
    'grouphasnorights' => 'Denna grupp �ger inte tillg�ng till n�gra administrativa funktioner p� denna sajt',
    'newgroup' => 'Ny grupp',
    'adminhome' => 'Administrat�rsmeny',
    'save' => 'spara',
    'cancel' => '�ngra',
    'delete' => 'radera',
    'canteditroot' => 'Du har f�rs�kt att modifiera Root-gruppen.  Detta har nekats p� grund av att du sj�lv inte �r medlem i Root-gruppen.  Kontakta systemadministrat�ren om du anser att detta �r fel',
    'listusers' => 'Lista anv�ndare',
    'listthem' => 'lista',
    'usersingroup' => 'Anv�ndare i grupp %s',
    'usergroupadmin' => 'User Group Administration',
    'add' => 'L�gg till',
    'remove' => 'Radera',
    'availmembers' => 'Tillg�ngliga medlemmar',
    'groupmembers' => 'Gruppmedlemmar',
    'canteditgroup' => 'Du m�ste vara medlem i denna grupp f�r att f� redigera den.  Kontakta din systemadministrat�r om du anser att detta meddelande �r felaktigt.',
    'cantlistgroup' => 'Du m�ste vara medlem i denna grupp f�r att f� se dess medlemmar.  Kontakta din systemadministrat�r om du anser att detta meddelande �r felaktigt.',
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
    'last_ten_backups' => 'Senaste tio s�kerhetskopiorna',
    'do_backup' => 'Starta s�kerhetskopiering',
    'backup_successful' => 'Databasbackup genomf�rd.',
    'db_explanation' => 'Klicka nedan f�r att skapa en s�kerhetskopia av ditt Geeklog-system',
    'not_found' => "Felaktig s�kv�g eller s� �r inte mysqldump-programmet exekverbart.<BR>Kontrollera <strong>\$_DB_mysqldump_path</strong>-definitionen i config.php.<BR>Variabeln �r f�r n�rvarande definierad som: <var>{$_DB_mysqldump_path}</var>",
    'zero_size' => 'S�kerhetskopiering misslyckades:  filstorleken �r noll',
    'path_not_found' => "{$_CONF['backup_path']} existerar inte eller �r inte en katalog",
    'no_access' => "FEL: Katalogen {$_CONF['backup_path']} �r inte tillg�nglig.",
    'backup_file' => 'Backupfil',
    'size' => 'Storlek',
    'bytes' => 'Byte',
    'total_number' => 'Totalt antal s�kerhetskopior: %d'
);

###############################################################################

$LANG_BUTTONS = array(
    1 => 'Aktuellt',
    2 => 'Kontaktinfo',
    3 => 'Skriv artikel',
    4 => 'L�nkar',
    5 => 'Omr�stningar',
    6 => 'Kalender',
    7 => 'Statistik',
    8 => 'Personliga inst�llningar',
    9 => 'S�k',
    10 => 'detaljerad s�kning',
    11 => 'Directory'
);

###############################################################################
# 404.php

$LANG_404 = array(
    1 => '404 Error',
    2 => 'J�sses,  jag har letat �verallt, men jag kan inte hitta <b>%s</b>.',
    3 => "<p>Vi beklagar, men filen du s�ker existerar inte.  Leta g�rna p� v�r <a href=\"{$_CONF['site_url']}\">f�rstasida</a> eller anv�nd <a href=\"{$_CONF['site_url']}/search.php\">s�ksidan</a> f�r att f�rs�ka lokalisera det du s�ker."
);

###############################################################################
# login form

$LANG_LOGIN = array(
    1 => 'Inloggning kr�vs',
    2 => 'F�r att komma �t denna sida s� m�ste du vara inloggad.',
    3 => 'Logga in',
    4 => 'Ny anv�ndare'
);

###############################################################################
# pdfgenerator.php

$LANG_PDF = array(
    1 => 'PDF-funktionen �r avst�ngd',
    2 => 'Dokumentet kunde inte renderas.  Dokumentet kunde h�mtas, men kunde inte renderas.  Var noga med att bara skicka in html-formatterade dokument som �r skrivna enligt xHTML.  Notera att komplexa dokument kanske inte kan renderas korrekt, eller �ver huvud taget.  Ditt renderade dokumentet var 0 byte stort och har raderats.  Om du �r �vertygad om att ditt dokument borde kunna renderas, s� b�r du skicka in det igen.',
    3 => 'Ok�nt fel vid PDF-generering',
    4 => 'Inget siddata gavs, eller s� vill du anv�nda ad-hoc PDF-genereringsverktyget nedan.  Om du anser att du inte borde f� detta felmeddelande s� b�r du kontakta systemadministrat�ren.  Annars kan du prova att anv�nda formul�ret nedan f�r att generera PDF-filer med mer handp�l�ggning.',
    5 => 'Laddar ditt dokument.',
    6 => 'V�nta medan ditt dokument laddas.',
    7 => 'Du kan h�gerklicka p� knappen nedan och v�lja \'spara m�l...\' eller \'spara l�nk...\' f�r att spara en kopia av ditt dokument.',
    8 => 'Den angivna s�kv�gen till HTMLDoc-bin�ren �r felaktig, eller s� kan det h�r systemet inte exekvera den.  Kontakta systemadministrat�ren om detta fel kvarst�r.',
    9 => 'PDF-generator',
    10 => 'Detta �r Ad-hoc PDF-generering.  Verktyget kommer att f�rs�ka konvertera valfri URL till en PDF.  T�nk p� att vissa sidor inte renderas ordentligt med den h�r funktionen, men detta �r en begr�nsning av HTMLDoc PDF-genereringsverktyget, och dessa felmeddelanden b�r inte rapporteras till systemadministrat�rerna p� denna sajt',
    11 => 'URL',
    12 => 'Generera PDF!',
    13 => 'PHP-konfigurationen p� den h�r servern till�ter inte �ppning av URL:er med fopen()-kommandot.  Systemadministrat�ren m�ste redigera php.ini-filen och aktivera allow_url_fopen',
    14 => 'PDF-filen du beg�rde existerar inte, eller s� f�rs�kte du h�mta en fil som du inte har tillg�ng till.'
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
    1 => 'januari',
    2 => 'februari',
    3 => 'mars',
    4 => 'april',
    5 => 'maj',
    6 => 'juni',
    7 => 'juli',
    8 => 'augusti',
    9 => 'september',
    10 => 'oktober',
    11 => 'november',
    12 => 'december'
);

###############################################################################
# Weekdays

$LANG_WEEK = array(
    1 => 's�ndag',
    2 => 'm�ndag',
    3 => 'tisdag',
    4 => 'onsdag',
    5 => 'torsdag',
    6 => 'fredag',
    7 => 'l�rdag'
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