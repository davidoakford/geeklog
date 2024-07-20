<?php

###############################################################################
# slovenian.php
# language file for geeklog version 1.4.1 beta by mb
# gape@gape.org ; za pripombe, predloge ipd ... piši na email
#
# This is the slovenian language page for GeekLog!
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

$LANG_CHARSET = 'UTF-8';

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
    1 => 'Piše:',
    2 => 'Beri dalje',
    3 => 'komentarjev.',
    4 => 'Uredi',
    5 => 'Anketa',
    6 => 'Rezultati',
    7 => 'Rezultati ankete',
    8 => 'glasov<br>',
    9 => 'Administracijske funkcije:',
    10 => 'Čakajoča vsebina',
    11 => 'Članki',
    12 => 'Bloki',
    13 => 'Rubrike',
    14 => 'Povezave',
    15 => 'Dogodki',
    16 => 'Ankete',
    17 => 'Uporabniki',
    18 => 'SQL poizvedovanje',
    19 => 'Izhod iz sistema',
    20 => 'Podatki o uporabniku:',
    21 => 'Uporabniško ime',
    22 => 'Uporabniški ID',
    23 => 'Varnostni nivo',
    24 => 'Anonimni uporabnik',
    25 => 'Komentiraj',
    26 => 'Za komentarje so odgovorni njihovi avtorji. Avtorji spletne strani na komentarje obiskovalcev nimamo nobenega vpliva.',
    27 => 'Zadnjikrat komentirano',
    28 => 'Izbriši',
    29 => 'Ni komentarjev.',
    30 => 'Starejši članki',
    31 => 'Dovoljeni HTML ukazi:',
    32 => 'Napaka, neveljavno uporabniško ime',
    33 => 'Napaka, ne morem shranjevati v log datoteko',
    34 => 'Napaka',
    35 => 'Izhod iz sistema',
    36 => 'dne',
    37 => 'Ni člankov',
    38 => 'Združevanje vsebine (Syndication)',
    39 => 'Osveži',
    40 => 'Izključene so <tt>register_globals = Off</tt> v <tt>php.ini</tt>. Geeklog zahteva <tt>register_globals</tt> <strong>vključene</strong>. Preden nadaljuješ, jih prosim <strong>vključi</strong> in ponovno zaženi spletni strežnik.',
    41 => 'Gostje',
    42 => 'Prispeval/a:',
    43 => 'Odgovori na to',
    44 => 'Starš',
    45 => 'MySQL številka napake',
    46 => 'MySQL sporočilo o napaki',
    47 => 'Prijava uporabnika',
    48 => 'Podatki o uporabniškem računu',
    49 => 'Nastavitve',
    50 => 'Napaka v SQL ukazu',
    51 => 'Pomoč',
    52 => 'Novo',
    53 => 'Skrbnikova stran',
    54 => 'Ne morem odpreti datoteke',
    55 => 'Napaka na',
    56 => 'Glasuj',
    57 => 'Geslo',
    58 => 'Prijava',
    59 => "Nisi registriran uporabnik?  <a href=\"{$_CONF['site_url']}/users.php?mode=new\">Registrirajte se</a>.",
    60 => 'Dodaj komentar',
    61 => 'Nov uporabnik',
    62 => 'besed',
    63 => 'Nastavitve komentarjev',
    64 => 'Pošlji članek prijatelju po e-pošti',
    65 => 'Za tisk prijazna stran',
    66 => 'Osebni koledar',
    67 => 'Dobrodošli na ',
    68 => 'Domov',
    69 => 'Kontakt',
    70 => 'Išči',
    71 => 'Dodaj članek',
    72 => 'Zanimive povezave',
    73 => 'Pretekle ankete',
    74 => 'Koledar dogodkov',
    75 => 'Napredno iskanje',
    76 => 'Statistika spletne strani',
    77 => 'Priključeni moduli',
    78 => 'Dogodki',
    79 => 'Kaj je novega',
    80 => 'člankov v zadnjih',
    81 => 'članek v zadnjih',
    82 => 'urah',
    83 => 'KOMENTARJI BRALCEV<br>',
    84 => 'POVEZAVE<br>',
    85 => 'v zadnjih 48 urah',
    86 => 'ni novih komentarjev',
    87 => 'v zadnjih 2 tednih',
    88 => 'ni novih povezav',
    89 => 'Trenutno ni nobenih prihajajočih dogodkov.',
    90 => 'Na osnovno stran',
    91 => 'Spletna stran generirana v',
    92 => 'sekundah',
    93 => 'Copyright',
    94 => 'Vsa naša koda pripada vam.',
    95 => 'Gnano z',
    96 => 'Uporabniške skupine',
    97 => 'Seznam besed',
    98 => 'Priključni moduli',
    99 => 'ČLANKI',
    100 => 'Ni novih člankov',
    101 => 'Vaši dogodki',
    102 => 'Najavljeno je:',
    103 => 'Varnostne kopije DB',
    104 => 'z',
    105 => 'Pošiljanje e-pošte',
    106 => 'Ogledov',
    107 => 'GL Test verzije',
    108 => 'Izprazni cache',
    109 => 'Prijavi zlorabo',
    110 => 'Prijavi ta prispevek skrbniku strani',
    111 => 'Različica PDF',
    112 => 'Prijavljeni uporabniki',
    113 => 'Dokumentacija',
    114 => 'TRACKBACKS',
    115 => 'Ni novih trackback komentarjev',
    116 => 'Trackback',
    117 => 'Directory',
    118 => 'Beri dalje na naslednji strani:',
    119 => "Si izgubil svoje <a href=\"{$_CONF['site_url']}/users.php?mode=getpassword\">geslo</a>?",
    120 => 'Trajna povezava na ta komentar',
    121 => 'Komentarji (%d)',
    122 => 'Trackbacks (%d)',
    123 => 'Dovoljen je ves HTML',
    124 => 'Klikni za izbris vseh preverjenih predmetov',
    125 => 'Hočeš res izbrisati vse preverjene predmete?',
    126 => 'Izberi ali prekliči vse predmete'
);

###############################################################################
# comment.php

$LANG03 = array(
    1 => 'Pošiljanje komentarja',
    2 => 'Oblika besedila',
    3 => 'Odjava',
    4 => 'Registrirajte se',
    5 => 'Uporabniško ime',
	6 => 'Za objavo komentarjev na tej spletni strani je treba biti registriran. Če še nimaš svojega uporabniškega imena in gesla, klikni spodaj.',
    7 => 'Tvoj zadnji komentar je bil objavljen pred ',
    8 => " sekundami.  Med posameznimi komentarji istega uporabnika mora preteči vsaj {$_CONF['commentspeedlimit']} sekund.",
    9 => 'Komentar',
    10 => 'Pošlji prijavo',
    11 => 'Oddaj komentar',
	12 => 'Za objavo komentarja izpolni polji Naslov in Komentar,  ker je to za  oddajo vsebine nujno.',
    13 => 'Tvoji podatki',
    14 => 'Predogled',
    15 => 'Prijavite ta komentar',
    16 => 'Naslov',
    17 => 'Napaka',
    18 => 'Pomembno',
    19 => 'Skušaj se prosim držati teme rubrike, v kateri je objavljen članek.',
    20 => 'Raje odgovarjaj na komentarje drugih, namesto da začneš novo nit (thread).',
    21 => 'Pred objavo svojega komentarja preberi druge, da ne bo ponavljanja. Morda je kdo že povedal kaj, kar nameravaš napisati.',
    22 => 'Uporabi tak naslov, da bo jasno, o čem govori tvoj komentar.',
    23 => 'Tvoj e-naslov ne bo javno objavljen.',
    24 => 'Anonimni uporabnik',
    25 => 'Hočeš ta prispevek res prijaviti skrbniku strani?',
    26 => '%s je prijavil sledeči prispevek, ki zlorablja:',
    27 => 'Prijava zlorabe'
);

###############################################################################
# users.php

