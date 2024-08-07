<?php

###############################################################################
# polish.php
# This is the Polish language page for GeekLog!
# Special thanks to Robert Stadnik geeklog@geeklog.now.pl for his work on this project
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
    1 => 'Autor:',
    2 => 'czytaj dalej',
    3 => 'komentarzy',
    4 => 'Edycja',
    5 => 'Głosuj',
    6 => 'Wyniki',
    7 => 'Wyniki Sondy',
    8 => 'głosów',
    9 => 'Menu Admina:',
    10 => 'Panel Sterowania',
    11 => 'Artykuły',
    12 => 'Bloki',
    13 => 'Sekcje',
    14 => 'Linki',
    15 => 'Wydarzenia',
    16 => 'Sondy',
    17 => 'Użytkownicy',
    18 => 'Zapytanie SQL',
    19 => 'Wyloguj',
    20 => 'Informacje Użytkownika:',
    21 => 'Login',
    22 => 'ID Użytkownika',
    23 => 'Poziom Zabezpieczeń',
    24 => 'Gall Anonim',
    25 => 'Komentuj',
    26 => 'Komentarze należą do osób, które je zamieściły. Nie bierzemy odpowiedzialności za ich treść.',
    27 => 'Najnowsze Komentarze',
    28 => 'Kasuj',
    29 => 'Komentarzy Brak.',
    30 => 'Starsze Artykuły',
    31 => 'Dozwolone Znaczniki HTML:',
    32 => 'Błąd, niewłaściwy login',
    33 => 'Błąd, nie można zapisać w logu',
    34 => 'Błąd',
    35 => 'Wyloguj',
    36 => 'dnia',
    37 => 'Brak artykułów użytkownika',
    38 => 'Syndykacja Treści',
    39 => 'Odśwież',
    40 => 'Masz <tt>register_globals = Off</tt> w pliku <tt>php.ini</tt>. Niestety, Geeklog wymaga <tt>register_globals</tt> aby były ustawione na <strong>on</strong>. Proszę zminieć ustawienia na <strong>on</strong> i restartować serwer www.',
    41 => 'Gość',
    42 => 'Autor:',
    43 => 'Odpowiedz',
    44 => 'Główny',
    45 => 'Numer Błędu MySQL',
    46 => 'Numer Komunikatu Błędu MySQL',
    47 => 'Menu Użytkownika',
    48 => 'Konto - Info',
    49 => 'Osobiste',
    50 => 'Błędna składnia SQL',
    51 => 'pomoc',
    52 => 'Nowy',
    53 => 'Panel Sterowania',
    54 => 'Nie można otworzyć pliku.',
    55 => 'Błąd przy',
    56 => 'Głosuj',
    57 => 'Hasło',
    58 => 'Login',
    59 => "Nie masz jeszcze konta? Załóż sobie <a href=\"{$_CONF['site_url']}/users.php?mode=new\">Nowy Użytkownik</a>",
    60 => 'Komentarze',
    61 => 'Załóż Konto',
    62 => 'słów',
    63 => 'Komentarze - Preferencje',
    64 => 'Wyślij Znajomemu',
    65 => 'Wersja do Wydruku',
    66 => 'Mój Kalendarz',
    67 => 'Witaj w Serwisie ',
    68 => 'strona główna',
    69 => 'kontakt',
    70 => 'szukaj',
    71 => 'napisz',
    72 => 'linki',
    73 => 'sonda',
    74 => 'kalendarz',
    75 => 'zaawansowane szukanie',
    76 => 'statystyka',
    77 => 'Pluginy',
    78 => 'Wydarzenia',
    79 => 'Co Nowego',
    80 => 'artykułów w ost.',
    81 => 'artykuł w ost.',
    82 => 'godz',
    83 => 'KOMENTARZE',
    84 => 'LINKI',
    85 => 'wygasają po 48 h',
    86 => 'Brak nowych komentarzy',
    87 => 'wygasają po 2 tyg',
    88 => 'Brak nowych linków',
    89 => 'Żadnych wydarzeń w najbliższym czasie',
    90 => 'Strona Główna',
    91 => 'Strona wygenerowana w ',
    92 => 'sekund',
    93 => 'Prawa Autorskie',
    94 => 'Wszelkie znaki handlowe i prawa autorskie należą do ich właścicieli.',
    95 => 'Wersja',
    96 => 'Grupy',
    97 => 'Lista Słów',
    98 => 'Pluginy',
    99 => 'ARTYKUŁY',
    100 => 'Brak nowych artykułów',
    101 => 'Twoje Wydarzenia',
    102 => 'Wydarzenia na Serwisie',
    103 => 'Kopie zapasowe bazy',
    104 => 'przez',
    105 => 'Wyślij Maila',
    106 => 'Odsłon',
    107 => 'Wersja GL - Test',
    108 => 'Opróżnij Cache',
    109 => 'Zgłoś nadużycie',
    110 => 'Powiadom administratora o tym wpisie',
    111 => 'Wersja PDF',
    112 => 'Zarejestrowani Użytkownicy',
    113 => 'Dokumentacja',
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
    1 => 'Napisz Komentarz',
    2 => 'Format',
    3 => 'Wyloguj',
    4 => 'Załóż Konto',
    5 => 'Login',
    6 => 'Aby zamieścić komentarz należy się zalogować.  Jeśli nie masz jeszcze konta, załóż sobie używając poniższego formularza.',
    7 => 'Ostatni komentarz zamieściłeś ',
    8 => " sekund temu.  Wymagana jest przerwa równa {$_CONF['commentspeedlimit']} sekund pomiędzy komentarzami",
    9 => 'Komentarz',
    10 => 'Wyślij Raport',
    11 => 'Wyślij Komentarz',
    12 => 'Proszę uzupełnić pola Tytuł i Komentarz. Pola te są wymagane do zamieszczenia komentarza.',
    13 => 'Twoje Informacje',
    14 => 'Podgląd',
    15 => 'Zgłoś tą wiadomość',
    16 => 'Tytuł',
    17 => 'Błąd',
    18 => 'Ważne Informacje',
    19 => 'Proszę starać się nie odbiegać od tematu.',
    20 => 'Proszę raczej odpowiadać na zamieszczane komentarze innych użytkowników zamiast rozpoczynania nowych wątków.',
    21 => 'Aby uniknąć powtarzania, zanim zamieścisz swój komentarz przeczytaj co napisali inni.',
    22 => 'Wpisz temat adekwatny do treści wiadomości.',
    23 => 'Twój adres email nie będzie ujawniony.',
    24 => 'Gall Anonim',
    25 => 'Czy chcesz zgłosić administratorowi ten komentarz?',
    26 => '%s zgłosił następujący komentarz:',
    27 => 'Raport nadużyć'
);

###############################################################################
# users.php

