<?php

###############################################################################
# indonesian.php
# This is the indonesian language page for GeekLog!
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
    1 => 'Kontributor:',
    2 => 'Selanjutnya',
    3 => 'Tanggapan',
    4 => 'Ubah',
    5 => 'Voting',
    6 => 'Hasil',
    7 => 'Hasil Polling',
    8 => 'Suara',
    9 => 'Fungsi Admin:',
    10 => 'Pengiriman',
    11 => 'Bahan Bacaan',
    12 => 'Blok',
    13 => 'Topik',
    14 => 'Link',
    15 => 'Even',
    16 => 'Polling',
    17 => 'User[s]',
    18 => 'SQL Query',
    19 => 'Keluar/Log Out',
    20 => 'Informasi User:',
    21 => 'Nama User',
    22 => 'ID User',
    23 => 'Tingkat Kemaman',
    24 => 'Tak dikenal',
    25 => 'Balas',
    26 => 'Komentar di bawah ini adalah milik pengirim secara penuh. Situs ini tidak bertanggung jawab atas isi yg terkandung di dalamnya.',
    27 => 'Kiriman terbaru',
    28 => 'Hapus',
    29 => 'Tudak ada tanggapan user.',
    30 => 'Artikel Lama',
    31 => 'Izinkan HTML Tags:',
    32 => 'Error, nama user salah',
    33 => 'Error, tidak dapat ditulis ke dalam log file',
    34 => 'Error',
    35 => 'Keluar',
    36 => 'on',
    37 => 'Tidak ada artikel dari user',
    38 => 'Sindikasi Isi',
    39 => 'Ulangi/Refresh',
    40 => 'Anda memiliki<tt>register_globals = Off</tt> pada <tt>php.ini</tt>. Sedangkan, Geeklog membutuhkan <tt>register_globals</tt> menjadi <strong>on</strong>. Sebelum lanjut, silahkan diset <strong>on</strong> dulu dan restart web server anda.',
    41 => 'User Tamu',
    42 => 'Penanggung jawab:',
    43 => 'Balas ke yang ini',
    44 => 'Parent',
    45 => 'MySQL Error Number',
    46 => 'MySQL Error Message',
    47 => 'Wilayah user',
    48 => 'Informasi Account',
    49 => 'Preferences',
    50 => 'Error with SQL statement',
    51 => 'Bantuan',
    52 => 'Baru',
    53 => 'Home Admin',
    54 => 'Tidak dapat membuka file.',
    55 => 'Error pada',
    56 => 'Voting',
    57 => 'Password',
    58 => 'Login',
    59 => "Belum ada account?  Daftar sbg <a href=\"{$_CONF['site_url']}/users.php?mode=new\">User baru</a>",
    60 => 'Kirim tanggapan',
    61 => 'Buat account baru',
    62 => 'kata',
    63 => 'Komentar Preferences',
    64 => 'Email artikel ke teman',
    65 => 'Lihat versi cetak',
    66 => 'Kalendarku',
    67 => 'Selamat datang di ',
    68 => 'home',
    69 => 'kontak',
    70 => 'cari',
    71 => 'kontribusi',
    72 => 'web resources',
    73 => 'poling terdahulu',
    74 => 'kalender',
    75 => 'cari lebih seksama',
    76 => 'statistik situs',
    77 => 'Plugins',
    78 => 'Even akan datang',
    79 => 'Apa\'  yang baru',
    80 => 'Kumpulan bacaan yg lalu',
    81 => 'bahan bacaan yang lalu',
    82 => 'jam',
    83 => 'TANGGAPAN',
    84 => 'LINK',
    85 => '48 jam terakhir',
    86 => 'Tidak ada tanggapan baru',
    87 => '2 minggu terakhir',
    88 => 'Tidak ada Link baru',
    89 => 'Blum ada event',
    90 => 'Home',
    91 => 'Load halaman ini',
    92 => 'detik',
    93 => 'Hak cipta',
    94 => 'Semua merek dan hak cipta pada halaman ini dilindungi oleh Undang-undang.',
    95 => 'Didukung oleh',
    96 => 'Group',
    97 => 'Daftar kata',
    98 => 'Plug-ins',
    99 => 'ARTIKEL',
    100 => 'Tidak ada artikel baru',
    101 => 'Even anda',
    102 => 'Even situs ini',
    103 => 'Backup database',
    104 => 'oleh',
    105 => 'User mail',
    106 => 'Ditampilkan',
    107 => 'GL Versi Tes',
    108 => 'Bersihkan Cache',
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
    1 => 'Kirim tanggapan',
    2 => 'Mode Kiriman',
    3 => 'Keluar',
    4 => 'Buat Account',
    5 => 'Nama User',
    6 => 'Anda harus logged untuk dapat mengirim tanggapan, Silahkan Log in.  Jika anda belum punya account gunakan forulir dibawah ini untuk membuat.',
    7 => 'Tanggapan terakhir anda: ',
    8 => " beberapa detik yg lalu.  Situs ini membutuhkan minimal {$_CONF['commentspeedlimit']} detik tiap tanggapan",
    9 => 'Tanggapan',
    10 => 'Send Report',
    11 => 'Kirim tanggapan',
    12 => 'Silahkan dilengkapi Judul dan Tanggapan anda, seperti yang seharusnya.',
    13 => 'Informasi anda',
    14 => 'Tampilkan',
    15 => 'Report this post',
    16 => 'Judul',
    17 => 'Error',
    18 => 'Hal Penting',
    19 => 'Silahkan mencoba untuk tetap mengirim sesuai topik.',
    20 => 'Cobalah untuk membalas tanggapan orang lain dari pada mengirim tanggaan baru.',
    21 => 'Cobalah untuk membaca kiriman orang lain dulu sebelum anda mengirim! hal ini untuk menghindari duplikasi kiriman yang sama.',
    22 => 'Gunakan subjek kosong untuk menggambarkan pesan anda.',
    23 => 'Email anda TIDAK akan dipublikasikan.',
    24 => 'User tak dikenal',
    25 => 'Are you sure you want to report this post to the site admin?',
    26 => '%s reported the following abusive comment post:',
    27 => 'Abuse report'
);

###############################################################################
# users.php