$LANG04 = array(
    1 => 'Uporabnik',
    2 => 'Uporabniško ime',
    3 => 'Ime',
    4 => 'Geslo',
    5 => 'Elektronski naslov',
    6 => 'Spletna stran',
    7 => 'Opis',
    8 => 'Javni ključ PGP',
    9 => 'Shrani podatke',
    10 => 'Zadnjih 10 komentarjev uporabnika',
    11 => 'Uporabnik ni prispeval nobenih komentarjev',
    12 => 'Uporabniške nastavitve za',
    13 => 'Pošlji nočni pegled',
    14 => 'Geslo se generira naključno. Priporočljivo je, da geslo takoj spremenite. To storite s klikom na Informacije o računu v  meniju Osebne nastavitve. Za spremembe osebnih nastavitev se je treba prijaviti v sistem.',
    15 => 'Tvoj uporabniški račun na tej spletni strani je bil uspešno ustvarjen. Če ga hočeš uporabljati, se moraš prijaviti s spodnjimi podatki. Prosim shrani to e-pošto za  potrebe v prihodnje.',
    16 => 'Podatki o tvojem uporabniškem računu',
    17 => 'Uporabniški račun ne obstaja',
    18 => 'Vneseni e-naslov ni veljaven',
    19 => 'Vneseno uporabniško ime ali e-naslov že obstaja',
    20 => 'Vneseni e-naslov ni veljaven',
    21 => 'Napaka',
    22 => "Registracija {$_CONF['site_name']}!",
    23 => "Ustvarjenje uporabniškega računa omogoča uporabo vseh ugodnosti na spletni strani {$_CONF['site_name']}. Lahko boš v svojem imenu objavljal komentarje ter oddajal članke in slike.  Brez uporabniškega računa lahko objavljaš le anonimno. <font color=red>Elektronski naslovi registriranih uporabnikov na tej spletni strani ne bodo <b><i>nikoli</i></b> javno prikazani.",
    24 => 'Tvoje geslo bo poslano na vneseni e-naslov.',
    25 => 'Si pozabil/a geslo?',
    26 => 'Vnesi <em>uporabniško ime</em> <em>ali</em> e-naslov, s katerim si se registriral/a, in klikni gumb Pošlji geslo po e-pošti. Navodila za nastavitev novega gesla bodo poslana na registrirani e-naslov.',
    27 => 'Registriraj se',
    28 => 'Pošlji geslo na e-naslov',
    29 => 'odjava',
    30 => 'prijava',
    31 => 'Za izvedbo te funkcije se je treba prijaviti',
    32 => 'Podpis',
    33 => 'Nikoli se ne prikaže javno',
    34 => 'Tvoje pravo ime',
    35 => 'Vpiši spremenjeno geslo',
    36 => 'Začne se s http://',
    37 => 'Nastavitve komentarjev',
    38 => 'To lahko prebere vsakdo',
    39 => 'Javni ključ PGP',
    40 => 'Brez ikone rubrike',
    41 => 'Pripravljen moderirati',
    42 => 'Oblika zapisa datuma',
    43 => 'Največ člankov',
    44 => 'Brez okvirjev',
    45 => 'Prikaži nastavitve za',
    46 => 'Izključeni deli',
    47 => 'Nastavitve novosti za',
    48 => 'Rubrike',
    49 => 'Brez ikon v člankih',
    50 => 'Če te ne zanima, odstrani oznako',
    51 => 'Samo novi članki',
    52 => 'Privzeta nastavitev je 10',
    53 => 'Prejmi nove članke vsako noč',
    54 => 'Označi rubrike in avtorje, katerih prispevki te ne zanimajo',
    55 => 'Če pustiš prazno, se bodo ohranile privzete nastavitve. Če začneš izbirati bloke, izberi vse, ki jih želiš, ker se bodo prikazali samo izbrani (brez privzetih). Privzeti vnosi so prikazani <B> krepko</B>.',
    56 => 'Avtorji',
    57 => 'Oblikovanje',
    58 => 'Uredi po',
    59 => 'Omejitve komentarja',
    60 => 'Kako naj bodo izpisani tvoji komentarji?',
    61 => 'Najprej najnovejši ali najstarejši?',
    62 => 'Prevzeta vrednost je 100',
    63 => "Geslo je bilo poslano na tvoj e-naslov in bi moralo prispeti vsak hip. Sledi prosim navodilom, ki jih boš prejel/a. Hvala, da uporabljaš spletno stran {$_CONF['site_name']}.",
    64 => 'Nastavitve komentarjev za',
    65 => 'Poskusi se prijaviti ponovno',
    66 => "Morda si se zmotil/a pri vnosu svojega uporabniškega imena ali gesla. Poskusi se ponovno prijaviti. Si morda še neregistriran uporabnik? V tem primeru se <a href=\"{$_CONF['site_url']}/users.php?mode=new\">registriraj</a>.",
    67 => 'Uporabnik od',
    68 => 'Zapomni si me za',
    69 => 'Koliko časa po zadnji prijavi naj si te zapomnim?',
    70 => "Priredi postavitev in vsebino spletne strani {$_CONF['site_name']}",
    71 => "Ena od posebnosti spletne strani {$_CONF['site_name']} je možnost popolnega prilagajanja izgleda posameznemu uporabniku.  Če hočeš uporabiti to možnost, se moraš najprej <a href=\"{$_CONF['site_url']}/users.php?mode=new\">prijaviti</a> na {$_CONF['site_name']}. Si že postal/a registrirani uporabnik? Prijavi se!",
    72 => 'Tema',
    73 => 'Jezik',
    74 => 'Spremeni izgled strani.',
    75 => 'Rubrike po e-pošti za',
    76 => 'Če  na spodnjem seznamu izbereš rubriko, boš nove članke, objavljene v njej, ob koncu vsakega dneva prejel/a po e-pošti. Izberi le rubrike, ki te zanimajo.',
    77 => 'Slika',
    78 => 'Dodaj svojo sliko.',
    79 => 'Izbriši izbrano sliko',
    80 => 'Prijava',
    81 => 'Pošlji e-pošto',
    82 => 'Zadnjih 10 člankov uporabnika',
    83 => 'Statistika uporabnikovih objav',
    84 => 'Skupno število člankov:',
    85 => 'Skupno število komentarjev:',
    86 => 'Najdi vse objave uporabnika',
    87 => 'Tvoje uporabniško ime',
    88 => "Nekdo (verjetno ti) je zahteval novo geslo za tvoj račun  \"%s\" na {$_CONF['site_name']}, <{$_CONF['site_url']}>.\n\nČe res hočeš novo geslo, prosim klikni povezavo: \n\n",
    89 => "Če nočeš novega gesla, to sporočilo preprosto prezri. Zahteva bo zavržena in tvoje geslo bo ostalo nespremenjeno.\n\n",
    90 => 'Spodaj lahko vpišeš novo geslo za svoj račun. Staro geslo bo veljalo, dokler ne oddaš tega obrazca.',
    91 => 'Nastavljanje novega gesla',
    92 => 'Vpiši novo geslo',
    93 => 'Tvoja zadnja zahteva za novo geslo je bila sprejeta pred %d sekundami. Ta stran zahteva, da med spremembami gesla preteč vsaj %d sekund.',
    94 => 'Izbriši račun "%s"',
    95 => 'Za izbris svojega uporabniškega računa iz naše baze podatkov klikni spodnji gumb "Izbriši račun". Vsi prispevki, ki si jih prispeval/a pod tem računom, bodo <strong>ostali</strong> na naših straneh, ime objavitelja pa bo spremenjeno v "Anonimnež".',
    96 => 'Izbriši račun',
    97 => 'Potrdi brisanje računa',
    98 => 'Hočeš res izbrisati svoj uporabniški račun? Po tem dejanju prijava na našo spletno stran ne bo več mogoča, razen če si ustvariš nov račun. Če si prepričan/a o izbrisu, ponovno klikni "Izbriši račun" v spodnjem obrazcu.',
    99 => 'Nastavitve zasebnosti za',
    100 => 'Skrbnikov e-naslov',
    101 => 'Dovoli e-pošto skrbnikov strani',
    102 => 'E-pošta uporabnikov',
    103 => 'Dovoli e-pošto drugih uporabnikov strani',
    104 => 'Prikaži status Na liniji',
    105 => 'Dovoli prikaz v bloku Na liniji so',
    106 => 'Mesto',
    107 => 'Prikazano v tvojem javnem profilu',
    108 => 'Potrdi novo geslo',
    109 => 'Ponovno vnesi novo geslo',
    110 => 'Trenutno veljavno geslo',
    111 => 'Ponovno vnesi trenutno veljavno geslo',
    112 => 'Število dovoljenih poskusov prijave je bilo preseženo.  Prosim poskusi ponovno pozneje.',
    113 => 'Poskus prijave je spodletel',
    114 => 'Račun je onemogočen',
    115 => 'Tvoj račun je bil onemogočen, ne moreš se prijaviti. Prosim sporoči to skrbniku.',
    116 => 'Račun čaka na potrditev',
    117 => 'Tvoj račun trenutno čaka na potrditev skrbnika. Dokler račun ni potrjen, se ne moreš prijaviti.',
    118 => "Tvoj račun na strani {$_CONF['site_name']} je sedaj potrdil skrbnik. Sedaj se lahko na spletno stran prijaviš na spodnji povezavi s svojim uporabniškim imenom (<username>) in geslom, ki si ju prejel po e-pošti.",
    119 => 'Če si pozabil/a svoje geslo, lahko zahtevaš novega na tej povezavi:',
    120 => 'Račun potrjen',
    121 => 'Storitev',
    122 => 'Žal je registracija novih uporabnikov onemogočena.',
    123 => "Si <a href=\"{$_CONF['site_url']}/users.php?mode=new\">nov uporabnik</a>?",
    124 => 'Potrdi e-naslov',
    125 => 'V obe polji moraš vnesti isti e-naslov.',
    126 => 'Ponovi za potrditev.',
    127 => 'Za spremembo katere koli od teh nastavitev moraš vpisati svoje veljavno geslo.',
    128 => 'Tvoje ime',
    129 => 'Geslo &amp; e-naslov',
    130 => 'O tebi',
    131 => 'Možnost dnevnih pregledov',
    132 => 'Funkcija dnevnih pregledov',
    133 => 'Prikaz komentarjev',
    134 => 'Možnosti komentarjev',
    135 => '<li>Privzeti način za prikaz komentarjev</li><li>Privzeti vrstni red za prikaz komentarjev</li><li>Nastavi največje število prikazanih komentarjev - privzeto je 100</li>',
    136 => 'Izloči rubrike in avtorje',
    137 => 'Filtriraj vsebino članka',
    138 => 'Druge nastavitve',
    139 => 'Postavitev in jezik',
    140 => '<li>Če je možnost Brez ikone rubrike potrjena, ikone rubrik ne bodo prikazane</li><li>Če je možnost Brez okenca potrjena, bodo prikazani le skrbnikov meni, uporabniški meni in teme<li>Nastavi največje število na eni strani prikazanih člankov</li><li>Nastavi svojo temo in želeni zapis datuma</li>',
    141 => 'Zasebne nastavitve',
    142 => 'Privzeta nastavitev uporabnikom in skrbnikom omogoča, da pošiljajo e-pošto drugim članom spletne strani in da je tvoje stanje prikazano kot Na liniji. Za zaščito zasebnosti te možnosti odznači. ',
    143 => 'Filtriraj vsebino bloka',
    144 => 'Prikaži in skrij okenca',
    145 => 'Tvoj javni profil',
    146 => 'Geslo in e-naslov',
    147 => 'Uredi geslo svojega računa, e-naslov in funkcijo samodejne prijave. Za potrditev bo treba isto geslo ali e-naslov vnesti dvakrat.',
    148 => 'Uporabniške informacije',
    149 => 'Spremeni svoje uporabniške informacije, ki bodo vidne drugim uporabnikom.<li>Podpis bo dodan k vsem tvojim komentarjem in objavam na forumu</li><li>BIO je kratek povzetek o tebi, ki ga želiš deliti z drugimi</li><li>Deli z drugimi svoj ključ PGP</li>',
    150 => 'Opozorilo: Javascript priporočen za razširjeno funkcionalnost',
    151 => 'Predogled',
    152 => 'Uporabniško ime in geslo',
    153 => 'Postavitev in jezik',
    154 => 'Vsebina',
    155 => 'Zasebnost',
    156 => 'Izbriši račun'
);