$LANG04 = array(
    1 => 'Profil Użytkownika',
    2 => 'Login',
    3 => 'Nazwa',
    4 => 'Hasło',
    5 => 'Email',
    6 => 'Strona Domowa',
    7 => 'O Sobie',
    8 => 'Klucz PGP',
    9 => 'Zapisz Informacje',
    10 => 'Ostatnie 10 komentarzy użytkownika',
    11 => 'Brak Komentarzy Użytkownika',
    12 => 'Preferencje Użytkownika',
    13 => 'Email Nightly Digest',
    14 => 'Hasło jest generowane automatycznie. Zalecana jest szybka zmiana hasła. Aby zmienić hasło, należy się zalogować a następnie kliknąć na Konto Info w Menu Użytkownika.',
    15 => "Twoje {$_CONF['site_name']} konto zostało założone. Zaloguj się wykorzystując informacje poniżej. Proszę zachować tego maila w bezpiecznym miejscu.",
    16 => 'Informacje Dotyczące Twojego Konta',
    17 => 'Konto nie istnieje',
    18 => 'Podany adres email nie jest prawidłowy',
    19 => 'Podany login lub adres email już istnieje',
    20 => 'Podany adres email nie jest prawidłowy',
    21 => 'Błąd',
    22 => "Zarejestruj się w serwisie {$_CONF['site_name']}!",
    23 => "Konto w serwisie {$_CONF['site_name']} pozwoli ci zamieszczać komentarze i inne pozycje w twoim imieniu. Brak konta umożliwia tylko zamieszczanie jako anonim. Twój adres email <b><i>nigdy</i></b> nie będzie widoczny publicznie.",
    24 => 'Twoje hasło zostanie wysłane pod podany adres email.',
    25 => 'Zapomniałeś/aś hasło?',
    26 => 'Wpisz <em>albo</em> swój login <em>albo</em> adres email podany podczas rejestracji i kliknij Prześlij Hasło. Instrukcje jak ustawić nowe hasło zostaną wysłane do Ciebie mailem.',
    27 => 'Zarejestruj Się!',
    28 => 'Prześlij Hasło',
    29 => 'wylogowany z adresu',
    30 => 'zalogowany z adresu',
    31 => 'Wybrana funkcja wymaga wcześniejszego zalogowania',
    32 => 'Podpis',
    33 => 'Niewidoczne dla publiki',
    34 => 'Twoje prawdziwe imię',
    35 => 'Wpisz nowe hasło',
    36 => 'Początek od http://',
    37 => 'Zastosowane do twoich komentarzy',
    38 => 'Wszystko o tobie! Każdy może to przeczytać',
    39 => 'Twój publiczny klucz PGP dla wszystkich',
    40 => 'Bez Ikon Sekcji',
    41 => 'Chętny/a do Zatwierdzania Materiałów',
    42 => 'Format Daty',
    43 => 'Artykuły Max Ilość',
    44 => 'Bez bloków',
    45 => 'Wygląd - Ustawienia Użytkownika',
    46 => 'Wyłączone Pozycje Użytkownika',
    47 => 'Konfiguracja Bloków z Nowościami Użytkownika',
    48 => 'Sekcje',
    49 => 'Bez ikon w artykułach',
    50 => 'Odznacz jeśli nie jesteś zainteresowany',
    51 => 'Tylko nowe artykuły',
    52 => 'Domyślnie jest',
    53 => 'Otrzymujesz nowe artykuły co wieczór',
    54 => 'Zaznacz sekcje i autorów, których nie chcesz oglądać.',
    55 => 'Jeśli nic nie zaznaczysz oznacza to, że akceptujesz domyślną konfigurację. Przy zaznaczaniu wybranych bloków domyślne ustawienie jest anulowane. Nazwy bloków objętych domyślnym ustawieniem są pogrubione.',
    56 => 'Autorzy',
    57 => 'Wyświetlanie',
    58 => 'Sortowanie wg',
    59 => 'Limit Komentarzy',
    60 => 'Jak chcesz wyświetlać swoje komentarze?',
    61 => 'Od najnowszych czy od najstarszych?',
    62 => 'Domyślnie jest 100',
    63 => "Hasło zostało wysłane i powinno wkrótce do ciebie dotrzeć. Postępuj zgodnie ze wskazówkami w wiadomości. Dziękujemy za korzystanie z serwisu {$_CONF['site_name']}",
    64 => 'Komentarze - Ustawienia Użytkownika',
    65 => 'Spróbuj Zalogować się Ponownie',
    66 => "Być może login został błędnie wpisany.  Spróbuj zalogować się ponownie. Czy jesteś <a href=\"{$_CONF['site_url']}/users.php?mode=new\">nowym użytkownikiem</a>?",
    67 => 'Członkowstwo Od',
    68 => 'Pamiętaj Mnie Przez',
    69 => 'Jak długo pamiętać cię po zalogowaniu?',
    70 => "Dostosuj wygląd i zawartość serwisu {$_CONF['site_name']}",
    71 => "Jedną z extra możliwości serwisu {$_CONF['site_name']} jest możliwość dopasowania zawartości i wyglądu strony.  Aby skorzystać z tych udogodnień należy się najpierw <a href=\"{$_CONF['site_url']}/users.php?mode=new\">zarejestrować</a> w serwisie {$_CONF['site_name']}.  Jesteś już członkiem?  Zaloguj się!",
    72 => 'Pulpit',
    73 => 'Język',
    74 => 'Zmień wygląd strony!',
    75 => 'Artykuły Wysyłane Mailem do',
    76 => 'Jeżeli zaznaczysz jakąś sekcję z poniższej listy będziesz, pod koniec każdego dnia, otrzymywał nowe artykuły zamieszczone w tej sekcji. Zaznacz sekcje, które cię interesują!',
    77 => 'Zdjęcie',
    78 => 'Dodaj swoje zdjęcie!',
    79 => 'Zaznacz tutaj aby wykasować to zdjęcie',
    80 => 'Logowanie',
    81 => 'Wyślij Maila',
    82 => '10 najnowszych artykułów użytkownika',
    83 => 'Materiały zamieszczone przez użytkownika',
    84 => 'Wszystkich artykułów:',
    85 => 'Wszystkich komentarzy:',
    86 => 'Znajdź wszystkie materiały zamieszczone przez',
    87 => 'Twój login',
    88 => "Ktoś (prawdopodobnie Ty) chce uzyskać nowe hasło do tego konta \"%s\" w {$_CONF['site_name']}, <{$_CONF['site_url']}>.\n\nJeśli chcesz kontynuować proszę kliknij ten link:\n\n",
    89 => "Jeśli nie chcesz kontynuować, zignoruj tą wiadomość (Twoje hasło pozostanie niezmienione).\n\n",
    90 => 'Poniżej możesz wprowadzić nowe hasło. Pamiętaj, że stare hasło jest aktywne do czasu przesłania tego zgłoszenia.',
    91 => 'Ustaw Nowe Hasło',
    92 => 'Wpisz Nowe Hasło',
    93 => 'Twoja ostatnia prośba o zmianę hasła była wysłana %d sekund temu. Wymagana jest przerwa co najmniej %d sekundowa pomiędzy takimi zgłoszeniami.',
    94 => 'Kasuj Konto "%s"',
    95 => 'Kliknij poniższy przycisk "kasuj konto" aby usunąć swoje konto z bazy danych. Proszę mieć na uwadze, że wszelkie artykuły i komentarze, zamieszczone przez Ciebie <strong>nie</strong> zostaną usunięte ale autor zmieni się na "Gall Anonim".',
    96 => 'kasuj konto',
    97 => 'Potwierdź Usunięcie Konta',
    98 => 'Czy aby napewno chcesz usunąć swoje konto? Po skasowaniu konta nie będzie można się ponownie zalogować na tej stronie (chyba, że założysz nowe konto). Jeśli tego chcesz kliknij ponownie "kasuj konto" w poniższym formularzu.',
    99 => 'Ochrona Prywatności dla',
    100 => 'Email od Admina',
    101 => 'TAK na emaile od Admina',
    102 => 'Email od Użytkowników',
    103 => 'TAK na emaile od innych użytkowników',
    104 => 'Pokaż Status Online',
    105 => 'Pokaż w bloku Who\'s Online',
    106 => 'Lokalizacja',
    107 => 'Pokaż w swoim publicznym profilu',
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
    1 => 'Brak Nowości',
    2 => 'Brak nowych artykułów.  Być może nie ma nowych artykułów w danej sekcji lub twoje ustawienia są zbyt limitujące.',
    3 => 'dla sekcji %s',
    4 => 'Dzisiejszy Artykuł Dnia',
    5 => 'Następny',
    6 => 'Poprzedni',
    7 => 'Pierwszy',
    8 => 'Ostatni'
);

###############################################################################
# profiles.php

