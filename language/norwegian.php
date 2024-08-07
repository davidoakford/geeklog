<?php

###############################################################################
# norwegian.php, based on
# english.php
# This is the norwegian language page for GeekLog!
#
# Translator   : Torfinn Ingolfsen <tingo@start.no>
# Date started : 2003-03-10
# Last updated : 2004-08-04
# Date finished: 2004-08-04
# History:
# 2004-08-04	Update for Geeklog 1.3.8-1sr5 started and completed.
# 2003-06-08	Corrected LANG22[15], capitalize first word
# 2003-04-02	Corrected capitalization of MESSAGE[48].
# 2003-03-30	Translated the last (and final) part
# 2003-03-23	Translated down to and including LANG23 (link.php)
# 2003-03-18	First half of the file translated
# 2003-03-10	Translation started
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
    1 => 'Gitt av:',
    2 => 'les mer',
    3 => 'kommentarer',
    4 => 'Rediger',
    5 => 'stem',
    6 => 'Resultater',
    7 => 'stemmeresultater',
    8 => 'stemmer',
    9 => 'Admin Funksjoner:',
    10 => 'Innlegg',
    11 => 'Artikler',
    12 => 'Blokker',
    13 => 'Emner',
    14 => 'Lenker',
    15 => 'Begivenheter',
    16 => 'Avstemning',
    17 => 'Brukere',
    18 => 'SQL Sp�rring',
    19 => 'Logg Ut',
    20 => 'Brukerinformasjon:',
    21 => 'Brukernavn',
    22 => 'Bruker ID',
    23 => 'Sikkerhetsniv�',
    24 => 'Anonym',
    25 => 'Svar',
    26 => 'De f�lgende kommentarer eies av den som skrev dem. Dette nettstedet er ikke ansvarlig for innholdet.',
    27 => 'Nyeste Innlegg',
    28 => 'Slett',
    29 => 'ingen kommentarer.',
    30 => 'Eldre Artikler',
    31 => 'Lovlige HTML tagger:',
    32 => 'Feil, ugyldig brukernavn',
    33 => 'Feil, kunne ikke skrive til loggfilen',
    34 => 'Feil',
    35 => 'Logg ut',
    36 => 'p�',
    37 => 'Ingen artikler fra brukere',
    38 => 'Content Syndication',
    39 => 'Gjenoppfrisk',
    40 => 'You have <tt>register_globals = Off</tt> in your <tt>php.ini</tt>. However, Geeklog requires <tt>register_globals</tt> to be <strong>on</strong>. Before you continue, please set it to <strong>on</strong> and restart your web server.',
    41 => 'Gjestebrukere',
    42 => 'Skrevet av:',
    43 => 'Svar p� denne',
    44 => 'Opphav',
    45 => 'MySQL Feil Nummer',
    46 => 'MySQL Feilmelding',
    47 => 'Brukerfunksjoner',
    48 => 'Kontoinformasjon',
    49 => 'Visningsvalg',
    50 => 'Feil i SQL setning',
    51 => 'hjelp',
    52 => 'Ny',
    53 => 'Admin Hovedside',
    54 => 'Kunne ikke �pne filen.',
    55 => 'Feil p�',
    56 => 'stem',
    57 => 'Passord',
    58 => 'Logg inn',
    59 => "Er du ikke bruker enn�? Registrer deg som en <a href=\"{$_CONF['site_url']}/users.php?mode=new\">Ny bruker</a>",
    60 => 'Skriv en kommentar',
    61 => 'Opprett Ny Konto',
    62 => 'ord',
    63 => 'Kommentarvalg',
    64 => 'Email Artikkelen Til en Venn',
    65 => 'Utskriftsvennlig Versjon',
    66 => 'Min Kalender',
    67 => 'Velkommen til ',
    68 => 'hjem',
    69 => 'kontakt',
    70 => 's�k',
    71 => 'bidra',
    72 => 'lenker',
    73 => 'tidligere avstemninger',
    74 => 'kalender',
    75 => 'avansert s�k',
    76 => 'nettsted statistikk',
    77 => 'Plugins',
    78 => 'Kommende Begivenheter',
    79 => 'Nytt',
    80 => 'artikler de siste',
    81 => 'artikkel de siste',
    82 => 'timer',
    83 => 'KOMMENTARER',
    84 => 'LENKER',
    85 => 'siste 48 timer',
    86 => 'ingen nye kommentarer',
    87 => 'siste 2 uker',
    88 => 'ingen nye lenker',
    89 => 'Det er ingen kommende begivenheter',
    90 => 'Hjem',
    91 => 'Side generert p�',
    92 => 'sekunder',
    93 => 'Opphavsrett',
    94 => 'Alle varemerker og opphavsrett p� denne siden tilh�rer de respektive eiere.',
    95 => 'Drevet Av',
    96 => 'Grupper',
    97 => 'Ordliste',
    98 => 'Plug-ins',
    99 => 'ARTIKLER',
    100 => 'ingen nye artikler',
    101 => 'Dine Begivenheter',
    102 => 'Nettstedets Begivenheter',
    103 => 'DB Backups',
    104 => 'av',
    105 => 'Email brukere',
    106 => 'Visninger',
    107 => 'GL Version Test',
    108 => 'T�m Cache',
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
    1 => 'Skriv en Kommentar',
    2 => 'Skrivemodus',
    3 => 'Logg ut',
    4 => 'Lag ny Konto',
    5 => 'Brukernavn',
    6 => 'Dette nettstedet krever at du er logget inn for � kunne skrive kommentarer, vennligst logg inn. Hvis du ikke er registrert fra f�r, bruk skjemaet under for � registrere deg som ny bruker.',
    7 => 'Din siste kommentar var ',
    8 => " sekunder siden. Dette nettstedet krever minst {$_CONF['commentspeedlimit']} sekunder mellom kommentarer",
    9 => 'kommentar',
    10 => 'Send Report',
    11 => 'Post kommentar',
    12 => 'vennligst fyll ut Tittel- og Kommentarfeltene, de er obligatoriske for � poste en kommentar.',
    13 => 'Din Informasjon',
    14 => 'Forh�ndsvisning',
    15 => 'Report this post',
    16 => 'Overskrift',
    17 => 'Feil',
    18 => 'Viktig',
    19 => 'Fors�k � holde deg til emnet n�r du skriver kommentarer.',
    20 => 'Svar p� andres kommentarer istedet for � opprette nye diskusjonstr�der.',
    21 => 'Les �vrige kommentarer f�r du poster din egen, for � unng� gjentakelse av det som allerede er blitt sagt.',
    22 => 'Bruk en tydelig overskrift som forteller hva kommentaren din handler om.',
    23 => 'Emailadressen din blir IKKE offentliggjort.',
    24 => 'Anonym Bruker',
    25 => 'Are you sure you want to report this post to the site admin?',
    26 => '%s reported the following abusive comment post:',
    27 => 'Abuse report'
);

###############################################################################
# users.php