###############################################################################
# index.php

$LANG05 = array(
    1 => 'Ni novic za prikaz',
    2 => 'Trenutno v tej rubriki ni nobene nove objave ali pa imaš v svojih uporabniških nastavitvah izbrane omejitve.',
    3 => ' za rubriko %s',
    4 => 'Današnji udarni članek',
    5 => 'naslednja',
    6 => 'prejšnja',
    7 => 'prva',
    8 => 'zadnja'
);

###############################################################################
# profiles.php

$LANG08 = array(
    1 => 'Napaka pri pošiljanju sporočila. Poskusi znova.',
    2 => 'Sporočilo je bilo uspešno poslano',
    3 => 'Prepričaj se, da je v polje Odgovori vnesen pravi e-naslov.',
    4 => 'Izpolni polja Tvoje ime, Odgovori, Zadeva in Sporočilo',
    5 => 'Napaka: Neznan uporabnik.',
    6 => 'Prišlo je do napake.',
    7 => 'Uporabniški profil za',
    8 => 'Uporabniško ime',
    9 => 'Naslov URL',
    10 => 'Pošlji e-pošto k',
    11 => 'Tvoje ime:',
    12 => 'Odgovori:',
    13 => 'Zadeva:',
    14 => 'Sporočilo:',
    15 => 'HTML ukazi ne bodo upoštevani.',
    16 => 'Pošlji sporočilo',
    17 => 'Pošlji članek prijatelju',
    18 => 'Ime prijatelja',
    19 => 'E-naslov prijatelja',
    20 => 'Tvoje ime',
    21 => 'Tvoj e-naslov',
    22 => 'Izpolniti je treba vsa polja',
    23 => "To ni neželena pošta (SPAM). Sporočilo vam je poslal obiskovalec %s (%s) s spletne strani {$_CONF['site_url']}, ker je menil, da vas to utegne zanimati.  Vaših podatkov nismo nikamor shranili.",
    24 => 'Članek lahko komentirate tukaj:',
    25 => 'Za uporabo te funkcije se je treba prijaviti. Prijava nam pomaga preprečevati morebitne zlorabe sistema.',
    26 => 'S tem obrazcem lahko izbranemu uporabniku pošlješ e-pošto. Izpolniti je treba vsa polja.',
    27 => 'Kratko sporočilo',
    28 => 'Obiskovalec %s je napisal: ',
    29 => "To je dnevni pregled strani od {$_CONF['site_name']} za ",
    30 => 'Dnevne novice za',
    31 => 'Naslov',
    32 => 'Datum',
    33 => 'Preberi celotno besedilo na povezavi ',
    34 => 'Konec sporočila',
    35 => 'Žal ta uporabnik ne želi prejemati e-pošte.'
);

###############################################################################
# search.php

$LANG09 = array(
    1 => 'Napredno iskanje',
    2 => 'Ključne besede',
    3 => 'Rubrika',
    4 => 'Vse',
    5 => 'Področja iskanja',
    6 => 'Članki',
    7 => 'Komentarji',
    8 => 'Avtorji',
    9 => 'Vse',
    10 => 'Išči',
    11 => 'Rezultati iskanja',
    12 => 'Zadetki',
    13 => 'Rezultati iskanja: Ni zadetkov',
    14 => 'Za iskano besed(il)o ni nobenega zadetka.',
    15 => 'Prosim poskusite ponovno.',
    16 => 'Naslov',
    17 => 'Datum',
    18 => 'Avtor',
    19 => 'Iskanje po celotni bazi podatkov vseh člankov in komentarjev',
    20 => 'Datum',
    21 => 'do',
    22 => '(oblika zapisa datuma YYYY-MM-DD)',
    23 => 'Število ogledov',
    24 => 'Število najdenih predmetov: %d ',
    25 => 'Iskal sem',
    26 => 'zadetkov ',
    27 => 'sekund',
    28 => 'Iskalnemu pogoju ne ustreza noben članek ali komentar',
    29 => 'Rezultati iskanja',
    30 => '',
    31 => 'Za ta vtičnik ni zadetkov .',
    32 => '',
    33 => 'URL',
    34 => 'Lokacija',
    35 => 'Celodnevno dogajanje',
    36 => '',
    37 => '',
    38 => '',
    39 => '',
    40 => '',
    41 => 'Iskalni niz mora imeti vsaj tri znake.',
    42 => 'Datum naj bo prikazan na način: LLLL-MM-DD (leto-mesec-dan).',
    43 => 'točna fraza',
    44 => 'vse besede',
    45 => 'katerakoli beseda',
    46 => 'Naslednji',
    47 => 'Prejšnji',
    48 => 'Avtor',
    49 => 'Datum',
    50 => 'Zadetki',
    51 => '',
    52 => 'Lokacija',
    53 => 'Rezultati člankov',
    54 => 'Rezultati komentarjev',
    55 => 'fraza',
    56 => 'IN',
    57 => 'ALI',
    58 => 'Več  rezultatov &gt;&gt;',
    59 => 'Rezultati',
    60 => 'na stran',
    61 => 'Podrobnejše iskanje'
);

###############################################################################
# stats.php

$LANG10 = array(
    1 => 'Statistike spletne strani',
    2 => 'Število vseh obiskov strani',
    3 => 'Število objavljenih člankov (komentarjev)',
    4 => '',
    5 => '',
    6 => '',
    7 => 'Deset najbolj ogledovanih člankov',
    8 => 'Naslov članka',
    9 => 'Št. ogledov',
    10 => 'Na spletni strani ni objavljenih člankov ali pa si jih ni še nihče ogledal.',
    11 => 'Deset najbolj komentiranih člankov',
    12 => 'Št. komentarjev',
    13 => 'Na spletni strani ni objavljenih komentarjev ali pa si jih ni še nihče ogledal.',
    14 => '',
    15 => '',
    16 => '',
    17 => '',
    18 => '',
    19 => '',
    20 => '',
    21 => '',
    22 => 'Deset največ po e-pošti posredovanih člankov',
    23 => 'Št. posredovanj',
    24 => 'Nihče ni posredoval nobenega članka po e-pošti.',
    25 => 'Deset najbolj Trackback komentiranih člankov',
    26 => 'Najden ni bil noben trackback ckmentar.',
    27 => 'Število aktivnih uporabnikov',
    28 => '',
    29 => '',
    30 => 'Zadetki',
    31 => ''
);

###############################################################################
# article.php

$LANG11 = array(
    1 => 'Sorodne povezave',
    2 => 'Pošlji članek prijatelju po e-pošti',
    3 => 'Za tisk prijazna stran',
    4 => 'Dodatne možnosti',
    5 => 'Članek v formatu PDF'
);

###############################################################################
# submit.php

$LANG12 = array(
    1 => 'Če želiš objaviti %s, se moraš prijaviti kot uporabnik.',
    2 => 'Prijava',
    3 => 'Nov uporabnik',
    4 => '',
    5 => '',
    6 => 'Oddaj članek',
    7 => 'Treba se je prijaviti',
    8 => 'Oddaj',
    9 => 'Pri oddajanju podatkov za uporabo na tem spletnem mestu prosim upoštevaj naslednja priporočila: <ul><li>Izpolni vsa polja.<li>Poskrbi, da bodo podatki celostni in točni.<li>Upoštevaj pravopis.<li>Preveri, da delujejo vse povezave.<li><font color=red>Pošiljaj <b>samo članke in dogodke</b>. Komentarje vpisuj pod posamezne članke, za splošne debate in mnenja pa uporabi forum.</font><li>V naslov NE piši celih besed z VELIKIMI črkami. Besedila, ki bodo zapisana z velikimi črkami, bomo v celoti prekodirali v male črke.</li> <br> <b>Pri vnašanju dogodka ali oglasa: </b><li>Uredništvo si pridržuje pravico, da ne objavi dogodkov in oglasov, ki niso v skladu z navedenimi pogoji, ki imajo sporno vsebino in/ali ki niso v skladu z veljavno zakonodajo Republike Slovenije.<li>Pri vpisu ponudbe za  delavnice, seminarje, storitve, zaposlitve idr. v oknu z besedilom oglasa (polje opis dogodka ali vsebina članka)  v skladu z zakonodajo <b>obvezno navedite še</b><ul><li>naziv podjetja ter ime in priimek odgovorne osebe oziroma ime in priimek naročnika oglasa (če ne gre za podjetje ali organizacijo) ,<li>sedež podjetja, organizacije ali naslov naročnika oglasa (če ne gre za podjetje).</ul>',
    10 => 'Naslov',
    11 => '',
    12 => 'Datum začetka',
    13 => 'Datum zaključka',
    14 => 'Lokacija',
    15 => 'Opis',
    16 => '',
    17 => '',
    18 => '',
    19 => 'Najprej preberi',
    20 => '',
    21 => '',
    22 => 'Napaka: Niso izpolnjena vsa polja',
    23 => 'Izpolnite vsa polja obrazca. Zahtevana so vsa.',
    24 => 'Shranjeno',
    25 => 'Tvoj prispevek %s je bil uspešno shranjen.',
    26 => 'Omejitev hitrosti',
    27 => 'Uporabniško ime',
    28 => 'Rubrika',
    29 => 'Članek',
    30 => 'Tvoja zadnja objava je bila poslana pred ',
    31 => " sekundami. Med objavami istega uporabnika mora preteči vsaj {$_CONF['speedlimit']} sekund.",
    32 => 'Predogled',
    33 => 'Predogled članka',
    34 => 'Odjava',
    35 => 'Ukazi HTML niso dovoljeni',
    36 => 'Oblika besedila',
    37 => '',
    38 => '',
    39 => '',
    40 => '',
    41 => '',
    42 => '',
    43 => '',
    44 => 'Naslov 1',
    45 => 'Naslov 2',
    46 => 'Mesto/kraj',
    47 => 'Pokrajina',
    48 => 'Poštna številka',
    49 => '',
    50 => '',
    51 => 'Lokacija',
    52 => 'Zbriši',
    53 => 'Ustvari račun'
);

