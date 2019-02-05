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
define('DB_NAME', 'observ13_observatorio');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'h[Q)~t4~iZAr)jbmypbBM6P-O4;.&Zazsy_cHyZp:+ :q;mJx+y>023*&+s5A63g');
define('SECURE_AUTH_KEY', 'X<=NJBqx|KMPBZywm3wxitOh]|0D0)%-dJDh/>}Q*`aVp!3r([jw2WrQ*TZh 3)S');
define('LOGGED_IN_KEY', '~iQ}9V_]bsS{B:bmS{ eJ^!xCU?H,4JBjMU6v(}xg,K# G0dHJc$4~<G%bq@_>n:');
define('NONCE_KEY', 'YfF9i]mKGxCS$6hc&!DhxjAxkZsaj[H{vc#K|6V#}ylhG*$&r@2,gV_y(1uY|Y#9');
define('AUTH_SALT', 'd5_BjS3F9./WCq%TnH6+#av)}ZO?vix9@gIP[fr=9ulr<m~5Nz_@V6(S&_!<tmLu');
define('SECURE_AUTH_SALT', '23Q`6Z1GrCiJw=`86PJz6MS8-}7-YvQ[a]&:%MT/6HjS+qn{!w{zBon*8T$:SY&J');
define('LOGGED_IN_SALT', 'R:^&-(I>izWS jfvs=VKch:B)p<1s]Pxl.,]nh#/j4E}+:Z-]q/qPRQ=b|42X;cF');
define('NONCE_SALT', 'fiVd[Y6ylT5r L:4I?+%dhJ[iWT4`anF0h0s1 Bb2JE5R(+!U4eKPW-Ge]NqqwB{');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'op_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

