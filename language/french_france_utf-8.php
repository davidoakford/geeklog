<?php

###############################################################################
# french.php
# This is the french language page for GeekLog!
#
# Copyright (C) 2002 Florent Guiliani
# flyer@perinfo.com
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
    1 => 'Effectué par:',
    2 => 'en savoir plus',
    3 => 'commentaires',
    4 => 'Modifier',
    5 => 'Voter',
    6 => 'Résultats',
    7 => 'Résultats du sondage',
    8 => 'votes',
    9 => 'Fonctions Admin:',
    10 => 'Propositions',
    11 => 'Articles',
    12 => 'Cadres',
    13 => 'Sujets',
    14 => 'Liens',
    15 => 'Evénements',
    16 => 'Sondages',
    17 => 'Utilisateurs',
    18 => 'Requête SQL',
    19 => 'Se déconnecter',
    20 => 'Informations personnelles:',
    21 => 'Nom d\'utilisateur',
    22 => 'Numéro d\'utilisateur:',
    23 => 'Niveau de sécurité',
    24 => 'Anonyme',
    25 => 'Répondre',
    26 => 'Ce site n\'est pas responsable du contenu des commentaires. Ceux-ci sont de la responsabilité des auteurs',
    27 => 'Dernier commentaire',
    28 => 'Effacer',
    29 => 'Aucun commentaire.',
    30 => 'Vieux articles',
    31 => 'Balise HTML autorisées:',
    32 => 'Erreur: Utilisateur invalide',
    33 => 'Erreur: Impossible d\'ecrire dans le fichier de log.',
    34 => 'Erreur',
    35 => 'Se déconnecter',
    36 => 'sur',
    37 => 'Aucun article utilisateur',
    38 => '(CNT 38)',
    39 => 'Rafraîchir',
    40 => '(CNT 40)',
    41 => 'Visiteur',
    42 => 'Appartient à:',
    43 => 'Y répondre',
    44 => 'Parent',
    45 => 'Numéro d\'erreur MySQL',
    46 => 'Message d\'erreur MySQL',
    47 => 'Espace Membres',
    48 => 'Informations personnelles',
    49 => 'Préférences d\'affichage',
    50 => 'Erreur dans la requête SQL',
    51 => 'Aide',
    52 => 'Nouveau',
    53 => 'Point de départ de l\'Admin',
    54 => 'Ne peut ouvrir ce fichier.',
    55 => 'Erreur à',
    56 => 'Voter',
    57 => 'Mot de passe',
    58 => 'Connexion',
    59 => "Pas encore de compte?  Enregistrez vous <a href=\"{$_CONF['site_url']}/users.php?mode=new\">Ici</a>",
    60 => 'Ajouter un commentaire',
    61 => 'Créer un nouveau compte',
    62 => 'mots',
    63 => 'Préférences commentaires',
    64 => 'Envoyer cet article à un ami',
    65 => 'Version imprimable',
    66 => 'Mon calendrier',
    67 => 'Bienvenue à',
    68 => 'Survol',
    69 => 'contact',
    70 => 'chercher',
    71 => 'contribuer',
    72 => 'ressources du web',
    73 => 'sondages précédents',
    74 => 'calendrier',
    75 => 'recherche avancée',
    76 => 'statistiques du site',
    77 => 'Plugins',
    78 => 'Evènement à venir',
    79 => 'Quoi de neuf',
    80 => 'derniers articles',
    81 => 'dernier article',
    82 => 'heures',
    83 => 'COMMENTAIRES',
    84 => 'LIENS',
    85 => 'dernières 48 heures',
    86 => 'Pas de nouveau commentaires',
    87 => '2 dernieres semaines',
    88 => 'pas de nouveau liens',
    89 => 'Il n\'ya pas d\'évènement à venir',
    90 => 'Survol',
    91 => 'Page créée en',
    92 => 'secondes',
    93 => 'Tout droits réservés',
    94 => 'Toutes les marques citées apartiennent à leurs propriétaires respectifs.',
    95 => 'Généré par',
    96 => 'Groupes',
    97 => 'Liste de mots',
    98 => 'Plug-ins',
    99 => 'Articles',
    100 => 'Pas de nouveaux articles',
    101 => 'Vos événements',
    102 => 'Evénements généraux',
    103 => 'Sauvegarde de la BDD',
    104 => 'par',
    105 => 'Mail aux membres',
    106 => 'Vu',
    107 => 'MAJ de GL',
    108 => 'Vider le cache',
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
    1 => 'Ajouter un commentaire',
    2 => 'Format',
    3 => 'Se déconnecter',
    4 => 'Créer un compte',
    5 => 'Utilisateur',
    6 => 'Vous devez vous identifier pour pouvoir écrire un commentaire. Si vous n\'avez pas de compte vous pouvez utiliser le formulaire ci dessous afin de vous en procurer un.',
    7 => 'Votre dernier commentaire était il y a ',
    8 => " secondes. Vous devez attendre au moins {$_CONF['commentspeedlimit']} secondes entre chaque commentaire.",
    9 => 'Commenter',
    10 => 'CNT 10',
    11 => 'Envoyer le commentaire',
    12 => 'Veuillez obligatoirement remplir le titre et le commentaire.',
    13 => 'Informations personnelles',
    14 => 'Aperçu',
    15 => 'CNT 15',
    16 => 'Titre',
    17 => 'Erreur',
    18 => 'Remarque importante',
    19 => 'Essayez de rester autour du sujet de l\'article.',
    20 => 'Essayez de répondre aux commentaires des autres plutôt qu\'à l\'article lui même.',
    21 => 'Lisez tous les messages des autres avant d\'envoyer votre propre message afin de ne pas se répéter.',
    22 => 'Veillez à utiliser un titre le plus significatif possible.',
    23 => 'Votre adresse email ne sera pas rendue publique.',
    24 => 'Utilisateur anonyme',
    25 => 'Are you sure you want to report this post to the site admin?',
    26 => '%s reported the following abusive comment post:',
    27 => 'Abuse report'
);

###############################################################################
# users.php