###############################################################################
# ADMIN PHRASES - These are file phrases used in admin scripts
###############################################################################

###############################################################################
# admin/auth.inc.php

$LANG20 = array(
    1 => 'Obvezno preverjanje pristnosti',
    2 => 'Dostop zavrnjen! Napačni prijavni podaki.',
    3 => 'Napačno uporabniško geslo',
    4 => 'Uporabniško ime:',
    5 => 'Geslo:',
    6 => 'Vsi dostopi do skrbniških delov tega spletnega mesta se beležijo in pregledujejo.<br>Te strani lahko uporabljajo samo pooblaščene osebe.<p>',
    7 => 'prijava'
);

###############################################################################
# admin/block.php

$LANG21 = array(
    1 => 'Ni ustreznih skrbniških pravic',
    2 => 'Za urejanje tega bloka nimaš potrebnih skrbniških pravic.',
    3 => 'Urejanje blokov',
    4 => 'Pri branju je nastala težava (za podrobnosti glej error.log).',
    5 => '',
    6 => '',
    7 => 'Vse',
    8 => 'Varnostna raven bloka',
    9 => 'Pravila bloka',
    10 => '',
    11 => 'Blok na portalu',
    12 => 'Običajni blok',
    13 => 'Nastavitve bloka na portalu',
    14 => 'RDF URL',
    15 => 'Zadnja posodobitev RDF',
    16 => 'Nastavitve običajnega bloka',
    17 => 'Vsebina bloka',
    18 => 'Izpolni polji Naslov bloka in Vsebina bloka',
    19 => 'Upravitelj bloka',
    20 => '',
    21 => 'Varnostna raven bloka',
    22 => '',
    23 => 'Pravila bloka',
    24 => '',
    25 => 'Za spreminjanje ali izbris bloka klikni na njegovo spodnjo ikono za urejanje. Če hočeš ustvariti nov blok, klikni na "Ustvari" zgoraj. Če hočeš blok premakniti, klikni na puščici ali v polji [R] in [L].',
    26 => 'Izgled bloka',
    27 => 'Blok PHP',
    28 => 'Nastavitve bloka PHP',
    29 => 'Funkcije bloka',
    30 => 'Če želiš, da blok uporablja kodo PHP, zgoraj vpiši ime funkcije. Ime funkcije se mora začeti s "phpblock_" (npr. phpblock_getweather). Brez te predpone funkcija NE bo klicana. Zaradi tega tisti, ki bi morda vdrli v to namestitev Geekloga, ne bi mogli poljubno spreminjati kode in škodovati sistemu. Pazi, da za ime funkcije ne vstaviš praznih oklepajev "()". Priporočamo, da vso kodo svojega bloka PHP, vpisujete v /pot/do/geekloga/system/lib-custom.php. Tako se bo ta koda brez težav ohranila tudi po nadgradnji Geekloga.',
    31 => 'Napaka v bloku PHP. Funkcija %s ne obstaja.',
    32 => 'Napaka. Manjkajo podatki.',
    33 => 'Vnesi naslov URL v datoteko .rdf za blok na portalu',
    34 => 'Vnesi naslov in funkcijo PHP bloka',
    35 => 'Vnesi naslov in vsebino bloka',
    36 => 'Vnesi vsebino in izberi izgled bloka',
    37 => 'Napačno ime funkcije bloka PHP',
    38 => 'Funkcije bloka PHP morajo imeti predpono \'phpblock_\' (npr. phpblock_imefunkcije).  Predpona \'phpblock_\' je potrebna zaradi varnosti.',
    39 => 'Stran',
    40 => 'Levo',
    41 => 'Desno',
    42 => 'Vnesite ime bloka in vrstni red za prednastavljene bloke Geekloga.',
    43 => 'Samo domača stran',
    44 => '',
    45 => "Do tega bloka nimaš dostopa. Poskus je bil zabeležen v bazo podatkov. Prosim vrni se na <a href=\"{$_CONF['site_url']}/admin/block.php\">zaslon za skrbništvo blokov</a>.",
    46 => 'Premakni',
    47 => '',
    48 => 'Ime bloka',
    49 => ' (brez presledkiov in imena ne smejo biti podvojena)',
    50 => '',
    51 => 'začni s http://',
    52 => 'Če pustiš prazno, se ikona za pomoč za ta blok ne bo izpisala!',
    53 => 'Omogočeno',
    54 => 'shrani',
    55 => 'prekliči',
    56 => 'izbriši',
    57 => 'Premakni blok dol',
    58 => 'Premakni blok gor',
    59 => 'Premakni blok na desno stran',
    60 => 'Premakni blok na levo stran',
    61 => 'Braz naslova',
    62 => 'Omejitev članka',
    63 => 'Slab naslov bloka',
    64 => 'Polje za naslov ne sme biti prazno in ne sme vsebovati HTML.',
    65 => 'naročilo',
    66 => 'Samodejni ukazi',
    67 => 'Potrdi za odobritev samodejnih ukazov'
);

###############################################################################
# admin/story.php

$LANG24 = array(
    1 => 'Prejšnji članki',
    2 => 'Naslednji članki',
    3 => 'Nastavitve članka',
    4 => 'Oblikovanje članka',
    5 => 'Urejanje članka',
    6 => 'V sistemu ni člankov',
    7 => 'Avtor',
    8 => 'shrani',
    9 => 'predogled',
    10 => 'prekliči',
    11 => 'izbriši',
    12 => 'ID',
    13 => '',
    14 => '',
    15 => 'Datum',
    16 => 'Uvodno besedilo',
    17 => 'Razširjeno besedilo',
    18 => 'Število ogledov',
    19 => 'Komentarji',
    20 => 'Ping',
    21 => 'Pošlji Ping',
    22 => 'Seznam člankov',
    23 => 'Če hočeš članek spremeniti ali izbrisati, klikni na njegovo številko. Če ga hočeš pregledati, klikni na njegov naslov. Če hočeš objaviti nov članek, klikni na "Ustvari novega" zgoraj.',
    24 => 'ID, ki si ga izbral/a za ta članek, je že v rabi. Prosim uporabi drug ID.',
    25 => 'Napaka pri shranjevanju članka.',
    26 => 'Predogled članka',
    27 => 'Če uporabiš [unscaledX] namesto [imageX], bo slika vstavljena s svojimi originalnimi merami.',
    28 => '<p><b>PREDOGLEDOVANJE</b>: Za predogled članka skupaj s slikami je najprimerneje, da ga shraniš kot  osnutek, NAMESTO da klikneš gumb za predogled.  Ta gumb uporabi le, če ni priloženih slik.',
    29 => 'Trackbacks',
    30 => 'Napake pri nalaganju datoteke',
    31 => 'Prosim izpolni polji Naslov in Uvodno besedilo',
    32 => 'Udarni članek',
    33 => 'Udarni članek je lahko samo eden',
    34 => 'Osnutek',
    35 => 'Da',
    36 => 'Ne',
    37 => 'Več od avtorja',
    38 => 'Več s področja',
    39 => 'Št. posredovanj po e-pošti',
    40 => '',
    41 => "Poskušaš dostopiti do članka, do katerega nimaš pravice dostopa. Ta poskus je bil zabeležen in shranjen. Članek lahko samo preberete, ne morete pa ga urejati. Ko končaš, pojdi prosim nazaj na <a href=\"{$_CONF['site_url']}/admin/story.php\">zaslon za skrbništvo člankov</a>.",
    42 => "Poskušaš dostopiti do članka, do katerega nimaš pravice dostopa. Ta poskus je bil zabeležen in shranjen. Pojdi prosim nazaj na <a href=\"{$_CONF['site_url']}/admin/story.php\">zaslon za skrbništvo člankov</a>.",
    43 => '',
    44 => '',
    45 => '',
    46 => '<b>OPOMBA:</b> Če tu nastaviš datum v prihodnosti, članek ne bo objavljen do izbranega datuma. Do tega datuma članka ne bo niti v RDF niti ne bo vključn v iskalnik in statistične strani.',
    47 => 'Slike',
    48 => 'slika',
    49 => 'desno',
    50 => 'levo',
    51 => 'Sliko vstavi v članek s posebnim ukazom [imageX], [imageX_right] ali [imageX_left], pri čemer je X zaporedna številka slike v prilogi. OPOMBA: Slike iz priloge je treba uporabiti, sicer članka ne bo mogoče shraniti.',
    52 => '',
    53 => 'ni bila uporabljena. Sliko morate pred shranitvijo sprememb vključiti v uvodno ali razširjeno besedilo članka.',
    54 => 'Priložene slike niso bile uporabljene',
    55 => 'Pri shranjevanju članka je prišlo do napak. Prosim popravi napake s spodnjega seznama:',
    56 => 'Prikaži ikono rubrike',
    57 => 'Oglej si nepomanjšano sliko',
    58 => 'Možnosti arhiviranja',
    59 => 'Možnost',
    60 => '',
    61 => 'Samodejno arhiviranje',
    62 => 'Samodejno brisanje',
    63 => '',
    64 => '',
    65 => '',
    66 => '',
    67 => 'Raztegni področje urejanja vsebine',
    68 => 'Skrči področje urejanja vsebine',
    69 => 'Datum objave članka',
    70 => 'Izbira orodne vrstice',
    71 => 'Osnovna orodna vrstica',
    72 => 'Navadna orodna vrstica',
    73 => 'Napredna orodna vrstica',
    74 => 'Napredna orodna vrstica II',
    75 => 'Vse funkcije',
    76 => 'Možnosti objave',
    77 => ' Za napredno urejanje mora biti Javascript omogočen. Možnost lahko onemogočite na glavni strani config.php.',
    78 => 'Za uporabo privzetega urejevalnika klikni <a href="%s/story.php?mode=edit&amp;sid=%s&amp;editopt=default">tukaj</a>.',
    79 => 'Predogled',
    80 => 'Urejevalnik',
    81 => 'Možnosti objave',
    82 => 'Slike',
    83 => 'Možnosti arhiva',
    84 => 'Dovoljenja',
    85 => 'Pokaži vse',
    86 => 'Napredni urejevalnik',
    87 => 'Statistike člankov'
);

