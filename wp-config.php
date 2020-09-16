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
define( 'DB_NAME', 'agencia' );

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
define( 'AUTH_KEY',         'yB{j|[+IpffgA,&V7,Qi<y9,k6{cjW}RX#kn}K7> OA/1{-(;EJk(?7Ibk^TaFHK' );
define( 'SECURE_AUTH_KEY',  '95Z3,;^FdfP$k[HhmzT;a>>Z3{^Q#jrR[6Pe}XgJvmoG//1ZKs)9HT<.V9![v;lM' );
define( 'LOGGED_IN_KEY',    '_9d?av6n1@,PzQ*P{@|-!FPT#g*X;sM>I`+gV<~o!:-,YKY_<t@3[%|Y-`5hxJj[' );
define( 'NONCE_KEY',        '/6mL9dPZtnmK6{d|P`!bdote};2^R6Y+G-;1|v>kA>*);M$jqzc!;v[7[A%@Om~&' );
define( 'AUTH_SALT',        ';0~u~Vu,?^J++|{Zqo8Mi:g:v;Ox<cfrG!yGFBWN87GSJ&4kmh=9L^M+/kS;{7;j' );
define( 'SECURE_AUTH_SALT', 'Z-~_xzril+fXKRJAtL_[BG1R&L9rItwFui%k:@Xm5,,wu(yQ}[kcF3*$6VWl[nj(' );
define( 'LOGGED_IN_SALT',   'QS7sC)x89mXhL1aZo;Ejfw$epqfZU9-{f)aiF3F+pOEq1*3D|H.}%_yy2JP$M1K{' );
define( 'NONCE_SALT',       '}(/RS..tEI:@e_@Kq Www_nD+*eJh_<r9FqJFc:8FC_MRK?!^hif%}W12~=@P>3(' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

/** Permet de télécharger les plugins */
define('FS_METHOD','direct');