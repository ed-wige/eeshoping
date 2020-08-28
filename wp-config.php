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
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         '{#x:hZC PZ>$|;,Ul`I}N5%@Ag}`gVK?Awf^w.TG}75.~Ra5jY>D*qc6B^T9swwf' );
define( 'SECURE_AUTH_KEY',  'J:e$}XN5^ev,[05Vj[]<$F;G<5V@_I$~4d:d!7!{IY?UL/}s(J#vOMhFW?Vt-jHQ' );
define( 'LOGGED_IN_KEY',    '-aEV3OZ.?6+<?ktfN<RavipmL)ecV]aIWI0tZtfXg9RuI1GrM+1QR@>]6p+{lSpL' );
define( 'NONCE_KEY',        '0=Q|li!JXp,9jdcdE;T$|j`}kj;09?5URk.C.tR_L4WR/=K1z})x0/(Id|Bx<v*N' );
define( 'AUTH_SALT',        'u_~-YZ3G?|o%X^fr9q8dI8l4;0,D$.4dlq6 Ur5>$msXA7gd{A]${}d7;?Hk1>bw' );
define( 'SECURE_AUTH_SALT', 'LG4a<5)blL<P+SHWL}~|SA2QARyJR&!0>Ym+3(j<fj*s(d#QZ2$^}0I{$;j%3s73' );
define( 'LOGGED_IN_SALT',   '[+v0gPyW.+,lSMc7t.Ve`Z:is2)brM<blHfnQP`lRP,d/c/Svge`I^CeWEV_;rRa' );
define( 'NONCE_SALT',       'n;>Y{oOq|Xh}@Iu!&DqU/xaK}_5=aOmT?nRy]U8nf>[DU&}#;)&KVG;s%/h3s?(&' );
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
