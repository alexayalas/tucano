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
/* define('DB_NAME', 'tucano'); */
define('DB_NAME', 'heroku_160174134584927');

/** Tu nombre de usuario de MySQL */
/* define('DB_USER', 'root'); */
define('DB_USER', 'b08cc5805d9cdd');

/** Tu contraseña de MySQL */
/* define('DB_PASSWORD', ''); */
define('DB_PASSWORD', 'f58909e4');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
/* define('DB_HOST', 'localhost'); */
define('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net');

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
define('AUTH_KEY', '*EHUpRazKCF{JA|zSYhmq/|8*DmLaw?%0L())9$J$&gT9%W[om#u},/MrtN</N=g');
define('SECURE_AUTH_KEY', '9&9gLBybHQKalPSB})kQXs]126Q1}LIt<PO4-gl ?0Vc0dH8R}{pCiTDO5[F|q7>');
define('LOGGED_IN_KEY', 'IK#aPKa:Cp.@*CXJ:w(-3&QZAb)7Uj?5!;<JK6Q_N;~P{0IjT{? Z=PKk4[)q2-b');
define('NONCE_KEY', '> y s<#$W,}[ggLQ,eirs2p:6}OUc{8Fg^%!,ijErf5M$|5K@X?ghp@l]e8M`{.@');
define('AUTH_SALT', 'S@q/2jfF`^y<[FDrtx.L:lm9d$zZP%GaFT-1^yt`H9*C?=:9,@pci$(G] tUL|&2');
define('SECURE_AUTH_SALT', 'l=zxeIQ0]|p;kl@qWc+adi2w)m*1{T4y>~]0#c@oC9[-_$N1?93BMMEDzN!6($ow');
define('LOGGED_IN_SALT', 'g_qlzA-`/xnJ0)0@`?l8%HzzJyy@fAGKVy276&;<TX}N)ex0_dp..B-.FC`bZveT');
define('NONCE_SALT', 'y/di|F|~yA.;im5N}]6l;cV^yw62Vp}aC3)NHV87-T64M&js{U3Og?QaT5*[`4T{');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