$LANG04 = array(
    1 => 'Brukerprofil for',
    2 => 'Brukernavn',
    3 => 'Fullt Navn',
    4 => 'Passord',
    5 => 'Email',
    6 => 'Hjemmeside',
    7 => 'Biografi',
    8 => 'PGP n�kkel',
    9 => 'Lagre Informasjon',
    10 => 'Siste 10 kommentarer av bruker',
    11 => 'Brukeren har ikke skrevet noen kommentarer',
    12 => 'Brukervalg for',
    13 => 'Email Nattlig Sammendrag',
    14 => 'Dette er et tilfeldig generert passord. Du anbefales � endre passordet omg�ende. For � endre passordet, logg inn og velg Kontoinformasjon fra Brukermenyen.',
    15 => "Din {$_CONF['site_name']} er opprettet. For � bruke den m� du logge inn med nedenst�ende opplysninger. Vennligst ta vare p� denne mailen for fremtidig referanse.",
    16 => 'din Kontoinformasjon',
    17 => 'Kontoen eksisterer ikke',
    18 => 'Oppgitt emailadresse synes � v�re ugyldig',
    19 => 'Oppgitt brukernavn eller emailadresse finnes fra f�r',
    20 => 'Oppgitt emailadresse synes � v�re ugyldig',
    21 => 'Feil',
    22 => "Opprett konto p� {$_CONF['site_name']}!",
    23 => "Ved � opprette en konto p� {$_CONF['site_name']} vil du f� mulighet til � skrive artikler og kommentarer i ditt eget navn. Hvis du ikke har en konto, vil du kun delta som anonym. Emailadressen du oppgir vil <b><i>aldri</i></b> bli offentlig vist p� dette nettstedet.",
    24 => 'Passordet ditt blir sendt til den emailadressen du oppgir.',
    25 => 'Har du glemt passordet ditt?',
    26 => 'Skriv inn <em>enten</em> brukernavnet ditt eller emailadressen du brukte n�r du registrerte deg og trykk p� Email Passord. Opllysing om hvordan du lager et nytt passord blir sendt til mailadressen som er registrert i databasen.',
    27 => 'Opprett Konto N�!',
    28 => 'Email Passord',
    29 => 'logget ut fra',
    30 => 'logged inn fra',
    31 => 'Denne funksjonen krever at du er logget inn',
    32 => 'Signatur',
    33 => 'Blir aldri vist offentlig',
    34 => 'Ditt egentlige navn',
    35 => 'Skriv inn passord for � endre det',
    36 => 'Begynner med http://',
    37 => 'Legges til dine kommentarer',
    38 => 'Alt om deg! Alle kan lese dette',
    39 => 'Din offentlige PGP n�kkel',
    40 => 'Ingen Emneikoner',
    41 => 'Villig til � v�re Moderator',
    42 => 'Datoformat',
    43 => 'Maksimum Antall Artikler',
    44 => 'Ingen Rammer',
    45 => 'Visningsvalg for',
    46 => 'Ekskluderte Emner og Forfattere for',
    47 => 'Konfigurasjon av nyhetsbokser for',
    48 => 'Emner',
    49 => 'ingen ikoner i artikler',
    50 => 'fjern avkryssing hvis du ikke er interessert',
    51 => 'Kun nyheter og artikler',
    52 => 'Standardverdien er',
    53 => 'Motta dagens artikler hver natt',
    54 => 'Kryss av for de emner og forfattere du ikke �nsker � se.',
    55 => 'Dersom ingen er avkrysset, s� f�r du standardvalget. Hvis du begynner � krysse av bokser, husk � krysse av for alle du �nsker � se, fordi standardvalget blir ignorert. Standardvalg vises med <b>uthevet</b> skrift.',
    56 => 'Forfattere',
    57 => 'Visningsmodus',
    58 => 'Rekkef�lge for sortering',
    59 => 'Kommentarbegrensning',
    60 => 'Hvordan vil du ha kommentarene vist?',
    61 => 'Nyeste eller eldste f�rst?',
    62 => 'Standardverdi er 100',
    63 => "Passordet ditt er sendt, og vil snart dukke opp i mailboksen din. Vennligst f�lg instruksjonen i meldingen du mottar. Vi takker for at du bruker {$_CONF['site_name']}",
    64 => 'Kommentarvalg for',
    65 => 'Fors�k � logge inn p� nytt',
    66 => "Du har kanskje skrevet brukernavn eller passord feil. Fors�k � logge inn igjewn under. er du en <a href=\"{$_CONF['site_url']}/users.php?mode=new\">ny bruker</a>?",
    67 => 'Medlem Siden',
    68 => 'Husk meg i',
    69 => 'Hvor lenge skal vi huske deg etter at du er logget inn?',
    70 => "Tilpass utseendet og innholdet p� {$_CONF['site_name']}",
    71 => "En av mulighetene p� {$_CONF['site_name']} er at du kan tilpasse innhold, utseeende og layout slik at det passer deg. for � kunne bruke disse funksjonene m� du f�rst registrere deg som  <a href=\"{$_CONF['site_url']}/users.php?mode=new\">bruker</a> p� {$_CONF['site_name']}. Er du allerede registrert? Da bruker du loginskjemaet til venstre for � logge inn!",
    72 => 'Tema',
    73 => 'Spr�k',
    74 => 'Endre utseendet p� dette nettstedet!',
    75 => 'Emailede Emner for',
    76 => 'Hvis du velger et eller flere emner fra listen under, s� vil du motta alle nye artikler for det enkelte emne ved dagens slutt. Velg kun emner som interesserer deg!',
    77 => 'Foto',
    78 => 'Legg inn et bilde av deg selv!',
    79 => 'Kryss av her for � slette dette bildet',
    80 => 'Loginn',
    81 => 'Send Email',
    82 => 'Siste 10 artikler av bruker',
    83 => 'Skrivestatistikk for bruker',
    84 => 'Totalt antall artikler:',
    85 => 'Totalt antall kommentarer:',
    86 => 'Finn alt skrevet av',
    87 => 'Ditt login-navn',
    88 => "Noen (kanskje du) har bedt om et nytt passord for din konto \"%s\" p� {$_CONF['site_name']}, <{$_CONF['site_url']}>.\n\nHvis du virkelig �nsker � utf�re dette, vennligst trykk p� lenken under:\n\n",
    89 => "Hvis du ikke �nsker � utf�re dette, bare ignorer denne meldingen (passordet ditt vil ikke bli endret).\n\n",
    90 => 'du kan skrive inn et nytt passord for kontoen din under. Vennligst merk at ditt gmle passord vil v�re gyldig helt til du bekrefter dette skjemaet.',
    91 => 'Sett Nytt Passord',
    92 => 'Skriv inn Nytt Passord',
    93 => 'din siste foresp�rsel om nytt passord var %d for sekunder siden. Dette nettstedet krever minst %d sekunder mellom passord endringer.',
    94 => 'Slett Konto "%s"',
    95 => 'Trykk p�  "slett konto" knappen under for � fjerne kontoen din fra v�r database. Vennligst legg merke til at artikler og kommentarer du har skrevet med denne kontoen <strong>ikke</strong> vil bli slettet, men vil vises som skrevet av "Anonym".',
    96 => 'slett konto',
    97 => 'Bekreft Sletting av Konto',
    98 => 'er du sikker p� at du �nsker � slettekontoen din? Hvis du sletter kontoen din vil du ikke kunne logge inn p� dette nettstedet igjen (dersom du ikke lager en ny konto). Hvis du er sikker, trykk "slett konto" igjen p� skjemaet under.',
    99 => 'Privacy Options for',
    100 => 'Email fra Admin',
    101 => 'Tillat email fra Administratorer',
    102 => 'Email fra Brukere',
    103 => 'Tillat email fra andre brukere',
    104 => 'Vis Online Status',
    105 => 'Vises i Online n� blokk',
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
    1 => 'Det er ingen nyheter � vise',
    2 => 'Det er ingen artikler � vise. Enten er det ingen nyheter for dette emne, eller s� er dine brukervalg for restriktive',
    3 => ' for emne %s',
    4 => 'Dagens Hovedoppslag',
    5 => 'Neste',
    6 => 'Forrige',
    7 => 'First',
    8 => 'Last'
);

