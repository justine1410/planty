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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'Zzb>eU;^e*Q<k+3zyv34YeoFN/40;!`T-@6]{bmx?>LLwJIe$Z? hh`UxP,]TMvt' );
define( 'SECURE_AUTH_KEY',  '@eM@KRJN=^Hbbl6w(Oum&P2li8?0[`RB6C)K<wl8r7VC]:KJ9wJHtY!kl pBN0Oq' );
define( 'LOGGED_IN_KEY',    '9gByO1C5%4S(Z]*^i]4R5%RBsFiQDP8b+*xv8PCRAk!xd`=D&NSw4r$>C?}}^tbt' );
define( 'NONCE_KEY',        '[]a<cIm(U5W&_v~7}AO{Yl?MK:.G^TLkqU}>F:(EJW[w`Jt%:)~Bf}L#NO?>br_}' );
define( 'AUTH_SALT',        'H9;v;~Qy[w@XJODXbgUSISI5:?+<J{_RLcY ne~Pb~<>m3J6Aax%}W;8@Ey*a!.5' );
define( 'SECURE_AUTH_SALT', 'd!`C]9itd@3R@i8^u2?yqbiD$&_J,PD*`d<hj?zz57^j& tf/&0md1fgH&|?mx;C' );
define( 'LOGGED_IN_SALT',   'vN[J/D<xo~n;,NKW}LR+N.T)9_QM5nILSd{/9GVoD9XA#30DOjZFd4f*69zxJ]su' );
define( 'NONCE_SALT',       'st&4< 2gNxP~ylhCBa}j1jDKWgJ98]T<A,9BqkTGyWX|24k#s/w,<UA~Z@|1sM7G' );
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