$LANG04 = array(
    1 => 'Profil user untuk',
    2 => 'Nama User',
    3 => 'Nama Lengkap',
    4 => 'Password',
    5 => 'Email',
    6 => 'Homepage',
    7 => 'Bio',
    8 => 'Kunci PGP',
    9 => 'Simpan Informasi',
    10 => '10 tanggapan terakhir untuk user',
    11 => 'Tidak ada tanggapan user',
    12 => 'Preferences user untuk',
    13 => 'Email Nightly Digest',
    14 => 'pasword ini telah diacak oleh mesin pengacak. Sangat disarankan untuk merubah password ini secepatnya. Untuk merubah password anda, log in kemudian klik Informasi Account dari menu Fungsi User.',
    15 => "Account {$_CONF['site_name']} telah terbuat dengan sukses. Untuk dapat menggunakannya, anda harus login menggunakan informasi di bawah ini. Simpan email ini untuk referensi berikutnya.",
    16 => 'Informasi Account anda',
    17 => 'Account belum ada',
    18 => 'Email yang anda masukkan sepertinya bukan email yang valid',
    19 => 'nama user dan email yang anda gunakan sudah ada',
    20 => 'Email yang anda masukkan sepertinya bukan email yang valid',
    21 => 'Error',
    22 => "Mendaftar dengan {$_CONF['site_name']}!",
    23 => "Membuat account akan memberikan anda banyak keuntungan seperti keanggotaan {$_CONF['site_name']}  dan mengizikan anda mengirim tanggapan dan apa saja. Jika anda tidak memiliki account, anda hanya dapat mengirim sebagai orang tak dikenal. INGAT email anda  <b><i>TIDAK </i></b> akan dipublikasikan.",
    24 => 'Password anda akan dikirim ke email yang anda masukkan.',
    25 => 'Apakah anda lupa Password?',
    26 => 'Masukkan <em>salah satu</em> nama user  <em>atau</em> email yang anda gunakan saat mendaftar. Instruksi bagaimana menset email baru akan dikirim ke email.',
    27 => 'Daftar sekarang!',
    28 => 'Kirim Password',
    29 => 'Keluar dari',
    30 => 'logged in dari',
    31 => 'Fugsi yang anda pilih dibutuhkan untuk logged in',
    32 => 'Tanda tangan',
    33 => 'Tidak dipublikasikan',
    34 => 'Ini adalah nama anda',
    35 => 'Masukkan password untuk mengganti',
    36 => 'Awali dengan http://',
    37 => 'Aplikasikan untuk tanggapan anda',
    38 => 'Semua tentang anda! Siapapun dapat membacanya',
    39 => 'Kunci PGP publik untuk berbagi',
    40 => 'Tidak ada ikon topik',
    41 => 'Willing to Moderate',
    42 => 'Format tanggal',
    43 => 'Maksimal bacaan',
    44 => 'Tidak ada kotak',
    45 => 'Tampilkan Preferences untuk',
    46 => 'Termasuk Item untuk',
    47 => 'Konfigurasi kotak berita untuk',
    48 => 'Topik',
    49 => 'Tidak ada ikon dalam bacaan',
    50 => 'Hilangkan tanda centangnya jika anda tidak tertarik',
    51 => 'hanya bacaan berita',
    52 => 'Standarnya adalah',
    53 => 'Terima berita harian tiap malam',
    54 => 'Centanglah jika anda tidak ingin melihatnya.',
    55 => 'Jika anda biarkan tidak tercentang semuanya, itu berarti anda memilih pihan standar. Jika anda centang, maka setting standar tidak digunakan lagi. masukan strandar akan ditampilkan dalam bentuk tulisan tebal.',
    56 => 'Penanggung jawab',
    57 => 'Mode Tampilan',
    58 => 'Sususan pengurutan',
    59 => 'Batasan tanggapan',
    60 => 'Bagaimana yang anda inginkan tehadap tampilan tanggapan anda?',
    61 => 'Terbaru atau terlama duluan?',
    62 => 'Satandarnya adalah 100',
    63 => "Email anda sudah terkirim. Silahkan ikutin petunjuk dalam pesan, kamu ucapkan terima kasih anda telah menggunakan {$_CONF['site_name']}",
    64 => 'Preferences tanggapan untuk',
    65 => 'Coba ulangi',
    66 => "Mungkin anda salah ketik.  Silahkan coba lagi. Apakah anda <a href=\"{$_CONF['site_url']}/users.php?mode=new\">user baru</a>?",
    67 => 'Anggota sejak',
    68 => 'Ingatkan saya setelah',
    69 => 'Berapa lama kami senaiknya memngingat anda setelah logging in?',
    70 => "Kustomisasi isi dan tata letak dari {$_CONF['site_name']}",
    71 => "Salah satu fitur yang luar biasa dari {$_CONF['site_name']} adalah anda dapat mengkustomisasi dan tata letak. Pada sisi lain untuk mendapatkan keuntungan lebih anda terlebih dahulu harus <a href=\"{$_CONF['site_url']}/users.php?mode=new\">mendaftar</a> dengan {$_CONF['site_name']}.  Apakah anda sudah menjadi anggota?  Kalau sudah silahkan lansung log in!",
    72 => 'Theme',
    73 => 'Bahasa',
    74 => 'Ubah tampilan situs ini!',
    75 => 'Email Topik untuk',
    76 => 'Jika anda memilih topic dari daftar dibawah ini anda akan menierima kiriman topik baru setiap hari sesuai topik yang anda pilih.  Silahkan pilih topik yang menarik saja!',
    77 => 'Poto',
    78 => 'Tambahkan poto diri anda!',
    79 => 'Centang untuk menghapus poto',
    80 => 'Login',
    81 => 'Kirim Email',
    82 => '10 bacaan terakhir untuk user',
    83 => 'Pengiriman statisktik untuk user',
    84 => 'Jumlah keseluruhan artikel:',
    85 => 'Jumlah keseluruhan tanggapan:',
    86 => 'Cari semua kiriman berdasarkan',
    87 => 'Nama login anda',
    88 => "Seseorang (mungkin anda) telah meminta password baru untuk account ini \"%s\" pada {$_CONF['site_name']}, <{$_CONF['site_url']}>.\n\nJika anda belum yakin, silahkan klik link di bawah ini:\n\n",
    89 => "Jika anda yakin, acuhkan saja pesan ini (itu artinya tidak terjadi apa2 pada password anda).\n\n",
    90 => 'Masukkan password baru anda dibawah ini. Ingat, password lama anda tetap valid sampai anda kirim form ini.',
    91 => 'Set Password baru',
    92 => 'Masukkan Password baru',
    93 => 'Pesanan terakhir anda untuk password baru adalah %d detik yang lalu. Dibutuhkan minimal %d detik tiap pesanan password baru.',
    94 => 'Hapus Account "%s"',
    95 => 'Klik tombol "hapus account" untuk menghapus account anda dari database. Semua bacaaan dan tanggapan yang ada kirim memlalui account ini <strong>tidak</strong> dihapus melainkan akan tampil dikirim oleh "Tak dikenal".',
    96 => 'hapus account',
    97 => 'Konfirmasi penghapusan Account',
    98 => 'Apakah anda yakin? Jika Ya, Klik "hapus account" lagi pada form di bawah ini.',
    99 => 'Pilihan Privasi untuk',
    100 => 'Email dari Admin',
    101 => 'Izinkan email dari Site Admins',
    102 => 'Email dari Users',
    103 => 'Izinkan email user lain',
    104 => 'Tampilkan status Online',
    105 => 'Tampilkan siapa yang online pada Online block',
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
    1 => 'Tidak ada berita yang harus ditampilkan',
    2 => 'Belum ada bacaan atau berita yang perlu ditampilkan.',
    3 => 'untuk topic %s',
    4 => 'Artikel atau Bahan Bacaan Hari Ini',
    5 => 'Berikutnya',
    6 => 'Sebelumnya',
    7 => 'First',
    8 => 'Last'
);