$LANG08 = array(
    1 => 'Wystąpił błąd podczas wysyłania wiadomości. Spróbuj ponownie.',
    2 => 'Wiadomość wysłano.',
    3 => 'Proszę się upewnić, że adres email wpisany w pole Odpowiedz Do jest prawidłowy.',
    4 => 'Proszę się Przedstawić, wpisać Odpowiedz Do, Temat i Wiadomość',
    5 => 'Błąd: Nie ma takiego użytkownika.',
    6 => 'Wystąpił błąd.',
    7 => 'Profil Użytkownika',
    8 => 'Użytkownik',
    9 => 'URL Użytkownika',
    10 => 'Wyślij maila do',
    11 => 'Przedstaw Się:',
    12 => 'Twój email:',
    13 => 'Temat:',
    14 => 'Wiadomość:',
    15 => 'Bez znaczników HTML.',
    16 => 'Wyślij',
    17 => 'Wyślij Znajomemu',
    18 => 'Do (twój znajomy)',
    19 => 'Jego/Jej Adres Email',
    20 => 'Od (Przedstaw się;-)',
    21 => 'Twój Adres Email',
    22 => 'Należy wypełnić wszystkie pola',
    23 => "Tego maila wysłał %s (%s) z myślą, że może cię zainteresować poniższy artykuł z serwisu {$_CONF['site_url']}.  To nie jest SPAM a użyte adresy email nie zostały nigdzie zapisane celem ich późniejszego wykorzystania.",
    24 => 'Skomentuj ten artykuł tutaj',
    25 => 'Przed użyciem tej opcji musisz się zalogować.  Pozwoli nam to zabezpieczyć system przed niewłaściwym wykorzystaniem',
    26 => 'Ten formularz umożliwia wysłanie maila do wybranego użytkownika.  Wymagane jest wypełnienie wszystkich pól.',
    27 => 'Krótka Wiadomość',
    28 => '%s napisał: ',
    29 => "Dzienne zestawienie artykułów w Serwisie {$_CONF['site_name']} z dnia ",
    30 => 'Newsletter z dnia ',
    31 => 'Tytuł',
    32 => 'Data',
    33 => 'Cały artykuł dostępny tutaj ',
    34 => 'Koniec Wiadomości',
    35 => 'Sorry, ale ten użytkownik nie życzy sobie otrzymywania żadnych emaili.'
);

###############################################################################
# search.php

$LANG09 = array(
    1 => 'Wyszukiwanie Zaawansowane',
    2 => 'Słowa Kluczowe',
    3 => 'Sekcja',
    4 => 'Wszystko',
    5 => 'Gdzie',
    6 => 'Artykuły',
    7 => 'Komentarze',
    8 => 'Autorzy',
    9 => 'Wszystko',
    10 => 'Szukaj',
    11 => 'Wyniki',
    12 => 'trafienia',
    13 => 'Wyniki: Brak danych',
    14 => 'Nie znaleziono żadnych danych spełniających twoje kryteria',
    15 => 'Proszę spróbować ponownie.',
    16 => 'Tytuł',
    17 => 'Data',
    18 => 'Autor',
    19 => "Przeszukuje całą bazę artykułów i komentarzy {$_CONF['site_name']} ",
    20 => 'Data',
    21 => 'do',
    22 => '(Format Daty RRRR-MM-DD)',
    23 => 'Odsłon',
    24 => 'Znaleziono %d pozycji',
    25 => 'Szukano',
    26 => 'pozycji ',
    27 => 'sekund',
    28 => 'Brak artykułów lub komentarzy których szukasz',
    29 => 'Artykuły i Komentarze - Wyniki',
    30 => 'Brak linków spełniających twoje kryteria wyszukiwania',
    31 => 'Nie znaleziono żadnych pluginów',
    32 => 'Wydarzenie',
    33 => 'URL',
    34 => 'Lokalizacja',
    35 => 'Cały Dzień',
    36 => 'Brak wydarzeń spełniających twoje kryteria wyszukiwania',
    37 => 'Wydarzenia - Wyniki',
    38 => 'Linki - Wyniki',
    39 => 'Linki',
    40 => 'Wydarzenia',
    41 => 'Twoje zapytanie powinno zawierać co najmniej 3 znaki.',
    42 => 'Proszę używać następującego formatu daty: RRRR-MM-DD (rok-miesiąc-dzień).',
    43 => 'z wyrażeniem',
    44 => 'ze wszystkimi słowami',
    45 => 'z którymkolwiek ze słów',
    46 => 'Dalej',
    47 => 'Wstecz',
    48 => 'Autor',
    49 => 'Data',
    50 => 'Odsłon',
    51 => 'Link',
    52 => 'Lokalizacja',
    53 => 'Artykuły - Wyniki',
    54 => 'Komentarze - Wyniki',
    55 => 'fraza',
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
    1 => 'Statystyka Serwisu',
    2 => 'Wszystkich Wizyt w Serwisie',
    3 => 'Artykułów(Komentarzy) w Serwisie',
    4 => 'Sondy(Głosy) w Serwisie',
    5 => 'Linki(Kliknięcia) w Serwisie',
    6 => 'Wydarzenia w Serwisie',
    7 => '10 Najpopularniejszych Artykułów',
    8 => 'Tytuł Artykułu',
    9 => 'Odsłon',
    10 => 'Wygląda na to, że w tym serwisie nie ma żadnych artykułów albo nikt nigdy żadnego nie przeczytał.',
    11 => '10 Najczęściej Komentowanych Artykułów',
    12 => 'Komentarzy',
    13 => 'Wygląda na to, że w tym serwisie nie ma żadnych artykułów albo nikt nigdy nie skomentował żadnego.',
    14 => '10 Najpopularniejszych Sond',
    15 => 'Pytanie Sondy',
    16 => 'Głosów',
    17 => 'Wygląda na to, że w tym serwisie nie ma żadnych sond albo nikt nigdy nie oddał żadnego głosu.',
    18 => '10 Najpopularniejszych Linków',
    19 => 'Linki',
    20 => 'Wejść',
    21 => 'Wygląda na to, że w tym serwisie nie ma żadnych linków albo nikt nigdy nie kliknął na żaden z nich.',
    22 => '10 Najczęściej Emaliowanych Artykułów',
    23 => 'Emaile',
    24 => 'Wygląda na to, że nikt nie przesłał swoim znajomym żadnego artykułu',
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
    1 => 'Odnośniki',
    2 => 'Wyślij Znajomemu',
    3 => 'Wersja Do Wydruku',
    4 => 'Opcje Artykułu',
    5 => 'Format PDF'
);

###############################################################################
# submit.php

$LANG12 = array(
    1 => 'Aby przesłać %s musisz się wcześniej zalogować.',
    2 => 'Login',
    3 => 'Nowy Użytkownik',
    4 => 'Prześlij Wydarzenie',
    5 => 'Prześlij Linka',
    6 => 'Prześlij Artykuł',
    7 => 'Wymagany jest Login',
    8 => 'Prześlij',
    9 => 'Przy przesyłaniu informacji do tego serwisu, prosimy postępować wg poniższych wskazówek...<ul><li>Należy wypełnić wszystkie pola<li>Zamieścić pełną i poprawną informację<li>Sprawdzić dokładnie podawane adresy</ul>',
    10 => 'Tytuł',
    11 => 'Link',
    12 => 'Data Początkowa',
    13 => 'Data Końcowa',
    14 => 'Lokalizacja',
    15 => 'Opis',
    16 => 'Jeśli Inne, podaj jaka',
    17 => 'Kategoria',
    18 => 'Inne',
    19 => 'Przeczytaj Uważnie',
    20 => 'Błąd: Brak Kategorii',
    21 => 'Wybierając "Inne" wpisz nazwę kategorii',
    22 => 'Błąd: Puste Pola',
    23 => 'Wymagane jest wypełnienie wszystkich pól formularza.',
    24 => 'Zapisano',
    25 => 'Twój materiał %s został zapisany.',
    26 => 'Limit Czasowy',
    27 => 'Login',
    28 => 'Sekcja',
    29 => 'Artykuł',
    30 => 'Ostatni raz przesyłałeś ',
    31 => " sekund temu.  Wymagane jest co najmniej {$_CONF['speedlimit']} sekund przerwy pomiędzy zamieszczeniami",
    32 => 'Podgląd',
    33 => 'Podgląd Artykułu',
    34 => 'Wyloguj',
    35 => 'Znaczniki HTML nie są dozwolone',
    36 => 'Format',
    37 => "Przesłane wydarzenie do serwisu {$_CONF['site_name']} zostanie umieszczone w Kalendarzu Głównym, z którego użytkownicy będą mieli możliwość dodawanie wydarzeń do kalendarzy osobistych. Ta opcja <b>NIE SŁUŻY</b> do przechowywania informacji osobistych takich jak urodziny itp.<br><br>Po przesłaniu wydarzenia, zostanie ono przesłane do naszych administratorów i po zatwierdzeniu pojawi się w Kalendarzu Głównym.",
    38 => 'Dodaj Wydarzenie do',
    39 => 'Kalendarz Główny',
    40 => 'Kalendarz Osobisty',
    41 => 'Koniec',
    42 => 'Początek',
    43 => 'Cały Dzień',
    44 => 'Adres 1',
    45 => 'Adres 2',
    46 => 'Miasto/Miejscowość',
    47 => 'Województwo',
    48 => 'Kod Pocztowy',
    49 => 'Kategoria Wydarzenia',
    50 => 'Edytuj Kategorie Wydarzeń',
    51 => 'Lokalizacja',
    52 => 'Kasuj',
    53 => 'Załóż Konto'
);

