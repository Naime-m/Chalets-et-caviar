<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ugxtetws_wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'ugxtetws_admin' );

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'dd8%0&&fgH5E%gH1dC');

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8t>;!VigkZ!MpH)P:JAtg~`{#3ME4$(fU29Q|PHt}lu54G}`LbhCV6=FZtfa4Ac(' );
define( 'SECURE_AUTH_KEY',  'OB-0mCJ^]DeJFpHhA=K&Tm_-BiXh]}QHG!9PLwQ$8<_`Kh5S*Srct8Z;oTDD|1L&' );
define( 'LOGGED_IN_KEY',    'fLlW9Ty.g e(?&%8_YAz)J-PNtKC%<$Q(vgr+YMDzgC]:r&Wf~|aYJSH{% SK?NI' );
define( 'NONCE_KEY',        'sUnH@2^U-re:Fb^TE6(s=Eptp@IeBm{3w!d*D)cLG^D3Okvl}7!*.?j^h`t(]p1W' );
define( 'AUTH_SALT',        'KL7 {j|z0)u Q2(M)R3PM!,;>(,Ppf#O!?U`WU Vnq}gPeh7ErY.wy{z(2Zg|H8d' );
define( 'SECURE_AUTH_SALT', 'fnlMzd%yj;5tWmo)Z)a/ mNSlC6QOk{U.djhs5)2}5e^>6(t#<bdGiqkC,Vpi3@t' );
define( 'LOGGED_IN_SALT',   'BI4-W?-5|hR_#|Sl5j/+N9ga-s#gwX4Kzqm0TmR{B3e QhKaw,X2Hc>v/r8bb~nq' );
define( 'NONCE_SALT',       '+XfJw%LsX.|KeVn?jP2z~zNe^8GksG^coTW@KblIF9cv=W!-kVie*{,)O)^-}8}c' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