###############################################################################
# profiles.php

$LANG08 = array(
    1 => 'Terjadi error saat pengiriman pesan. Coba ulangi lagi.',
    2 => 'Terkirim dengan sukses.',
    3 => 'Gunakanlah alamat email yang valid pada kolom Balas ke.',
    4 => 'Silahkan Isi pada Nama anda, Balas ke, Subjek and Pesan',
    5 => 'Error: User itu tidak ada.',
    6 => 'Telah terjadi error.',
    7 => 'Profile user untuk',
    8 => 'Name user',
    9 => 'URL user',
    10 => 'Kirim email ke',
    11 => 'Name anda:',
    12 => 'Balas ke:',
    13 => 'Subjek:',
    14 => 'Pesan:',
    15 => 'HTML tidak akan diterjemahkan.',
    16 => 'Kirim Pesan',
    17 => 'Kirim bacaan ke teman',
    18 => 'Ke nama',
    19 => 'Ke alamat email',
    20 => 'dari Nama',
    21 => 'dari alamat email',
    22 => 'Semua harus diisi',
    23 => "Email ini telah dikirim ke anda oleh %s pada %s karena mereka mengira bahwa anda tertarik pada artikle ini {$_CONF['site_url']}.  ini bukan SPAM.",
    24 => 'Tanggapan pada bacaan ini pada',
    25 => 'Anda harus Login.',
    26 => 'Form ini akan mengizinkan dan mengirim email kepada user yang anda pilih.  Semua harus diisi.',
    27 => 'Pesan singkat',
    28 => '%s tulis: ',
    29 => "Ini adalah digest harian dari{$_CONF['site_name']} untuk ",
    30 => ' Berita harian untuk ',
    31 => 'Judul',
    32 => 'Tanggal',
    33 => 'baca selengkapnya pada',
    34 => 'Akhir pesan',
    35 => 'Maaf, user ini tidak menerima email.'
);

###############################################################################
# search.php

$LANG09 = array(
    1 => 'Cari lebih teliti',
    2 => 'kata kunci',
    3 => 'Topik',
    4 => 'Semua',
    5 => 'Jenis',
    6 => 'Bacaan atau artikel',
    7 => 'Tanggapan',
    8 => 'Penanggung jawab',
    9 => 'Semua',
    10 => 'Cari',
    11 => 'Hasil pencarian',
    12 => 'ketepatan',
    13 => 'hasil pencarian: tidak ada yang tepat',
    14 => 'Tidak ada hasil',
    15 => 'Ulangi lagi.',
    16 => 'Judul',
    17 => 'Tanggal',
    18 => 'Penaggung jawab',
    19 => "Cari seluruhnya dalam situs {$_CONF['site_name']} dan database baik yang lama maupun baru",
    20 => 'Tanggal',
    21 => 'sampai',
    22 => '(Format tanggal YYYY-MM-DD)',
    23 => 'Tampilkan',
    24 => 'Ada %d item',
    25 => 'Pencarian untuk',
    26 => 'item ',
    27 => 'detik',
    28 => 'Tidak ada bacaan atau tanggapan yang cocok berdasarkan pencarian anda',
    29 => 'Hasil pencarian',
    30 => 'Tidak ada link yang cocok dengan pencarian anda',
    31 => 'Plug-in kembali tidak cocok',
    32 => 'Even',
    33 => 'URL',
    34 => 'Lokasi',
    35 => 'Semua tanggal',
    36 => 'Tidak ada event yang cocok berdasarkan pencarian',
    37 => 'Hasil pencarian Even',
    38 => 'Hasil pencarian Link',
    39 => 'Links',
    40 => 'Even',
    41 => 'Minimal 3 characters.',
    42 => 'Gunakan format tanggal YYYY-MM-DD (tahun-bulan-tabggal).',
    43 => 'tepat',
    44 => 'semua kata ini',
    45 => 'mengandung kata ini',
    46 => 'Berikutnya',
    47 => 'Sebelumnya',
    48 => 'Penanggung jawab',
    49 => 'Tanggal',
    50 => 'Hits',
    51 => 'Link',
    52 => 'Lokasi',
    53 => 'Hasil pencarian bacaan',
    54 => 'Hasil pencarian tanggapan',
    55 => 'hasil pencarian tepat',
    56 => 'DAN',
    57 => 'ATAU',
    58 => 'More results &gt;&gt;',
    59 => 'Results',
    60 => 'per page',
    61 => 'Refine search'
);

###############################################################################
# stats.php

$LANG10 = array(
    1 => 'Site Statistik',
    2 => 'Total Hits ke system',
    3 => 'Bahan bacaan (tanggapan) pada System',
    4 => 'Polling (jawaban) pada System',
    5 => 'Link (klik) pada System',
    6 => 'Even pada System',
    7 => '10 bahan bacaan terbaik',
    8 => 'Judul bahan bacaan',
    9 => 'Ditampilkan',
    10 => 'Tidak ada bahan bacaan atau artikel pada situs ini yang mendapatkan predikat 10 terbaik.',
    11 => '10 tanggapan terbaik',
    12 => 'Tanggapan',
    13 => 'Tidak ada bahan bacaan atau artikel pada situs ini yang mendapatkan predikat 10 tanggapan terbaik.',
    14 => '10 polling terbaik',
    15 => 'Pertanyaan polling',
    16 => 'Suara',
    17 => 'Belum ada polling yang di vote.',
    18 => '10 link terbaik',
    19 => 'Link',
    20 => 'Hit',
    21 => 'Tidak ada link yang mendapatkan predikat 10 terbaik.',
    22 => '10 bahan bacaan terbaik yang paling sering dikirim ke teman',
    23 => 'Email',
    24 => 'Tidak ada yang mendapatkan predikat 10 terbaik yang paling sering dikirim',
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
    1 => 'Lainnya?',
    2 => 'Kirim ke teman',
    3 => 'Format cetak',
    4 => 'Opsi bacaan',
    5 => 'PDF Story Format'
);

###############################################################################
# submit.php