$LANG04 = array(
    1 => 'Profil utilisateur de',
    2 => 'Nom de connexion',
    3 => 'Nom complet',
    4 => 'Mot de passe',
    5 => 'Email',
    6 => 'Page d\'accueil',
    7 => 'Bio',
    8 => 'clé PGP',
    9 => 'Enregistrer',
    10 => 'les 10 derniers commentaires de l\'utilisateur',
    11 => 'Aucun commentaires',
    12 => 'Préférences utilisateurs de',
    13 => 'Email temporisé la nuit',
    14 => 'Ce mot de passe a été généré automatiquement. Il est recommendé que vous le changiez immédiatement. Pour ce faire, connectez-vous et cliquez sur informations personnelles dans le menu utilisateur.',
    15 => "Votre compte nommé {$_CONF['site_name']} a été créé avec succès. Vous devez utiliser les informations ci-dessous pour vous conncter. Veillez à sauvegarder ses informations afin de les retrouver.",
    16 => 'Informations sur votre compte',
    17 => 'Ce compte n\'existe pas',
    18 => 'L\'adresse email semble ne pas être valide.',
    19 => 'L\'adresse email fournie est déja utilisé par un autre compte.',
    20 => 'L\'adresse email fournie ne semble pas être valide.',
    21 => 'Erreur',
    22 => "Enregistrez-vous avec {$_CONF['site_name']}!",
    23 => "Apres avoir créé votre compte {$_CONF['site_name']} vous pourrez envoyer des commentaires et d'autres éléments. Si vous n'avez pas de compte, Vous pourrez seulement envoyer des commentaires anonymes. Votre adresse email ne sera jamais publié sur ce site.",
    24 => 'Votre mot de passe va vous être envoyé par email à l\'adresse que vous avez fournie.',
    25 => 'Avez-vous oublié votre mot de passe?',
    26 => 'Saisissez votre nom d\'utilisateur et cliquez sur Envoyer Mot de passe, votre mot de passe vous sera envoyé par email.',
    27 => 'S\'enregistrer maintenant!',
    28 => 'Envoyer mot de passe',
    29 => 'déconnecté de',
    30 => 'connecté dans',
    31 => 'vous devez être connecté pour exécuter cette fonction',
    32 => 'Signature',
    33 => 'Ne jamais faire apparaître publiquement',
    34 => 'C\'est votre vrai nom',
    35 => 'Entrez votre mot de passe afin de la changer',
    36 => 'Commence par http://',
    37 => 'Appliquer à vos commentaires',
    38 => 'Tout sur vous! Tous le monde pourra le voir',
    39 => 'Votre clé puplique PGP à partager',
    40 => 'Pas d\'icône de sujet',
    41 => 'En attente d\'autorisation',
    42 => 'Format de date',
    43 => 'Nombre maximum d\'articles',
    44 => 'Pas de boîtes',
    45 => 'Préférences d\'affichage pour',
    46 => 'Eléments à exclure pour',
    47 => 'Nouvelle configuration de boîte pour',
    48 => 'Sujets',
    49 => 'Pas d\'icône dans les articles',
    50 => 'Décocher les cases si vous n\'êtes pas interéssé',
    51 => 'Seulement les nouveaux articles',
    52 => 'Par défaut',
    53 => 'Recevoir les articles du jour chaque nuit',
    54 => 'Cocher les cases pour les sujets et articles que vous ne voulez pas voire apparaître',
    55 => 'Si vous laissez toutes les cases décochées, cela signifie que vous souhaitez le comportement par défaut. Si vous sélectionnez au moins une case, n\'oubliez pas de sélectionner toutes celles qui vous intéressent car les autres vont être ignorées. Les cases sélectionnées par défaut apparaissent en gras.',
    56 => 'Auteur',
    57 => 'Format',
    58 => 'Ordre de tri',
    59 => 'Nombre maximum de commentaires',
    60 => 'Comment souhaitez vous que vos commentaires apparaîssent?',
    61 => 'Les plus récent ou les plus vieux en premier?',
    62 => '100 par défaut',
    63 => "Votre mot de passe vous a été envoyé par email et ne devrais pas tarder. Suivez les instructions du message et encore merci d'utiliser {$_CONF['site_name']}",
    64 => 'Préférences des commentaires pour',
    65 => 'Essayez encore de vous connecter',
    66 => "Vous avez peut-être fait une faute dans le nom de votre compte. Essayer encore de vous connectez à l'aide du formulaire ci-dessous. Vous ête peut-être un <a href=\"{$_CONF['site_url']}/users.php?mode=new\">nouvel utilisateur</a>?",
    67 => 'Utilisateur depuis',
    68 => 'S\'en souvenir pour moi',
    69 => 'Combien de temps se souvenir de vous après vous être connecté?',
    70 => "Personnaliser l'aspect et le contenu de {$_CONF['site_name']}",
    71 => "Une fonctionnalité intéressante de {$_CONF['site_name']} est que vous pouvez en personnaliser l'aspect et le contenu. Afin de pouvoir utiliser ces fonctionnalités vous devez vous <a href=\"{$_CONF['site_url']}/users.php?mode=new\">enregistrer</a> au près de {$_CONF['site_name']}.  Vous êtes déjà membre?  Alors utilisez le formulaire de connection dans la barre de gauche pour vous connecter!",
    72 => 'Aspect',
    73 => 'Langue',
    74 => 'Changez l\'aspect de ce site!',
    75 => 'Envoyez des email pour les sujet',
    76 => 'Si vous sélectionner des sujets parmi ceux ci-dessous vous recevrez par email à la fin de chaque journée (vers 22H) les nouveaux articles concerant ces sujets. Choisissez uniquement les sujets qui vous intéressent !',
    77 => 'Photo',
    78 => 'Ajouter votre propre photo!',
    79 => 'Cochez ici pour effacer cette photo',
    80 => 'Nom de connexion',
    81 => 'Envoyer email',
    82 => '10 dernièrs article de l\'utilisateur',
    83 => 'Statistiques de l\'utilisateur',
    84 => 'Nombre total d\'articles:',
    85 => 'Nombre total de commentaires:',
    86 => 'Chercher les articles par',
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
    1 => 'Aucun article à afficher',
    2 => 'Il n\'y a pas de nouveau articles à afficher. Il n\'y a peut-être pas de nouveautés pour ce sujet ou alors vos préférences sont trop restrictives.',
    3 => ' pour le sujet %s',
    4 => 'Article Important du jour',
    5 => 'Suivant',
    6 => 'Précédent',
    7 => 'First',
    8 => 'Last'
);