###############################################################################
# admin/topic.php

$LANG27 = array(
    1 => 'Urejevalnik rubrik',
    2 => 'ID rubrike',
    3 => 'Ime rubrike',
    4 => 'Slika rubrike',
    5 => '(ne uporabljaj presledkov)',
    6 => 'Izbris rubrike izbriše tudi vse z njo povezane članke in bloke',
    7 => 'Izpolni polji za ID in naslov rubrike',
    8 => 'Upravitelj rubrik',
    9 => 'Izberi rubriko, ki jo hočeš urediti ali odstraniti. Če hočeš ustvariti novo rubriko, klikni gumb Nova rubrika zgoraj. Svojo raven dostopa do posamezne rubrike najdeš v oklepajih. Zvazdica (*) označuje privzeto rubriko.',
    10 => 'Uredi po',
    11 => 'Člankov/Strani',
    12 => 'Dostop zavrnjen',
    13 => "Do te rubrike nimaš dostopa. Tvoj poskus je bil zabeležen in shranjen. Prosim vrni se na <a href=\"{$_CONF['site_url']}/admin/topic.php\">zaslon za skrbništvo rubrik</a>.",
    14 => 'Uredi po',
    15 => 'abecedi',
    16 => 'privzeto',
    17 => 'Nova rubrika',
    18 => 'Skrbnikova stran',
    19 => 'shrani',
    20 => 'prekliči',
    21 => 'izbriši',
    22 => 'Privzeto',
    23 => 'Naredi to rubriko privzeto za novo oddane članke',
    24 => '(*)',
    25 => 'Arhiviraj rubriko',
    26 => 'Naredi to rubriko privzeto za arhivirane članke. Dovoljena je samo ena rubrika.',
    27 => 'ali naloži ikono za rubriko',
    28 => 'Največ',
    29 => 'Napake pri nalaganju datotek'
);

###############################################################################
# admin/user.php

$LANG28 = array(
    1 => 'Urejevalnik uporabnika',
    2 => 'ID uporabnika',
    3 => 'Uporabniško ime',
    4 => 'Celotno ime uporabnika',
    5 => 'Geslo',
    6 => 'Varnostni nivo',
    7 => 'E-naslov',
    8 => 'Tvoja spletna stran',
    9 => '(ne uporabljaj presledkov)',
    10 => 'Vpiši uporabniško ime in e-naslov.',
    11 => 'Upravitelj uporabnikov',
    12 => 'Za spreminjanje ali izbris uporabnika klikni na njegovo ikono za urejanje spodaj. Za ogled uporabnika klikni na njegovo uporabniško ime. Za ustvarjenje novega uporabnika klikni na "Ustvari novega" zgoraj.',
    13 => 'Varnostni nivo',
    14 => 'Datum registracije',
    15 => '',
    16 => '',
    17 => '',
    18 => '',
    19 => '',
    20 => 'shrani',
    21 => 'Uporabniško ime, ki ga hočeš shraniti, že obstaja.',
    22 => 'Napaka',
    23 => 'Zaporedno dodajanje',
    24 => 'Zaporedni uvoz uporabnikov',
    25 => 'V Geeklog lahko uvoziš zaporedje uporabnikov. Datoteka za uvoz mora biti navadna tekstovna datoteka, razdeljena s tabulatorji. Polja naj si sledijo v naslednjem vrstnem redu: celotno ime, uporabniško ime, e-naslov.  Vsak uporabnik bo prejel e-pošto z naključnim geslom. Vsak uporabnik naj bo vpisan v svoji vrstici. Če teh navodil ne upoštevaš, lahko nastanejo precejšnje težave, ki bodo zahtevale ročno obdelavo, zato pred uvozom še enkrat preveri vpise v datoteki.',
    26 => '',
    27 => '',
    28 => 'Izbris slike potrdi tu',
    29 => 'Pot',
    30 => 'Uvozi',
    31 => 'Novi uporabniki',
    32 => 'Končano. Uvoženo %d , najdenih je %d napak',
    33 => 'oddaj',
    34 => 'Napaka: Določiti je treba datoteko za nalaganje.',
    35 => 'Zadna prijava',
    36 => 'nikoli',
    37 => 'UID',
    38 => 'Pregled skupine',
    39 => 'Geslo (ponovno)',
    40 => 'Datum registracije',
    41 => 'Datum zadnje prijave',
    42 => 'Prepovedan',
    43 => 'Čaka aktivacijo',
    44 => 'Čaka avtorizacijo',
    45 => 'Dovoljen',
    46 => 'Status uporabnika',
    47 => 'Uredi',
    48 => 'Prikaži skupine skrbnikov',
    49 => 'Skupina skrbnikov',
    50 => 'Potrdi za odobritev filtriranja te skupine kot  Admin Use Group',
    51 => 'Dnevi na liniji',
    52 => '<br>Opomba: "Dnevi na liniji" je število dni med prvo registracijo in zadnjo prijavo.',
    53 => 'registrran',
    54 => 'Izbris zaporedja',
    55 => 'To deluje le, če imaš v svojem config.php <code>$_CONF[\'lastlogin\'] = true;</code>.',
    56 => 'Izberi tip uporabnika, ki ga hočeš izbrisati, in pritisni "Posodobi seznam". Na seznamu odznači tiste, ki hošeč, da ostanejo, in pritisni "Izbriši". Vedi, da bodo v primeru, ko obstaja več strani seznama, izbrisani samo tisti tipi, ki jih trenutno vidiš.',
    57 => 'Fantomski uporabniki',
    58 => 'Kratkotrajni uporabniki',
    59 => 'Stari uporabniki',
    60 => 'Uporabniki, registrirani pred več kot ',
    61 => ' meseci, ki se niso nikoli prijavili.',
    62 => 'Uporabniki, registrirani pred več kot ',
    63 => ' meseci, ki so se prijavili v 24 urah, potem pa nikoli več.',
    64 => 'Običajni uporabniki, ki spletne strani niso obiskali že ',
    65 => ' mesecev.',
    66 => 'Posodobi seznam',
    67 => 'mesecev od registracije',
    68 => 'Ure na liniji',
    69 => 'Meseci brez povezave z linijo',
    70 => 'ni moglo biti izbrisano',
    71 => 'uspešno izbrisano',
    72 => 'Za izbris ni bil izbran noben uporabnik',
    73 => 'Hočeš res trajno izbrisati VSE izbrane uporabnike?',
    74 => 'zadnji uporabniki',
    75 => 'Uporabniki, ki so se registrirali v zadnjih ',
    76 => ' mesecih'
);

###############################################################################
# admin/moderation.php

$LANG29 = array(
    1 => 'Objavi',
    2 => 'Izbriši',
    3 => 'Uredi',
    4 => 'Profil',
    10 => 'Naslov',
    11 => 'Datum začetka',
    12 => 'URL',
    13 => 'Kategorija',
    14 => 'Datum',
    15 => 'Rubrika',
    16 => 'Uporabniško ime',
    17 => 'Celotno ime',
    18 => 'E-naslov',
    34 => 'Skrbnikove strani',
    35 => 'Čakajoči članki',
    36 => '',
    37 => '',
    38 => 'Oddaj',
    39 => 'Trenutno ni nobene čakajoče vsebine',
    40 => 'Uporabniška čakajoča vsebina'
);

###############################################################################
# admin/mail.php

$LANG31 = array(
    1 => "{$_CONF['site_name']} EMail pripomoček",
    2 => 'Od',
    3 => 'E-naslov za odgovore',
    4 => 'Zadeva',
    5 => 'Sporočilo',
    6 => 'Naslov:',
    7 => 'Vsem uporabnikom',
    8 => 'Skrbnik',
    9 => 'Možnosti',
    10 => 'HTML',
    11 => 'Nujno sporočilo!',
    12 => 'Pošlji',
    13 => 'Ponastavi',
    14 => 'Prezri uporabniške nastavitve',
    15 => 'Napaka pri pošiljanju  ',
    16 => 'Sporočilo je bilo uspešno poslano: ',
    17 => "<a href={$_CONF['site_url']}/admin/mail.php>Pošlji novo sporočilo</a>",
    18 => 'Za',
    19 => 'OPOMBA: Če hošeč poslati sporočilo vsem uporabnikom strani, izberi skupino Prijavljeni uporabniki iz menija Uporabniki.',
    20 => "Uspešno poslana sporočila: <successcount>;<BR>Neuspešno poslana sporočila: <failcount>. Podrobnosti o neuspešno poslanih sporočilh so spodaj.<BR><BR>Hočeš poslati še kakšno <a href=\"{$_CONF['site_url']}/admin/mail.php\">sporočilo</a>? <BR><BR>Nazaj na <a href=\"{$_CONF['site_url']}/admin/moderation.php\">skrbnikovo stran</a>.",
    21 => 'Neuspešno poslana sporočila',
    22 => 'Uspešno poslana sporočila',
    23 => 'Nobenega neuspešno poslanega sporočila',
    24 => 'Nobenega uspešno poslanega sporočila',
    25 => '-- Izberi skupino --',
    26 => 'Izpolni vsa polja v obrazcu in izberi skupino uporabnikov iz menija.'
);

