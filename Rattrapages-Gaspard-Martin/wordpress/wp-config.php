<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'rattrapage' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'a4>?q^8mm:&_bdw-T~/441`V<0>/i$|u/7?{!tzkKnzk39L?_+YO#FK&`-y:$+mS' );
define( 'SECURE_AUTH_KEY',  'U9D/lO3so=-@Fmrj,3Z|aJ)osj<gOm.!(hPtN3b7i5(YtKp{(yZ^`u.7^iPw,sBa' );
define( 'LOGGED_IN_KEY',    '? T;-2?CXo68?180n_D7S}!@1((skFuyS}{ 9NpNBot8U&,/rbv~@p0m@6E(Q`vg' );
define( 'NONCE_KEY',        't0kF,(U(IeV#?;7#ieg0pam&-3EEPsqML`>ZlpO><OBPZRu5Si*Q%Byqqqi{V3f>' );
define( 'AUTH_SALT',        '%=.~0[Frc6{w30@;_zuK:Dgo$n*CMrJL.}LaF>ANQ6(KW;6TiF LE| Ol=k#v$XY' );
define( 'SECURE_AUTH_SALT', '{JLX-XJagl,Xm9+{I0@RWRuEm/G9,9FE])r7kH%.kW1eTJ9[K09pQ1tl]E3Q0h8g' );
define( 'LOGGED_IN_SALT',   'nM!IA4IDGt66_MWp&GRO[!PplKy.Vua;=o-jnhz?TQhScNXe~hz<^gI^lm~^5Azx' );
define( 'NONCE_SALT',       'FI.%,V7du:;t!T[E:#-EoY&{`_ ]*#s0/1S `BHC1gZ:23j`[~W,oNf@5g)u#F<J' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