$LANG12 = array(
    1 => 'Untuk mengirim %s anda harus login dulu.',
    2 => 'Login',
    3 => 'User Baru',
    4 => 'Kirim Even',
    5 => 'Kirim Link',
    6 => 'Kirim bacaan',
    7 => 'Login dibutuhkan',
    8 => 'Kirim',
    9 => 'Jika anda akan mengirim sebaiknya ikuti saran kami dibawah ini...<ul><li>Isi semua kolom,<li>Isi Informasi yang lengkap dan akurat<li>Double klik untuk mengecek URL tsb</ul>',
    10 => 'Judul',
    11 => 'Link',
    12 => 'Tanggal Mulai',
    13 => 'Tanggal berakhir',
    14 => 'Lokasi',
    15 => 'Deskripsi',
    16 => 'Jika ada yang lain, sebutkan',
    17 => 'kategori',
    18 => 'Lainnya',
    19 => 'Baca dulu',
    20 => 'Error: Tidak ada kategori',
    21 => 'Jika memilih "lainnya" pilih salah satu kategori',
    22 => 'Error: Ada yang masih kosong',
    23 => 'Harus diisi semua.',
    24 => 'Pengiriman tersimpan',
    25 => ' %s pengiriman anda tersimpan dengan sukses.',
    26 => 'Limit kecepatan',
    27 => 'nama user',
    28 => 'Topik',
    29 => 'Bacaan',
    30 => 'Kiriman terakhir anda adalah ',
    31 => " detik yang lalu.  Dibutuhkan {$_CONF['speedlimit']} detik tiap pengiriman",
    32 => 'Tampilkan',
    33 => 'Tampilkan bacaan',
    34 => 'Keluar',
    35 => 'HTML tidak diizinkan',
    36 => 'Mode pengiriman',
    37 => "Pengiriman even ke {$_CONF['site_name']} akan memasukkan even anda ke master kalender. Fitur ini <b>TIDAK</b> menyimpan personal event anda seperti ulang tahun atau hari jadi.<br><br>Even anda akan diterima oleh administrators dan jika lulus sensor, even itu akan ditampilkan.",
    38 => 'Tambah even ke',
    39 => 'Master Kalender',
    40 => 'Personal Kalender',
    41 => 'Waktu berakhir',
    42 => 'Waktu mulai',
    43 => 'Semua Even',
    44 => 'Alamat baris 1',
    45 => 'Alamat baris 2',
    46 => 'Kota',
    47 => 'Negara bagian',
    48 => 'Kode Pos',
    49 => 'Jenis Even',
    50 => 'Ubah jenis Even',
    51 => 'Lokasi',
    52 => 'Hapus',
    53 => 'Buat Account'
);

###############################################################################
# ADMIN PHRASES - These are file phrases used in admin scripts
###############################################################################

###############################################################################
# admin/auth.inc.php

$LANG20 = array(
    1 => 'Autentifikasi Dibutuhkan',
    2 => 'Denied! Login Informasi salah',
    3 => 'Password salah',
    4 => 'Nama user:',
    5 => 'Password:',
    6 => 'Semua akses ke halaman administrator telah terekam dan akan diperiksa.<br>Halaman ini hanya khusus untuk yang memiliki otorisasi.',
    7 => 'login'
);

###############################################################################
# admin/block.php