###############################################################################
# profiles.php

$LANG08 = array(
    1 => 'det oppsto en feil under utsendelse av din melding. Vennligst fors�k p� nytt.',
    2 => 'Meldingen ble sendt.',
    3 => 'Vennligst sjekk at du bruker en gyldig emailadressei Svar Til feltet.',
    4 => 'Vennligst fyll ut feltene Ditt Navn, Svar Til, Emne og  Melding',
    5 => 'Feil: Bruker finnes ikke.',
    6 => 'En feil oppsto.',
    7 => 'Brukerprofil for',
    8 => 'Brukernavn',
    9 => 'Bruker URL',
    10 => 'Send email til',
    11 => 'Ditt navn:',
    12 => 'Svar Til:',
    13 => 'Emne:',
    14 => 'Melding:',
    15 => 'HTML blir ikke oversatt.',
    16 => 'Send Melding',
    17 => 'Email denne artikkelen til en venn',
    18 => 'Til Navn',
    19 => 'Til Emailadresse',
    20 => 'Fra Navn',
    21 => 'Fra Emailadresse',
    22 => 'Alle felter m� fylles ut',
    23 => "Denne emailen er sendt til deg av %s (%s) fordi vedkommende mener at du kunne v�re interessert i denne artikkelen fra {$_CONF['site_url']}. Dette er ikke SPAM (s�ppelpost) og mailadressene som ble brukt i denne transaksjonen er ikke lagret for senere bruk.",
    24 => 'Kommenter denne artikkelen p�',
    25 => 'Du m� v�re logget inn for � bruke denne funksjonen. Kravet om innlogging hjelper til med � hindre misbruk av systemet',
    26 => 'Dette skjemaet lar deg sende en email til valgt bruker. Alle felter m� fylles ut.',
    27 => 'Kort melding',
    28 => '%s skrev: ',
    29 => "Dette er det daglige sammendraget fra {$_CONF['site_name']} for ",
    30 => ' Daglig Nyhetsbrev for ',
    31 => 'Overskrift',
    32 => 'Dato',
    33 => 'les hele artikkelen p�',
    34 => 'Slutt p� Melding',
    35 => 'Beklager, denne brukeren �nsker ikke � motta noen emailer.'
);

###############################################################################
# search.php

$LANG09 = array(
    1 => 'Avansert S�k',
    2 => 'N�kkelord',
    3 => 'Emne',
    4 => 'Alle',
    5 => 'Type',
    6 => 'Artikler',
    7 => 'Kommentarer',
    8 => 'Forfattere',
    9 => 'Alle',
    10 => 'S�k',
    11 => 'S�keresultater',
    12 => 'resultater',
    13 => 'S�keresultat: Ingen samsvar',
    14 => 'Det var ingen resultater som svarte til ditt s�k etter',
    15 => 'Pr�v igjen.',
    16 => 'emne',
    17 => 'Dato',
    18 => 'Forfatter',
    19 => "S�k i hele {$_CONF['site_name']} databasen av n�v�rende og gamle artikler",
    20 => 'Dato',
    21 => 'til',
    22 => '(Datoformat YYYY-MM-DD)',
    23 => 'Treff',
    24 => 'Fant %d treff',
    25 => 's�kte etter',
    26 => 'treff ',
    27 => 'sekunder',
    28 => 'Ingen treff i artikler eller kommentarer for ditt s�k',
    29 => 'Resultater fra Artikler og Kommentarer',
    30 => 'Ingen lenker svarte til ditt s�k',
    31 => 'Denne plug-in returnerte ingen treff',
    32 => 'Begivenhet',
    33 => 'URL',
    34 => 'Sted',
    35 => 'Hele dagen',
    36 => 'Ingen begivenheter svarte til ditt s�k',
    37 => 'Resultater fra Begivenheter',
    38 => 'Resultater fra Lenker',
    39 => 'Lenker',
    40 => 'Begivenheter',
    41 => 'S�kestrengen din m� inneholde minst 3 tegn.',
    42 => 'Datoer m� angis p� formatet YYYY-MM-DD (�r-m�ned-dag).',
    43 => 'eksakt frase',
    44 => 'alle ordene',
    45 => 'et eller flere ord',
    46 => 'Neste',
    47 => 'Forrige',
    48 => 'Forfatter',
    49 => 'Dato',
    50 => 'Treff',
    51 => 'Lenke',
    52 => 'Sted',
    53 => 'Resultater fra Artikler',
    54 => 'Resultater fra Kommentarer',
    55 => 'frase',
    56 => 'AND',
    57 => 'OR',
    58 => 'More results &gt;&gt;',
    59 => 'Results',
    60 => 'per page',
    61 => 'Refine search'
);

###############################################################################
# stats.php

$LANG10 = array(
    1 => 'Statistikk for nettstedet',
    2 => 'Totalt antall treff i systemet',
    3 => 'Artikler(kommentarer) i systemet',
    4 => 'Avstemninger(Svar) i systemet',
    5 => 'Lenker(klikk) i systemet',
    6 => 'Begivenheter i systemet',
    7 => 'Topp Ti Viste Artikler',
    8 => 'Overskrift',
    9 => 'Vist',
    10 => 'Det virker som om det ikke er noen artikler p� dette nettstedet, eller at ingen har lest dem.',
    11 => 'Topp Ti kommenterte Artikler',
    12 => 'Kommentarer',
    13 => 'Det virker som om det ikke er noen artikler p� dette nettstedet, eller at ingen har kommentert dem.',
    14 => 'Topp Ti Avstemninger',
    15 => 'Sp�rsm�l',
    16 => 'stemmer',
    17 => 'Det virker som om det ikke er noen avstemninger p� dette nettstedet, eller at ingen har stemt.',
    18 => 'Topp Ti Lenker',
    19 => 'Lenke',
    20 => 'Treff',
    21 => 'Det virker som om det ikke er noen lenker p� dette nettstedet, eller at ingen har klikket p� dem.',
    22 => 'Topp Ti Artikler sendt via Email',
    23 => 'Emails',
    24 => 'Det virker som om ingen har emailet en artikkel p� dette nettstedet',
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
    1 => 'Relatert',
    2 => 'Send  artikkelen til en venn',
    3 => 'utskriftsvennlig format',
    4 => 'Valg',
    5 => 'PDF Story Format'
);

