<?php

###############################################################################
# slovenian.php-saved as for version 1.4.1
# This is the english language page for the Geeklog Static Page Plug-in!
# language file for geeklog version 1.4.1 beta by mb
# gape@gape.org ; za pripombe, predloge ipd ... pi�i na email
#
# Copyright (C) 2001 Tony Bibbs
# tony@tonybibbs.com
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


$LANG_STATIC= array(
    'newpage' => 'Nova stran',
    'adminhome' => 'Upravnikova stran',
    'staticpages' => 'Stati�ne strani',
    'staticpageeditor' => 'Urejevalnik stati�nih strani',
    'writtenby' => 'Napisal:',
    'date' => 'Nazadnje posodobljeno',
    'title' => 'Naslov',
    'content' => 'Vsebina',
    'hits' => 'Zadetkov',
    'staticpagelist' => 'Seznam stati�nih strani',
    'url' => 'URL',
    'edit' => 'Uredi',
    'lastupdated' => 'Nazadnje posodobljeno',
    'pageformat' => 'Oblika strani',
    'leftrightblocks' => 'Levi & desni bloki',
    'blankpage' => 'Prazna stran',
    'noblocks' => 'Ni blokov',
    'leftblocks' => 'Levi blok',
    'addtomenu' => 'Dodaj v meni',
    'label' => 'Nalepka',
    'nopages' => 'V sistemu �e ni stati�nih strani',
    'save' => 'shrani',
    'preview' => 'predogled',
    'delete' => 'izbri�i',
    'cancel' => 'prekli�i',
    'access_denied' => 'Dostop zavrnjen',
    'access_denied_msg' => 'Nedovoljeno posku�a� dostopiti do ene od upravni�kih stati�nih strani.  Vsi poskusi nedovoljenega dostopa na to stran se bele�ijo.',
    'all_html_allowed' => 'Dovoljen je ves HTML',
    'results' => 'Rezultati stati�nih strani',
    'author' => 'Avtor',
    'no_title_or_content' => 'Izpolniti mora� vsaj polji <b>Naslov</b> in <b>Vsebina</b>.',
    'no_such_page_anon' => 'Prosim, prijavi se.',
    'no_page_access_msg' => "To je morda zato, ker nisi prijavljen/a ali pa nisi �lan spletne strani {$_CONF['site_name']}. Za popoln �lanski dostop <a href=\"{$_CONF['site_url']}/users.php?mode=new\"> postani �lan</a> spletne strani {$_CONF['site_name']} .",
    'php_msg' => 'PHP: ',
    'php_warn' => 'Opozorilo: Koda PHP na tvoji strani bo procesirana, �e omogo�i� to mo�nost. Uporabljaj previdno!',
    'exit_msg' => 'Vrsta izhoda: ',
    'exit_info' => 'Omogo�i za Zahtevano prijavno sporo�ilo. Za  navadno varnostno preverjanje pusti okence prazno.',
    'deny_msg' => 'Dostop do te strani je zavrnjen. Morda je bila stran premaknjena/odstranjena ali pa nima� zadostnih dovoljenj.',
    'stats_headline' => 'Najbolj�ih 10 stati�nih strani',
    'stats_page_title' => 'Naslov strani',
    'stats_hits' => 'Zadetki',
    'stats_no_hits' => 'Izgleda, da na tem mestu ni stati�nih strani ali pa �e nikoli ni nih�e nobene pogledal.',
    'id' => 'ID',
    'duplicate_id' => 'Za to stati�no stran izbrani ID je �e v rabi. Izberi prosim drug ID.',
    'instructions' => 'Za spreminjanje ali izbris stati�ne strani klikni na njeno ikono za urejanje spodaj. Za ogled stati�ne strani klikni na naslov tiste, ki jo ho�e� pogledati. Za ustvarjenje nove stati�ne strani klikni na "Ustvari novo" zgoraj. Za ustvarjenje kopije �e obstoje�e stati�ne strani klikni na ikono za kopiranje.',
    'centerblock' => 'Osrednji blok: ',
    'centerblock_msg' => '�e potrdi�, bo ta stati�na stran prikazana kot osrednji blok na glavni strani.',
    'topic' => 'Rubrika: ',
    'position' => 'Polo�aj: ',
    'all_topics' => 'Vse',
    'no_topic' => 'Samo doma�a stran',
    'position_top' => 'Vrh strani',
    'position_feat' => 'Za udarnim �lankom',
    'position_bottom' => 'Dno strani',
    'position_entire' => 'Cela stran',
    'head_centerblock' => 'Osrednji blok',
    'centerblock_no' => 'Ne',
    'centerblock_top' => 'Zgoraj',
    'centerblock_feat' => 'Udarni �lanek',
    'centerblock_bottom' => 'Spodaj',
    'centerblock_entire' => 'Celotna stran',
    'inblock_msg' => 'V bloku: ',
    'inblock_info' => '�e potrdi�, bo ta stati�na stran prikazana v okvirju (bloku).',
    'title_edit' => 'Uredi stran',
    'title_copy' => 'Naredi kopijo te strani',
    'title_display' => 'Prika�i stran',
    'select_php_none' => 'ne izvedi PHP',
    'select_php_return' => 'izvedi PHP (return)',
    'select_php_free' => 'izvedi PHP',
    'php_not_activated' => 'Uporaba PHP-ja na stati�nih straneh ni vklju�ena. Za podrobnosti glej <a href="' . $_CONF['site_url'] . '/docs/staticpages.html#php">dokumentacijo</a>.',
    'printable_format' => 'Oblika za natis',
    'edit' => 'Uredi',
    'copy' => 'Kopiraj',
    'limit_results' => 'Omeji rezultate',
    'search' => 'I��i',
    'submit' => 'Oddaj'
);

// Messages for the plugin upgrade
$PLG_staticpages_MESSAGE3002 = $LANG32[9];

?>
