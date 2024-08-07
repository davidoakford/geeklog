<?php

###############################################################################
# This is the spanish language page for GeekLog!
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
    1 => 'Contribuido por:',
    2 => 'ver más',
    3 => 'comentarios',
    4 => 'Editar',
    5 => 'Encuesta',
    6 => 'Resultados',
    7 => 'Resultados de la encuesta',
    8 => 'votos',
    9 => 'Funciones del Administrador:',
    10 => 'Propuestas',
    11 => 'Notas',
    12 => 'Bloques',
    13 => 'Secciones',
    14 => 'Links',
    15 => 'Eventos',
    16 => 'Encuestas',
    17 => 'Usuarios',
    18 => 'Búsqueda SQL',
    19 => 'Salir',
    20 => 'Información del Usuario:',
    21 => 'Nombre del Usuario',
    22 => 'ID del Usuario',
    23 => 'Nivel de Seguridad',
    24 => 'Anónimo',
    25 => 'Responder',
    26 => 'Los siguientes comentarios son de quien sea que los haya enviado. Este sitio no es responsable por lo que dicen.',
    27 => 'Envio más reciente',
    28 => 'Borrar',
    29 => 'No hay comentarios de usuarios.',
    30 => 'Artículos anteriores',
    31 => 'Tags HTML permitidos:',
    32 => 'Error, usuario inválido',
    33 => 'Error, no fue posible escribir el log',
    34 => 'Error',
    35 => 'Salir',
    36 => 'sobre',
    37 => 'No hay noticias del usuario',
    38 => 'Content Syndication',
    39 => 'Actualizar',
    40 => 'You have <tt>register_globals = Off</tt> in your <tt>php.ini</tt>. However, Geeklog requires <tt>register_globals</tt> to be <strong>on</strong>. Before you continue, please set it to <strong>on</strong> and restart your web server.',
    41 => 'Usuarios Inviados',
    42 => 'Escrito por:',
    43 => 'Responder a',
    44 => 'Retornar',
    45 => 'Nro de Error MySQL',
    46 => 'Mensaje de Error MySQL',
    47 => 'Funciones de Usuario',
    48 => 'Mi cuenta',
    49 => 'Mis Preferencias',
    50 => 'Error en una sentencia SQL',
    51 => 'ayuda',
    52 => 'Nuevo',
    53 => 'Sección de Administración',
    54 => 'No fue posible abrir el archivo.',
    55 => 'Error en',
    56 => 'Vote',
    57 => 'Password',
    58 => 'Ingresar',
    59 => "¿No tiene una cuenta todavía? <a href=\"{$_CONF['site_url']}/users.php?mode=new\">Inscríbase</a>",
    60 => 'Agregar un comentario',
    61 => 'Crear una Nueva Cuenta',
    62 => 'palabras',
    63 => 'Mis preferencias de comentarios',
    64 => 'Enviar la Nota a un Amigo',
    65 => 'Ver la versión para imprimir',
    66 => 'Mi Calendario',
    67 => 'Bienvenido a ',
    68 => 'Página Inicial',
    69 => 'contacto',
    70 => 'buscar',
    71 => 'contribuir',
    72 => 'recursos en la web',
    73 => 'encuestas pasadas',
    74 => 'calendario',
    75 => 'búsqueda avanzada',
    76 => 'estadísticas del sitio',
    77 => 'Plugins',
    78 => 'Próximos Eventos',
    79 => 'Novedades',
    80 => 'Notas',
    81 => 'Nota',
    82 => 'horas',
    83 => 'COMENTARIOS',
    84 => 'LINKS',
    85 => 'últimas 48 hs',
    86 => 'No hay nuevos comentarios',
    87 => 'últimas 2 semanas',
    88 => 'No hay nuevos links',
    89 => 'No hay próximos eventos',
    90 => 'Página Inicial',
    91 => 'Esta página fue creada en',
    92 => 'segundos',
    93 => 'Derechos de autor',
    94 => 'Todas las marcas y derechos en esta página son de sus respectivos dueños.',
    95 => 'Powered By',
    96 => 'Grupos',
    97 => 'List de Palabras',
    98 => 'Plug-ins',
    99 => 'NOTAS',
    100 => 'No hay nuevas notas',
    101 => 'Mis Eventos',
    102 => 'Eventos del sitio',
    103 => 'DB Backups',
    104 => 'por',
    105 => 'Envair Mails',
    106 => 'Vistas',
    107 => 'Comprobación GL',
    108 => 'Limpiar Caché',
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
    1 => 'Agregar un Comentario',
    2 => 'Tipo de envio',
    3 => 'Salir',
    4 => 'Crear una Cuenta',
    5 => 'Nombre del Usuario',
    6 => 'Este sitio requiere que tenga una cuenta para enviar un comentario. Si ya la tiene ingrese el usuario y el password. Si no tiene una cuenta puede crear una nueva en el formulario de abajo.',
    7 => 'Su último comentario fue hace ',
    8 => " segundos. Este sitio requiere al menos {$_CONF['commentspeedlimit']} segundos entre comentarios",
    9 => 'Comentario',
    10 => 'Send Report',
    11 => 'Enviar el Comentario',
    12 => 'Por favor complete el Nombre, Email, Título y Comentario, ya que son datos necesarios para el envío.',
    13 => 'Su Información',
    14 => 'Vista Previa',
    15 => 'Report this post',
    16 => 'Título',
    17 => 'Error',
    18 => 'Cosas Importantes',
    19 => 'Por favor intente mantener el tema de la nota.',
    20 => 'Intente responder a los commentarios de los demás en lugar de comenzar una nueva discución.',
    21 => 'Lea los comentarios enviados para evitar comentarios duplicados.',
    22 => 'Use un título claro que describa el contenido del mensaje.',
    23 => 'Su dirección de email NO será divulgada.',
    24 => 'Usuario Anónimo',
    25 => 'Are you sure you want to report this post to the site admin?',
    26 => '%s reported the following abusive comment post:',
    27 => 'Abuse report'
);

###############################################################################
# users.php