###############################################################################
# ADMIN PHRASES - These are file phrases used in admin scripts
###############################################################################

###############################################################################
# admin/auth.inc.php

$LANG20 = array(
    1 => 'Wymagana jest Autoryzacja',
    2 => 'Odmowa! Niewłaściwy Login',
    3 => 'Niewłaściwe hasło użytkownika',
    4 => 'Login:',
    5 => 'Hasło:',
    6 => 'Wszelkie próby wejścia do segmentów administracyjnych są logowane i weryfikowane.<br>Dostęp tylko dla osób upoważnionych.',
    7 => 'login'
);

###############################################################################
# admin/block.php

$LANG21 = array(
    1 => 'Niewystarczające Uprawnienia Administracyjne',
    2 => 'Nie masz wystarczających uprawnień do edycji tego bloku.',
    3 => 'Edytor Bloków',
    4 => 'Wystąpił błąd odczytu (szczegóły w pliku error.log).',
    5 => 'Tytuł Bloku',
    6 => 'Sekcja',
    7 => 'Wszystkie',
    8 => 'Poziom Zabezpieczenia Bloku',
    9 => 'Numer Bloku',
    10 => 'Rodzaj Bloku',
    11 => 'Blok Portalowy',
    12 => 'Blok Normalny',
    13 => 'Opcje Bloku Portalowego',
    14 => 'URL pliku RDF',
    15 => 'Ostatnie Uaktualnienie Pliku RDF',
    16 => 'Opcje Bloku Normalnego',
    17 => 'Zawartość Bloku',
    18 => 'Proszę wpisać Tytuł Bloku, Poziom Zabezpieczenia i pola Zawartości',
    19 => 'Menadżer Bloków',
    20 => 'Tytuł Bloku',
    21 => 'PozZab Bloku',
    22 => 'Rodzaj Bloku',
    23 => 'Numer Bloku',
    24 => 'Sekcja Bloku',
    25 => 'Aby zmodyfikować lub wykasować blok kliknij na blok poniżej.  Aby stworzyć nowy blok kliknij Nowy Blok powyżej.',
    26 => 'Blok Schematowy',
    27 => 'Blok PHP',
    28 => 'Opcje Bloku PHP',
    29 => 'Funkcje Bloku',
    30 => 'Jeśli chcesz aby twój blok obsługiwał kod PHP, wpisz nazwę funkcji powyżej.  Nazwa funkcji musi rozpoczynać się prefiksem "phpblock_" (np. phpblock_getweather).  Jeżeli nie będzie prefiksu, twoja funkcja NIE zostanie wywołana.  Związane jest to z uniemożliwieniem \'wrzucania\' skryptów przez hakerów, które mogą uszkodzić twój system.  Upewnij się, że nie ma pustych nawiasów "()" po nazwie funkcji.  Na koniec, zalecamy umieszczenie całego kodu PHP Block w /ścieżka/do/geeklog/system/lib-custom.php.  Pozwoli to na zachowanie wersji kodu bez zmian nawet przy aktualizacji Geekloga.',
    31 => 'Błąd w Bloku PHP.  Funkcja, %s, nie istnieje.',
    32 => 'Błąd. Puste pole(a)',
    33 => 'Musisz wpisać URL do pliku .rdf dla bloków portalowych',
    34 => 'Musisz wpisać tytuł i funkcję bloków PHP',
    35 => 'Musisz wpisać tytuł i zawartość dla bloków normalnych',
    36 => 'Musisz wpisać zawartość bloków schematowych',
    37 => 'Nieprawidłowa nazwa funkcji bloku PHP',
    38 => 'Funkcje dla Bloków PHP muszą mieć prefiks \'phpblock_\' (np. phpblock_getweather).  Prefiks \'phpblock_\' ze względów bezpieczeństwa aby uniknąć wykonywanie kodu.',
    39 => 'Strona',
    40 => 'Lewa',
    41 => 'Prawa',
    42 => 'Musisz wpisać porządek bloku i poziom zabezpieczeń dla domyślnych bloków Geekloga',
    43 => 'Tylko Strona Główna',
    44 => 'Odmowa Dostępu',
    45 => "Próbujesz wyedytować blok, do którego nie masz uprawnień.  Ta próba została zapisana w logu. Proszę <a href=\"{$_CONF['site_admin_url']}/block.php\">wrócić do ekranu administrowania blokami</a>.",
    46 => 'Nowy Blok',
    47 => 'Panel Sterowania',
    48 => 'Nazwa Bloku',
    49 => ' (nazwa unikalna i bez spacji)',
    50 => 'URL Pliku Pomocy',
    51 => 'uwzględnij http://',
    52 => 'Jeśli zostawisz puste, ikona pomocy dla tego bloku się nie pojawi',
    53 => 'Aktywne',
    54 => 'zapisz',
    55 => 'anuluj',
    56 => 'kasuj',
    57 => 'Przesuń Blok w Dół',
    58 => 'Przesuń Blok w Górę',
    59 => 'Przesuń blok na prawo',
    60 => 'Przesuń blok w lewo',
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
    1 => 'Poprzednie Artykuły',
    2 => 'Następne Artykuły',
    3 => 'Tryb',
    4 => 'Format',
    5 => 'Edytor Artykułów',
    6 => 'Brak artykułów w systemie',
    7 => 'Autor',
    8 => 'zapisz',
    9 => 'podgląd',
    10 => 'anuluj',
    11 => 'kasuj',
    12 => 'ID',
    13 => 'Tytuł',
    14 => 'Sekcja',
    15 => 'Data',
    16 => 'Wstęp',
    17 => 'Część Główna',
    18 => 'Wejść',
    19 => 'Komentarze',
    20 => 'Ping',
    21 => 'Send Ping',
    22 => 'Lista Artykułów',
    23 => 'Aby zmodyfikować lub wykasować artykuł, kliknij na numer danego artykułu poniżej. Aby przeglądnąć artykuł kliknij na tytuł danego artykułu. Aby wpisać nowy artykuł kliknij na Nowy Artykuł powyżej.',
    24 => 'The ID you chose for this story is already in use. Please use another ID.',
    25 => 'Error when saving story',
    26 => 'Podgląd Artykułu',
    27 => 'If you use [unscaledX] instead of [imageX], the image will be inserted at its original dimensions.',
    28 => '<p><b>PREVIEWING</b>: Previewing a story with images attached is best done by saving the article as a draft INSTEAD OF hitting the preview button.  Use the preview button only when images are not attached.',
    29 => 'Trackbacks',
    30 => 'Błąd Uploadu Pliku',
    31 => 'Proszę wpisać Tytuł i Wstęp',
    32 => 'Artykuł Dnia',
    33 => 'Artykuł Dnia może być tylko jeden',
    34 => 'Wersja Robocza',
    35 => 'Tak',
    36 => 'Nie',
    37 => 'Więcej autorstwa',
    38 => 'Więcej z sekcji',
    39 => 'Emaile',
    40 => 'Odmowa Dostępu',
    41 => "Próbujesz wyedytować artykuł do którego nie masz uprawnień.  Ta próba została zapisana w logu.  Możesz podglądnąć artykuł poniżej. Proszę <a href=\"{$_CONF['site_admin_url']}/story.php\">wrócić do strony administrującej artykułami.",
    42 => "Próbujesz wyedytować artykuł do którego nie masz uprawnień.  Ta próba została zapisana w logu.  Proszę <a href=\"{$_CONF['site_admin_url']}/story.php\">wrócić do strony administrującej artykułami</a>.",
    43 => 'Nowy Artykuł',
    44 => 'Panel Sterowania',
    45 => 'Dostęp',
    46 => '<b>UWAGA:</b> jeśli przesuniesz datę do przodu, artykuł nie zostanie opublikowany wcześniej. Oznacza to również, że artykuł nie będzie uwzględniony w pliku RDF i zostanie pominięty przy wyszukiwaniu.',
    47 => 'Zdjęcia',
    48 => 'zdjęcie',
    49 => 'prawo',
    50 => 'lewo',
    51 => 'Aby dodać jedno ze zdjęć, które chcesz podpiąć do tego artykułu musisz wstawić specjalnie sformatowany tekst.  Tekst jest następujący [imageX], [imageX_right] lub [imageX_left] gdzie X to numer obrazka, który załączyłeś.  UWAGA: Musisz używać obrazków, które załączasz.  Inaczej nie będziesz w stanie zapisać swojego artykułu.<BR><P><B>PODGLĄD</B>: Podgląd artykułu z załączonymi obrazkami działa najlepiej po uprzednim zapisaniu artykułu jako kopia ZAMIAST użycia bezpośrednio klawisza podgląd.  Używaj klawisza podgląd tylko gdy nie podpinasz obrazków.',
    52 => 'Kasuj',
    53 => 'nie został użyty.  Musisz umieścić ten obrazek we wstępie lub w głównej części zanim zapiszsz zmiany',
    54 => 'Załączonych Obrazów Nie Użyto',
    55 => 'Pojawiły się następujące błędy podczas próby zapisu tego artykułu.  Proszę je poprawić przed ponownym zapisem',
    56 => 'Pokaż Ikonę Artykułu',
    57 => 'Pokaż nieskalowalne zdjęcie',
    58 => 'Zarządzanie Artykułami',
    59 => 'Opcja',
    60 => 'Aktywna',
    61 => 'Auto Archiwizacja',
    62 => 'Auto Kasacja',
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
    1 => 'Edytor Sekcji',
    2 => 'ID Sekcji',
    3 => 'Nazwa Sekcji',
    4 => 'Ikona Sekcji',
    5 => '(bez spacji)',
    6 => 'Wykasowanie sekcji wykasuje wszystkie artykuły i bloki z nią powiązane',
    7 => 'Proszę wpisać ID Sekcji i Nazwę Sekcji',
    8 => 'Menadżer Sekcji',
    9 => 'Aby zmodyfikować lub wykasować sekcję, kliknij na daną sekcję.  Aby stworzyć nową sekcję kliknij na Nowa Sekcja powyżej. W nawiasie znajduje się twój poziom dostępu do każdej sekcji. Gwiazdka (*) oznacza domyślną sekcję.',
    10 => 'Sortowanie',
    11 => 'Artykułów/Stronę',
    12 => 'Odmowa Dostępu',
    13 => "Próbujesz wyedytować sekcję do której nie masz uprawnień.  Ta próba została zapisana w logu. Proszę <a href=\"{$_CONF['site_admin_url']}/topic.php\">wrócić do ekranu administrującego sekcjami</a>.",
    14 => 'Sortuj Wg',
    15 => 'alfabetycznie',
    16 => 'domyślnie jest',
    17 => 'Nowa Sekcja',
    18 => 'Panel Sterowania',
    19 => 'zapisz',
    20 => 'anuluj',
    21 => 'kasuj',
    22 => 'Domyślnie',
    23 => 'zrób z tego domyślną sekcję dla przesyłanych artykułów',
    24 => '(*)',
    25 => 'Sekcja Archiwalna',
    26 => 'domyślna sekcja dla archiwizowanych artykułów. Dozwolona jest tylko jedna sekcja.',
    27 => 'Or Upload Topic Icon',
    28 => 'Maximum',
    29 => 'File Upload Errors'
);

