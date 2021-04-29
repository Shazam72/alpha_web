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
define( 'DB_NAME', 'wordpress_test' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'T?&F= JHZT`/9>JkP;TxVou{{6u+n8$7^Zu|Z42cbY/8~QY9!K37L 1,Nv?/J2Zn' );
define( 'SECURE_AUTH_KEY',  '}=j3kjg s<nq4de)M%oyhCi>.*t]^T^/D$_p {&ve~pR,N|.RN2U!#1Lak8qFRrG' );
define( 'LOGGED_IN_KEY',    'bi3$2=Zm@seiWknn:4>g?`@91;!LpIZCv^z{[mvF48I0T4fdfC+z7IyiBURS;jYu' );
define( 'NONCE_KEY',        'P.LA|R~nN+VggQh5hj]BV&/Rk|C)vU,7F0${3@Q2bEFd~vQ?il#r:)(YUeqC4kxh' );
define( 'AUTH_SALT',        '1q+X>IEopDCe2xxU}2|=2bEVd,V1[Ae`BeX@gXpmSXz-(;j>sM_m?NT}lJ{^f;MU' );
define( 'SECURE_AUTH_SALT', 'D1%du8dBN}=zy.Eo<BwfkPQ4uR kO[4*4}j[eH|>^lCf-I CXnz1/TL~GsZy71]H' );
define( 'LOGGED_IN_SALT',   'r>u![9`2=P1[p C]a9H$yUMF3q.pb0(!T|d@ndjvO-Wq@xf1b(:o^Xv@J`mo1k4R' );
define( 'NONCE_SALT',       '2</dc|Z0@]#y]7S+t)Z1X&/.n=t(.fUD5v+f|}ff%V/cx[^k7MVA-$frPi#IJ;In' );
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