$LANG04 = array(
    1 => 'Perfil del Usuario para',
    2 => 'Nombre del Usuario',
    3 => 'Nombre Completo',
    4 => 'Password',
    5 => 'Email',
    6 => 'Homepage',
    7 => 'Biografía',
    8 => 'Clave PGP',
    9 => 'Guardar',
    10 => 'Ultimos 10 comentarios',
    11 => 'No hay comentarios',
    12 => 'Preferencias del Usuario para',
    13 => 'Enviar un resumen cada noche por Email',
    14 => 'Este password es generado al azar. Se recomienda que cambie el password cuanto antes. Para cambiar el password conectese al sitio con su usuario.',
    15 => "Su cuenta en {$_CONF['site_name']} fue creada exitosamente. Para poder usarla debe ingresar utilizando los datos dados más abajo. Guarde este mensaje para futuras referencias.",
    16 => 'Información de su cuenta',
    17 => 'La cuenta no existe',
    18 => 'El email ingresado no parece ser válido.',
    19 => 'El usuario y el email ingresados ya existen',
    20 => 'El email ingresado no parece ser válido.',
    21 => 'Error',
    22 => "Registrese en {$_CONF['site_name']}!",
    23 => "Crear una cuenta le dará los beneficios de los usuarios de {$_CONF['site_name']} y le permitirá enviar notas, comentarios, etc. Si no tiene una cuenta sólo lo podrá hacer anónimamente. Queremos remarcar que su email <b><i>nunca</i></b> será publicado en este sitio.",
    24 => 'Su password será enviado a la dirección de email que ingrese.',
    25 => 'Olvidó su Password?',
    26 => 'Ingrese su nombre de usuario y elija \'Enviar el Password por email\' y su nuevo password será enviado por email a su dirección',
    27 => '¡Regístrate ahora!',
    28 => 'Enviar el password por email',
    29 => 'desconectado de',
    30 => 'conectado a',
    31 => 'La función que eligió requiere que esté conectado',
    32 => 'Firma',
    33 => 'Nunca mostrado publicamente',
    34 => 'Este es tu nombre real',
    35 => 'Ingrese el password para cambiarlo',
    36 => 'Comienza con http://',
    37 => 'Aplicado a tus comentarios',
    38 => '¡Todo sobre Ud.! Todos van a poder leer esto.',
    39 => 'Su clave pública de PGP para compartir',
    40 => 'No hay íconos en Secciones',
    41 => 'Deseando moderar',
    42 => 'Formato de fecha',
    43 => 'Cantidad máxima de Notas',
    44 => 'Sin recuadros',
    45 => 'Mostrar las preferencias de',
    46 => 'Items excluidos para',
    47 => 'Configuración de Noticias para',
    48 => 'Secciones',
    49 => 'Sin íconos en las notas',
    50 => 'No seleccione esto si no está interesado',
    51 => 'Sólo las notas nuevas',
    52 => 'El valor por defecto es',
    53 => 'Recibir cada noche las notas del día',
    54 => 'Seleccione las Secciones y Autores que no desea ver.',
    55 => 'Si no selecciona ninguna significa que desea la selección por defecto. De seleccionar, seleccione todas las de su interés ya que las opciones por defecto ya no serán tomadas en cuenta. Las opciones por defecto se muestran resaltadas.',
    56 => 'Autores',
    57 => 'Modo de Presentación',
    58 => 'Orden',
    59 => 'Limite por Comentario',
    60 => '¿Cómo desea ver los comentarios?',
    61 => '¿Primero los más antiguos o los más recientes?',
    62 => 'El valor por defecto es 100',
    63 => "Gracias por usar {$_CONF['site_name']}. Su password a sido enviado por email y estará llegando en unos instantes. Por favor siga las instrucciones en el mensaje.",
    64 => 'Preferencias para los Comentarios de',
    65 => 'Intente reconectarse otra vez',
    66 => "Los datos ingresados no son válidos. Intente volver a conectarse aquí. ¿Es usted un <a href=\"{$_CONF['site_url']}/users.php?mode=new\">usuario nuevo</a>?",
    67 => 'Miembro desde',
    68 => 'Recuérdeme para',
    69 => '¿Cuánto tiempo debemos mantenerlo activo luego que se conectó?',
    70 => "Personalize la apariencia y el contenido de {$_CONF['site_name']}",
    71 => "Una de las grandes virtudes de {$_CONF['site_name']} es que puede personalizar el contenido que recibe y la apariencia del sitio. Para poder lograr esto debe primero <a href=\"{$_CONF['site_url']}/users.php?mode=new\">registrarse</a> en {$_CONF['site_name']}. Si ya es un miembro utilice el formulario de la izquierda para conectarse.",
    72 => 'Theme',
    73 => 'Idioma',
    74 => '¡Cambie la apariencia de esta página!',
    75 => 'Secciones enviadas por email a',
    76 => 'Si selecciona una o más Secciones de la lista de abajo, todas las Notas nuevas de esas Secciones le serán enviadas por mail al finalizar el día.',
    77 => 'Foto',
    78 => 'Añadir una imagen tuya!',
    79 => 'Tildar el checkbox para borrar tu foto',
    80 => 'Identificación',
    81 => 'Enviar Email',
    82 => 'Ultimas 10 noticias para el usuario',
    83 => 'Estadísticas de noticias para el usuario',
    84 => 'Número total de artículos:',
    85 => 'Número total de comentarios:',
    86 => 'Encontrar todas las noticias de',
    87 => 'Your login name',
    88 => "Someone (possibly you) has requested a new password for your account \"%s\" on {$_CONF['site_name']}, <{$_CONF['site_url']}>.\n\nIf you really want this action to be taken, please click on the following link:\n\n",
    89 => "If you do not want this action to be taken, simply ignore this message and the request will be disregarded (your password will remain unchanged).\n\n",
    90 => 'You can enter a new password for your account below. Please note that your old password is still valid until you submit this form.',
    91 => 'Set New Password',
    92 => 'Enter New Password',
    93 => 'Your last request for a new password was %d seconds ago. This site requires at least %d seconds between password requests.',
    94 => 'Delete Account "%s"',
    95 => 'Click the "delete account" button below to remove your account from our database. Please note that any stories and comments you posted under this account will <strong>not</strong> be deleted but show up as being posted by "Anonymous".',
    96 => 'delete account',
    97 => 'Confirm Account Deletion',
    98 => 'Are you sure you want to delete your account? By doing so, you will not be able to log into this site again (unless you create a new account). If you are sure, click "delete account" again on the form below.',
    99 => 'Privacy Options for',
    100 => 'Email from Admin',
    101 => 'Allow email from Site Admins',
    102 => 'Email from Users',
    103 => 'Allow email from other users',
    104 => 'Show Online Status',
    105 => 'Show up in Who\'s Online block',
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
    1 => 'No hay novedades para mostrar',
    2 => 'No hay nuevas notas para mostrar. Puede que no haya novedades para esta Sección o que sus preferencias sean muy restrictivas.',
    3 => 'para la Sección %s',
    4 => 'Nota del Día',
    5 => 'Siguiente',
    6 => 'Anterior',
    7 => 'First',
    8 => 'Last'
);