###############################################################################
# admin/user.php

$LANG28 = array(
    1 => 'Edytor Użytkowników',
    2 => 'ID Użytkownika',
    3 => 'Login',
    4 => 'Pełna Nazwa',
    5 => 'Hasło',
    6 => 'Poziom Zabezpieczenia',
    7 => 'Adres Email',
    8 => 'Strona Domowa',
    9 => '(bez spacji)',
    10 => 'Proszę wpisać Login i Adres Email',
    11 => 'Menadżer Użytkowników',
    12 => 'Aby zmodyfikować lub usunąć użytkownika, kliknij na odpowiedni login poniżej.  Aby założyć nowego użytkownika kliknij nowy użytkownik po lewej. Możesz przeszukać bazę wpisując część loginu, adresu email lub pełnej nazwy (np. *son* lub *.edu) w poniższym formularzu.',
    13 => 'PozZab',
    14 => 'Data Rej.',
    15 => 'Nowy Użytkownik',
    16 => 'Panel Sterowania',
    17 => 'zmień hasło',
    18 => 'anuluj',
    19 => 'kasuj',
    20 => 'zapisz',
    21 => 'Login już istnieje.',
    22 => 'Błąd',
    23 => 'Dodanie Grupowe',
    24 => 'Grupowy Import Użytkowników',
    25 => 'Można zaimportować grupowo użytkowników do Geekloga.  Plik tekstowy musi być rozdzielany znakami tabulacji oraz musi mieć następującą strukturę: imię i nazwisko, login, adres email.  Każdy zaimportowany użytkownik dostanie mailem hasło.  W jednej linii może występować tylko jeden użytkownik.  Nie zastosowanie do tych instrukcji spowoduje problemy, które mogą wymagać ręcznej obróbki dlatego sprawdź dwa razy zawarte informacje!',
    26 => 'Szukaj',
    27 => 'Zawęż Wyniki',
    28 => 'Zaznacz tutaj aby usunąć obrazek',
    29 => 'Ścieżka',
    30 => 'Import',
    31 => 'Nowi Użytkownicy',
    32 => 'Przetwarzanie zakończone. Zaimportowano %d i napotkano %d błędów',
    33 => 'prześlij',
    34 => 'Błąd: Musisz podać plik do załadowania.',
    35 => 'Ostatni Login',
    36 => '(nigdy)',
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
    1 => 'Zatwierdź',
    2 => 'Kasuj',
    3 => 'Edytuj',
    4 => 'Profil',
    10 => 'Tytuł',
    11 => 'Data Początkowa',
    12 => 'URL',
    13 => 'Kategoria',
    14 => 'Data',
    15 => 'Sekcja',
    16 => 'Nazwa użytkownika',
    17 => 'Pełna nazwa użytkownika',
    18 => 'Email',
    34 => 'Panel Sterowania',
    35 => 'Przesłane Artykuły',
    36 => 'Przesłane Linki',
    37 => 'Przesłane Wydarzenia',
    38 => 'Prześlij',
    39 => 'Żadnych materiałów do zatwierdzenia',
    40 => 'Materiały przesłane przez użytkownika'
);

###############################################################################
# admin/mail.php