$LANG21 = array(
    1 => 'Insufficient Admin Rights',
    2 => 'Anda tidak memiliki hak untuk mengubah blok ini.',
    3 => 'Editor Blok',
    4 => 'Ada masalah saat pembacaan (lihat error.log untuk lebih detail).',
    5 => 'Judul Blok',
    6 => 'Topik',
    7 => 'Semua',
    8 => 'Level keamanan blok',
    9 => 'Susunan Blok',
    10 => 'Jenis Blok',
    11 => 'Portal Blok',
    12 => 'Normal Blck',
    13 => 'Opsi Portal Block',
    14 => 'RSS URL',
    15 => 'RSS Update terakhir',
    16 => 'Opsi Normal Blok',
    17 => 'Isi Blok',
    18 => 'Silahkan isi Judul da ISi Blok',
    19 => 'Manajer Blok',
    20 => 'Judul Blok',
    21 => 'SecLev Blok',
    22 => 'Jenis Blok',
    23 => 'Susunan Blok',
    24 => 'Topik Blok',
    25 => 'Untuk memodifikasi atau menghapus, klik blok yang bersangkutan di bawah ini.  Untuk membuat yang baru klik blok baru diatas.',
    26 => 'tata letak Blok',
    27 => 'Blok PHP',
    28 => 'Opsi Blok PHP',
    29 => 'Fungsi Block',
    30 => 'Jika anda ingin memiliki blok dengan PHP kode, masukkan nama fungsi diatas.  Fungsi anda harus diawali (prefix) "phpblock_" (mis. phpblock_getweather).  Jika tidak ada prefix, fungsi anda tidak akan terbuat.  Kami lakukan ini untuk menjaga orang-orang yang akan meng-hack instalasi Geeklog dengan memasukkan fungsi pemanggilan arbitrary yang dapat membahayakan system anda.  Yakinkan bahwa anda tidak memasukkan kurung kosong "()" setelah nama fungsi tersebut.  Terakhir, Disarankan anda memasukkan kode blok PHP anda ke /path/to/geeklog/system/lib-custom.php.  Ini akan mempermudah anda disaat anda meng upgrade dengan versi yang baru.',
    31 => 'Error pada PHP Blok.  Fungsi, %s, tidak ada.',
    32 => 'Error ada yang kosong',
    33 => 'Anda harus memasukkan URL ke RSS file untuk portal blck',
    34 => 'Anda harus memasukkan judul dan fungsi untuk PHP blok',
    35 => 'Anda harus memasukkan judul dan isi untuk normal blok',
    36 => 'Anda harus memasukkan isi untuk tata letak blok',
    37 => 'Nama fungsi PHP blok salah',
    38 => 'Fungsi untuk PHP Blok harus mempunyai prefix \'phpblock_\' (mis. phpblock_getweather).  prefix \'phpblock_\' sangat dibutuhkan untuk alasan keamanan.',
    39 => 'Sisi',
    40 => 'Kiri',
    41 => 'Kanan',
    42 => 'Anda harus memasukkan judul dan tata letak sebagai standar blok.',
    43 => 'Hanya Homepage',
    44 => 'Access disangkal',
    45 => "Anda mengakses blok yang dimana anda tidak memiliki hak untuk mengaksesnya.  Percobaan anda telah terekam. Silahkan <a href=\"{$_CONF['site_admin_url']}/block.php\">kembali ke layar blok administration</a>.",
    46 => 'Block baru',
    47 => 'Admin Home',
    48 => 'Nama Blok',
    49 => ' (tidak boleh pakai spasi dan harus unik)',
    50 => 'Bantuan File URL',
    51 => 'pakai http://',
    52 => 'Jika anda biarkan kosong ikon bantuan untuk blok ini tidak akan ditampilkan',
    53 => 'Izinkan',
    54 => 'simpan',
    55 => 'batal',
    56 => 'hapus',
    57 => 'Pindah blok turun',
    58 => 'Pindah blok naik',
    59 => 'Pindah blok ke sisi kanan',
    60 => 'Pindah blok ke sisi kiri',
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
    1 => 'Sebelumnya',
    2 => 'Berikutnya',
    3 => 'Mode',
    4 => 'Mode Kiriman',
    5 => 'Editor bacaan',
    6 => 'Belum ada bacaan dalam system',
    7 => 'Penangung jawab',
    8 => 'simpan',
    9 => 'tampilkan',
    10 => 'batal',
    11 => 'hapus',
    12 => 'ID',
    13 => 'Judul',
    14 => 'Topik',
    15 => 'Tanggal',
    16 => 'Teks Intro',
    17 => 'Teks isi',
    18 => 'Hits',
    19 => 'TAnggapan',
    20 => 'Ping',
    21 => 'Send Ping',
    22 => 'Daftar bacaan',
    23 => 'Untuk memodifikasi atau menghapus, klik yang bersangkutan dibawah ini. Untuk melihat, Klik judulnya. untuk membuat klik bacaan baru diatas.',
    24 => 'The ID you chose for this story is already in use. Please use another ID.',
    25 => 'Error when saving story',
    26 => 'Tampilkan bacaan',
    27 => 'If you use [unscaledX] instead of [imageX], the image will be inserted at its original dimensions.',
    28 => '<p><b>PREVIEWING</b>: Previewing a story with images attached is best done by saving the article as a draft INSTEAD OF hitting the preview button.  Use the preview button only when images are not attached.',
    29 => 'Trackbacks',
    30 => 'File Upload Errors',
    31 => 'Isi judul dan teks intro',
    32 => 'Utama',
    33 => 'hanya bisa satu ciri yang menarik',
    34 => 'Draft',
    35 => 'Ya',
    36 => 'Tidak',
    37 => 'Selebihnya oleh',
    38 => 'Selebihnya oleh',
    39 => 'Email',
    40 => 'Access Disangkal',
    41 => "Anda mencoba mengkases bacaan yang bukan hak anda.  Percobaan telah terekam.  Anda dapat melihatnya dalam read-only. Silahkan <a href=\"{$_CONF['site_admin_url']}/story.php\">kembali ke layar bacaan administration </a> jika anda mnginginkannya.",
    42 => "Anda mencoba mengkases bacaan yang bukan hak anda.  Percobaan telah terekam.  Silahkan <a href=\"{$_CONF['site_admin_url']}/story.php\">kembali ke layar bacaan administration </a>.",
    43 => 'Bacaan baru',
    44 => 'Admin Home',
    45 => 'Access',
    46 => '<b>CATATAN:</b> Jika anda memodifikasi tanggal, bacaan tersebut akan ditampilkan pada tanggal yang bersangkutan.  Dan itu berarti kiriman anda tidak masuk dalam RSS dan tidak akan diikutsertakan dalam pencarian dan statistik.',
    47 => 'Images',
    48 => 'image',
    49 => 'kanan',
    50 => 'kiri',
    51 => 'Untuk menambah images dalam bacaan anda anda harus menyisipkan format teks kuhsus.  Format khusus tersebut adalah  [imageX], [imageX_right] atau [imageX_left] dimana X adalah jumlah image yang anda sertakan.  CATATAN: Anda harus menggnakan image yang anda lampirkam.  Jika tidak bacaan kiriman anda tidak di terima.<BR><P><B>PREVIEWING</B>: Previewing sebaiknya digunakan untuk bacaan yang mengandung image.  Gunakan tombol Tampilkan jika tida ada imagenya.',
    52 => 'Hapus',
    53 => 'sudah tisak terpakai.  Anda harus menyertakan image ke dalam intro teks atai isi teks sebelum anda menyimpannya',
    54 => 'Image penyerta tidak terpakai',
    55 => 'Terjadi errors dibawah ini saat disimpan.  Silahkan benahi dulu',
    56 => 'Tampilkan ikon topik',
    57 => 'Lihat unscaled image',
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
    1 => 'Editor Topik',
    2 => 'ID Topik',
    3 => 'Nama Topik',
    4 => 'Image Image',
    5 => '(jangan gunakan spasi)',
    6 => 'Menghapus topik itu berarti menghapus semua bacan dan blok yang temasuk didalamnya',
    7 => 'Silahkan isi ID Topik dan Nama Topik',
    8 => 'Manajer Topik',
    9 => 'Untuk memodifikasi atau menghapus tinggal klik saja.  Untuk membuat yang baru klik topik baru. Anda akan menemui level akses topik yang ada di dalam kurung. Tanda asterisk(*) digunakan topik standar.',
    10 => 'Susunan pengurutan',
    11 => 'Bacaan/Halaman',
    12 => 'Access disangkal',
    13 => "Anda mencoba mengakses topic yang bukan hak anda.  Percobaan anda telah terekam. Silahkan <a href=\"{$_CONF['site_admin_url']}/topic.php\">silahkan kembali ke layar topic administration</a>.",
    14 => 'Metode pengurutan',
    15 => 'alphabetical',
    16 => 'standarnya adalah',
    17 => 'Topik baru',
    18 => 'Admin Home',
    19 => 'simpan',
    20 => 'batal',
    21 => 'hapus',
    22 => 'Standar',
    23 => 'buat topik ini sebagai standar topik pada pengiriman bahan baru',
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
    1 => 'Editor User',
    2 => 'ID user',
    3 => 'Nama user',
    4 => 'Nama Lengkap',
    5 => 'Password',
    6 => 'Tingkat keamanan',
    7 => 'Alamat level',
    8 => 'Homepage',
    9 => '(jangan gunakan spasi)',
    10 => 'Silahkan isi nama User dan alamat email',
    11 => 'Manajer user',
    12 => 'Untuk memodifikasi atau menghapus, klik user yang bersangkutan dibawah ini.  Untuk membuat klik User baru. Mudah saja, masukkan email atau nama lengkap anda(mis. *son* or *.edu) di bawah ini.',
    13 => 'SecLev',
    14 => 'Tanggal Reg.',
    15 => 'User Baru',
    16 => 'Admin Home',
    17 => 'ubah passw',
    18 => 'batal',
    19 => 'hapus',
    20 => 'simpan',
    21 => 'nama user yang ada simpan sudah terpakai.',
    22 => 'Error',
    23 => 'Batch Add',
    24 => 'Batch Import of Users',
    25 => 'Anda dapat mengimport batch users ke Geeklog.  File yang diimpor harus tab-delimited text file dan harus emiliki susunan field: nama lengkap, nama user, alamat email.  Setiap user yang anda impor akan diemail dengan password acak.  Anda ahrus memmasukkan satu user per baris.  Kegagalan mengikuti instruksi ini akan menyebabkan masalah yang mungkin di butuhkan pada pekerjaan manual jadi double klik untuk mengecek!',
    26 => 'Pencarian',
    27 => 'Batas hasil',
    28 => 'Klik disini untuk menghapus',
    29 => 'Path',
    30 => 'Import',
    31 => 'User baru',
    32 => 'Proses telah selesai. Impor %d and encountered %d failures',
    33 => 'Cari',
    34 => 'Error: anda harus mengisi file yang akan di upload.',
    35 => 'Login terakhir',
    36 => '(Tidak pernah)',
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
    1 => 'Diakui',
    2 => 'Hapus',
    3 => 'Ubah',
    4 => 'Profil',
    10 => 'Judul',
    11 => 'Tanggal mulai',
    12 => 'URL',
    13 => 'Kategori',
    14 => 'Tanggal',
    15 => 'Topik',
    16 => 'Nama User',
    17 => 'Nama Lengkap',
    18 => 'Email',
    34 => 'Perintah dan Kontrol',
    35 => 'Pengiriman bahan bacaan',
    36 => 'Pengiriman link',
    37 => 'Pengiriman even',
    38 => 'Kirim',
    39 => 'Belum ada pengiriman link yang akan di olah untuk saat ini',
    40 => 'Pengiriman User'
);

