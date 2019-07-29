<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'chall1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'chall1' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'chall1' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T&LI`LfwL Tf<CBm2&5<+Lb5ah!Kp~&0UcW{RK&G18jMM!#fB*h+W:8wdxbP2MP|' );
define( 'SECURE_AUTH_KEY',  'L5n/yO)2fC!Z_@}yY!*16Q_*2Pmi/P,C#,_:&,H=YyOpLrEosH8&#4581KwK];Xb' );
define( 'LOGGED_IN_KEY',    'bd8mY1_rsisxLM8]>Gax=W^gNv5sC$v9COPf.w_9N,BM-$$E!:EBeY?45hxlqr-^' );
define( 'NONCE_KEY',        'H)[u(|E=~)74b!VeY I|d&aJS[qxy+x4Lq~.KA2=V` fVFGDkj?+r|ZVO&bbKN?N' );
define( 'AUTH_SALT',        '2 7tf|i]6Wt(-u]qu-Gh!Y0P@:]{dwx`hiq(.)Z2HE8Y!fq:P6St7Gr^~EN%`9A#' );
define( 'SECURE_AUTH_SALT', '45H9JE3>[A&3WsBqaD4j 4Tl#x5MNd>lWkH(Ke?)jMn7pej#:nCuk@DJD>fJ^M*t' );
define( 'LOGGED_IN_SALT',   '5[<v}k&hj?~RhcQYo`x?noJbe8iXR=:A/3VTCsr/.00n]z2`w,Pm[JYHxdhI%H98' );
define( 'NONCE_SALT',       '8}2^.rEgbVLbL-;bcTfuCtC>(]R=|#ckC)yX.!nxgijqv/`XE,k<IHZWz.7+-rI}' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

define('FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