###############################################################################
# profiles.php

$LANG08 = array(
    1 => 'Une erreur s\'est produite lors de l\'envoi de votre message. Veuillez réessayer.',
    2 => 'Message envoyé avec succès.',
    3 => 'Vérifiez que l\'adresse du champ répondre à est valide.',
    4 => 'Veuillez remplir les champ: Votre nom, réponse à, sujet et message',
    5 => 'Erreur: utilisateur inconnu.',
    6 => 'Il y a eu une erreur.',
    7 => 'Profil utilisateur de ',
    8 => 'Nom de connexion',
    9 => 'URL utilisateur',
    10 => 'Envoyer un email à',
    11 => 'Votre nom:',
    12 => 'Répondre à:',
    13 => 'Subject:',
    14 => 'Message:',
    15 => 'les code HTML ne seront pas traduit.',
    16 => 'Envoyer Message',
    17 => 'Envoyer cette article à un ami',
    18 => 'Pour',
    19 => 'Adresse email',
    20 => 'De',
    21 => 'Adresse email',
    22 => 'Tous les champs sont obligatoires',
    23 => "Cette email vous a été envoyé de la part de %s at %s car il pensait que vous pourriez être intéressé par {$_CONF['site_url']}. Ce n'est pas un spam et l'adresse email utilisé n'est pas stokée dans une liste d'envoi.",
    24 => 'Commentaire sur cet article à',
    25 => 'vous devez être connecté pour utiliser cette fonction.',
    26 => 'Ce formulaire vous permet d\'envoyer un email à tous les utilisateurs sélectionnés. Tous les champs sont obligatoires.',
    27 => 'Message court',
    28 => '%s a écrit: ',
    29 => "Voici les article du jour {$_CONF['site_name']} pour ",
    30 => ' lettre d\'information de ',
    31 => 'Titre',
    32 => 'Date',
    33 => 'Lire l\'article complet à ',
    34 => 'Fin du message',
    35 => 'Sorry, this user prefers not to receive any emails.'
);

###############################################################################
# search.php

$LANG09 = array(
    1 => 'Recherche avancée',
    2 => 'Mot clés',
    3 => 'Sujet',
    4 => 'tous',
    5 => 'type',
    6 => 'Articles',
    7 => 'Commentaires',
    8 => 'Auteurs',
    9 => 'tous',
    10 => 'Chercher',
    11 => 'Résultats',
    12 => 'Résultats',
    13 => 'Aucun résultats n\'a été trouvé',
    14 => 'Aucun résultat ne correspond à vos critères',
    15 => 'Veuillez réessayer.',
    16 => 'Titre',
    17 => 'Date',
    18 => 'Auteur',
    19 => "Chercher dans toute la base de données de {$_CONF['site_name']} des articles ancients ou recents.",
    20 => 'Date',
    21 => 'à',
    22 => '(Format des dates YYYY-MM-DD)',
    23 => 'Actions',
    24 => 'Trouvé',
    25 => 'Résultats pour',
    26 => 'Elements pour',
    27 => 'secondes',
    28 => 'Il n\'y a pas d\'articles ou de commentaires correspondant à vos critères',
    29 => 'Articles et commentaires trouvés',
    30 => 'Aucun lien trouvé',
    31 => 'Aucun plugin trouvé',
    32 => 'Evénement',
    33 => 'URL',
    34 => 'Localisation',
    35 => 'Tous les jours',
    36 => 'Aucun événement trouvé',
    37 => 'Evénements trouvés',
    38 => 'Liens trouvés',
    39 => 'Liens',
    40 => 'Evénements',
    41 => 'Your query string should have at least 3 characters.',
    42 => 'Please use a date formatted as YYYY-MM-DD (year-month-day).',
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
    1 => 'Statistiques du site',
    2 => 'Nombre d\'actions',
    3 => 'Nombre d\'articles',
    4 => 'Nombre de sondages',
    5 => 'Nombre de liens',
    6 => 'Nombre d\'événements',
    7 => 'Classement des articles les plus regardés',
    8 => 'Titre d\'article',
    9 => 'Visionnages',
    10 => 'Soit il n\'y a pas d\'article sur ce site soit personne ne les as encore vus',
    11 => 'Articles les plus commentés',
    12 => 'Commentaires',
    13 => 'Soit il n\'y a pas d\'article sur ce site soit aucun commentaires n\'a encore été fait.',
    14 => 'Sondages les plus renseignés',
    15 => 'Questions de sondages',
    16 => 'Votes',
    17 => 'Il n\'y a aucun sondages ou alors aucun votes enregistré',
    18 => 'Liens les plus utilisés',
    19 => 'Liens',
    20 => 'Actions',
    21 => 'Soit il n\'y a aucun lien soit personne n\'a encore cliqué dessus',
    22 => 'Articles les plus envoyés par mail',
    23 => 'Emails',
    24 => 'Personne n\'a encore envoyé d\'article par mail',
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
    1 => 'Sujet en relation',
    2 => 'Envoyer cet article à un ami',
    3 => 'Version imprimable',
    4 => 'Option des articles',
    5 => 'PDF Story Format'
);

###############################################################################
# submit.php