###############################################################################
# admin/plugins.php

$LANG32 = array(
    1 => 'Namestitev vtičnikov (plugins) lahko Geeklogu in tvojemu sistemu povzroči škodo. Pomembno je, da namestiš samo vtičnike, ki jih preneseš z <a href="http://www.geeklog.net" target="_blank">Geeklogove domače strani</a>, saj smo samo te dodobra preizkusili na različnih operacijskih sistemih. Pomembno je razumeti, da je namestitev vtičnikov postopek, ki zahteva izvajanje nekaterih ukazov na ravni datotečnega sistema. Ti lahko vodijo do varnostnih lukenj, posebej če uporabljaš vtičnik s spletnih mest tretjih oseb. Kljub temu opozorilu ne jamčimo za uspeh nobene namestitve niti nismo odgovorni za škodo, povzročeno z namestitvijo vtičnika za Geeklog. Z drugimi besedami – nameščaš na lastno odgovornost. V paket vsakega vtičnika so vključena navodila za njegovo ročno namestitev.',
    2 => 'Zavrnitev namestitve vtičnika',
    3 => 'Obrazec za namestitev vtičnika',
    4 => 'Datoteka vtičnika',
    5 => 'Seznam vtičnikov',
    6 => 'Opozorilo: Vtičnik je že nameščen.',
    7 => 'Vtičnik, ki ga skušaš namestiti, je že nameščen. Pred ponovno namestitvijo prosim izbriši stari vtičnik.',
    8 => 'Test združljivost vtičnika ni uspel',
    9 => 'Ta vtičnik zahteva novejšo verzijo Geekloga. Namesti novo različico <a href="http://www.geeklog.net">Geekloga</a> ali najdi novejšo različico vtičnika.',
    10 => '<br><b>Trenutno ni nameščenih nobenih vtičnikov.</b><br><br>',
    11 => 'Za spremembo ali izbris vtičnika klikni njegovo ikono za urejanje spodaj. Prikazale se bodo podrobnosti o vtičniku, vključno z avtorjevo spletno stranjo. Prikazani sta nameščena in iz vtičnikove kode vrnjena različica. Tako bo lažje vedeti, ali je treba vtičnik nadgraditi ali ne. Za namestitev ali nadgradnjo vtičnika poglej v njegovo dokumentacijo.',
    12 => 'nobeno ime vtičnika ni bilo poslano v urejevalnik vtičnikov ()',
    13 => 'Urejevalnik vtičnikov',
    14 => 'Nov vtičnik',
    15 => 'Skrbnikova stran',
    16 => 'Ime vtičnika',
    17 => 'Različica vtičnika',
    18 => 'Različica Geekloga',
    19 => 'Omogočeno',
    20 => 'Da',
    21 => 'Ne',
    22 => 'Namesti',
    23 => 'Shrani',
    24 => 'Prekliči',
    25 => 'Izbriši',
    26 => 'Ime vtičnika',
    27 => 'Domača stran vtičnika',
    28 => 'Različica vtičnika',
    29 => 'Različica Geekloga',
    30 => 'Izbriši vtičnik?',
    31 => 'Hočeš res odstraniti ta vtičnik?  S tem bodo iz baze izbrisani tudi vsi podatki, ki jih uporablja.',
    32 => '<p><b>Napaka AutoLink tag ni v pravem formatu</b></p>',
    33 => 'Različica kode',
    34 => 'Posodobi',
    35 => 'Uredi',
    36 => 'Koda',
    37 => 'Podatki',
    38 => 'Posodobi!'
);

###############################################################################
# admin/syndication.php

$LANG33 = array(
    1 => 'ustvari združeno vsebino',
    2 => 'shrani',
    3 => 'izbriši',
    4 => 'prekliči',
    10 => 'Združevanje vsebine ',
    11 => 'Nova združena vsebina',
    12 => 'Skrbnikova stran',
    13 => 'Za spreminjanje ali brisanje združene vsebine klikni na njeno ikono za urejanje spodaj. Za novo vsebino klikni na "Ustvari" zgoraj.',
    14 => 'Naslov',
    15 => 'Tip',
    16 => 'Ime datoteke',
    17 => 'Oblika',
    18 => 'zadnji posodobljen',
    19 => 'Omogočeno',
    20 => 'Da',
    21 => 'Ne',
    22 => '<i>(ni združene vsebine)</i>',
    23 => 'vsi članki',
    24 => 'Urejevalnik združene vsebine',
    25 => 'naslov združene vsebine',
    26 => 'Omejitev prikaza',
    27 => 'Omejitev števila znakov',
    28 => '(0 = brez besedila, 1 = vse besedilo, drugo = omeji na to število znakov)',
    29 => 'Opis',
    30 => 'Zadnja posodobitev',
    31 => 'Nabor znakov',
    32 => 'Jezik',
    33 => 'Vsebina',
    34 => 'Vpisi',
    35 => 'Ure',
    36 => 'Izberi tip združene vsebine',
    37 => 'Nameščen imaš vsaj en vtičnik, ki podpira združevanje vsebine. Spodaj je treba izbrati, ali hočeš ustvariti združeno vsebino za Geeklog ali za katerega od vtičnikov.',
    38 => 'Napaka: Manjkajoča polja',
    39 => 'Izpolni polja Naslov združene vsebine, Opis, Ime datoteke.',
    40 => 'Vpiši število vpisov ali število ur.',
    41 => 'Oddaj',
    42 => '',
    43 => 'Vsi',
    44 => 'Noben',
    45 => 'Naslovna povezava v rubriki',
    46 => 'Rezultati omejitve',
    47 => 'Išči',
    48 => 'Uredi',
    49 => 'Logotip združene vsebine',
    50 => "Glede na url strani ({$_CONF['site_url']})",
    51 => 'Izbrano ime datoteke že uporablja druga združena vsebina. Prosim izberi drugega.',
    52 => 'Napaka: Ime datoteke že obstaja.'
);

###############################################################################
# confirmation and error messages