###############################################################################
# submit.php

$LANG12 = array(
    1 => 'Du m� v�re logget inn for � poste en %s.',
    2 => 'Logg inn',
    3 => 'Ny bruker',
    4 => 'Post en begivenhet',
    5 => 'Post en lenke',
    6 => 'Post en artikkel',
    7 => 'Innlogging kreves',
    8 => 'Post',
    9 => 'N�r du poster informasjon p� dette nettstedet ber vi om at du f�lger disse retningslinjene...<ul><li>Alle feltene m� fylles ut<li>Gi n�yaktige og komplette opplysninger<li>Dobbeltsjekk URLer</ul>',
    10 => 'Overskrift',
    11 => 'Lenke',
    12 => 'Start Dato',
    13 => 'Slutt Dato',
    14 => 'Sted',
    15 => 'Beskrivelse',
    16 => 'Hvis Annen, vennligst angi',
    17 => 'Kategori',
    18 => 'Annen',
    19 => 'Les f�rst',
    20 => 'Feil: kategori mangler',
    21 => 'Hvis du velger "Annen" vennligst angi et navn p� kategorien',
    22 => 'Feil: felt mangler',
    23 => 'Vennligst fyll inn alle feltene.  Alle felt er p�krevd.',
    24 => 'Posting lagret',
    25 => 'Din posting av en %s er lagret.',
    26 => 'Fartsgrense',
    27 => 'Brukernavn',
    28 => 'Emne',
    29 => 'Artikkel',
    30 => 'din siste posting var ',
    31 => " sekunder siden.  Dette nettstedet krever minst {$_CONF['speedlimit']} sekunder mellom postinger",
    32 => 'Forh�ndsvisning',
    33 => 'Forh�ndsvis Artikkel',
    34 => 'Logg ut',
    35 => 'HTML tagger er ulovlig',
    36 => 'Posting Modus',
    37 => "N�r en begivenhet postes til {$_CONF['site_name']} s� havner den p� hovedkalenderen, og andre brukere kan velge � legge den til sin personlige  kalender. Kalenderen er <b>IKKE</b> beregnet for � lagre personlige begivenheter som f�dselsdager, jubileum osv.<br><br>N�r en begivenhet er postet blir den sendt til v�re redakt�rer, og hvis den blir godkjent havner den p� hovedkalenderen.",
    38 => 'Legg Begivenhet Til',
    39 => 'Hoved Kalender',
    40 => 'Personlig Kalender',
    41 => 'Slutt Tid',
    42 => 'Start Tid',
    43 => 'Heldags Begivenhet',
    44 => 'Adresselinje 1',
    45 => 'Adresselinje 2',
    46 => 'By/Sted',
    47 => 'Stat',
    48 => 'Postnummer',
    49 => 'Begivenhet Type',
    50 => 'Rediger Begivenhetstyper',
    51 => 'Sted',
    52 => 'Slett',
    53 => 'Lag Konto'
);

###############################################################################
# ADMIN PHRASES - These are file phrases used in admin scripts
###############################################################################

###############################################################################
# admin/auth.inc.php

$LANG20 = array(
    1 => 'Autentisering kreves',
    2 => 'Avvist! Ugyldig brukernavn eller passord',
    3 => 'Ugyldig passord for bruker',
    4 => 'Brukernavn:',
    5 => 'Passord:',
    6 => 'All tilgang til administrative deler av nettstedet blir logget og gransket.<br>Denne siden er kun autorisert personell.',
    7 => 'logg inn'
);

###############################################################################
# admin/block.php