$LANG12 = array(
    1 => 'Pour envoyer un %s vous devez vous identifier.',
    2 => 'Nom de connexion',
    3 => 'Nouvel utilisateur',
    4 => 'Envoyer un événement',
    5 => 'Envoyer un lien',
    6 => 'Envoyer un article',
    7 => 'Identification requise',
    8 => 'Envoyer',
    9 => 'Veuillez remplir tous les champs et vérifier à deux fois les informations.',
    10 => 'Titre',
    11 => 'Lien',
    12 => 'Début',
    13 => 'Fin',
    14 => 'Localisation',
    15 => 'Description',
    16 => 'Si autre, précisez',
    17 => 'Catégorie',
    18 => 'Autre',
    19 => 'Lisez en premier',
    20 => 'Erreur: catégorie manquante',
    21 => 'Si vous sélectionnez "Autre" veuillez fournir une catégorie',
    22 => 'Erreur: champs manquants',
    23 => 'Veuillez remplir tous les champs du formulaire. Ils sont tous obligatoires.',
    24 => 'Proposition enregistrée',
    25 => 'Vos propositions %s ont été sauvées avec succès.',
    26 => 'Vitesse limite',
    27 => 'utilisateur',
    28 => 'Sujet',
    29 => 'Article',
    30 => 'Votre dernière proposition était il y a',
    31 => " secondes. Vous devez attendre au moins {$_CONF['speedlimit']} secondes entre chaque propositions",
    32 => 'Aperçu',
    33 => 'Aperçu de l\'article',
    34 => 'Se déconnecter',
    35 => 'les balises HTML ne sont pas autorisées',
    36 => 'Format',
    37 => "Proposer un événement à {$_CONF['site_name']} va mettre votre événement dans le calendrier général. Les utilisateurs pourront alors ajouter votre événement dans leur calendrier personnel. Cette fonctionnalité ne doit pas servir aux anniversaires. Après avoir envoyé votre événement il sera ou non approuvé par l'administrateur et apparaîtra ou non dans le calendrier général.",
    38 => 'Ajouter l\'événement à',
    39 => 'Calendrier général',
    40 => 'Calendrier personnel',
    41 => 'fin',
    42 => 'début',
    43 => 'Tous les jours à événement',
    44 => 'Adresse 1',
    45 => 'Adresse 2',
    46 => 'Ville',
    47 => 'Région',
    48 => 'Code postal',
    49 => 'Type d\'événement',
    50 => 'Modifier le type',
    51 => 'Localisation',
    52 => 'Supprimer',
    53 => 'Créer un compte'
);

###############################################################################
# ADMIN PHRASES - These are file phrases used in admin scripts
###############################################################################

###############################################################################
# admin/auth.inc.php

$LANG20 = array(
    1 => 'Identification requise',
    2 => 'Utilisateur ou mot de passe incorrect',
    3 => 'Mot de passe incorrect',
    4 => 'Utilisateur:',
    5 => 'Mot de passe:',
    6 => 'Toutes tentatives d\'accès à cette portion du site est enregistrée et analysée.<br>Cette page est réservée aux personnes autorisées.',
    7 => 'Connexion'
);

###############################################################################
# admin/block.php