$LANG31 = array(
    1 => 'Mail',
    2 => 'Od',
    3 => 'Odpowiedz',
    4 => 'Temat',
    5 => 'Wiadomość',
    6 => 'Wyślij do:',
    7 => 'Wszyscy',
    8 => 'Admin',
    9 => 'Opcje',
    10 => 'HTML',
    11 => 'Pilne!',
    12 => 'Wyślij',
    13 => 'Zresetuj',
    14 => 'Ignoruj ustawienia użytkownika',
    15 => 'Błąd podczas wysyłania do: ',
    16 => 'Wiadomość wysłana do: ',
    17 => "<a href={$_CONF['site_admin_url']}/mail.php>Wyślij następną wiadomość</a>",
    18 => 'Do',
    19 => 'UWAGA: jeśli chcesz wysłać wiadomość do wszystkich użytkowników, wybierz Logged-in Users z listy rozwijanej.',
    20 => "Wysłanych <successcount> wiadomości oraz <failcount> niewysłanych wiadomości.  Poniżej szczegóły dotyczące próby wysłania każdej wiadomości.  Możesz również <a href=\"{$_CONF['site_admin_url']}/mail.php\">Wysłać wiadomość</a> lub możesz <a href=\"{$_CONF['site_admin_url']}/moderation.php\">wrócić do strony administracyjnej</a>.",
    21 => 'Błąd',
    22 => 'Sukces',
    23 => 'Brak błędów',
    24 => 'Bez powodzenia',
    25 => '-- Wybierz Grupę --',
    26 => 'Proszę uzupełnić wszystkie pola i wybrać grupę z listy.'
);

###############################################################################
# admin/plugins.php

$LANG32 = array(
    1 => 'Instalowanie pluginów może spowodować uszkodzenie twojej instalacji Geekloga jak również systemu.  Ważne jest aby instalować pluginy ściągnięte z <a href="http://www.geeklog.net" target="_blank">Geeklog Homepage</a> ponieważ są one szczegółowo przez nas testowane na różnych systemach operacyjnych.  Ważne abyś miał świadomość, że instalacja pluginu wymaga wykonania kilku komend filesystemu, co wiąże się z bezpieczeństwem systemu, zwłaszcza gdy pluginy pochodzą od osób trzecich.  Pomimo tego ostrzeżenia, nie gwarantujemy sukcesu instalacyjnego ani nie możemy być pociągnięci do odpowiedzialności za jakiekolwiek szkody wynikłe z instalacji jakiegokolwiek pluginu.  Instalacja na własne ryzyko.  Instrukcje dotyczące ręcznej instalacji pluginu znajdują się w każdym pakiecie z pluginem.',
    2 => 'Umowa Instalacyjna Pluginów',
    3 => 'Plugin Formularz Instalacyjny',
    4 => 'Plugin Plik',
    5 => 'Zainstalowane Pluginy',
    6 => 'Ostrzeżenie: Plugin Już Zainstalowany!',
    7 => 'Plugin, który próbujesz zainstalować już istnieje.  Proszę wykasować istniejący plugin i zainstalować go ponownie',
    8 => 'Sprawdzanie Kompatybilności Pluginu Zakończone Niepowodzeniem',
    9 => 'Ten plugin wymaga nowszej wersji Geekloga. Albo uaktualnij swoją kopię <a href=http://www.geeklog.net>Geekloga</a> albo ściągnij nowszą wersję tego pluginu.',
    10 => '<br><b>Brak zainstalowanych pluginów.</b><br><br>',
    11 => 'Aby zmodyfikować lub wykasować plugin, kliknij na nazwę pluginu. Zobaczysz więcej informacji włącznie z adresem strony autora. Widoczne są wersje zainstalowana i wersja kodu. To pomoże stwierdzić czy dany plugin wymaga aktualizacji. Aby zainstalować lub uaktualnić dany plugin proszę zapoznać się z dołączoną do niego instrukcją.',
    12 => 'brak nazwy pluginu dla plugineditor()',
    13 => 'Edytor Pluginów',
    14 => 'Nowy Plugin',
    15 => 'Panel Sterowania',
    16 => 'Nazwa',
    17 => 'Wersja',
    18 => 'Wersja GL',
    19 => 'Aktywny',
    20 => 'Tak',
    21 => 'Nie',
    22 => 'Instaluj',
    23 => 'Zapisz',
    24 => 'Anuluj',
    25 => 'Kasuj',
    26 => 'Nazwa Pluginu',
    27 => 'Strona Domowa Pluginu',
    28 => 'Wersja Zainstalowana',
    29 => 'Wersja GL',
    30 => 'Skasować Plugin?',
    31 => 'Czy aby na pewno skasować ten plugin?  Ta operacja usunie wszelkie pliki, dane i strukturę używane przez ten plugin.  Jeśli chcesz kontynuwać kliknij kasuj poniżej.',
    32 => '<p><b>Błędny format tagu AutoLink</b></p>',
    33 => 'Wersja Kodu',
    34 => 'Aktualizacja',
    35 => 'Edit',
    36 => 'Code',
    37 => 'Data',
    38 => 'Update!'
);

###############################################################################
# admin/syndication.php