###############################################################################
# profiles.php

$LANG08 = array(
    1 => 'Hubo un error al enviar su mensaje. Intente nuevamente por favor.',
    2 => 'El mensaje fue enviado con éxito.',
    3 => 'Por favor asegúrese de ingresar una dirección de email válida en el campo \'Responder a\'.',
    4 => 'Por favor complete los campos Remitente, Responder a, Título y Mensaje',
    5 => 'Error: No existe el usuario.',
    6 => 'Hubo un error.',
    7 => 'Perfil de usuario de',
    8 => 'Nombre del Usuario',
    9 => 'URL del Usuario',
    10 => 'Enviar mensaje a',
    11 => 'Remitente:',
    12 => 'Responder a:',
    13 => 'Título:',
    14 => 'Mensaje:',
    15 => 'El código HTML no será traducido.',
    16 => 'Enviar el mensaje',
    17 => 'Enviar la Nota a un Amigo',
    18 => 'Destinatario',
    19 => 'Dirección de email destino',
    20 => 'Remitente',
    21 => 'Responder a',
    22 => 'Todos los campos son requeridos',
    23 => "Este email fue enviado a Ud por %s en %s porque pensó que podría interesarle esta Nota en  {$_CONF['site_url']}. Esto no es SPAM y los emails involucrados en este envío no fueron guardados para ningún uso posterior.",
    24 => 'Comentario sobre esta nota en',
    25 => 'Debe conectarse para utilizar esta herramienta. Este control se realiza para evitar el mal uso del sistema.',
    26 => 'Este form le permitirá enviar un email al usuario seleccionado. Todos los campos son necesarios.',
    27 => 'Mensaje corto',
    28 => '%s escribió: ',
    29 => "Este es el resúmen diario de {$_CONF['site_name']} para ",
    30 => ' Diario para ',
    31 => 'Título',
    32 => 'Fecha',
    33 => 'Lea la Nota completa en',
    34 => 'Fin del Mensaje',
    35 => 'Sorry, this user prefers not to receive any emails.'
);

###############################################################################
# search.php

$LANG09 = array(
    1 => 'Búsqueda Avanzada',
    2 => 'Palabras Clave',
    3 => 'Sección',
    4 => 'Todo',
    5 => 'Tipo',
    6 => 'Notas',
    7 => 'Comentarios',
    8 => 'Autores',
    9 => 'Todo',
    10 => 'Buscar',
    11 => 'Resultados de la búsqueda',
    12 => 'resultados',
    13 => 'Búsqueda de Notas: No hubo coincidencias',
    14 => 'No se encontraron coincidencias búscando: ',
    15 => 'Por favor intente nuevamente.',
    16 => 'Título',
    17 => 'Fecha',
    18 => 'Autor',
    19 => "Buscar en toda la base de datos de <B>{$_CONF['site_name']}</B>",
    20 => 'Fecha',
    21 => 'a',
    22 => '(Formato de fecha DD-MM-YYYY)',
    23 => 'Accesos',
    24 => 'Se encontraron',
    25 => 'coincidencias para',
    26 => 'items en',
    27 => 'segundos',
    28 => 'No se encontraron coincidencias en Notas y Comentarios',
    29 => 'Resultados para Notas y Comentarios',
    30 => 'Ningún link coincide con la búsqueda',
    31 => 'Este plug-in no devolvió resultados',
    32 => 'Evento',
    33 => 'URL',
    34 => 'Ubicación',
    35 => 'Todo el dia',
    36 => 'Ningún evento coincidió con la búsqueda',
    37 => 'Resultados de Eventos',
    38 => 'Resultados de Links',
    39 => 'Links',
    40 => 'Eventos',
    41 => 'Tu búsqueda  debe tener al menos 3 letras.',
    42 => 'Por favor utiliza un formato de fecha como este DD-MM-YYYY (día-mes-año).',
    43 => 'exact phrase',
    44 => 'all of these words',
    45 => 'any of these words',
    46 => 'Next',
    47 => 'Previous',
    48 => 'Author',
    49 => 'Date',
    50 => 'Hits',
    51 => 'Link',
    52 => 'Location',
    53 => 'Story Results',
    54 => 'Comment Results',
    55 => 'the phrase',
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
    1 => 'Estadísticas del sitio',
    2 => 'Total de accesos al sistema',
    3 => 'Notas(Comentarios) en el sistema',
    4 => 'Encuestas(Respuestas) en el sistema',
    5 => 'Links(Visitados) en el sistema',
    6 => 'Eventos en el sistema',
    7 => 'Las 10 Notas más vistas',
    8 => 'Título de la Nota',
    9 => 'Accesos',
    10 => 'Parecería que no hay Notas en este sitio o que nadie jamás las vió.',
    11 => 'Las 10 Notas más comentadas',
    12 => 'Comentarios',
    13 => 'Parecería que no hay Notas en este sitio o que nadie jamás escribió un comentario sobre ellas.',
    14 => 'Las 10 Encuestas con más votos',
    15 => 'Pregunta',
    16 => 'Votos',
    17 => 'Parecería que no hay Encuestas en este sitio o que nadie jamás votó.',
    18 => 'Los 10 Links más visitados',
    19 => 'Links',
    20 => 'Visitas',
    21 => 'Parecería que en este sitio no hay Links o que nadie nuca los visita.',
    22 => 'Las 10 Notas más enviadas por email',
    23 => 'Emails',
    24 => 'Parecería que nadie mandó una nota por email en este sitio.',
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
    1 => 'Relacionado con esto...',
    2 => 'Enviar la Nota a un amigo',
    3 => 'Versión para imprimir',
    4 => 'Opciones de la Nota',
    5 => 'PDF Story Format'
);