###############################################################################
# admin/mail.php

$LANG31 = array(
    1 => "{$_CONF['site_name']} Utilitas Mail",
    2 => 'Dari',
    3 => 'Balas ke',
    4 => 'Subjek',
    5 => 'Isi',
    6 => 'Pengiriman',
    7 => 'Semua user',
    8 => 'Admin',
    9 => 'Opsi',
    10 => 'HTML',
    11 => 'Pesan penting!',
    12 => 'Kirim',
    13 => 'Hapus',
    14 => 'User settings tak dihiraukan',
    15 => 'Error saat pengiriman ke: ',
    16 => 'Sukses pengiriman ke: ',
    17 => "<a href={$_CONF['site_admin_url']}/mail.php>Kirim pesan lain</a>",
    18 => 'Ke',
    19 => 'CATATAN: Jika anda ingin mengirim email ke seluruh anggota situs, pilih Users group dari dropdown.',
    20 => "Kiriman sukses <successcount> pesan dan yg tidak sukses <failcount> pesan.  Jika anda menginginkannya, detail setiap pesan terlihat di bawah ini.  Sebaliknya anda dapat <a href=\"{$_CONF['site_admin_url']}/mail.php\">mengirim pesan lain</a> atau anda dapat <a href=\"{$_CONF['site_admin_url']}/moderation.php\">kembali ke halaman administration</a>.",
    21 => 'Gagal',
    22 => 'Sukses',
    23 => 'Tidak ada kegagalan',
    24 => 'Tidaka da kesuksesan',
    25 => '-- Pilih Group --',
    26 => 'Isi semuanya kemudian pilih group users dari drop down.'
);

###############################################################################
# admin/plugins.php