$LANG21 = array(
    1 => 'Droits insuffisants',
    2 => 'Vous n\'avez pas les droits nécessaires pour modifier ce cadre',
    3 => 'Editeur de cadre',
    4 => 'CNT 4',
    5 => 'titre du cadre',
    6 => 'sujet',
    7 => 'tous',
    8 => 'niveau de sécurité du cadre',
    9 => 'Ordre du cadre',
    10 => 'type du cadre',
    11 => 'Cadre Portail',
    12 => 'Cadre Normal',
    13 => 'Cadre portail d\'option',
    14 => 'URL RDF',
    15 => 'Dernière MAJ RDF',
    16 => 'Cadre normal d\'option',
    17 => 'Contenu du cadre',
    18 => 'Veuillez remplir les champs: titre, niveau de sécurité et contenu du cadre',
    19 => 'Contrôleur de cadre',
    20 => 'Cadre titre',
    21 => 'Cadre niv. sec.',
    22 => 'Cadre type',
    23 => 'Cadre ordre',
    24 => 'Cadre sujet',
    25 => 'Cliquez sur le lien ci-dessous pour modifier ou supprimer un cadre.  Cliquez sur le lien nouveau cadre pour créer un nouveau cadre.',
    26 => 'Cadre d\'affichage',
    27 => 'Cadre PHP',
    28 => 'Option du cadre PHP',
    29 => 'Cadre fonction',
    30 => 'Si vous voulez que l\'un de vos cadres utilise du PHP, saisissez le nom de la fonction à utiliser.  Le nom de la fonction doit commencer par "phpblock_" (ex: phpblock_getweather).  Si ce n\'est pas le cas, votre fonction NE SERA PAS appellée.  Nous faisons ça pour des raisons de sécurité.  Ne mettez pas de parenthèses vides "()" après le nom de votre fonction.  Enfin, nous vous recommandons de mettre tout le code des cadre PHP dans /path/to/geeklog/system/lib-custom.php.  Cela permettera de garder votre code même après une mise à jour de geeklog.',
    31 => 'Erreur dans le cadre PHP.  La fonction, %s, n\'existe pas.',
    32 => 'Erreur: champs manquant',
    33 => 'Vous devez mettre l\'URL dans le fichier .rdf pour le cadre portail.',
    34 => 'Vous devez renseigner le titre et la fonction du cadre PHP.',
    35 => 'Vous devez entrer le titre et le contenu du cadre normal.',
    36 => 'Vous devez entrer le contenu pour le cadre d\'affichage.',
    37 => 'Nom erroné dans la fonction du cadre PHP',
    38 => 'Les fonctions des cadres PHP doivent commencer par \'phpblock_\' (ex: phpblock_getweather).  Le préfixe \'phpblock_\' est nécessaire pour des raisons de sécurité qui empêche l\'exécution de code arbitraire.',
    39 => 'Côté',
    40 => 'Gauche',
    41 => 'Droit',
    42 => 'Vous devez saisir l\'ordre et le niveau de sécurité pour les cadres par défaut de geeklog',
    43 => 'Accueil seulement',
    44 => 'Accès interdit',
    45 => "Vous essayez d'accéder à un cadre auquel vous n'avez pas le droit.  Cette tentative est enregistrée. Veuillez <a href=\"{$_CONF['site_admin_url']}/block.php\">retourner à la page de controle des cadres</a>.",
    46 => 'Nouveau Cadre',
    47 => 'Accueil admin',
    48 => 'Nom du cadre',
    49 => ' (pas d\'espace et doit être unique)',
    50 => 'URL d\'aide',
    51 => 'http:// inclus',
    52 => 'laisser à vide pour ne pas afficher l\'icone d\'aide',
    53 => 'Activé',
    54 => 'enregistrer',
    55 => 'annuler',
    56 => 'supprimer',
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
    1 => 'Articles précédents',
    2 => 'Articles suivants',
    3 => 'Mode',
    4 => 'Format',
    5 => 'Editeur d\'articles',
    6 => 'Il n\'y a pas d\'articles dans le système',
    7 => 'Auteur',
    8 => 'Enregistrer',
    9 => 'Aperçu',
    10 => 'Annuler',
    11 => 'Supprimer',
    12 => 'ID',
    13 => 'Titre',
    14 => 'Sujet',
    15 => 'Date',
    16 => 'Texte d\'intro',
    17 => 'Texte intégral',
    18 => 'Hits',
    19 => 'Commentaires',
    20 => 'Ping',
    21 => 'Send Ping',
    22 => 'Liste des articles',
    23 => 'Pour modifier ou supprimer un article, cliquez sur son numéro. Pour visionner un article, cliquez sur le titre de l\'article. Pour créer un nouvel article, cliquez sur le bouton écrire un article.',
    24 => 'The ID you chose for this story is already in use. Please use another ID.',
    25 => 'Error when saving story',
    26 => 'Aperçu de l\'article',
    27 => 'If you use [unscaledX] instead of [imageX], the image will be inserted at its original dimensions.',
    28 => '<p><b>PREVIEWING</b>: Previewing a story with images attached is best done by saving the article as a draft INSTEAD OF hitting the preview button.  Use the preview button only when images are not attached.',
    29 => 'Trackbacks',
    30 => 'File Upload Errors',
    31 => 'Veuillez renseigner l\'auteur, le titre et le texte d\'introduction.',
    32 => 'Tête d\'affiche',
    33 => 'Il ne peut y avoir qu\'un seul article en tête d\'affiche',
    34 => 'Brouillon',
    35 => 'Oui',
    36 => 'Non',
    37 => 'Plus sur',
    38 => 'Plus de',
    39 => 'Emails',
    40 => 'Accès refusé',
    41 => "Vous essayez d'accéder à un article auqule vous n'avez pas droit.  Cette tentative est enregistrée.  Vous pouvez voir cet article en lecture seule uniquement. Veuillez <a href=\"{$_CONF['site_admin_url']}/story.php\">retourner sur la page de contrôle des article</a> lorsque vous aurez fini.",
    42 => "Vous essayez d'accéder à un article auquel vous n'avez pas droit.  Cette tentative est enregistrée.  Veuillez <a href=\"{$_CONF['site_admin_url']}/story.php\">retourner à la page de contrôle des articles</a>.",
    43 => 'Nouvel article',
    44 => 'Accueil Admin',
    45 => 'Accès',
    46 => '<b>REMARQUE:</b> si vous indiquez une date future, cet article n\'apparaîtra qu\'à partir de cette date. Cela signifie aussi que l\'article sera ignoré des recherches et des statistiques.',
    47 => 'Images',
    48 => 'image',
    49 => 'droite',
    50 => 'gauche',
    51 => 'Pour ajouter une des images que vous avez fournies vous devez insérer un texte spécial dans votre article. Vous devez insérer [imageX], [imageX_right] ou [imageX_left] où X est le numéro de l\'image que vous avez fournie.  REMARQUE: vous devez utiliser toutes les images fournies.  Si vous ne le faites pas vous ne pourrez pas enregistrer votre article.<BR><P><B>APERCU</B>: lors de l\'utilisation d\'images il est préférables de faire un brouillon plutôt que d\'utiliser la fonction d\'apercu.  Utilisez le bouton d\'apercu uniquement lorsqu\'il n\'y a pas d\'image.',
    52 => 'Supprimer',
    53 => 'n\'est pas utilisée.  Vous devez insérer l\'image dans le texte de votre article avant de l\'enregistrer.',
    54 => 'Image fournie non utilisée',
    55 => 'L\'erreur suivante est apparue lors de l\'enregistrement de votre article.  Veuillez corriger ces erreurs et réessayer',
    56 => 'Montrer l\'icône',
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
    1 => 'Editeur de sujet',
    2 => 'Numéro',
    3 => 'Nom',
    4 => 'Image',
    5 => '(ne pas utiliser d\'espaces)',
    6 => 'Supprimer un sujet supprimera tous les articles et cadres en relations avec celui-ci',
    7 => 'Veuillez renseigner le numéro et le nom du sujet.',
    8 => 'Contrôleur de sujet',
    9 => 'Cliquez sur un sujet pour le modifier ou le supprimer.  Cliquez sur le bouton Nouveau Sujet à gauche pour créer un sujet. Vos droits d\'accès envers chaque sujet apparaissent entre parenthèses.',
    10 => 'Ordre de tri',
    11 => 'Articles/Page',
    12 => 'Accès interdit',
    13 => "vous essayez d'accéder à un sujet auquel vous n'avez pas droit.  Cette tentative est enregistrée. Veuillez <a href=\"{$_CONF['site_admin_url']}/topic.php\">retourner à la page de contrôle des sujets</a>.",
    14 => 'Méthode de tri',
    15 => 'alphabétique',
    16 => 'défaut:',
    17 => 'Nouveau Sujet',
    18 => 'Accueil Admin',
    19 => 'Enregistrer',
    20 => 'Annuler',
    21 => 'Supprimer',
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
    1 => 'Editeur d\'utilisateur',
    2 => 'Numéro',
    3 => 'Nom de connexion',
    4 => 'Nom complet',
    5 => 'Mot de passe',
    6 => 'Niveau de sécurité',
    7 => 'Adresse email',
    8 => 'Page d\'accueil',
    9 => '(ne pas utiliser d\'espaces)',
    10 => 'Veuillez renseigner le nom de connexion, le nom complet, le nom complet et l\'adresse email.',
    11 => 'Contrôleur d\'utilisateurs',
    12 => 'Cliquez sur un utilisateur pour le modifier ou le supprimer.  Cliquez sur le bouton Nouvel utilisateur à gauche pour créer un utilisateur. Vous pouvez faire des recherches simple en entrant une partie du nom de connexion, du nom complet ou de l\'adresse email (ex:*son* ou *.edu) dans le formulaire ci-dessous.',
    13 => 'Niv. Sec.',
    14 => 'Date d\'enregistrement',
    15 => 'Nouvel Utilisateur',
    16 => 'Accueil Admin',
    17 => 'Changer le mot de passe',
    18 => 'Annuler',
    19 => 'Supprimer',
    20 => 'Enregistrer',
    21 => 'Le nom de connexion est déjà utilisé.',
    22 => 'Erreur',
    23 => 'Ajout par lot',
    24 => 'Importation par lot d\'utilisateurs',
    25 => 'vous pouvez importer un lot d\'utilisateur dans geeklog.  Les champ du fichier d\'import doivent être séparés par une tabulation. Ils doivent apparaître dans l\'ordre suivant: Nom complet, nom de connexion, adresse email.  Chaque utilisateur importé sera averti par email et aura un mot de passe auto-généré.  Il ne doit y avoir qu\'un seul utilisateur par ligne.  Ne pas respecter ces consignes peut entraîner des dégat qui ne seront réparables que manuellement alors redoublez de vigilance!',
    26 => 'Chercher',
    27 => 'Nb résultats max',
    28 => 'Coche la case pour supprimer la photo',
    29 => 'Chemin',
    30 => 'Importer',
    31 => 'Nouveaux Utilisateurs',
    32 => 'Traitement terminé. %d utilisateurs ont été importés et %d sont tombés en erreur',
    33 => 'envoyer',
    34 => 'Erreur: Vous devez préciser un fichier à charger.',
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
    1 => 'Valider',
    2 => 'Supprimer',
    3 => 'Modifier',
    4 => 'Profil',
    10 => 'Titre',
    11 => 'Début',
    12 => 'URL',
    13 => 'Catégorie',
    14 => 'Date',
    15 => 'Sujet',
    16 => 'Utilisateur',
    17 => 'Nom Complet',
    18 => 'Email',
    34 => 'Commandes et Contrôles',
    35 => 'Soumissions d\'articles',
    36 => 'Soumission de liens',
    37 => 'Soumission d\'événements',
    38 => 'Envoyer',
    39 => 'Il n\'y a aucune soumission à administrer pour le moment',
    40 => 'Soumissions utilisateur'
);