###############################################################################
# submit.php

$LANG12 = array(
    1 => 'Para enviar %s debe estar conectado con su usuario.',
    2 => 'Ingresar',
    3 => 'Nuevo usuario',
    4 => 'Enviar un Evento',
    5 => 'Enviar un Link',
    6 => 'Enviar una nota',
    7 => 'Debe conectarse',
    8 => 'Enviar',
    9 => 'Cuando envia información a este sitio le pedimos que tome en cuenta los siguientes consejos: <ul><li>Complete todos los campos requeridos<li>Chequee bien los URL\'s<li>Brinde información completa y precisa</ul>',
    10 => 'Título',
    11 => 'Link',
    12 => 'Fecha de inicio',
    13 => 'Fecha de finalización',
    14 => 'Locación',
    15 => 'Descripción',
    16 => 'Si otra, especifique',
    17 => 'Categoria',
    18 => 'Otra',
    19 => 'Lea antes',
    20 => 'Error: Falta la Categoría',
    21 => 'Por favor, cuando seleccione \'Otra\' complete el nombre de la categoría',
    22 => 'Error: Faltan Campos',
    23 => 'Por favor complete todo los campos del formulario. Todos los campos son requeridos.',
    24 => 'Envío Guardado',
    25 => 'Sus envíos fueron grabados con éxito.',
    26 => 'Límite de Velocidad',
    27 => 'Nombre del Usuario',
    28 => 'Sección',
    29 => 'Nota',
    30 => 'Su último envío fue hace ',
    31 => " segundos.  Este sitio requiere al menos {$_CONF['speedlimit']} segundos entre envíos",
    32 => 'Vista Previa',
    33 => 'Prever la Nota',
    34 => 'Salir',
    35 => 'Los tags de HTML no son permitidos',
    36 => 'Formato del texto',
    37 => "Los Eventos enviados a {$_CONF['site_name']} se agregan al Calendario Público, donde el resto de los usuarios pueden agregarlo a su Calendario Personal. Esta funcionalidad <b>NO</b> está pensada para que guarde sus eventos personales como cumpleaños, citas, etc.<br><br>Una vez enviado el evento será evaluado por los Administradores, de ser aprobado se mostrará en el Calendrio Público",
    38 => 'Agregar un Evento a',
    39 => 'Calendario Público',
    40 => 'Calendario Personal',
    41 => 'Hora de Finalización',
    42 => 'Hora de Inicio',
    43 => 'Evento de todo el día',
    44 => 'Dirección',
    45 => 'Dirección',
    46 => 'Ciudad/Localidad',
    47 => 'Provincia',
    48 => 'Código Postal',
    49 => 'Tipo de Evento',
    50 => 'Editar los Tipos de Eventos',
    51 => 'Locación',
    52 => 'Borrar',
    53 => 'Crear Cuenta'
);

###############################################################################
# ADMIN PHRASES - These are file phrases used in admin scripts
###############################################################################

###############################################################################
# admin/auth.inc.php

$LANG20 = array(
    1 => 'Autentificación Requerida',
    2 => '¡Denegado! Incorrect Login Information',
    3 => 'El password ingresado es inválido',
    4 => 'Usuario:',
    5 => 'Password:',
    6 => 'Todo acceso a las partes administrativas es registrado y revisado.<br>Esta página es para uso exclusivo del personal autorizado.',
    7 => 'Ingresar'
);

###############################################################################
# admin/block.php