$MESSAGE = array(
    1 => "Geslo je bilo  poslano na tvoj e-naslov in bi moralo prispeti vsak čas. Sledi navodilom v sporočilu in hvala, da uporabljaš {$_CONF['site_name']}.",
    2 => "Hvala, da si dogodek oddal/a na spletno mesto {$_CONF['site_name']}. Pred objavo ga bo pregledal eden od urednikov. Če bo odobren, bo objavljen in dan na razpolago bralcem te spletne strani.",
    3 => "",
    4 => "",
    5 => 'Podatki o uporabniškem računu so bili uspešno shranjeni.',
    6 => 'Osebne nastavitve so bile uspešno shranjene.',
    7 => 'Osebne nastavitve komentarjev so bile uspešno shranjene.',
    8 => 'Odjava je bila uspešna.',
    9 => 'Članek je bil uspešno shranjen.',
    10 => 'Članek je bil izbrisan.',
    11 => 'Blok je bil uspešno shranjen.',
    12 => 'Blok je bil uspešno izbrisan.',
    13 => 'Rubrika je bila uspešno shranjeno.',
    14 => 'Rubrika skupaj z vsemi članki in bloki je bila uspešno izbrisana.',
    15 => '',
    16 => '',
    17 => '',
    18 => '',
    19 => '',
    20 => '',
    21 => 'Uporabnik je bil uspešno shranjen.',
    22 => 'Uporabnik je bil uspešno izbrisan.',
    23 => '',
    24 => '',
    25 => '',
    26 => '',
    27 => 'Sporočilo je bilo uspešno poslano.',
    28 => 'Vtičnik je bil uspešno shranjen',
    29 => '',
    30 => 'Dostop zavrnjen',
    31 => 'Žal nimaš dostopa do skrbništva člankov. Vsi poskusi dostopa do nepooblaščenih funkcij se beležijo.',
    32 => 'Žal nimaš dostopa do skrbništva tematskih področij. Vsi poskusi dostopa do nepooblaščenih funkcij se beležijo.',
    33 => 'Žal nimaš dostopa do skrbništva blokov. Vsi poskusi dostopa do nepooblaščenih funkcij se beležijo.',
    34 => '',
    35 => '',
    36 => '',
    37 => 'Žal nimaš dostopa do skrbništva uporabnikov. Vsi poskusi dostopa do nepooblaščenih funkcij se beležijo.',
    38 => 'Žal nimaš dostopa do skrbništva vtičnikov. Vsi poskusi dostopa do nepooblaščenih funkcij se beležijo.',
    39 => 'Žal nimaš dostopa do skrbništva elektronske pošte. Vsi poskusi dostopa do nepooblaščenih funkcij se beležijo.',
    40 => 'Sistemsko sporočilo',
    41 => 'Žal nimaš dostopa do strani za menjavo besed. Vsi poskusi dostopa do nepooblaščenih funkcij se beležijo.',
    42 => 'Beseda je uspešno shranjena.',
    43 => 'Beseda je uspešno izbrisana.',
    44 => 'Vtičnik je uspešno nameščen.',
    45 => 'Vtičnik je uspešno odstranjen.',
    46 => 'Žal nimaš dostopa do varnostnih kopij baze. Vsak poskus nedovoljenega dostopa se beleži.',
    47 => 'To deluje samo v operacijskem sistemu *nix.  Če uporabljaš operacijski sistem, potem *nix , je bil cache uspešno izpraznjen. Če uporabljaš Windows OS, boš moral poiskati datoteke po imenu adodb_*.php in jih odstraniti ročno.',
    48 => "Hvala, da si zaprosil za članstvo v {$_CONF['site_name']}. Pregledali bomo tvojo prošnjo. Če bo odobrena, boš dobil geslo na e-naslov, ki si ga ravnokar vnesel.",
    49 => 'Skupina je uspešno shranjena.',
    50 => 'Skupina je uspešno izbrisana.',
    51 => 'To uporabniško ime je že zasedeno. Prosim izberi drugega.',
    52 => 'Vpisani e-naslov ne izgleda kot pravi e-naslov.',
    53 => 'Tvoje novo geslo je sprejeto. Prosim uporabi to novo geslo spodaj za vpis v sistem.',
    54 => 'Tvoja zahteva za novo geslo je potekla. Prosim poskusi ponovno spodaj.',
    55 => 'Poslali smo ti e-pošto. Na tvoj e-naslov bi morala prispeti vsak čas. Za izbiro novega gesla za svoj račun prosim upoštevaj navodila v e-pošti.',
    56 => 'Vpisani e-naslov je že uporabljen za enega od računov v naši bazi podatkov.',
    57 => 'Tvoj račun je uspešno pobrisan.',
    58 => 'Združena vsebina je uspešno shranjena.',
    59 => 'Združena vsebina je uspešno izbrisana.',
    60 => 'Vtičnik je uspešno posodobljen.',
    61 => 'Vtičnik %s: Neznan okvir sporočila.',
    62 => 'Trackback komentar je izbrisan.',
    63 => 'Med brisanjem trackback komentarja je prišlo do napake.',
    64 => 'Trackback komentar je bil uspešno odposlan.',
    65 => 'Storitev za Weblog directory je uspešno shranjena.',
    66 => 'Storitev za Weblog directory je izbrisana.',
    67 => 'Novo geslo se ne ujema s potrditvenim geslom.',
    68 => 'Vnesi pravilno veljavno geslo.',
    69 => 'Tvoj račun je blokiran.',
    70 => 'Tvoj račun čaka na skrbnikovo odobritev.',
    71 => 'Tvoj račun je sedaj potrjen in čaka na skrbnikovo odobritev.',
    72 => 'Med nameščanjem vtičnika je prišlo do napake. Za podrobnosti glej error.log.',
    73 => 'Med deinstaliranjem vtičnika je prišlo do napake. Za podrobnosti glej error.log.',
    74 => 'Pingback je uspešno odposlan.',
    75 => 'Trackbacks morajo biti poslani prek zahteve po objavi.',
    76 => 'Hočeš res izbrisati ta predmet?',
    77 => 'OPOZORILO:<br>Privzeto kodiranje si nastavil/a na UTF-8, a tvoj sterežnik ne podpira večbajtnega kodiranja. Namesti funkcije mbstring za PHP ali izberi drug nabor znakov/jezik.',
    78 => 'Zagotovi prosim, da sta e-naslov in naslov potrditvene e-pošte ista.',
    79 => 'Stran, ki jo poskušaš odpreti, se nanaša na funkcijo, ki na tem mestu ne obstaja več.',
    80 => 'Vtičnik, ki je ustvaril to združeno vsebino, je trenutno onemogočen. Te združene vsebine ne bo mogoče urejati, dokler ne bo starševski  vtičnik ponovno omogočen.',
    81 => 'Mogoče si narobe vtipkal/a login credentials. Poskusi se prosim ponovno prijaviti spodaj.',
    82 => 'Število dovoljenih poskusov prijave je bilo preseženo. Prosim poskusi ponovno pozneje.',
    83 => 'Za spremembo gesla in e-naslova ter za izbiro tega, koliko časa naj si te stran zapomni, vnesi svoje trenutno veljavno geslo.',
    84 => 'Za izbris svojega računa vnesi svoje trenutno veljavno geslo.'
);

###############################################################################

$LANG_ACCESS = array(
    'access' => 'Dostop',
    'ownerroot' => 'Lastnik/Koren (Root)',
    'group' => 'Skupina',
    'readonly' => 'Samo za branje',
    'accessrights' => 'Pravice dostopa',
    'owner' => 'Lastnik',
    'grantgrouplabel' => 'Dodeli zgornji skupini pravice za spreminjanje',
    'permmsg' => 'OBVESTILO: Uporabniki so vsi prijavljeni člani, anonimni uporabniki in vsi trenutni neprijavljeni obiskovalci strani.',
    'securitygroups' => 'Varnostne skupine',
    'editrootmsg' => "Čeprav si skrbnik, ne moreš spreminjati nastavitev korenskega uporabnika, če nisi sam korenski uporabnik. Lahko pa urejaš nastavitve vseh drugih uporabnikov. Vsi poskusi dostopa do nepooblaščenih funkcij se beležijo. Vrni se na <a href=\"{$_CONF['site_url']}/admin/users.php\">stran za skrbništvo uporabnikov</a>.",
    'securitygroupsmsg' => 'Izberite skupine, ki naj jim pripada uporabnik',
    'groupeditor' => 'Urejanje skupin',
    'description' => 'Opis',
    'name' => 'Ime',
    'rights' => 'Pravice',
    'missingfields' => 'Manjkajoča polja',
    'missingfieldsmsg' => 'Vpiši ime in opis skupine.',
    'groupmanager' => 'Upravitelj skupin',
    'newgroupmsg' => 'Za spreminjanje ali izbris skupine kliknite na njeno ikono za urejanje spodaj. Če hočete oblikovati novo skupino, kliknite na "Ustvari" zgoraj. Jedrnih skupin ni mogoče odstraniti, ker jih uporablja sistem.',
    'groupname' => 'Ime skupine',
    'coregroup' => 'Jedrna skupina',
    'yes' => 'Da',
    'no' => 'Ne',
    'corerightsdescr' => "Ta skupina je jedrna skupina {$_CONF['site_name']}. Njenih pravic se ne da urejati. Pravice, ki pripadajo tej skupini, si poglej na spodnjem seznamu.",
    'groupmsg' => 'Varnostne skupine na tej strani so urejene hierarhično. Če to skupino dodaš h kateri koli od spodnjih skupin, ji bodo s tem dodeljene iste pravice, kot jih imajo tiste skupine. Če je le mogoče,  skupinam dodeli pravice tako, da jih dodaš k spodnjim skupinam. Če naj ima ta skupina pravice po meri, lahko pravice do raznih funkcij te spletne strani izbereš spodaj v meniju \'Pravice\'. Če hočeš to skupino dodati h kateri od spodnjih skupin, potrdi okence poleg ene ali več želenih skupin.',
    'coregroupmsg' => "Ta skupina je jedrna skupina strani {$_CONF['site_name']}. Nastavitve skupin, ki ji pripadajo zato ne morejo biti spremenjene. Spodnji seznam vsebuje imena skupin, ki ji pripadajo.",
    'rightsdescr' => 'Dostop skupine do določene spodaj navedene pravice je lahko dodan tej skupini neposredno ALI pa drugi skupini, katere del je ta skupina. Tiste od spodaj navedenih pravic, ki nimajo potrditvenega okenca, so tej skupini že dodeljene zato, ker pripada drugi skupini, ki to pravico ima. Tiste od spodaj navedenih pravic, ki imajo potrdirveno okence, pa lahko skupini dodate neposredno.',
    'lock' => 'Zakleni',
    'members' => 'Člani',
    'anonymous' => 'Anonimni uporabnik',
    'permissions' => 'Dovoljenja',
    'permissionskey' => 'R = branje, E = urejanje, pravice urejanja predpostavljajo pravice branja',
    'edit' => 'Uredi',
    'none' => 'Nihče',
    'accessdenied' => 'Dostop zavrnjen',
    'storydenialmsg' => "Žal nimaš dostopa do tega članka. Morda zato, ker nisi član? <a href=\"{$_CONF['site_url']}/users.php?mode=new\">Postani član</a> spletne strani {$_CONF['site_name']} in dobil/a boš popoln dostop.",
    'nogroupsforcoregroup' => 'Ta skupina ne pripada nobeni drugi skupini',
    'grouphasnorights' => 'Ta skupina nima dostopa do skrbniških funkcij na tem spletnem mestu.',
    'newgroup' => 'Nova skupina',
    'adminhome' => 'Skrbnikova stran',
    'save' => 'shrani',
    'cancel' => 'prekliči',
    'delete' => 'izbriši',
    'canteditroot' => 'Poskusil/a si urejati jedrno skupino, a ker nisi njen član, je tvoj dostop zavrnjen. Če misliš, da gre za napako, se posvetuj s skrbnikom sistema.',
    'listusers' => 'Člani',
    'listthem' => 'seznam',
    'usersingroup' => 'Uporabniki v skupini %s',
    'usergroupadmin' => 'Skrbništvo skupin uporabnikov',
    'add' => 'Dodaj',
    'remove' => 'Odstrani',
    'availmembers' => 'Člani na voljo',
    'groupmembers' => 'Člani skupine',
    'canteditgroup' => 'Za urejanje te skupine moraš biti njen član. Če misliš, da gre za napako, se posvetuj s skrbnikom sistema.',
    'cantlistgroup' => 'Da lahko vidiš člane te skupine, moraš biti njen član. Če misliš, da gre za napako, se posvetuj s skrbnikom sistema.',
    'editgroupmsg' => 'Za spreminjanje članstva v skupini klikni na izbrana imena članov in uporabi gumb Dodaj ali Odstrani. Če je član tudi član te skupine, se bo njegovo ime pojavilo samo ne desni strani. Ko končaš, pritisni na <b>Shrani</b>, da se skupina posodobi, in se vrni na glavno stran za skrbništvo skupin uporabnikov.',
    'listgroupmsg' => 'Seznam vseh trenutnih članov skupine: <b>%s</b>',
    'search' => 'Išči',
    'submit' => 'Oddaj',
    'limitresults' => 'Rezultati omejitve',
    'group_id' => 'ID skupine',
    'plugin_access_denied_msg' => 'Nedovoljeno poskušaš dostopiti do strani za skrbništvo vtičnikov. Vedi, da se vsi nedovoljeni poskusi dostopa do te strani beležijo.',
    'groupexists' => 'Ime skupine že obstaja',
    'groupexistsmsg' => 'Skupina s tem imenom že obstaja. Imena skupin morajo biti različna.'
);