$LANG21 = array(
    1 => 'Utilstrekkelige Admin Rettigheter',
    2 => 'Du har ikke n�dvendige rettigheter for � redigere denne blokken.',
    3 => 'Blokk Editor',
    4 => 'There was a problem reading this feed (see error.log for details).',
    5 => 'Blokk Overskrift',
    6 => 'Emne',
    7 => 'Alle',
    8 => 'Blokk Sikkerhetsniv�',
    9 => 'Blokk Rekkef�lge',
    10 => 'Blokk Type',
    11 => 'Portal Blokk',
    12 => 'Normal Blokk',
    13 => 'Portal Blokk Opsjoner',
    14 => 'RDF URL',
    15 => 'Siste RDF Oppdatering',
    16 => 'Normal Blokk Opsjoner',
    17 => 'Blokk Innhold',
    18 => 'Vennligst fyll ut feltene Overskrift, Sikkerhetsniv� og innhold ',
    19 => 'Blokk Bestyrer',
    20 => 'Blokk Overskrift',
    21 => 'Blokk Sikkerhetsniv�',
    22 => 'Blokk Type',
    23 => 'Blokk Rekkef�lge',
    24 => 'Blokk Emne',
    25 => 'For � endre eller slette en blokk, klikk p� blokkoverskriften under.  For � lage en ny blokk klikk p� "Ny Blokk" ovenfor.',
    26 => 'Layout Blokk',
    27 => 'PHP Blokk',
    28 => 'PHP Blokk Opsjoner',
    29 => 'Blokk Funksjon',
    30 => 'Hvis du vil bruke PHP kode i en blokk, skriv inn navnet p� funksjonen over.  Navnet p� funksjonen m� starte med prefikset "phpblock_" (feks. phpblock_getweather).  Dersom navnet ikke har dette prefikset, s� vil funksjonen IKKE bli kalt.  Vi gj�r dette for � forhindre hackere fra � bruke vilk�rlige funksjoner (som kan skade systemet), dersom de skulle klare � gj�re innbrudd i Geeklog installasjonen din. forsikre deg om at det ikke er tomme paranteser "()" etter navnet p� funksjonen. Til slutt anbefaler vi at du legger all kode til PHP Blokker i /path/to/geeklog/system/lib-custom.php.  Da unng�r du at koden blir overskrevet ved oppgraderinger av Geeklog.',
    31 => 'Feil i PHP Blokk. Funksjonen %s eksisterer ikke.',
    32 => 'Feil Felt(er) mangler',
    33 => 'Du m� skrive inn URLen til .rdf filen for portal blokker',
    34 => 'Du m� skrive inn overskrift og funksjon for PHP blokker',
    35 => 'Du m� skrive inn overskrift og innhold for normale blokker',
    36 => 'Du m� skrive inn the content for layout blocks',
    37 => 'Ulovlig funksjonsnavn p� PHP blokk',
    38 => 'Funksjoner for PHP Blokker m� ha prefikset \'phpblock_\' (feks. phpblock_getweather). Prefikset \'phpblock_\' kreves av sikkerhetsmesige �rsaker for � forhindre kj�ring av vilk�rlig kode..',
    39 => 'Side',
    40 => 'Venstre',
    41 => 'H�yre',
    42 => 'du m� skrive inn rekkef�lge og sikkerhetsniv� for Geeklog standard blokker',
    43 => 'Kun hjemmeside',
    44 => 'Adgang Nektet',
    45 => "Du fors�ker � f� tilgang til en blokk som du ikke har rettigheter til. Fors�ket er logget. Vennligst <a href=\"{$_CONF['site_admin_url']}/block.php\">g� tilbake til administrasjonsiden for blokker</a>.",
    46 => 'Ny Blokk',
    47 => 'Admin Hovedside',
    48 => 'Blokk Navn',
    49 => ' (uten mellomrom og m� v�re unikt)',
    50 => 'URL til hjelpefil',
    51 => 'ta med http://',
    52 => 'hvis du lar denne v�re tom, s� vises ikke hjelpeikonet for denne blokken',
    53 => 'Aktivisert',
    54 => 'lagre',
    55 => 'avbryt',
    56 => 'slett',
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
    1 => 'Forrige artikler',
    2 => 'Neste artikler',
    3 => 'Modus',
    4 => 'Posting Modus',
    5 => 'Artikkel Editor',
    6 => 'Det er ingen artikler i systemet',
    7 => 'Forfatter',
    8 => 'lagre',
    9 => 'forh�ndsvis',
    10 => 'avbryt',
    11 => 'slett',
    12 => 'ID',
    13 => 'Tittel',
    14 => 'Emne',
    15 => 'Dato',
    16 => 'Introduksjonstekst',
    17 => 'Hovedtekst',
    18 => 'Treff',
    19 => 'Kommentarer',
    20 => 'Ping',
    21 => 'Send Ping',
    22 => 'Artikkel Liste',
    23 => 'For � redigere eller slette en artikkel, klikk p� artikkelnummeret under. For � se en artikkel, klikk p� tittelen til artikkelen du �nsker � se. For � lage en ny artikkel klikk p� Ny Artikkel over.',
    24 => 'The ID you chose for this story is already in use. Please use another ID.',
    25 => 'Error when saving story',
    26 => 'Artikkel forh�ndsvisning',
    27 => 'If you use [unscaledX] instead of [imageX], the image will be inserted at its original dimensions.',
    28 => '<p><b>PREVIEWING</b>: Previewing a story with images attached is best done by saving the article as a draft INSTEAD OF hitting the preview button.  Use the preview button only when images are not attached.',
    29 => 'Trackbacks',
    30 => 'Feil ved opplasting av fil',
    31 => 'Vennligst fyll ut feltene Forfatter, Tittel og introduksjonstekst',
    32 => 'Hovedoppslag',
    33 => 'Det kan kun v�re ett hovedoppslag',
    34 => 'Kladd',
    35 => 'Ja',
    36 => 'Nei',
    37 => 'Mer av',
    38 => 'Mer fra',
    39 => 'Emails',
    40 => 'Adgang Nektet',
    41 => "Du fors�ker � redigere en artikkel du ikke har adgang til. Fors�ket er logget. Du kan lese artikkelen under. Vennligst <a href=\"{$_CONF['site_admin_url']}/story.php\">g� tilbake til artikkeladministrasjon</a> n�r du er ferdig.",
    42 => "Du fors�ker � se en artikkel du ikke har adgang til. Fors�ket er logget. Vennligst <a href=\"{$_CONF['site_admin_url']}/story.php\">g� tilbake til artikkeladministrasjon</a>.",
    43 => 'Ny Artikkel',
    44 => 'Admin Hovedside',
    45 => 'Adgang',
    46 => '<b>MERK:</b> hvis du endrer datoen til � v�re i fremtiden, s� vil artikkelen ikke bli publisert f�r datoen intreffer. Det betyr ogs� at artikkelen ikke blir inkludert i RDF oversikten din, og at den blir ignorert av s�ke- og statistikksidene.',
    47 => 'Bilder',
    48 => 'image',
    49 => 'right',
    50 => 'left',
    51 => 'For � bruke et av bildene du har lagt ved denne artikkelen m� du sette inn en bestemt kode i artikkelen.  Koden er  [imageX], [imageX_right] (h�yre) eller [imageX_left] (venstre) og X nummeret p� bildet du har lagt ved. MERK: Du <b>m�</b> bruke alle bildene du legger ved. Hvis ikke f�r du ikke lagret artikkelen.<BR><P><B>Forh�ndsvisning</B>: Forh�ndsvisning av e artikkel med bilder gj�res best ved � lagre artikkelen som en kladd, IKKE ved bruk av knappen for forh�ndsvisning. Bruk knappen for forh�ndsvisning kun p� artikler uten bilder.',
    52 => 'Slett',
    53 => 'ble ikke brukt. Du m� bruke dette bildet i introduksjonen eller i hovedteksten f�r du kan lagre endringer.',
    54 => 'Vedlagte bilder ikke brukt',
    55 => 'f�lgende feil oppsto under fors�k p� � lagre artikkelen din. Vennligst rett opp disse feilene f�r du lagrer',
    56 => 'Vis Emneikon',
    57 => 'Vis bilde i original st�rrelse',
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
    1 => 'Emne Editor',
    2 => 'Emne ID',
    3 => 'Emne Navn',
    4 => 'Emne Bilde',
    5 => '(ikke bruk mellomrom)',
    6 => 'Sletting av et emne vil ogs� slette alle artikler og blokker som h�rer til emnet',
    7 => 'Vennligst fyll ut feltene Emne ID og Emne Navn',
    8 => 'Emne Administrasjon',
    9 => 'For � redigere eller slette et emne, klikk p� emnet. For � lage et nytt emne klikk p� knappen Nytt Emne til venstre. Adgangsniv�et ditt for hvert emne st�r i parantes',
    10 => 'Sorteringsrekkef�lge',
    11 => 'Artikler/Side',
    12 => 'Adgang Nektet',
    13 => "Du fors�ker � n� et emne du ikke har rettigheter til. Fors�ket er logget. Vennligst <a href=\"{$_CONF['site_admin_url']}/topic.php\">g� tilbake til emneadministrasjon</a>.",
    14 => 'Sorteringsm�te',
    15 => 'alfabetisk',
    16 => 'standard er',
    17 => 'Nytt Emne',
    18 => 'Admin Hovedside',
    19 => 'lagre',
    20 => 'avbryt',
    21 => 'slett',
    22 => 'Standard',
    23 => 'Gj�r dette til standard emne for nye artikler',
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
    1 => 'Bruker Editor',
    2 => 'Bruker ID',
    3 => 'Brukernavn',
    4 => 'Fullt Navn',
    5 => 'Passord',
    6 => 'Sikkerhetsniv�',
    7 => 'Email Adresse',
    8 => 'Hjemmeside',
    9 => '(ikke bruk mellomrom)',
    10 => 'Vennligst fyll ut feltene Brukernavn, Fullt Navn, Sikkerhetsniv� og Email Adresse',
    11 => 'Bruker Administrasjon',
    12 => 'For � endre eller slette en bruker, klikk p� brukeren under. For � lage en ny  bruker klikk p� Ny Bruker til venstre. Du kan foreta enkle s�k ved � skrive inn deler av brukernavn, email adresse eller fullt navn (feks.*sen* or *.no) i s�kefeltet under.',
    13 => 'SecLev',
    14 => 'Reg. Dato',
    15 => 'Ny Bruker',
    16 => 'Admin Hovedside',
    17 => 'EndrePassord',
    18 => 'avbryt',
    19 => 'slett',
    20 => 'lagre',
    21 => 'Brukernavnet du fors�ke � lagre finnes allerede.',
    22 => 'Feil',
    23 => 'Masseimport',
    24 => 'Masseimportering av brukere',
    25 => 'Du kan importere en liste med brukere inn i Geeklog. Importfilen m� v�re en tekstfil med felter adskilt med tab-tegn. Feltene m� v�re i f�lgende rekkef�lge: fullt navn, brukernavn, email adresse. Det m� v�re kun en bruker per linje. Hver bruker du importerer vil f� tilsendt en email med et tilfeldig passord. Dersom du ikke f�lger disse reglene vil det oppst� problemer som kan kreve manuelt arbeid, s� det l�nner seg � dobbeltsjekke importfilen!',
    26 => 'S�k',
    27 => 'Max Resultater',
    28 => 'Kryss av her for � slette dette bildet',
    29 => 'Sti',
    30 => 'Importer',
    31 => 'Nye Brukere',
    32 => 'Prosessering ferdig. Importerte %d og %d feil oppsto',
    33 => 'start',
    34 => 'Feil: Du m� angi en importfil.',
    35 => 'Sist innlogget',
    36 => '(aldri)',
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
    1 => 'Godkjenn',
    2 => 'Slett',
    3 => 'Rediger',
    4 => 'Profil',
    10 => 'Tittel',
    11 => 'Start Dato',
    12 => 'URL',
    13 => 'Kategori',
    14 => 'Dato',
    15 => 'Emne',
    16 => 'Brukernavn',
    17 => 'Fullt navn',
    18 => 'Email',
    34 => 'Kommando og Kontroll',
    35 => 'Artikkel innlegg',
    36 => 'Lenke innlegg',
    37 => 'Begivenhet innlegg',
    38 => 'Send inn',
    39 => 'Det er ingen innlegg � vurdere n�',
    40 => 'Bruker innlegg'
);