$LANG21 = array(
    1 => 'No tiene derechos de Administrador',
    2 => 'No tiene los derechos suficiente spara editar este bloque.',
    3 => 'Editor de Bloques',
    4 => 'There was a problem reading this feed (see error.log for details).',
    5 => 'Título del Bloque',
    6 => 'Sección',
    7 => 'Todo',
    8 => 'Nivel de seguridad del bloque',
    9 => 'Orden del Bloque',
    10 => 'Tipo de bloque',
    11 => 'Bloque del Sistema',
    12 => 'Bloque Normal',
    13 => 'Opciones para el Bloque del Sistema',
    14 => 'RDF(Resource Description Framework)URL',
    15 => 'ültima actualización RDF',
    16 => 'Opciones para el Bloque Normal',
    17 => 'Contenido del Bloque',
    18 => 'Por favor complete los campos Título, Nivel de Seguridad y Contenido',
    19 => 'Administrador',
    20 => 'Título',
    21 => 'Nivel de Seguridad',
    22 => 'Tipo',
    23 => 'Nro. de Orden',
    24 => 'Sección',
    25 => 'Para modificar o borrar un bloque seleccionelo más abajo. Para crear uno nuevo Seleccione \'Nuevo Bloque\' arriba.',
    26 => 'Bloque de Layout',
    27 => 'Bloque PHP',
    28 => 'Opciones del Bloque PHP',
    29 => 'Funciones de Bloque',
    30 => 'Si desea que su bloque utilice código PHP, ingrese aqui el nombre de la función. La función debe tener el prefijo "phpblock_" (ej. phpblock_getweather). De no tenerlo NO será invocada. Asegúrese de no incluir los paréntesis, "()", al final del nombre. Por último, se recomienda que guarde todo código PHP en /path/to/geeklog/system/lib-custom.php. Esto le permitirá que su código se mantenga aún entre cambios de versiones del sistema.',
    31 => 'Error en un Bloque PHP.  La función, %s, no existe.',
    32 => 'Error, Faltan Campos',
    33 => 'Debe ingresar el URL del archivo .rdf para los Bloques del Sistema',
    34 => 'debe ingresar el Título y la Función en los Bloques PHP',
    35 => 'Debe ingresar el Título y el Contenido para los Bloques Normales',
    36 => 'Debe ingresar el contenido para los Bloques de Layout',
    37 => 'El nombre de la función en el Bloque PHP es inválido',
    38 => 'Las funciones para los Bloques PHP deben tener el prefijo \'phpblock_\' (ej. phpblock_getweather). El prefijo es requerido por cuestiones de seguridad, para evitar que se ejecute código no deseado.',
    39 => 'Ubicación',
    40 => 'Izquierda',
    41 => 'Derecha',
    42 => 'Deber ingresar el nro. de orden y el nivel de seguridad para los bloques default',
    43 => 'Sólo en la Página de Inicio',
    44 => 'Acceso Denegado',
    45 => "Usted esta tratando de acceder a un bloque en el cual usted no tiene los permisos requeridos.  Este intento ha sido registrado. Por favor  <a href=\"{$_CONF['site_admin_url']}/block.php\">vuelva a la pantalla de administración de bloques</a>.",
    46 => 'Nuevo Bloque',
    47 => 'Página de Inicio - Administrador',
    48 => 'Nombre del Bloque',
    49 => ' (sin espacios y debe ser único)',
    50 => 'URL del archivo de ayuda',
    51 => 'incluir http://',
    52 => 'Si deja este campo en blanco no se mostrará el ícono de ayuda',
    53 => 'Habilitado',
    54 => 'grabar',
    55 => 'cancelar',
    56 => 'borrar',
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
    1 => 'Notas Anteriores',
    2 => 'Notas Siguientes',
    3 => 'Modo',
    4 => 'Modo de envio',
    5 => 'Editor de Notas',
    6 => 'No hay Noticias en el sistema',
    7 => 'Autor',
    8 => 'grabar',
    9 => 'prever',
    10 => 'cancelar',
    11 => 'borrar',
    12 => 'ID',
    13 => 'Título',
    14 => 'Sección',
    15 => 'Fecha',
    16 => 'Introducción',
    17 => 'Texto',
    18 => 'Accesos',
    19 => 'Comentarios',
    20 => 'Ping',
    21 => 'Send Ping',
    22 => 'Listado de Notas',
    23 => 'Para modificar o borrar una Nota seleccione el número de nota más abajo. Para ver la Nota seleccione el título de la misma. Para crear una nueva Nota seleccione \'Nueva Nota\' más arriba.',
    24 => 'The ID you chose for this story is already in use. Please use another ID.',
    25 => 'Error when saving story',
    26 => 'Vista Previa',
    27 => 'If you use [unscaledX] instead of [imageX], the image will be inserted at its original dimensions.',
    28 => '<p><b>PREVIEWING</b>: Previewing a story with images attached is best done by saving the article as a draft INSTEAD OF hitting the preview button.  Use the preview button only when images are not attached.',
    29 => 'Trackbacks',
    30 => 'File Upload Errors',
    31 => 'Por favor complete los campos Autor, Introducción y Texto',
    32 => 'Destacado',
    33 => 'Sólo puede haber una Nota destacada',
    34 => 'Borrador',
    35 => 'Sí',
    36 => 'No',
    37 => 'Más de',
    38 => 'Más en',
    39 => 'Emails',
    40 => 'Acceso Denegado',
    41 => "Esta intentando acceder a una Nota para la cual no tiene derechos de acceso, por lo que podrá ver la Nota pero no editarla. Por favor vuelva a la <a href=\"{$_CONF['site_admin_url']}/story.php\">página de administración</a> cuando haya terminado.",
    42 => "Esta intentando acceder a una Nota para la cual no tiene derechos de acceso. Por favor vuelva a la <a href=\"{$_CONF['site_admin_url']}/story.php\">página de administración</a>.",
    43 => 'Nueva Nota',
    44 => 'Página de Inicio - Administrador',
    45 => 'Acceso',
    46 => '<b>NOTA:</b> si modifica esta fecha por una futura, la Nota no será publicada hasta esa fecha. Esto también incluye el envió de titulares RDF(Resource Description Framework), la búsqueda y las estadísticas del sitio.',
    47 => 'Imágenes',
    48 => 'imagen',
    49 => 'der',
    50 => 'izq',
    51 => 'Para insertar una imagen en la Nota debe incluir un texto con el formato [imageX], [imageX_right] o [imageX_left], donde X es el número de imagen dentro de la lista. NOTA: sólo puede utilizar las imágenes de la lista, sino la Nota no podrá ser grabada',
    52 => 'Borrar',
    53 => 'no fue usada.  Debe incluir esta imagen en la Introducción o el Texto para poder grabar los cambios',
    54 => 'Imágenes no utilizadas',
    55 => 'Los siguientes errores ocurriron al querer grabar su Nota. Por favor corrija los errores antes de grabar.',
    56 => 'Mostrar Icono de Tema',
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
    1 => 'Editor de Secciones',
    2 => 'ID',
    3 => 'Nombre',
    4 => 'Imagen',
    5 => '(no use espacios)',
    6 => 'Al borrar una Sección se borrarán todas sus Notas y Bloques asociados',
    7 => 'Por favor complete los campos ID y Nombre',
    8 => 'Administrador de Secciones',
    9 => 'Para modificar o borrar una Sección elíjala en la lista de abajo. Para crear una nueva selecione \'Nueva Sección\' más arriba. Entre paréntesis figura el nivel de acceso que posee.',
    10 => 'Nro. de Orden',
    11 => 'Notas/Página',
    12 => 'Acceso Denegado',
    13 => "Esta intentando acceder a una Sección para la cual no tiene derechos de acceso. Por favor vuelva a la <a href=\"{$_CONF['site_admin_url']}/topic.php\">página de administración</a>.",
    14 => 'Ordenamiento',
    15 => 'alfabético',
    16 => 'por defecto es',
    17 => 'Nueva Sección',
    18 => 'Página de Inicio - Administrador',
    19 => 'grabar',
    20 => 'cancelar',
    21 => 'borrar',
    22 => 'Default',
    23 => 'make this the default topic for new story submissions',
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
    1 => 'Editor de Usuarios',
    2 => 'ID',
    3 => 'Nombre de Usuario',
    4 => 'Nombre Completo',
    5 => 'Password',
    6 => 'Nivel de Seguridad',
    7 => 'Dirección de Email',
    8 => 'Págia de Inicio',
    9 => '(no use espacios)',
    10 => 'Por favor complete los campos Nombre de Usuario, Nombre Completo, Nivel de Seguridad y Dirección de Email',
    11 => 'Administrador de Usuarios',
    12 => 'Para modificar o borrar un Usuario elíjalo en la lista de abajo. Para crear uno nuevo selecione \'Nuevo Usuario\' más arriba.',
    13 => 'Nivel de seguridad',
    14 => 'Fecha de Registro',
    15 => 'Nuevo Usuario',
    16 => 'Página de Inicio - Administrador',
    17 => 'Cambiar-Password',
    18 => 'Cancelar',
    19 => 'Borrar',
    20 => 'Grabar',
    21 => 'El Nombre de Uusario propuesto ya existe.',
    22 => 'Error',
    23 => 'Importación Masiva',
    24 => 'Importación masiva de Usuarios',
    25 => "Puede importar una lista de Usuarios a {$_CONF['site_name']}. El archivo con la lista de usuarios debe tener un registro por línea y los campos separados por TAB. Los campos deben estar en el siguiente orden: Nombre Completo, Nombre de Usuario, Dirección de Mail. A cada usuario agregado se le enviará por email un password generado al azar, que podrán cambiar al ingresar al sitio. Por favor, chequee bien el archivo de importación ya que los errores encontrados pueden llegar a necesaitar arreglos manuales.",
    26 => 'Buscar',
    27 => 'Limitar los resultados',
    28 => 'Tildar el checkbox para borrar esta imagen',
    29 => 'Ruta',
    30 => 'Importar',
    31 => 'Nuevos Usuarios',
    32 => 'Proceso finalizado. Se importaron %d y hubieron %d fallos',
    33 => 'enviar',
    34 => 'Error: Debes especificar un archivo a enviar.',
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
    1 => 'Aprobar',
    2 => 'Borrar',
    3 => 'Editar',
    4 => 'Perfil',
    10 => 'Título',
    11 => 'Fecha Inicio',
    12 => 'URL',
    13 => 'Categoría',
    14 => 'Fecha',
    15 => 'Tema',
    16 => 'Nombre del usuario',
    17 => 'Nombre completo',
    18 => 'Email',
    34 => 'Página de administración',
    35 => 'Envios de Notas',
    36 => 'Envios de Links',
    37 => 'Envios de Eventos',
    38 => 'Enviar',
    39 => 'No hay envios para moderar en este momento',
    40 => 'Envios del Usuario'
);