###############################################################################
# admin/mail.php

$LANG31 = array(
    1 => "Envoyer un mail aux utilisateurs de {$_CONF['site_name']}",
    2 => 'De',
    3 => 'Adresse de réponse',
    4 => 'Sujet',
    5 => 'Message',
    6 => 'A:',
    7 => 'Tous les utilisateurs',
    8 => 'Admin',
    9 => 'Options',
    10 => 'HTML',
    11 => 'message urgent!',
    12 => 'Envoyer',
    13 => 'Effacer',
    14 => 'Ignorer les préférences utilisateurs',
    15 => 'Erreur lors de l\'envoi d\'un message à: ',
    16 => 'Message envoyé avec succès à: ',
    17 => "<a href={$_CONF['site_admin_url']}/mail.php>Envoyer un autre message</a>",
    18 => 'A',
    19 => 'Remarque: si vous voulez envoyer un message à tous les utilisateurs, utilisez le group Logged-in dans le champ A.',
    20 => "<successcount> messages ont été envoyés avec succès et <failcount> n'ont pas pu être envoyés.  Vous trouverez le détail de chaque tentative ci-dessous.  Vous pouvez également <a href=\"{$_CONF['site_admin_url']}/mail.php\">envoyer un autre message</a> ou <a href=\"{$_CONF['site_admin_url']}/moderation.php\">revenir à la page d'administration</a>.",
    21 => 'Ratés',
    22 => 'Réussis',
    23 => 'pas d\'échec',
    24 => 'pas de succès',
    25 => '-- Choisir un groupe --',
    26 => 'Remplissez tous les champs et choississez un groupe parmis la liste.'
);

###############################################################################
# admin/plugins.php