###############################################################################
# admin/database.php

$LANG_DB_BACKUP = array(
    'last_ten_backups' => 'Zadnjih 10 varnostnih kopij',
    'do_backup' => 'Naredi varnostno kopijo',
    'backup_successful' => 'Varnostno shranjevanje baze podatkov je bilo uspešno.',
    'db_explanation' => 'Če hočeš ustvariti novo varnostno kopijo baze podatkov sistema Geeklog , klikni "Ustvari" zgoraj.',
    'not_found' => "Napačna pot ali pa orodje mysqldump ni izvršljivo.<br>Preveri definicijo <strong>\$_DB_mysqldump_path</strong> v config.php.<br>Spremenljivka je trenutno definirana kot: <var>{$_DB_mysqldump_path}</var>",
    'zero_size' => 'Varnostno kopiranje neuspešno: Velikost datoteke je 0 bajtov',
    'path_not_found' => "{$_CONF['backup_path']} ne obstaja ali pa ni direktorij",
    'no_access' => "NAPAKA: Direktorij {$_CONF['backup_path']} ni dosegljiv.",
    'backup_file' => 'Datoteka z varnostno kopijo',
    'size' => 'Velikost',
    'bytes' => 'Bajtov',
    'total_number' => 'Skupno število varnostnih kopij: %d'
);

###############################################################################

$LANG_BUTTONS = array(
    1 => 'Domov',
    2 => 'Stik',
    3 => 'Objavi',
    4 => '',
    5 => '',
    6 => '',
    7 => 'Statistika strani',
    8 => 'Osebne nastavitve',
    9 => 'Išči',
    10 => 'napredno iskanje',
    11 => 'Direktorij'
);

###############################################################################
# 404.php

$LANG_404 = array(
    1 => 'Napaka 404',
    2 => 'Pogledal sem povsod, ampak ne najdem <b>%s</b>.',
    3 => "<p>Žal datoteka, ki jo zahtevaš, ne obstaja. Prosim preveri <a href=\"{$_CONF['site_url']}\">glavno stran</a> ali <a href=\"{$_CONF['site_url']}/search.php\">iskalno stran</a> in poglej, če lahko najdeš, kar si izgubil."
);

###############################################################################
# login form

$LANG_LOGIN = array(
    1 => 'Zahtevana je prijava',
    2 => 'Oprosti, za ogled tega dela strani moraš biti prijavljen kot uporabnik.',
    3 => 'Prijava',
    4 => 'Nov uporabnik'
);

###############################################################################
# pdfgenerator.php

$LANG_PDF = array(
    1 => 'Funkcija PDF je onemogočena',
    2 => 'Priskrbljeni dokument ni bil renderiran. Bil je prejet, ampak ga ni bilo mogoče procesirati. Pepričaj se, da oddajaš samo dokumente v obliki html, ki so bili napisani po standardu xHTML. Izjemno kompleksni dokumenti se lahko renderirajo nepravilno ali pa sploh ne. Dokument, ki je nastal v poskusu renderiranja, je imel 0 bajtov in je bil izbrisan. Če si prepričan/a, da bi se ta dokument moral pravilno renderirati, ga pošlji ponovno.',
    3 => 'Neznana napaka med izdelavo dokumenta PDF',
    4 => "Podatki o strani niso bili podani ali pa hočeš uporabiti orodje za ad-hoc izdelavo dokumentov PDF spodaj. Če misliš, da si to stran dobil/a pomotoma, prosim sporoči to skrbniku sistema. V nasprotnem primeru lahko uporabiš spodnji obrazec in ustvariš dokumente PDF na način ad-hoc.",
    5 => 'Nalagam dokument.',
    6 => 'Prosim počakaj, dokument se nalaga.',
    7 => 'Spodnji gumb lahko desnokliknete in izberete \'shrani ciljni dokument ...\' ali \'shrani mesto povezave ...\', da shranite kopijo dokumenta.',
    8 => "Pot do izvršilne datoteke HTMLDoc, ki je zapisana v nastavitvah, je napačna, zato je sistem ne more zagnati. Če se težava ponavlja, to prosim sporočite skrbniku strani.",
    9 => 'Izdelovalnik PDF',
    10 => "To je orodje za ad-hoc izdelavo dokumentov PDF. Orodje bo poskusilo predelati vse URL-je  v PDF-ju. Prosim zavedaj se, da se nekatere spletne strani s tem načinom ne bodo pravilno renderirale.  To je omejitev orodja HTMLDoc za izdelavo dokumentov PDF, zato teh napak ni treba prijavljati skrbniku strani.",
    11 => 'URL',
    12 => 'Izdelaj PDF!',
    13 => 'PHP konfiguracija na tem strežniku ne dovoli odpiranja URL-jev z ukazom fopen(). Skrbnik strani mora popraviti datoteko php.ini, tako da v njej prestavi allow_url_fopen na On.',
    14 => 'Zahtevani PDF ne obstaja ali pa si poskusil/a do datoteke dostopiti nedovoljeno.'
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
    'no_articles' => 'Ni člankov.'
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
    'new_string' => '%n novi %i v zadnjih %t %s',
    'new_last' => 'zadnja %t %s',
    'minutes' => 'minut',
    'hours' => 'urah',
    'days' => 'dni',
    'weeks' => 'tedna',
    'months' => 'mesecev',
    'minute' => 'minuta',
    'hour' => 'ura',
    'day' => 'dan',
    'week' => 'teden',
    'month' => 'mesec'
);

###############################################################################
# Month names

$LANG_MONTH = array(
    1 => 'januar',
    2 => 'februar',
    3 => 'marec',
    4 => 'april',
    5 => 'maj',
    6 => 'junij',
    7 => 'julij',
    8 => 'avgust',
    9 => 'september',
    10 => 'oktober',
    11 => 'november',
    12 => 'december'
);

###############################################################################
# Weekdays

$LANG_WEEK = array(
    1 => 'nedelja',
    2 => 'ponedeljek',
    3 => 'torek',
    4 => 'sreda',
    5 => 'četrtek',
    6 => 'petek',
    7 => 'sobota'
);

###############################################################################
# Admin - Strings
# 
# These are some standard strings used by core functions as well as plugins to
# display administration lists and edit pages

$LANG_ADMIN = array(
    'search' => 'Išči',
    'limit_results' => 'Omeji rezultate',
    'submit' => 'Oddaj',
    'edit' => 'Uredi',
    'edit_adv' => 'Napr. urejanje',
    'admin_home' => 'Skrbnikova stran',
    'create_new' => 'Ustvari',
    'create_new_adv' => 'Ustvari (napredno)',
    'enabled' => 'Omogočeno',
    'title' => 'Naslov',
    'type' => 'Tip',
    'topic' => 'Rubrika',
    'help_url' => 'URL dokumenta za pomoč',
    'save' => 'Shrani',
    'cancel' => 'Prekliči',
    'delete' => 'Izbriši',
    'delete_sel' => 'Izbriši izbrano',
    'copy' => 'Kopiraj',
    'no_results' => '- Ni najdenih vnosov -',
    'data_error' => 'Pri obdelavi naročniških podatkov je prišlo do napake. Prosim preveri podatke.',
    'preview' => 'Predogled',
    'records_found' => 'Najdeni zapisi'
);

###############################################################################
# Localisation of the texts for the various drop-down menus that are actually
# stored in the database. If these exist, they override the texts from the
# database.

$LANG_commentcodes = array(
    0 => 'Komentarji omogočeni',
    -1 => 'Komentarji onemogočeni'
);


$LANG_commentmodes = array(
    'flat' => 'Plosko',
    'nested' => 'Gnezdeno',
    'threaded' => 'Nitno',
    'nocomment' => 'Brez komentarjev'
);

$LANG_cookiecodes = array(
    0 => '(don\'t)',
    3600 => '1 ura',
    7200 => '2 uri',
    10800 => '3 ure',
    28800 => '8 ur',
    86400 => '1 dan',
    604800 => '1 teden',
    2678400 => '1 mesec'
);

$LANG_dateformats = array(
    0 => 'Sistemsko privzeto'
);

$LANG_featurecodes = array(
    0 => 'Ni udarni članek',
    1 => 'Udarni članek'
);

$LANG_frontpagecodes = array(
    0 => 'Pokaži le v rubriki',
    1 => 'Pokaži na prvi strani'
);

$LANG_postmodes = array(
    'plaintext' => 'Samo besedilo',
    'html' => 'Oblikovano v HTML'
);

$LANG_sortcodes = array(
    'ASC' => 'Najprej najstarejši',
    'DESC' => 'Najprej najnovejši'
);

$LANG_trackbackcodes = array(
    0 => 'Trackback omogočen',
    -1 => 'Trackback onemogočen'
);

?>