$LANG32 = array(
    1 => 'Menginstall plugins dapat menyebabkan kegagalan dalam penginstalan Geeklog dan mungki juga system ada.  Penting bagi anda untuk menginstall plugin yang hanya didownload dari <a href="http://www.geeklog.net">Geeklog Homepage</a> yang dimana plug ini tersebut telah kami uji dengan menggunakan berbagai macam system.  Singkatnya kami tidak bertanggung jawab atas kerusakan yang terjadi pada saat anda menginstall plugin maka sebaiknya ikuti instruksi penginstallan yang disertakan dalam plugin yang anda download.',
    2 => 'Disclaimer Penginstallan Plug-in',
    3 => 'Formulir Penginstallan Plug-in',
    4 => 'File Plug-in',
    5 => 'Daftar Plug-in',
    6 => 'Perhatian: Plug-in telah diinstall!',
    7 => 'The plug-in yang ada install sudah ada.  Silahkan hapus dulu sebelum anda menginstall lagi',
    8 => 'Pengecekan kompatibelitas Plugin gagal',
    9 => 'Plugin ini membutuhkan Geeklog versi terbaru. maka upgradelah <a href="http://www.geeklog.net">Geeklog</a> anda dan plugin yg ingin anda install.',
    10 => '<br><b>Belum ada plugin yang terinstall.</b><br><br>',
    11 => 'Untuk memodifikasi dan menghapus plugin selahkan klik nomer yang bersangkutan di bawah ini. Untuk mengetahui lebih jauh, klik nama plugin tersebut. Untuk menginstall atau upgrade silahkan baca dokumentasi.',
    12 => 'tidak ada plugin yang disediakan oleh plugineditor()',
    13 => 'Editor Plugin ',
    14 => 'Plug-in Baru',
    15 => 'Admin Home',
    16 => 'Nama Plug-in',
    17 => 'Versi Plug-in',
    18 => 'Versi Geeklog',
    19 => 'Diizinkan',
    20 => 'Ya',
    21 => 'Tidak',
    22 => 'Install',
    23 => 'Simpan',
    24 => 'Batal',
    25 => 'Hapus',
    26 => 'Nama Plug-in',
    27 => 'Homepage Plug-in',
    28 => 'Versi Plug-in',
    29 => 'Versi Geeklog',
    30 => 'Hapus Plug-in?',
    31 => 'Apakah anda yakin ?  Dengan melakukan ini itu anda menghapus semua struktur dan file yang berhubungan dengan plug in yang bersangkutan.  Jika anda yakin, klik sekali lagi Hapus dibawah ini.',
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
    1 => 'Feed Baru',
    2 => 'simpan',
    3 => 'hapus',
    4 => 'batal',
    10 => 'Sindikat Isi',
    11 => 'Feed baru',
    12 => 'Admin Home',
    13 => 'Untuk memodifikasi atau menghapus feed, silahkan kli yang dibawah. Untuk membuat yang baru, klik Feed Baru  di atas.',
    14 => 'Judul',
    15 => 'Jenis',
    16 => 'Namafile',
    17 => 'Format',
    18 => 'update terakhir',
    19 => 'Diizinkan',
    20 => 'Ya',
    21 => 'Tidak',
    22 => '<i>(tidak ada feeds)</i>',
    23 => 'Semua bacaan',
    24 => 'Editor Feed',
    25 => 'Judul Feed',
    26 => 'Batasan',
    27 => 'Panjang masukan',
    28 => '(0 = Tidak ada, 1 = Penuh, other = Limit jumlah karakter.)',
    29 => 'Deskripsi',
    30 => 'update terakhir',
    31 => 'Kharacter Set',
    32 => 'Bahasa',
    33 => 'Isi',
    34 => 'Masukan',
    35 => 'Jam',
    36 => 'Pilih jenis feed',
    37 => 'Minimal anda memiliki satu plugin yang terinstal untuk mendukung sindikasi isi. Dibawah ini adalah pilihannya.',
    38 => 'Error: Ada yang kosong',
    39 => 'Silahkan isi Judul Feed, Deskripsi, dan nama File.',
    40 => 'Silahkan amsukkan jumlah masukan atau julah jam.',
    41 => 'Link',
    42 => 'Even',
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
    1 => "Password anda telah dikirim melalui email dan akan sampai dalam beberapa detik. dan silahkan ikuti pwtunjuk dalam pesan tersebut dan terima kasih anda telah menggunakan {$_CONF['site_name']}",
    2 => "Terimakasih atas kontribusi bacaan anda ke {$_CONF['site_name']}.  Kiriman tersebut telah sampai pada staff kami. Jika memang layak maka akan kami tampilkan begitupun sebaliknya.",
    3 => "Terima kasih atas kontribusi link anda {$_CONF['site_name']}.  Link tesebut telah sampai pada staff kami.  Jika memang layak link anda akan tampil pada bagian <a href={$_CONF['site_url']}/links.php>links</a>.",
    4 => "Terima kasih atas kiriman even anda {$_CONF['site_name']}.  Even tersebut telah diterima oleh staff kami. Jika memang layak link anda akan tampil pada bagian <a href={$_CONF['site_url']}/calendar.php>kalender</a>.",
    5 => 'Informasi account anda telah tersimpan dengan sukses.',
    6 => 'Preferences anda telah tersimpan dengan sukses.',
    7 => 'Tanggapan preferences anda telah tersimpan dengan sukses.',
    8 => 'Anda telah keluar dengan sukses.',
    9 => 'Bacaan anda telah tersimpan dengan sukses.',
    10 => 'Bacaan tersebut telah terhapus dengan sukses.',
    11 => 'Blok anda telah tersipan dengan sukses.',
    12 => 'Blok anda telah terhapus dengan sukses.',
    13 => 'Topik anda telah tersimpan dengan sukses.',
    14 => 'Topik dan semua yang berkaitan dengannya telah terhapus dengan sukses.',
    15 => 'Link anda telah tersimpan dengan sukses.',
    16 => 'Link anda telah terhapus dengan sukses.',
    17 => 'Even anda telah tersimpan dengan sukses.',
    18 => 'Even tersebut telah terhapus dengan sukses.',
    19 => 'Polling anda telah tersimpan dengan sukses.',
    20 => 'Polling tersebut telah terhapus dengan sukses.',
    21 => 'User telah tersimpan dengan sukses.',
    22 => 'User telah terhapus dengan sukses.',
    23 => 'Error saat menambahan even pada kalender anda. Tidak ada ID even.',
    24 => 'Even telah tersimpan denagn sukses dalam kalender anda',
    25 => 'Tidak bisa membuka personal kalender anda sebelum login',
    26 => 'Even telah berhasil dihapus dari personal kalender anda',
    27 => 'Pesan terkirin denga sukses.',
    28 => 'Plug-in telah tersimpan dengan sukses',
    29 => 'Maaf, personal kalender tidak diizinkan',
    30 => 'Access disangkal',
    31 => 'Maaf, Anda tidak dapat mengakses halaman adminitras bacaan.  Catatan semua percobaan untuk mengaksesnya terekam',
    32 => 'Maaf, Anda tidak dapat mengakses halaman adminitras topik.  Catatan semua percobaan untuk mengaksesnya terekam',
    33 => 'Maaf, Anda tidak dapat mengakses halaman adminitras blok.  Catatan semua percobaan untuk mengaksesnya terekam',
    34 => 'Maaf, Anda tidak dapat mengakses halaman adminitras link.  Catatan semua percobaan untuk mengaksesnya terekam',
    35 => 'Maaf, Anda tidak dapat mengakses halaman adminitras even.  Catatan semua percobaan untuk mengaksesnya terekam',
    36 => 'Maaf, Anda tidak dapat mengakses halaman adminitras polling.  Catatan semua percobaan untuk mengaksesnya terekam',
    37 => 'Maaf, Anda tidak dapat mengakses halaman adminitras user.  Catatan semua percobaan untuk mengaksesnya terekam',
    38 => 'Maaf, Anda tidak dapat mengakses halaman adminitras plugin.  Catatan semua percobaan untuk mengaksesnya terekam',
    39 => 'Maaf, Anda tidak dapat mengakses halaman adminitras mail.  Catatan semua percobaan untuk mengaksesnya terekam',
    40 => 'Pesan System',
    41 => 'Maaf, anda tidak dapat mengakses halam pengantian kata.  Catatan semua percobaan untuk mengaksesnya terekam',
    42 => 'Kata anda telah tersimpan dengan sukses.',
    43 => 'Kata tersebut tela berhasil di hapus.',
    44 => 'Plug-in telah terinstall dengas sukses!',
    45 => 'Plugin tersebut telah terhapus denagn sukses.',
    46 => 'Maaf, anda tidak dapat mengakses halaman database backup utility.  Catatan semua percobaan untuk mengaksesnya terekam',
    47 => 'Fungsi ini hanya bekerja dibawah *nix.  If you are running *nix as your operating system then your cache has been successfully cleared. If you are on Windows, you will need to search for files name adodb_*.php and remove them manually.',
    48 => "Terima kasih telah menjadia nggota kami dengan {$_CONF['site_name']}. Team kami akan mereview anda. Jika memang layak password anda akan dikirim ke email jadi silahkan isi.",
    49 => 'Group anda telah tersimpan dengan sukses.',
    50 => 'Group tersebut telah terhapus dengan sukses.',
    51 => 'nama user telah tepakai. silahkan pilih yang lain.',
    52 => 'Email ada nampaknya salah.',
    53 => 'Password anda telah diterima. Silahkan gunakan password baru untuk login.',
    54 => 'Pesanan untuk password baru anda telah kadaluarsa. Silahkan ulangi lagi.',
    55 => 'Sebuat email telah terkirim ke anda silahkan di cek. Silahkan ikuti petunjung tersebut untuk menset password baru anda.',
    56 => 'Email anda telah terpakai oleh user lain.',
    57 => 'Account anda telah terhapus dengan sukses.',
    58 => 'Feed anda telah tersimpan dengan sukses.',
    59 => 'Feed tersebut telah terhapus dengan sukses.',
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
    'access' => 'Akses',
    'ownerroot' => 'Pemilik/Root',
    'group' => 'Group',
    'readonly' => 'Read-Only',
    'accessrights' => 'Hak Akses',
    'owner' => 'Pemilik',
    'grantgrouplabel' => 'Grant Above Group Edit Rights',
    'permmsg' => 'Catatan: members adalah semua yang sudah terdaftar dan sebaliknya.',
    'securitygroups' => 'Security Groups',
    'editrootmsg' => "Walaupun anda User Administrator, anda tidak dapat mengedit root.  Anda tidak dapat mengedit semau user kecuali root users. Ingat semua percobaan mengedit root adalah ilegal dan telah terekam.  Silahkan kembali <a href=\"{$_CONF['site_admin_url']}/user.php\">ke halaman User Administration</a>.",
    'securitygroupsmsg' => 'Select the checkboxes for the groups you want the user to belong to.',
    'groupeditor' => 'Group Editor',
    'description' => 'Deskripsi',
    'name' => 'Nama',
    'rights' => 'Hak',
    'missingfields' => 'Ada yang kosong',
    'missingfieldsmsg' => 'Anda harus memberikan nama dan deskripsi group',
    'groupmanager' => 'Group Manajer',
    'newgroupmsg' => 'Untuk memodifikasi atau menghapus silahkan klik dibawah ini. Untuk membuat group baru silahkan klik link diatas. Ingat core groups tidak dapat dihapus karena digunakan oleh system.',
    'groupname' => 'Nama Group',
    'coregroup' => 'Core Group',
    'yes' => 'Ya',
    'no' => 'Tidak',
    'corerightsdescr' => "Group ini adalah core {$_CONF['site_name']} Group.  Jagi group ini tidak dapat di otak atik.  Dibawah ini adalah hanya read-only.",
    'groupmsg' => 'Security Groups pada situs ini dalam bentuk hirarki.  Dengan menambahkan geoup ini ke group yang lain dibawahnya anda akan memberi hak yang sama pada group-group tersebut.  jadi memungkikan bagi anda untuk memberi hak pada group dibawah anda.  Jika anda menginginkannya anda dapat memilih berbagai macah hak yang disediakan situs ini pada bagian bawah yang disebut \'Hak\'.  Kemuadian silahkan diatur sesuai dengan kehendak anda dengan cara mencentangnya.',
    'coregroupmsg' => "Ini adalah core {$_CONF['site_name']} Group.  Jagi group ini tidak dapat di otak atik.  Dibawah ini adalah hanya read-only.",
    'rightsdescr' => 'Akses group dengan hak dibawah ini akan memberikan secara langsung kepada group atau group yang berbeda dalam groupnya.  yang terlihat tanpa centang dibawah ini adalah hak yang telah diberiakn kepadanya karena hak yang lain menjadi milik group yang lain pula.  Maka hak yang diberikan adalah sesuai dengan yang dicentang tersebut.',
    'lock' => 'Terkunci',
    'members' => 'Anggota',
    'anonymous' => 'tak dikenal',
    'permissions' => 'Perizinan',
    'permissionskey' => 'R = read, E = edit, hak edit, dengan asumsi hak untuk membaca',
    'edit' => 'Ubah',
    'none' => 'Tidak ada',
    'accessdenied' => 'Access disangkal',
    'storydenialmsg' => "Anda tidak dapat akses untuk melihat bacaan ini.  Mungkin akrena anda bukan anggota {$_CONF['site_name']}.  Silahkan <a href=users.php?mode=new> jadi anggota</a> of {$_CONF['site_name']} untuk mendapatkan akses penuh keanggotaan!",
    'nogroupsforcoregroup' => 'Group ini bukan milik group manapun',
    'grouphasnorights' => 'Group ini tidak dapat diakses dengan fitur apapun yang anda telah miliki',
    'newgroup' => 'Group Baru',
    'adminhome' => 'Admin Home',
    'save' => 'simpan',
    'cancel' => 'batal',
    'delete' => 'hapus',
    'canteditroot' => 'Anda mencoba negedit Root group semantara anda buka Root group itu sendiri, jadi akses anda disangkal.  Silahkan hubungi Administrator.',
    'listusers' => 'Daftar Users',
    'listthem' => 'daftar',
    'usersingroup' => 'Users di group "%s"',
    'usergroupadmin' => 'User Group Administration',
    'add' => 'Tambah',
    'remove' => 'Hapus',
    'availmembers' => 'Available Members',
    'groupmembers' => 'Group Members',
    'canteditgroup' => 'Untuk mengubah group, anda harus menjadi anggota group. Silahkan hubungi Administrator.',
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
    'last_ten_backups' => '10 Back-ups terakhir',
    'do_backup' => 'Lakukan Backup',
    'backup_successful' => 'Back up Database sukses.',
    'db_explanation' => 'Untuk membuat back up baru, klik tombol di bawah ini',
    'not_found' => "Path salah atau mysqldump utility tidak executable.<br>Periksa <strong>\$_DB_mysqldump_path</strong> defenisi pada config.php.<br>variable masih terdefenisi seperti: <var>{$_DB_mysqldump_path}</var>",
    'zero_size' => 'Backup gagal: ukuran file 0 bytes',
    'path_not_found' => "{$_CONF['backup_path']} tidak ada direktori",
    'no_access' => "ERROR: Direktori {$_CONF['backup_path']} tidah terakses.",
    'backup_file' => 'Backup file',
    'size' => 'Ukuran',
    'bytes' => 'Bytes',
    'total_number' => 'Jumlah total back up: %d'
);