###############################################################################
# admin/mail.php

$LANG31 = array(
    1 => "{$_CONF['site_name']} Mail verkt�y",
    2 => 'Fra',
    3 => 'Svar-til',
    4 => 'Emne',
    5 => 'Innhold',
    6 => 'Send til:',
    7 => 'Alle brukere',
    8 => 'Admin',
    9 => 'Opsjoner',
    10 => 'HTML',
    11 => 'Viktig melding!',
    12 => 'Send',
    13 => 'Reset',
    14 => 'Ignorer brukerinstillinger',
    15 => 'Feil ved sending til: ',
    16 => 'Meldinger ble sendt til: ',
    17 => "<a href={$_CONF['site_admin_url']}/mail.php>Send en melding til</a>",
    18 => 'Til',
    19 => 'MERK: hvis du vil sende en melding til alle medlemmene, velg gruppen innloggede brukere (LOGGEDIN) fra nedtrekksmenyen.',
    20 => "<successcount> meldinger ble sendt og <failcount> meldinger feilet.  Detaljene for meldingene som feilet er nedenfor hvis du trenger dem. i motsatt fall kan du  <a href=\"{$_CONF['site_admin_url']}/mail.php\">sende en melding til</a> eller <a href=\"{$_CONF['site_admin_url']}/moderation.php\">g� tilbake til administrasjonssiden</a>.",
    21 => 'Feil',
    22 => 'Vellykkede',
    23 => 'Ingen feil',
    24 => 'Ingen vellykkede',
    25 => '-- Velg Gruppe --',
    26 => 'Vennligst fyll ut alle feltene i skjemaet og  velg en gruppe brukere fra nedtrekksmenyen.'
);

###############################################################################
# admin/plugins.php

