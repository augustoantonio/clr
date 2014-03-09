<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hcPm!lJ6dj|1R^Qmk%Znyg!/4wj5dQ,$nx!6,VYw hCD{5rlhX#Ad=i- $=aLL^P');
define('SECURE_AUTH_KEY',  'RHf~DpuGSu|8cNfCZno!maILfoMqeP+Btnk)h |4+EdzQD6`/w6%GLm+0QA[a^!~');
define('LOGGED_IN_KEY',    'G! OZMwZzLVh7j&h6z-TW@.#h>c~;~$dAY+x))*(2^ fkigv;gP@1NVt*Ga-$T5c');
define('NONCE_KEY',        'oj)`pTGO-@b:D?vGC,jAZ&w+{uF-,c,td<7v/wYr15J+mq+XcZH`:2V#:_{)/O$A');
define('AUTH_SALT',        'B[dvvBX:PP|-+07l+VWI2y2&-D-}+,:1S~v[%;|rI>)&G(,%Z|(BQ?+I4)LKl<={');
define('SECURE_AUTH_SALT', '.R|=_-/nMj<}}kOb5~q/XC7^)k^U?Y_|*0z@-UhfmvtDL+q6!j03L?v7T4`zIKq|');
define('LOGGED_IN_SALT',   '`Dhch?es+%kI<pR/Qi#e.=;+.-bEx0lm>RRJR1CW7C9b((e0zr=_c74B]!P2%|yz');
define('NONCE_SALT',       ')TC,s|le&P$>s|Eu^q9*.<:;^79&VD!``_-Gx~Nw-PJ2ts9Qk1P.@6x@V}.</WXi');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

