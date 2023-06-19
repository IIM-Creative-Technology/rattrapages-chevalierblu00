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
define( 'AUTH_KEY',         'FkzRy<wRYVWXU#pHJD75-joc)<xGT<TOB~[,N{_(a2gCO>ulN+XPvb:hAcBrL>%B' );
define( 'SECURE_AUTH_KEY',  'p&JrlUDG`US;Pp=>mdRQp/m__D U-0_kle?WVC@teKnu0)Ct^&n3s]91]Nu+$D$p' );
define( 'LOGGED_IN_KEY',    'uX< |PqW[[iwKs/rjM%F$:i`]xA$#h>q|U5/$OSZv#Vd?)M`Wpquy4`ec[-6ju;]' );
define( 'NONCE_KEY',        'a{jSoQV+e>5JT?C9ICKL?zk2j>c 1!;%[Jnx,s~vqALYb3[Xop-#jgk:.:R|sb7k' );
define( 'AUTH_SALT',        'i=zR+T6,8zKPMX.VV|Y6?jJ={JXu+tGz+^6gfD.s~2Ln+XEIWZ,<Jf#om{*BnX?{' );
define( 'SECURE_AUTH_SALT', '-{euY>CpycF#&b{[)/Kc<F3+d9KVf&|T,csJNCjc|3qe;vW#GV9z|o^PWJ_8kv`!' );
define( 'LOGGED_IN_SALT',   'xo{X[Y*`67O2w#bX)3DN+`X.&.+#+JEO:lsS7+]m$z3AUv:3n=@9;H[JIcHrv]@Y' );
define( 'NONCE_SALT',       'o@Mh_r&inAL5>7)37/ Njy)$42^T<5}gR%5jz{d=KG_rG{ 1LVe<e(:x~8ZbXD =' );
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