###############################################################################
# admin/mail.php

$LANG31 = array(
    1 => "{$_CONF['site_name']}  Mail Utility",
    2 => 'De',
    3 => 'Responder a',
    4 => 'Título',
    5 => 'Mensaje',
    6 => 'Enviar a:',
    7 => 'Todos los usuarios',
    8 => 'Administrador',
    9 => 'Opciones',
    10 => 'HTML',
    11 => '¡Mensaje Urgente!',
    12 => 'Enviar',
    13 => 'Reiniciar',
    14 => 'Ignorar las preferencias del usuario',
    15 => 'Error al mandar a: ',
    16 => 'Se ha enviado con éxito a: ',
    17 => "<a href={$_CONF['site_admin_url']}/mail.php>Enviar otro mensaje</a>",
    18 => 'Para',
    19 => 'NOTA: si desea enviar un mensaje a todos los miembros del sitio, seleccione el grupo Logged-In Users en la lista.',
    20 => "Se han enviado <successcount> mensajes con éxito y <failcount> han fallado.  Si desea, los detalles de cada envío figuran abajo. Tambien puede <a href=\"{$_CONF['site_admin_url']}/mail.php\">enviar otro mensaje</a> o volver a <a href=\"{$_CONF['site_admin_url']}/moderation.php\">la página de administración</a>.",
    21 => 'Fallidos',
    22 => 'Exitosos',
    23 => 'No hubo envíos fallidos',
    24 => 'No hubo envíos exitosos',
    25 => '-- Selecciona Grupo --',
    26 => 'Por favor, rellena todos los campos del formulario y selecciona un grupo de usuarios de la lista desplegable.'
);

###############################################################################
# admin/plugins.php