$LANG33 = array(
    1 => 'stwórz plik',
    2 => 'zapisz',
    3 => 'kasuj',
    4 => 'anuluj',
    10 => 'Syndykacja Treści',
    11 => 'Nowy Plik',
    12 => 'Panel Sterowania',
    13 => 'Aby zmodyfikować lub usunąć plik, kliknij na tytuł pliku poniżej. Aby stworzyć nowy plik, kliknij Nowy Plik powyżej.',
    14 => 'Tytuł',
    15 => 'Rodzaj',
    16 => 'Plik',
    17 => 'Format',
    18 => 'ost. aktualizacja',
    19 => 'Aktywny',
    20 => 'Tak',
    21 => 'Nie',
    22 => '<i>(plików brak)</i>',
    23 => 'Wszystkie Artykuły',
    24 => 'Edytor Plików',
    25 => 'Tytuł Pliku',
    26 => 'Limit',
    27 => 'Długość tekstu',
    28 => '(0 = bez tekstu, 1 = pełny tekst, inne = ograniczona liczba znaków.)',
    29 => 'Opis',
    30 => 'Ost. Aktualizacja',
    31 => 'Kodowanie',
    32 => 'Język',
    33 => 'Zawartość',
    34 => 'Tytułów',
    35 => 'Godzin',
    36 => 'Wybierz rodzaj pliku',
    37 => 'Masz zainstalowany co najmniej jeden plugin zarządzający syndykacją treści. Poniżej należy wybrać opcję czy chcesz stworzyć plik Geeklogowy czy też plik dla jednego z pluginów.',
    38 => 'Błąd: Brakujące Pola',
    39 => 'Wpisz Tytuł Pliku, Opis i Nazwę Pliku.',
    40 => 'Proszę podać liczbę tytułów lub czas w godzinach.',
    41 => 'Linki',
    42 => 'Wydarzenia',
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
    1 => "Hasło zostało wysłane i powinieneś go wkrótce otrzymać. Postępuj zgodnie ze wskazówkami w wiadomości. Dziękujemy za korzystanie z serwisu {$_CONF['site_name']}",
    2 => "Dziękujemy za przesłanie artykułu do {$_CONF['site_name']}.  Otrzymali go nasi pracownicy do zatwierdzenia. Po zatwierdzeniu twój artykuł będzie dostępny dla innych użytkowników naszego serwisu.",
    3 => "Dziękujemy za przesłanie linka do {$_CONF['site_name']}.  Otrzymali go nasi pracownicy do zatwierdzenia.  Po zatwierdzeniu twój link będzie widoczny w sekcji <a href={$_CONF['site_url']}/links.php>linki</a>.",
    4 => "Dziękujemy za przesłanie wydarzenia do {$_CONF['site_name']}.  Otrzymali go nasi pracownicy do zatwierdzenia.  Po zatwierdzeniu twoje wydarzenie będzie widoczne w sekcji <a href={$_CONF['site_url']}/calendar.php>kalendarz</a>.",
    5 => 'Informacje dotyczące twojego konta zostały zapisane.',
    6 => 'Twoje preferencje dotyczące wyglądu zostały zapisane.',
    7 => 'Twoje preferencje dotyczące komentarzy zostały zapisane.',
    8 => 'Zostałeś/aś pomyślnie wylogowany/a.',
    9 => 'Artykuł został zapisany.',
    10 => 'Artykuł został wykasowany.',
    11 => 'Blok został zapisany.',
    12 => 'Blok został wykasowany.',
    13 => 'Sekcja została zapisana.',
    14 => 'Sekcja oraz wszystkie artykuły i bloki z nią związane zostały wykasowane.',
    15 => 'Link został zapisany.',
    16 => 'Link został wykasowany.',
    17 => 'Wydarzenie zostało zapisane.',
    18 => 'Wydarzenie zostało wykasowane.',
    19 => 'Głosowanie zostało zapisane.',
    20 => 'Głosowanie zostało wykasowane.',
    21 => 'Nowy użytkownik został zapisany.',
    22 => 'Nowy użytkownik został wykasowany.',
    23 => 'Wystąpił błąd podczas próby dodania wydarzenia do twojego kalendarza. Nie przekazano ID wydarzenia.',
    24 => 'Wydarzenie zostało zapisane w twoim kalendarzu',
    25 => 'Kalendarz osobisty dostępny jest dopiero po zalogowaniu',
    26 => 'Wydarzenie zostało usunięte z twojego kalendarza osobistego',
    27 => 'Wiadomość wysłano.',
    28 => 'Plugin został zapisany',
    29 => 'Sorry, kalendarze osobiste są niedostępne w tym serwisie',
    30 => 'Odmowa Dostępu',
    31 => 'Sorry, nie masz dostępu do strony administrującej artykułami.  Wszelkie nieautoryzowane próby wejścia są logowane',
    32 => 'Sorry, nie masz dostępu do strony administrującej sekcjami.  Wszelkie nieautoryzowane próby wejścia są logowane',
    33 => 'Sorry, nie masz dostępu do strony administrującej blokami.  Wszelkie nieautoryzowane próby wejścia są logowane',
    34 => 'Sorry, nie masz dostępu do strony administrującej linkami.  Wszelkie nieautoryzowane próby wejścia są logowane',
    35 => 'Sorry, nie masz dostępu do strony administrującej wydarzeniami.  Wszelkie nieautoryzowane próby wejścia są logowane',
    36 => 'Sorry, nie masz dostępu do strony administrującej sondami.  Wszelkie nieautoryzowane próby wejścia są logowane',
    37 => 'Sorry, nie masz dostępu do strony administrującej użytkownikami.  Wszelkie nieautoryzowane próby wejścia są logowane',
    38 => 'Sorry, nie masz dostępu do strony administrującej pluginami.  Wszelkie nieautoryzowane próby wejścia są logowane',
    39 => 'Sorry, nie masz dostępu do strony administrującej mailem.  Wszelkie nieautoryzowane próby wejścia są logowane',
    40 => 'Komunikat Systemowy',
    41 => 'Sorry, nie masz dostępu do strony edycyjnej zamienników słów.  Wszelkie nieautoryzowane próby wejścia są logowane',
    42 => 'Słowo zostało zapisane.',
    43 => 'Słowo zostało wykasowane.',
    44 => 'Plugin został zainstalowany!',
    45 => 'Plugin został wykasowany.',
    46 => 'Sorry, nie masz dostępu do opcji archiwizowania bazy danych.  Pamiętaj, że Wszelkie nieautoryzowane próby wejścia są logowane',
    47 => 'Ta opcja działa tylko pod systemem *nixowym. Jeśli masz właśnie taki system operacyjny to cache został wyczyszczony. Pod Windozą, musisz poszukać plików adodb_*.php i usunąć je ręcznie.',
    48 => "Dziekujemy za zainteresowanie członkowstwem w {$_CONF['site_name']}. Zweryfikujemy twoje zgłoszenie i po zatwierdzeniu zostanie wysłane hasło pod podany adres e-mail.",
    49 => 'Twoja grupa została zapisana.',
    50 => 'Grupa została wykasowana.',
    51 => 'Ten login juz istnieje. Prosze wybrac inny.',
    52 => 'Podany adres email nie wyglada na prawidlowy.',
    53 => 'Twoje nowe hasło zostało przyjęte. Proszę zalogowac sie ponizej wpisując nowe hasło.',
    54 => 'Twoja prośba o nowe hasło wygasła. Proszę spróbowac ponownie poniżej.',
    55 => 'Wkrótce powinien dotrzeć do Ciebie email. Postępuj zgodnie ze wskazówkami aby ustawić nowe hasło dla Twojego konta.',
    56 => 'Podany adres email jest już używany.',
    57 => 'Twoje konto zostało pomyślnie usunięte.',
    58 => 'Plik został zapisany.',
    59 => 'Plik został skasowany.',
    60 => 'Plugin został pomyślnie zaktualizowany',
    61 => 'Plugin %s: Nieznany komunikat placeholder',
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
    'access' => 'Dostęp',
    'ownerroot' => 'Właściciel/Root',
    'group' => 'Grupa',
    'readonly' => 'Tylko-do-Odczytu',
    'accessrights' => 'Prawa Dostępu',
    'owner' => 'Właściciel',
    'grantgrouplabel' => 'Udziel Praw do Edycji Powyższej Grupie',
    'permmsg' => 'UWAGA: członkowie to wszyscy zalogowani użytkownicy na stronie a anonimowi to wszyscy użytkownicy przeglądający zawartość strony bez zalogowania.',
    'securitygroups' => 'Grupy Zabezpieczeń',
    'editrootmsg' => "Pomimo tego, że jesteś User Administrator, nie możesz edytować głównego użytkownka. Najpierw sam musisz zostać użytkownikiem głównym.  Możesz edytować pozostałych użytkowników. Wszelkie nie autoryzowane próby edycji użytkowników głównych są logowane.  Powrót do strony Administracja Użytkownikami serwisu <a href=\"{$_CONF['site_admin_url']}/user.php\"></a>.",
    'securitygroupsmsg' => 'Zaznacz grupy do których chcesz przypisać użytkownika.',
    'groupeditor' => 'Edytor Grup',
    'description' => 'Opis',
    'name' => 'Nazwa',
    'rights' => 'Uprawnienia',
    'missingfields' => 'Brakujące Pola',
    'missingfieldsmsg' => 'Musisz podać nazwę i opis grupy',
    'groupmanager' => 'Menadżer Grup',
    'newgroupmsg' => 'Aby zmodyfikować lub wykasować grupę kliknij na daną grupę poniżej. Aby stworzyć nową grupę kliknij nowa grupa powyżej. Grupy główne nie mogą być wykasowane są używane przez system.',
    'groupname' => 'Nazwa Grupy',
    'coregroup' => 'Grupa Główna',
    'yes' => 'Tak',
    'no' => 'Nie',
    'corerightsdescr' => "Ta grupa jest Główną Grupą strony {$_CONF['site_name']} .  Z tego względu prawa dla  tej grupy nie mogą być edytowane.  Poniżej znajduje się lista do-odczytu praw tej grupy.",
    'groupmsg' => 'Grupy Zabezpieczeń Groups w tym serwisie są hierarchiczne.  Poprzez dodanie tej grupy do jakiejkolwiek grupy poniżej, tym samym nadasz tej grupie takie same prawa.  Jeżeli to możliwe to zalecamy wykorzystanie poniższych grup przy nadawaniu praw jakiejkolwiek grupie.  Jeśli chcesz nadać tej grupie specjalne prawa, możesz wybrać uprawnienia do różnych funkcji serwisu w poniższej sekcji \'Uprawnienia\'.  Aby dodać tą grupę do którejkolwiek z poniższej listy, zaznacz po prostu wybraną grupę(y).',
    'coregroupmsg' => "To jest Grupa główna serisu {$_CONF['site_name']}.  Z tego względu grupy należące do tej kategorii nie mogą być edytowane.  Poniżej znajduje się lista, tylko do odczytu, grup z tej kategorii.",
    'rightsdescr' => 'Dostęp grupowy to wybranych uprawnień poniżej może być nadany bezpośrednio danej grupie LUB innej grupie, do której dana grupa należy.  Te z listy poniżej bez pola wyboru oznaczają uprawnienia tej grupy wynikające z faktu przynależności do grupy z danym uprawnieniem.  Uprawnienia z polami wyboru mogą zostać bezpośrednio nadane danej grupie.',
    'lock' => 'Blokada',
    'members' => 'Członkowie',
    'anonymous' => 'Anonim',
    'permissions' => 'Uprawnienia',
    'permissionskey' => 'R = odczyt, E = edycja, prawa do edycji zakładają prawa do odczytu',
    'edit' => 'Edycja',
    'none' => 'Brak',
    'accessdenied' => 'Odmowa Dostępu',
    'storydenialmsg' => "Brak dostępu do tego artykułu.  Prawdopodobnie nie jesteś członkiem serwisu {$_CONF['site_name']}.  Zapraszamy do <a href=users.php?mode=new> członkostwa</a> w serwisie {$_CONF['site_name']} aby otrzymać pełny dostęp!",
    'nogroupsforcoregroup' => 'Grupa nie należy do pozostałych grup',
    'grouphasnorights' => 'Grupa nie ma dostępu do żadnych funkcji administracyjnych tego serwisu',
    'newgroup' => 'Nowa Grupa',
    'adminhome' => 'Panel Sterowania',
    'save' => 'zapisz',
    'cancel' => 'anuluj',
    'delete' => 'kasuj',
    'canteditroot' => 'Wystąpiła próba edycji grupy Głównej. Niestety nie należysz do żadnej z grup Głównych dlatego nie masz dostępu do tej grupy.  Skontaktuj się z administratorem systemu jeśli uważasz, że to pomyłka',
    'listusers' => 'Listuj Użytkowników',
    'listthem' => 'listuj',
    'usersingroup' => 'Użytkownicy w grupie %s',
    'usergroupadmin' => 'Administracja Grupami Użytkowników',
    'add' => 'Dodaj',
    'remove' => 'Usuń',
    'availmembers' => 'Dostępni Członkowie',
    'groupmembers' => 'Członkowie Grupy',
    'canteditgroup' => 'Aby wyedytować tą grupę musisz do niej należeć. Proszę skontaktować się z administratorem jeśli uważasz, że nastąpiła pomyłka.',
    'cantlistgroup' => 'Aby zobaczyć członków tej grupy, musisz być jej członkiem. Skontaktuj się z administratorem jeśli uważasz, że to jest błąd.',
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
    'last_ten_backups' => '10 Kopii Zapasowych',
    'do_backup' => 'Wykonaj Kopię Zapasową',
    'backup_successful' => 'Kopia bazy wykonana pomyślnie.',
    'db_explanation' => 'Aby wykonać nową kopię zapasową twojego systemu, kliknij poniższy przycisk',
    'not_found' => "Niewłaściwa ścieżka lub program archiwizujący nie jest wykonywalny.<br>Sprawdź <strong>\$_DB_mysqldump_path</strong> ustawienia w config.php.<br>Zmienna jest obecnie ustawiona na: <var>{$_DB_mysqldump_path}</var>",
    'zero_size' => 'Wykonanie Kopii Nie Powiodło Się: Rozmiar pliku 0 bajtów',
    'path_not_found' => "{$_CONF['backup_path']} nie istnieje lub nie jest katalogiem",
    'no_access' => "BŁĄD: Katalog {$_CONF['backup_path']} jest niedostępny.",
    'backup_file' => 'Plik kopii',
    'size' => 'Rozmiar',
    'bytes' => 'Bajtów',
    'total_number' => 'Wszystkich kopii bezpieczeństwa: %d'
);