$LANG32 = array(
    1 => 'Installasjon av plugins medf�rer en mulighet for skade p�Geeklog installasjonen din og, muligens ogs� systemet ditt. Det er viktig at du kun installerer plugins hentet fra <a href="http://www.geeklog.net" target="_blank">Geeklogs nettsted</a>. Vi tester alle plugins vi mottar grundig p� mange forskjellige operativsystemer. Viktig: installasjon av en plugin krever utf�relse av noen f� systemkommandoer som kan medf�re sikkerhetsproblemer s�rlig hvis du bruker plugins fra andre nettsteder. NB! Denne advarselen medf�rer ingen garanti for at installasjonen av en plugin vil g� smertefritt, ei heller tar vi ansvar for eventuell skade som f�lge av en installasjon. Med andre ord, installer p� egen risiko. For den forsiktige s� f�lger det instruksjoner for manuell installasjon med hver plugin.',
    2 => 'Advarsel for Plug-in Installasjon',
    3 => 'Plug-in Installasjonsskjema',
    4 => 'Plug-in Fil',
    5 => 'Plug-in Liste',
    6 => 'Advarsel: Plug-in er allerede installert!',
    7 => 'Den plug-in du fors�ker � installere finnes allerede. Vennligst slett plug-in f�r du reinstallerer den',
    8 => 'Plugin kompatibilitetssjekk feilet',
    9 => 'Denne plug-in krever en nyere versjon av Geeklog. Du m� enten oppgradere <a href="http://www.geeklog.net">Geeklog</a> eller bruke en nyere versjon av denne plug-in.',
    10 => '<br><b>Ingen plug-in er installert.</b><br><br>',
    11 => 'For � redigere eller slette en plug-in, klikk p� tallet til plug-in under. For � l�re mer om en plug-in, klikk p� plug-in navnet og du g�r til websiden til den plug-in. For � installere eller oppgradere en plug-in vennligst les dokumentasjonen for den aktuelle plug-in.',
    12 => 'plugineditor() kalt uten et plugin navn',
    13 => 'Plugin Editor',
    14 => 'Ny Plug-in',
    15 => 'Admin Hovedside',
    16 => 'Plug-in Navn',
    17 => 'Plug-in Versjon',
    18 => 'Geeklog Versjon',
    19 => 'Aktivisert',
    20 => 'Ja',
    21 => 'Nei',
    22 => 'Installer',
    23 => 'Lagre',
    24 => 'Avbryt',
    25 => 'Slett',
    26 => 'Plug-in Navn',
    27 => 'Plug-in Hjemmeside',
    28 => 'Plug-in Versjon',
    29 => 'Geeklog Versjon',
    30 => 'Slett Plug-in?',
    31 => 'Er du sikker p� at du vil slette denne plug-in? Alle data og datastrukturer som brukes av denne plug-in vil ogs� bli slettet. hvis du er sikker, klikk slett igjen nedenfor.',
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
    1 => "Passordet ditt er sendt p� mail og du vil motta det hvert �yeblikk. Vennligst f�lg instruksjonene i meldingen. Takk for at du bruker {$_CONF['site_name']}",
    2 => "Takk for at du sendte inn artikkelen din til {$_CONF['site_name']}. Den er oversendt til v�r stab for godkjenning. Hvis artikkelen din blir godkjent s�p vil den bli publisert p� nettstedet v�rt slik at andre kan lese den.",
    3 => "Takk for at du sendte inn en lenke til {$_CONF['site_name']}. Den er oversendt til v�r stab for godkjenning. Hvis lenken din blir godkjent vil den vises blant v�re <a href={$_CONF['site_url']}/links.php>lenker</a>.",
    4 => "Takk for at du sendte inn en begivenhet til {$_CONF['site_name']}.  Den er oversendt til v�r stab for godkjenning. Hvis den blir godkjent vil begivenheten din vises i <a href={$_CONF['site_url']}/calendar.php>kalenderen</a>.",
    5 => 'Kontoinformasjonen din ble lagret.',
    6 => 'Dine visningsvalg ble lagret.',
    7 => 'Dine kommentarvalg ble lagret.',
    8 => 'Du er logget ut.',
    9 => 'Din artikkel ble lagret.',
    10 => 'Artikkelen ble slettet.',
    11 => 'Blokken din ble lagret.',
    12 => 'Blokken ble slettet.',
    13 => 'Ditt emne ble lagret.',
    14 => 'Emnet og alle tilh�rende artikler og blokker ble slettet.',
    15 => 'Din lenke ble lagret.',
    16 => 'Lenken ble slettet.',
    17 => 'Din begivenhet ble lagret.',
    18 => 'Begivenheten ble slettet.',
    19 => 'Avstemningen din ble lagret.',
    20 => 'Avstemningen ble slettet.',
    21 => 'Den nye brukeren ble lagret.',
    22 => 'Brukeren ble slettet',
    23 => 'Feil under fors�k p� � legge en begivenhet til kalenderen din. Begivenheten hadde ingen ID.',
    24 => 'Begivenheten ble lagret til kalenderen din',
    25 => 'din personlige kalender kan ikke �pnes f�r du logger inn',
    26 => 'Begivenheten ble fjernet fra din personlige kalender',
    27 => 'Meldingen ble sendt.',
    28 => 'Plug-in ble lagret',
    29 => 'Beklager, personlige kalendere kan ikke benyttes p� dette nettstedet',
    30 => 'Adgang Nektet',
    31 => 'Beklager, du har ikke adgang til artikkel administrasjon. Vennligst legg merke til at alle fors�k p� uautorisert tilgang blir logget',
    32 => 'Beklager, du har ikke adgang til emne administrasjon. Vennligst legg merke til at alle fors�k p� uautorisert tilgang blir logget',
    33 => 'Beklager, du har ikke adgang til blokk administrasjon. Vennligst legg merke til at alle fors�k p� uautorisert tilgang blir logget',
    34 => 'Beklager, du har ikke adgang til lenke administrasjon. Vennligst legg merke til at alle fors�k p� uautorisert tilgang blir logget',
    35 => 'Beklager, du har ikke adgang til begivenhet administrasjon. Vennligst legg merke til at alle fors�k p� uautorisert tilgang blir logget',
    36 => 'Beklager, du har ikke adgang til avstemning administrasjon. Vennligst legg merke til at alle fors�k p� uautorisert tilgang blir logget',
    37 => 'Beklager, du har ikke adgang til bruker administrasjon. Vennligst legg merke til at alle fors�k p� uautorisert tilgang blir logget',
    38 => 'Beklager, du har ikke adgang til plugin administrasjon. Vennligst legg merke til at alle fors�k p� uautorisert tilgang blir logget',
    39 => 'Beklager, du har ikke adgang til mail administrasjon. Vennligst legg merke til at alle fors�k p� uautorisert tilgang blir logget',
    40 => 'Systemmelding',
    41 => 'Beklager, du har ikke tilgang til siden for � administrere ordskifte. Vennligst legg merke til at alle fors�k p� uautorisert tilgang blir logget',
    42 => 'Ordet ditt ble lagret.',
    43 => 'ordet ble slettet.',
    44 => 'Plug-in installert!',
    45 => 'Plug-in slettet.',
    46 => 'Beklager, du har ikke tilgang til sikkerhetskopiering av databasen. Vennligst legg merke til at alle fors�k p� uautorisert tilgang blir logget',
    47 => 'Denne funksjonen virker kun under *nix. Hvis operativsystemet du kj�rer p� er *nix s� er din cache t�mt. Hvis du kj�rer p� windows m� du s�ke etter filer som heter adodb_*.php og slette dem manuelt.',
    48 => "Takk for din s�knad om medlemsskap hos {$_CONF['site_name']}. Teamet v�rt vil vurdere s�knaden din. Hvis s�knaden din blir godkjent, blir passordet ditt sendt til mailadressen du nettopp oppga.",
    49 => 'Gruppen ble lagret.',
    50 => 'Gruppen ble slettet.',
    51 => 'Dette brukernavnet er allerede i bruk. Vennligst velg et annet brukernavn.',
    52 => 'emailadressen du har gitt ser ut til � v�re en ugyldig email adresse.',
    53 => 'Ditt nye passord er akseptert. Vennligst logg inn med det nye passordet under n�.',
    54 => 'Din foresp�rsel om et nytt passord er for gammel. Vennligst pr�v p� nytt under.',
    55 => 'En enail er sendt til deg og burde dukke opp i innboksen din hvert �yeblikk. vennligst f�lg instruksjonene i meldingen for � endre passordet p� kontoen din.',
    56 => 'Den angitte emailadressen er allerede i bruk for en annen konto.',
    57 => 'kontoen din er slettet.',
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
    'access' => 'Adgang',
    'ownerroot' => 'Eier/Root',
    'group' => 'Gruppe',
    'readonly' => 'Kun-lese',
    'accessrights' => 'Adgangsrettigheter',
    'owner' => 'eier',
    'grantgrouplabel' => 'Gi ovenst�ende gruppe redigeringsrettigheter',
    'permmsg' => 'MERK: medlemmer er alle innloggede medlemmer av nettstedet og anonyme er alle brukere p� nettstedet som ikke er logget inn.',
    'securitygroups' => 'Sikkerhetsgrupper',
    'editrootmsg' => "Selv om du er en Brukeradministrator, s� kan du ikke redigere en root bruker uten at du selv er en root bruker. Du kan redigere alle andre brukere unntatt root brukere. Vennligst legg merke til at alle fors�k p� ulovlig redigering av root brukere blir logget. Vennligst g� tilbake til <a href=\"{$_CONF['site_admin_url']}/user.php\">Bruker administrasjon</a>.",
    'securitygroupsmsg' => 'Kryss av for gruppene du vil at brukeren skal tilh�re.',
    'groupeditor' => 'Gruppe Editor',
    'description' => 'Beskrivelse',
    'name' => 'Navn',
    'rights' => 'Rettigheter',
    'missingfields' => 'Manglende felter',
    'missingfieldsmsg' => 'Du m� angi et navn og en beskrivelse for en gruppe',
    'groupmanager' => 'Gruppe Administrasjon',
    'newgroupmsg' => 'For � endre eller slette en gruppe, klikk p� gruppen under. For � lage en ny gruppe klikk p� ny gruppe ovenfor. Legg merke til at core grupper ikke kan slettes fordi de brukes av systemet.',
    'groupname' => 'Gruppenavn',
    'coregroup' => 'Core gruppe',
    'yes' => 'Ja',
    'no' => 'Nei',
    'corerightsdescr' => "Dette er en core (innebygd) {$_CONF['site_name']} gruppe. Rettighetene for denne gruppen kan ikke redigeres. Nedenfor er en liste over de rettigheter denne gruppen har.",
    'groupmsg' => 'Sikkerhetsgrupper p� dette nettstedet er hierarkiske.  Hvis du legger denne gruppen til en av gruppene under gir du denne gruppen samme rettigheter som de gruppene har. Det anbefales at du bruker gruppene under for � gi rettigheter til en gruppe s� langt det er mulig. dersom denne gruppen trenger mer spesifikke rettigheter s� kan du velge disse fra \'Rettigheter\' nedenfor. For � legge denne gruppen til en av de andre gruppene under, kryss av for de gruppene du �nsker.',
    'coregroupmsg' => "Dette er en core {$_CONF['site_name']} gruppe. Gruppene som denne gruppen h�rer til kan ikke redigeres. Under er en liste over grupper som denne gruppen h�rer til.",
    'rightsdescr' => 'En rettighet kan gis direkte til gruppen, ELLER til en annen gruppe som denne gruppen er medlem av. Rettighetene under som ikke er avkrysset er de som denne gruppen har f�tt som medlem av en annen gruppe. Rettighetene som er avkryyset er rettigheter som er gitt direkte til denne gruppen.',
    'lock' => 'L�s',
    'members' => 'Medlemmer',
    'anonymous' => 'Anonym',
    'permissions' => 'Rettigheter',
    'permissionskey' => 'R = lese, E = rediger, redigeringsrettighet medf�rer leserettighet',
    'edit' => 'Rediger',
    'none' => 'Ingen',
    'accessdenied' => 'Adgang Nektet',
    'storydenialmsg' => "Du har ikke adgang til � se denne artikkelen. Dette kan skyldes at du ikke er medlem av {$_CONF['site_name']}. Vennligst <a href=users.php?mode=new> bli medlem</a> av {$_CONF['site_name']} for � oppn� full tilgang!",
    'nogroupsforcoregroup' => 'Denne gruppen h�rer ikke til noen av de andre gruppene',
    'grouphasnorights' => 'Denne gruppen har ikke tilgang til administrative funksjoner p� dette nettstedet',
    'newgroup' => 'Ny Gruppe',
    'adminhome' => 'Admin Hovedside',
    'save' => 'lagre',
    'cancel' => 'avbryt',
    'delete' => 'slett',
    'canteditroot' => 'Du har fors�kt � redigere Root gruppen uten selv � v�re medlem av Root gruppen, tilgangen er derfor nektet. Vennligst kontakt administratoren til nettstedet hvis du mener dette er en feil',
    'listusers' => 'Liste Brukere',
    'listthem' => 'list',
    'usersingroup' => 'Brukere i gruppe %s',
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
    'last_ten_backups' => 'Siste 10 Backups',
    'do_backup' => 'Ta Backup',
    'backup_successful' => 'Backup av databasen var vellykket.',
    'db_explanation' => 'For � ta en backup av ditt Geeklog system, klikk knappen nedenfor',
    'not_found' => "Feil sti eller mysqldump er ikke kj�rbar.<br>Sjekk <strong>\$_DB_mysqldump_path</strong> definisjonen i config.php.<br>Variabelen er n� satt til: <var>{$_DB_mysqldump_path}</var>",
    'zero_size' => 'Backup feilet: st�rrelsen p� backupfilen var 0 bytes',
    'path_not_found' => "{$_CONF['backup_path']} finnes ikke eller er ikke en katalog",
    'no_access' => "FEIL: Katalogen {$_CONF['backup_path']} er ikke tilgjengelig.",
    'backup_file' => 'Backup fil',
    'size' => 'St�rrelse',
    'bytes' => 'Bytes',
    'total_number' => 'Totalt antall backups: %d'
);