$LANG32 = array(
    1 => 'Instalar plugins puede dañar su instalación de Geeklog y, posiblemente, su sistema. Es importante que sólo instale plugins obtenidos de <a href="http://www.geeklog.net" target="_blank">Geeklog</a> ya que han sido testeados en varios entornos. Es también importante que entienda que la instalación del plugin requiere la ejecución de comandos del sistema que pueden traer problemas de seguridad. Aún con esta advertencia, no garantizamos el éxito de la instalación del plugin ni nos hacemos responsables por cualquier daño causado durante la instalación (o posterior a la misma). En otras palabras, instale el plugin a su propio riesgo. Las instrucciones particulares de instalación vienen dentro de cada plugin.',
    2 => 'Advertencia de la Instalación del Plug-in',
    3 => 'Formulario de instalación del Plug-in',
    4 => 'Archivo del Plug-in',
    5 => 'Listado de Plug-ins',
    6 => 'Advertencia: ¡El Plug-in ya está instalado!',
    7 => 'El plugin que intenta instalar ya existe. Por favor borre el plugin antes de reinstalarlo.',
    8 => 'Falló el chequeo de compatibilidad del Plugin',
    9 => 'Este Plug-in requiere una versión más nueva de Geeklog. Puede obtener una copia actualizada de <a href=http://www.geeklog.net>Geeklog</a> o instalar otra versión del Plug-in.',
    10 => '<br><b>No hay Plugins instalados.</b><br><br>',
    11 => 'Para modificar o borrar un plugin seleccione el número a la izquierda del mismo. Para acceder a la página de sus creadores seleccione en el título del plugin. Para instalar un nuevo plugin seleccione \'Nuevo Plugin\' más arriba.',
    12 => 'no fue dado un nombre de plugin a la función plugineditor()',
    13 => 'Editor de Plugins',
    14 => 'Nuevo Plug-in',
    15 => 'Página de Inicio - Administrador',
    16 => 'Plug-in Name',
    17 => 'Versión',
    18 => 'Versión de Geeklog',
    19 => 'Habilitado',
    20 => 'Sí',
    21 => 'No',
    22 => 'Instalar',
    23 => 'Guardar',
    24 => 'Cancelar',
    25 => 'Borrar',
    26 => 'Nombre',
    27 => 'Homepage',
    28 => 'Versión',
    29 => 'Versión de Geeklog',
    30 => 'Borrar el Plug-in?',
    31 => '¿Está seguro/a que desea borrar este Plug-in? Al hacerlo borrará todos los archivos, estructuras y datos asociados. Si está seguro/a seleccione "Borrar" en el formulario de abajo.',
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
    1 => "Su password a sido enviado por mail y debe llegar en unos instantes. Por favor siga las indicaciones del mensaje. Gracias por usar {$_CONF['site_name']}",
    2 => "Gracias por enviar su Nota a {$_CONF['site_name']}. La Nota se encuentra en proceso de aprobación. De ser aprobada podrá ser leida por todos los visitantes del sitio.",
    3 => "Gracias por enviar su Link a {$_CONF['site_name']}. El Link se encuentra en proceso de aprobación. De ser aprobado podrá ser visto por todos los visitantes del sitio.",
    4 => "Gracias por enviar su Evento a {$_CONF['site_name']}. El Evento se encuentra en proceso de aprobación. De ser aprobado podrá ser visto por todos los visitantes del sitio.",
    5 => 'La información de su cuenta ha sido grabada con éxito.',
    6 => 'Sus preferencias han sido grabadas con éxito.',
    7 => 'Sus preferencias para Comentarios han sido grabadas con éxito.',
    8 => 'Se ha descontectado con éxito.',
    9 => 'Su Nota ha sido grabada con éxito.',
    10 => 'La Nota ha sido borrada con éxito.',
    11 => 'Su Bloque ha sido grabado con éxito.',
    12 => 'El Bloque ha sido borrado con éxito.',
    13 => 'Su Sección ha sido borrada con éxito.',
    14 => 'La Sección junto con todas sus Notas y Bloques han sido borrado con éxito.',
    15 => 'Su link fue grabado con éxito.',
    16 => 'El link fue borrado con éxito.',
    17 => 'Su Evento fue grabado con éxito.',
    18 => 'El Evento fue borrado con éxito.',
    19 => 'Su Encuesta fue grabada con éxito.',
    20 => 'La encuesta fue borrada con éxito.',
    21 => 'El nuevo Usuario fue grabado con éxito.',
    22 => 'El Usuario fue borrado con éxito',
    23 => 'Error al grabar el Evento en su Calendario. No fue pasado el ID.',
    24 => 'El Evento fue grabado en su Calendario',
    25 => 'No puede acceder a su Calendario Personal antes de conectarse con su usuario',
    26 => 'El Evento fue borrado de su Calendario Personal',
    27 => 'Mensaje enviado con éxito.',
    28 => 'El Plug-In fue grabado con éxito',
    29 => 'Disculpe, los Calendarios Personales no están habilitados en este sitio',
    30 => 'Acceso Denegado',
    31 => 'Disculpe, no tiene acceso a la página de administración de Notas. Aclaramos que todo acceso sin autorización queda registrado en el servidor.',
    32 => 'Disculpe, no tiene acceso a la página de administración de Secciones. Aclaramos que todo acceso sin autorización queda registrado en el servidor.',
    33 => 'Disculpe, no tiene acceso a la página de administración de Bloques. Aclaramos que todo acceso sin autorización queda registrado en el servidor.',
    34 => 'Disculpe, no tiene acceso a la página de administración de Links. Aclaramos que todo acceso sin autorización queda registrado en el servidor.',
    35 => 'Disculpe, no tiene acceso a la página de administración de Eventos. Aclaramos que todo acceso sin autorización queda registrado en el servidor.',
    36 => 'Disculpe, no tiene acceso a la página de administración de Encuestas. Aclaramos que todo acceso sin autorización queda registrado en el servidor.',
    37 => 'Disculpe, no tiene acceso a la página de administración de Usuarios. Aclaramos que todo acceso sin autorización queda registrado en el servidor.',
    38 => 'Disculpe, no tiene acceso a la página de administración de Plug-ins. Aclaramos que todo acceso sin autorización queda registrado en el servidor.',
    39 => 'Disculpe, no tiene acceso a la página de administración de Mail. Aclaramos que todo acceso sin autorización queda registrado en el servidor.',
    40 => 'Mensaje del Sistema',
    41 => 'Disculpe, no tiene acceso a la página de Reemplazo de Palabras. Aclaramos que todo acceso sin autorización queda registrado en el servidor.',
    42 => 'La Palabra fue grabada con éxito.',
    43 => 'La Palabra fue borrada con éxito.',
    44 => 'El Plug-In fue instalado con éxito.',
    45 => 'El Plug-In fue borrado con éxito.',
    46 => 'Disculpe, no tiene acceso a la herramienta de Backup de la base de datos. Aclaramos que todo acceso sin autorización queda registrado en el servidor.',
    47 => 'Esta función está disponible bajo *nix. Si estás usando *nix como tu sistema operativo, entonces tu caché ha sido limpiado con éxito. Si estás bajo Windows, necesitas buscar ficheros adodb_*.php y borrarlos manualmente.',
    48 => "Gracias por registrarte como miembro en {$_CONF['site_name']}. Nuestro equipo comprobará tu solicitud. Si es aprobada, te será enviado tu password a la dirección email que has indicado.",
    49 => 'Tu grupo ha sido grabado con éxito.',
    50 => 'El grupo ha sido borrado con éxito.',
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
    'access' => 'Acceso',
    'ownerroot' => 'Propietario/Root',
    'group' => 'Grupo',
    'readonly' => 'Sólo-Lectura',
    'accessrights' => 'Derechos de acceso',
    'owner' => 'Propietario',
    'grantgrouplabel' => 'Establecer los derechos del Grupo',
    'permmsg' => 'NOTA: miembros son todos los miembros conectados y los usuarios anónimos en el sitio.',
    'securitygroups' => 'Grupos de Seguridad',
    'editrootmsg' => "Aunque usted sea un usuario con privilegios de administrator, usted no puede editar a un usuario <b>root</b> sin primeramente ser usted mismo un usuario <b>root</b>. Usted puede editar todo tipo de usuarios menos usuarios <b>root</b>. Note que todo inento ilegal de editar a un usuario <b>root</b> queda registrado por el server. Por favor vuelva atras a <a href=\"{$_CONF['site_admin_url']}/user.php\">La pagina de Administración de Usuarios</a>.",
    'securitygroupsmsg' => 'Seleccione los checkboxes para los grupos que a usted quiere que el usuario pertenezca.',
    'groupeditor' => 'Editor de Grupo',
    'description' => 'Descripción',
    'name' => 'Nombre',
    'rights' => 'Derechos',
    'missingfields' => 'Campos faltantes',
    'missingfieldsmsg' => 'Debe ingresar un nombre y una descripción para el Grupo.',
    'groupmanager' => 'Administrador de Grupos',
    'newgroupmsg' => 'Para modificar o borrar un grupo seleccione el grupo aquí abajo. Para crear un grupo seleccione \'Nuevo Grupo\' aquí arriba. Tenga en cuenta que los Grupos del Sistema no pueden ser borrados.',
    'groupname' => 'Nombre del Grupo',
    'coregroup' => 'Grupo del Sistema? ',
    'yes' => 'Sí',
    'no' => 'No',
    'corerightsdescr' => "Este grupo es un Grupo de Sistema de {$_CONF['site_name']}, y por ende sus derechos no pueden ser editados. A continuación se muestra una lista no editable de los derechos de acceso de este grupo.",
    'groupmsg' => 'Los Grupos de Seguridad en este sitio son jerárquicos. Al agregar este grupo a cualquiera de los de abajo le estará dando los mismos derechos que esos grupos posean. De ser posible, se recomienda utilizar los grupos ya creados para dar los derechos a un nuevo grupo. Si necesita modificar los derechos del grupo, puede seleccionarlos en la sección llamada \'Derechos\'. Para agregar este grupo a cualquiera de los de abajo simplemente marque los grupos que quiera.',
    'coregroupmsg' => "Este grupo es un Grupo de Sistema de {$_CONF['site_name']}, y por ende los grupos que pertenezcan a este grupo no podrán ser editados. A continuación se muestar una lista (no editable) de los grupos a los cuales este grupo pertenece.",
    'rightsdescr' => 'El acceso de un grupo a ciertos privilegios puede ser dado directamente al grupo o a un grupo diferente al cual este grupo pertenezca. Los privilegios que usted vea debajo sin checkbox son los privilegios que fueron dados a este grupo porque ya pertenecia a otro grupo con ese privilegio. Los privilegios que veas debajo con checkbox son los derechos que pueden ser asignados directametne a este grupo.',
    'lock' => 'Bloqueo',
    'members' => 'Miembros',
    'anonymous' => 'Anónimo',
    'permissions' => 'Permisos',
    'permissionskey' => 'R = lectura, E = edición, los permisos de edición suponen permisos de lectura',
    'edit' => 'Editar',
    'none' => 'Ninguno',
    'accessdenied' => 'Acceso Denegado',
    'storydenialmsg' => "No tiene acceso para ver esta Nota. Esto puede ser porque no es miembro de {$_CONF['site_name']}. Por favor <a href=users.php?mode=new>conviértase en un miembro</a> de {$_CONF['site_name']} para tener acceso.",
    'nogroupsforcoregroup' => 'Este grupo no pertenece a ninguno de los otros grupos',
    'grouphasnorights' => 'Este grupo no tiene acceso a las funciones de administración',
    'newgroup' => 'Nuevo Grupo',
    'adminhome' => 'Página de Administración',
    'save' => 'Grabar',
    'cancel' => 'Cancelar',
    'delete' => 'borrar',
    'canteditroot' => 'Ha intentado editar el Grupo Root. Como no es miembro del grupo no tiene acceso al mismo. Si cree que esto ha sido un error por favor contacte al administrador del sistema.',
    'listusers' => 'List Users',
    'listthem' => 'list',
    'usersingroup' => 'Users in group "%s"',
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
    'last_ten_backups' => 'Últimos 10 Back-ups',
    'do_backup' => 'Hacer un Backup',
    'backup_successful' => 'El back up de la base se ha realizado con éxito.',
    'db_explanation' => 'Para crear un backup del sistema utilice el botón de abajo',
    'not_found' => "Ruta incorrecta o la utilidad mysqldump no se puede ejecutar.<br>Comprueba la definición de <strong>\$_DB_mysqldump_path</strong> en config.php.<br>La variable está definida actualmente como: <var>{$_DB_mysqldump_path}</var>",
    'zero_size' => 'Fallo de Backup: El tamaño era de 0 bytes',
    'path_not_found' => "{$_CONF['backup_path']} no existe o no es una carpeta",
    'no_access' => "ERROR: La carpeta {$_CONF['backup_path']} no es accesible.",
    'backup_file' => 'Archivo de backup',
    'size' => 'Tamaño',
    'bytes' => 'Bytes',
    'total_number' => 'Total number of backups: %d'
);

