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
define('DB_NAME', 'wordpresexercice');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'troiswa');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '5NW&H,@x@z8[C:k-%7q`igyVG5s_CTE+oG~)sL!u/..v]aaujxn36](uBWg8KVM^');
define('SECURE_AUTH_KEY',  'O`ctpkx,{OC2:Pzk:XA_Gp`muE%,wqc-Ai~!F<~>%dc:?2mki!fsqis%~+g!~`7z');
define('LOGGED_IN_KEY',    ';6`Z*>Wijrh.aV#m4|)|ViD^MrTU[Y>clI=X4tS^^CP;#%4HFc|0~73LWiFRaz;{');
define('NONCE_KEY',        'z/J2rT36Jq,0lF5N1{HG2[}ZW6p@(7k:ksfuNwEAg%&1ag_7sW$ im#OhMxMP[92');
define('AUTH_SALT',        'uap6 YDgJ{:A?G=f}hWZjx]O^0nBl~mv(=I4)0]d[a-3x(1I;oqlc@OnlZ9nI(G5');
define('SECURE_AUTH_SALT', 'B[PitA2+7afE%*$mGhuev%uwnMMyHyXI {Zy#${2~GqwtOi;6@PfI&i=[mKTJW#M');
define('LOGGED_IN_SALT',   'f`__T+e <q&7jR$/6,JC_QoPK&|$G.Ze1KZ~I b:/.m8j6qJhkKyo9KdY}v/(@s(');
define('NONCE_SALT',       ' Ca<04ls;{.@X1s{xpm,<C}6h9+bZtISqbwF-Se|T/A*snS1xr5nJPN/;t?Sy<}e');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');