###############################################################################

$LANG_BUTTONS = array(
    1 => 'Hjem',
    2 => 'Kontakt',
    3 => 'Bli Publisert',
    4 => 'Lenker',
    5 => 'Avstemninger',
    6 => 'Kalender',
    7 => 'Nettsted statistikk',
    8 => 'Personaliser',
    9 => 'S�k',
    10 => 'avansert s�k',
    11 => 'Directory'
);

###############################################################################
# 404.php

$LANG_404 = array(
    1 => '404 Error',
    2 => 'J�ss, jeg har sett overalt men kan ikke finne <b>%s</b>.',
    3 => "<p>vi beklager, men filen du har bedt om finnes ikke. Sjekk gjerne <a href=\"{$_CONF['site_url']}\">hovedsiden</a> eller <a href=\"{$_CONF['site_url']}/search.php\">s�kesiden</a> for � se om du finner det du har mistet."
);

###############################################################################
# login form

$LANG_LOGIN = array(
    1 => 'Innlogging p�krevd',
    2 => 'Beklager, du m� v�re innlogget for � f� adgang til dette omr�det.',
    3 => 'Logg inn',
    4 => 'Ny Bruker'
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
    1 => 'Januar',
    2 => 'Februar',
    3 => 'Mars',
    4 => 'April',
    5 => 'Mai',
    6 => 'Juni',
    7 => 'Juli',
    8 => 'August',
    9 => 'September',
    10 => 'Oktober',
    11 => 'November',
    12 => 'Desember'
);

###############################################################################
# Weekdays

$LANG_WEEK = array(
    1 => 'S�ndag',
    2 => 'Mandag',
    3 => 'Tirsdag',
    4 => 'Onsdag',
    5 => 'Torsdag',
    6 => 'Fredag',
    7 => 'L�rdag'
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