###############################################################################

$LANG_BUTTONS = array(
    1 => 'Inicio',
    2 => 'Contacto',
    3 => 'Publícate',
    4 => 'Links',
    5 => 'Encuentas',
    6 => 'Calendario',
    7 => 'Estadísticas',
    8 => 'Personalizar',
    9 => 'Buscar',
    10 => 'búsqueda avanzada',
    11 => 'Directory'
);

###############################################################################
# 404.php

$LANG_404 = array(
    1 => 'Error 404',
    2 => 'Buah, he mirado en todos los lados pero no puedo encontrar <b>%s</b>.',
    3 => "<p>Lo sentimos, pero el archivo que pides no existe. Por favor, consulta la <a href=\"{$_CONF['site_url']}\">página principal</a> o la <a href=\"{$_CONF['site_url']}/search.php\">página de búsqueda</a> para ver si puedes encontrar lo que has perdido."
);

###############################################################################
# login form

$LANG_LOGIN = array(
    1 => 'Se requiere ingresar',
    2 => 'Lo siento, para acceder a esta área tienes que estar autentificado como usuario.',
    3 => 'Ingresar',
    4 => 'Nuevo Usuario'
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
    1 => 'Enero',
    2 => 'Febrero',
    3 => 'Marzo',
    4 => 'Abril',
    5 => 'Mayo',
    6 => 'Junio',
    7 => 'Julio',
    8 => 'Agosto',
    9 => 'Septiembre',
    10 => 'Octubre',
    11 => 'Noviembre',
    12 => 'Deciembre'
);

###############################################################################
# Weekdays

$LANG_WEEK = array(
    1 => 'Domingo',
    2 => 'Lunes',
    3 => 'Martes',
    4 => 'Miércoles',
    5 => 'Jueves',
    6 => 'Viernes',
    7 => 'Sábado'
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