###############################################################################

$LANG_BUTTONS = array(
    1 => 'Główna',
    2 => 'Kontakt',
    3 => 'Napisz Artykuł',
    4 => 'Linki',
    5 => 'Sonda',
    6 => 'Kalendarz',
    7 => 'Statystyka',
    8 => 'Osobiste',
    9 => 'Szukaj',
    10 => 'zaawansowane szukanie',
    11 => 'Directory'
);

###############################################################################
# 404.php

$LANG_404 = array(
    1 => 'Błąd 404',
    2 => 'Kurcze, wszędzie szukałem ale nie mogę znaleźć <b>%s</b>.',
    3 => "<p>Przykro nam ale dany plik nie istnieje. Sprawdź <a href=\"{$_CONF['site_url']}/search.php\">stronę z wyszukiwarką</a> aby sprawdzić czy można znaleźć co zgubiłeś."
);

###############################################################################
# login form

$LANG_LOGIN = array(
    1 => 'Wymagany jest login',
    2 => 'Sorry, aby wejść na te strony musisz być zalogowany.',
    3 => 'Login',
    4 => 'Nowy Użytkownik'
);

###############################################################################
# pdfgenerator.php

$LANG_PDF = array(
    1 => 'Opcja PDF została wyłączona',
    2 => 'Dany dokument nie został wygenerowany. Dokument został otrzymany ale nie mógł być przetworzony.  Upewnij się, że przesłane dokumenty html zostały zapisane w standardowym xHTML. Proszę mieć na uwadze, że skomplikowane dokumenty html-owe mogą zostać przetworzone z błędem lub w ogóle. Dokument, który próbowałaś/eś wygenrować miał rozmiar 0 bajtów i został usunięty. Jeśli uważasz, że Twój dokument powinien zostać wygenerowany prawidłowo, prześlij go raz jeszcze.',
    3 => 'Nieznany błąd podczas generowania pliku PDF',
    4 => "Nie określono żadnej strony albo chcesz użyć poniższego narzędzia do generowania PDF-a ad-hoc.  Jeśli uważasz, że strona to błąd\n          skontaktuj się z administratorem systemu.  W przeciwnym razie, użyj poniższego formularza aby wygenerować PDF-a metodą ad-hoc.",
    5 => 'Ładowanie dokumentu.',
    6 => 'Proszę poczekać na załadowanie dokumentu.',
    7 => 'Kliknij prawym przyciskiem myszy i wybierz \'zapisz element docelowy jako...\' lub \'zapisz link...\' aby zachować kopię dokumentu na Twoim komputerze.',
    8 => "The path given in the configuration file to the HTMLDoc binary is invalid or this system cannot execute it.  Please contact the site administrator if this problem\n          persists.",
    9 => 'Generator PDF',
    10 => "This is the Ad-hoc PDF Generation tool. It will attempt to convert any URL you give into a PDF.  Please note that some web pages will not render properly with this feature.  This\n           is a limitation of the HTMLDoc PDF generation tool and such errors should not be reported to the administrators of this site",
    11 => 'URL',
    12 => 'Generuj PDF!',
    13 => 'Konfiguracja PHP na tym serwerze nie pozwala na użycie URL z komendą fopen().  Administrator systemu musi edytować plik php.ini i ustawić allow_url_fopen na On',
    14 => 'Żądany PDF albo nie istnieje albo nie masz do niego uprawnień.'
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
    1 => 'Styczeń',
    2 => 'Luty',
    3 => 'Marzec',
    4 => 'Kwiecień',
    5 => 'Maj',
    6 => 'Czerwiec',
    7 => 'Lipiec',
    8 => 'Sierpień',
    9 => 'Wrzesień',
    10 => 'Październik',
    11 => 'Listopad',
    12 => 'Grudzień'
);

###############################################################################
# Weekdays

$LANG_WEEK = array(
    1 => 'Niedziela',
    2 => 'Poniedziałek',
    3 => 'Wtorek',
    4 => 'Środa',
    5 => 'Czwartek',
    6 => 'Piątek',
    7 => 'Sobota'
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