$LANG32 = array(
    1 => 'Installer des plugin peut causer des domages à geeklog.  Il est important de n\'installer que des plugins provenant de <a href="http://www.geeklog.net" target="_blank">Geeklog</a> car nous les testons et les approuvons pour plusieurs systèmes.  Installer des plugins requiert l\'exécution de plusieurs commandes systèmes qui peuvent poser des problèmes de sécurité particulièrement si vous utilisez des plugin provenant de tierse partie.  Vous êtes averti des domages que peut causer l\'installation d\'un plugin.  En d\'autres termes, vous installez des plugin à vos propres risques.  Les instructions d\'installation des plugins sont incluses dans chaque plugin.',
    2 => 'Instructions d\'installation d\'un plugin',
    3 => 'Formulaire d\'installation d\'un plugin',
    4 => 'Fichier de plugin',
    5 => 'Liste de plugins',
    6 => 'Attention: plugin déjà installé!',
    7 => 'Le plugin que vous essayer d\'installer existe déjà.  Veuillez supprimer le plugin avant de le réinstaller.',
    8 => 'Test de compatibilité du plugin échoué',
    9 => 'Ce plugin requiert une version plus récente de geeklog. Vous pouvez mettre à jour votre <a href="http://www.geeklog.net">Geeklog</a> ou obtenir une autre version du plugin.',
    10 => '<br><b>Aucun plugin n\'est actuellement installé.</b><br><br>',
    11 => 'Cliquez sur le numéro du plugin pour le modifier ou le supprimer. Pour en savoir d\'avantage sur les plugins, cliquez sur le nom du plugin et vous serez dirigé vers le site web du plugin. Pour installer ou mettre à jour un plugin veuillez vous référer à la documentation du plugin.',
    12 => 'Aucun nom de plugin n\'a été passé à plugineditor()',
    13 => 'Editeur de plugin',
    14 => 'Nouveau plugin',
    15 => 'Accueil Admin',
    16 => 'Nom du plugin',
    17 => 'Version du plugin',
    18 => 'Version de Geeklog',
    19 => 'Activé',
    20 => 'Oui',
    21 => 'Non',
    22 => 'Installer',
    23 => 'Enregistrer',
    24 => 'Annuler',
    25 => 'Supprimer',
    26 => 'Nom du plugin',
    27 => 'Site web du plugin',
    28 => 'Version du plugin',
    29 => 'Version de Geeklog',
    30 => 'Supprimer le plugin ?',
    31 => 'Etes-vous sûr de vouloir supprimer ce plugin ?  Toutes les données, fichiers et structures utilisés par ce plugin seront détruits.  Si vous êtes sûr cliquez sur le bouton Supprimer.',
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
    1 => "Votre mot de passe vous a été envoyé par mail et devrait arriver d'un moment à l'autre. Suivez les instructions incluses dans le message et encore merci d'utiliser {$_CONF['site_name']}",
    2 => "Merci de proposer un article à {$_CONF['site_name']}.  Il a été envoyé à notre équipe qui l'aprouvera ou non. Dans la cas positif votre article sera publié.",
    3 => "Merci de proposer un lien à {$_CONF['site_name']}.  Il a été envoyé à notre équipe qui l'aprouvera ou non.  Dans le cas positif votre lien sera publié <a href={$_CONF['site_url']}/links.php>ici</a>.",
    4 => "Merci de proposer un événement à {$_CONF['site_name']}.  Il a été envoyé à notre équipe qui l'aprouvera ou non.  Dans le cas positif votre événement sera publié <a href={$_CONF['site_url']}/calendar.php>ici</a>.",
    5 => 'Vos informations ont été mises à jour avec succès.',
    6 => 'Vos préférences d\'affichages ont été mises à jour avec succès.',
    7 => 'Vos préférences de commentaires ont été mises à jour avec succès.',
    8 => 'Vous avez été déconnecté avec succès.',
    9 => 'Votre article a été enregistré avec succès.',
    10 => 'L\'article a été supprimé avec succès.',
    11 => 'Votre cadre a été enregistré avec succès.',
    12 => 'Le cadre a été supprimé avec succès.',
    13 => 'Votre sujet a été enregistré avec succès.',
    14 => 'Le sujet et tous ses articles ainsi que ses cadres ont été supprimés avec succès.',
    15 => 'Votre lien a été enregistré avec succès.',
    16 => 'Le lien a été supprimé avec succès.',
    17 => 'Votre événement a été enregistré avec succès.',
    18 => 'L\'événement a été supprimé avec succès.',
    19 => 'Votre sondage a été enregistré avec succès.',
    20 => 'Le sondage a été supprimé avec succès.',
    21 => 'Le nouvel utilisateur a été enregistré avec succès.',
    22 => 'L\'utilisateur a été supprimé avec succès.',
    23 => 'Erreur durant l\'ajout d\'un événement à votre calendrier. Aucun identifiant d\'événement n\'a été transmis.',
    24 => 'L\'événement a été enregistré dans votre calendrier.',
    25 => 'Vous devez vous connecter pour consulter votre calendrier',
    26 => 'L\'événement a été supprimé de votre calendrier avec succès.',
    27 => 'Message envoyé avec succès.',
    28 => 'Le plugin a été supprimé avec succès.',
    29 => 'Les calendriers personnels ne sont pas activés.',
    30 => 'Accès Interdit',
    31 => 'Vous n\'avez pas accès à la page d\'adminisrtation des articles.  Toutes les tentatives d\'accès à des parties non autorisées sont enregistrées.',
    32 => 'Vous n\'avez pas accès à la page d\'administration des sujets.  Toutes les tentatives d\'accès à des parties non autorisées sont enregistrées.',
    33 => 'Vous n\'avez pas accès à la page d\'administration des cadres.  Toutes les tentatives d\'accès à des parties non autorisées sont enregistrées.',
    34 => 'Vous n\'avez pas accès à la page d\'administration des liens.  Toutes les tentatives d\'accès à des parties non autorisées sont enregistrées.',
    35 => 'Vous n\'avez pas accès à la page d\'administration des événements.  Toutes les tentatives d\'accès à des parties non autorisées sont enregistrées.',
    36 => 'Vous n\'avez pas accès à la page d\'administration des sondages.  Toutes les tentatives d\'accès à des parties non autorisées sont enregistrées.',
    37 => 'Vous n\'avez pas accès à la page d\'administration des utilisateurs.  Toutes les tentatives d\'accès à des parties non autorisées sont enregistrées.',
    38 => 'Vous n\'avez pas accès à la page d\'administration des plugins.  Toutes les tentatives d\'accès à des parties non autorisées sont enregistrées.',
    39 => 'Vous n\'avez pas accès à la page d\'administration des mails.  Toutes les tentatives d\'accès à des parties non autorisées sont enregistrées.',
    40 => 'Message du système',
    41 => 'Vous n\'avez pas accès à la page d\'administration des substitutions de mots.  Toutes les tentatives d\'accès à des parties non autorisées sont enregistréss.',
    42 => 'Votre mot a été enregistré avec succès.',
    43 => 'Le mot a été supprimé avec succès.',
    44 => 'Le plugin a été installé avec succès!',
    45 => 'Le plugin a été supprimé avec succès.',
    46 => 'Vous n\'avez pas accès à l\'utilitaire de sauvegarde de la base de données.  Toutes les tentatives d\'accès à des parties non autorisées sont enregistrées.',
    47 => 'Cette fonctionnalité ne fonctionne que sur *nix.  Si vous utilisez *nix alors votre cache a été vidé avec succès. Si vous utilisez Windows, vous devez chercher les fichiers adodb_*.php et les supprimer à la main.',
    48 => "Merci d'avoir demandé votre compte utilisateur pour {$_CONF['site_name']}. Il a été envoyé à notre équipe qui l'aprouvera ou non. Dans le cas positif, votre mot de passe vous sera envoyé par email à l'adresse que vous avez fournie.",
    49 => 'Votre groupe a été enregistré avec succès.',
    50 => 'Le groupe a été supprimé avec succès.',
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
    'access' => 'Accès',
    'ownerroot' => 'Propriétaire/Admin',
    'group' => 'Groupe',
    'readonly' => 'Lecture seule',
    'accessrights' => 'Droits d\'accès',
    'owner' => 'Propriétaire',
    'grantgrouplabel' => 'Autorisation au dela du groupe d\'édition',
    'permmsg' => 'REMARQUE: les membres sont tous les utilisateurs identifiés et les anonymes sont tous les autres.',
    'securitygroups' => 'Groupe de sécurité',
    'editrootmsg' => "Excepté si vous êtes administrateur, vous ne pouvez pas modifier un autre administrateur.  Vous pouvez modifier tous les utilisateurs exceptés les administrateur. Toutes tentatives de modifications d'un administrateur sont enregistrées.  Retournez sur la <a href=\"{$_CONF['site_admin_url']}/user.php\">page d'administration</a>.",
    'securitygroupsmsg' => 'Sélectionner les cases des groupes auxquels l\'utilisateur appartient',
    'groupeditor' => 'Editeur de groupe',
    'description' => 'Description',
    'name' => 'Nom',
    'rights' => 'Droits',
    'missingfields' => 'Champs manquants',
    'missingfieldsmsg' => 'Vous devez saisir un nom et une description',
    'groupmanager' => 'Administrateur de groupe',
    'newgroupmsg' => 'Pour modifier ou supprimer un groupe, cliquez sur le groupe ci-dessous. Pour créer un nouveu groupe, cliquez sur Nouveau Groupe. Les groupes natifs ne peuvent pas être supprimés car ils sont utilisés par le système.',
    'groupname' => 'Nom du groupe',
    'coregroup' => 'Groupe système',
    'yes' => 'Oui',
    'no' => 'Non',
    'corerightsdescr' => "Ce groupe est un groupe système de {$_CONF['site_name']}.  Les droits de ce groupe ne peuvent pas être modifiés.  La liste ci-dessous des droits d'accès du groupe n'est pas modifiable.",
    'groupmsg' => 'Les droits des groupes sont hiérarchiques.  En ajoutant un groupe à un autre vous ajoutez tous les droits de ce groupe à l\'autre.  Lorsque c\'est possible, utilisez les groupes déja définis.  Si vous avez besoin de droits spécifiques, vous pouvez les choisir dans la liste ci-dessous.  Pour Ajouter un groupe à celui-ci cliquez sur la case du groupe à ajouter.',
    'coregroupmsg' => "Ce groupe est un groupe système de {$_CONF['site_name']}.  Les droits de ce groupe ne peuvent pas être modifiés. La liste ci-dessous des groupes inclus de ce groupe n'est pas modifiable.",
    'rightsdescr' => 'Les droits suivants peuvent être donnés directement au groupe OU provenir d\'un groupe inclus. Les droits sans case à cocher proviennent de groupe inclus. Les droits qui ont des cases à cocher sont donnés directement au groupe.',
    'lock' => 'Bloquer',
    'members' => 'Membres',
    'anonymous' => 'Anonymes',
    'permissions' => 'Permissions',
    'permissionskey' => 'R = lecture, E = modification, le droit de modification implique le droit de lecture',
    'edit' => 'Modifier',
    'none' => 'Rien',
    'accessdenied' => 'Accès interdit',
    'storydenialmsg' => 'vous n\'avez pas le droit de lire cette article. Peut-être que vous n\'êtes pas membre de .  Vous pouvez <a href=users.php?mode=new>vous enregistrer</a> sur  pour obtenir un compte utilisateur!',
    'nogroupsforcoregroup' => 'Le groupe n\'inclue aucun autre groupe',
    'grouphasnorights' => 'Le groupe n\'a pas accès aux fonctiones administratives',
    'newgroup' => 'Nouveau Groupe',
    'adminhome' => 'Accueil Admin',
    'save' => 'enregistrer',
    'cancel' => 'annuler',
    'delete' => 'supprimer',
    'canteditroot' => 'Vous avez essayé de modifier le groupe administrateur mais vous n\'en faites pas partie. Vous n\'avez pas accès à ce groupe. Veuillez contacter l\'administrateur si vous pensez que c\'est une erreur.',
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
    'last_ten_backups' => '10 dernieres sauvegardes',
    'do_backup' => 'Faire une sauvegarde',
    'backup_successful' => 'Sauvegarde de la base de donnée effectuée avec succès',
    'db_explanation' => 'Cliquez sur le bouton ci-dessous pour effectuer une sauvegarde de votre système Geeklog',
    'not_found' => "Chemin incorecte ou le fichier mysqldump n'est pas exécutable.<br>Vérifiez le paramètre <strong>\$_DB_mysqldump_path</strong> dans le fichier config.php.<br>Ce paramètre est actuellement positionné à : <var>{$_DB_mysqldump_path}</var>",
    'zero_size' => 'Sauvegarde échouée: la taille du fichier était de 0 octets.',
    'path_not_found' => "{$_CONF['backup_path']} n'existe pas ou n'est pas un répertoire.",
    'no_access' => "Erreur: le répertoire {$_CONF['backup_path']} n'est pas accessible.",
    'backup_file' => 'Fichier de sauvegarde',
    'size' => 'Taille',
    'bytes' => 'Octets',
    'total_number' => 'Total number of backups: %d'
);