###############################################################################

$LANG_BUTTONS = array(
    1 => 'Home',
    2 => 'Kontak',
    3 => 'Pengiriman',
    4 => 'Link',
    5 => 'Polling',
    6 => 'Kalender',
    7 => 'Statistik situs',
    8 => 'Personalisasi',
    9 => 'Pencarian',
    10 => 'Pencarian lebih teliti',
    11 => 'Directory'
);

###############################################################################
# 404.php

$LANG_404 = array(
    1 => '404 Error',
    2 => 'Saya sudah mencari semuanya tapi saya tidak menemukan <b>%s</b>.',
    3 => "<p>Maaf, file yang anda pesan tidak ada. Silahkan periksa <a href=\"{$_CONF['site_url']}\">laman utama</a> atau <a href=\"{$_CONF['site_url']}/search.php\">halaman pencarian</a> jikan anda tidak dapat melihat yang hilang."
);

###############################################################################
# login form

$LANG_LOGIN = array(
    1 => 'Login dibutuhkan',
    2 => 'Maaf, uktuk mengakses halaman ini anda harus login sebagai user.',
    3 => 'Login',
    4 => 'User baru'
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
    1 => 'Januari',
    2 => 'Februari',
    3 => 'Maret',
    4 => 'April',
    5 => 'Mei',
    6 => 'Juni',
    7 => 'Juli',
    8 => 'Augustus',
    9 => 'September',
    10 => 'Oktober',
    11 => 'November',
    12 => 'Desember'
);

###############################################################################
# Weekdays

$LANG_WEEK = array(
    1 => 'Minggu',
    2 => 'Senin',
    3 => 'Selasa',
    4 => 'Rabu',
    5 => 'Kamis',
    6 => 'Jumat',
    7 => 'Sabtu'
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