###############################################################################

$LANG_BUTTONS = array(
    1 => 'Survol',
    2 => 'Contacts',
    3 => 'Ecrire un article',
    4 => 'Liens',
    5 => 'Sondages',
    6 => 'Calendrier',
    7 => 'Statistiques du site',
    8 => 'Personnaliser',
    9 => 'Chercher',
    10 => 'Recherche avancée',
    11 => 'Directory'
);

###############################################################################
# 404.php

$LANG_404 = array(
    1 => 'Erreur 404',
    2 => 'Le système ne trouve pas <b>%s</b>.',
    3 => "<p>Le fichier que vous demandez n'existe pas. Allez à la <a href=\"{$_CONF['site_url']}\">page principale</a> ou la <a href=\"{$_CONF['site_url']}/search.php\">page de recherche</a> afin de retrouver ce que vous avez perdu."
);

###############################################################################
# login form

$LANG_LOGIN = array(
    1 => 'Vous devez vous connecter',
    2 => 'Vous devez vous identifier à l\'aide de l\'espace membre pour accéder à cette partie du site.',
    3 => 'Accueil',
    4 => 'Nouvel utilisateur'
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
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Août',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre'
);

###############################################################################
# Weekdays

$LANG_WEEK = array(
    1 => 'Dimanche',
    2 => 'Lundi',
    3 => 'Mardi',
    4 => 'Mercredi',
    5 => 'Jeudi',
    6 => 'Vendredi',
    7 => 'Samedi'
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