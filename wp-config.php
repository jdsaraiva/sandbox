<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         ' dc+ZNUm,-A0OdsQ/.yBv?&IE3_^)Nax?T#`64P-YdmN3ts*GR3>`{,RL~q?.-pY');
define('SECURE_AUTH_KEY',  'PsoSiX*9.$YFA&$zQtMBJw[-J$biq_)z:zaTI]+^-|+)qD%Q:0SKJrduY8WR3n@+');
define('LOGGED_IN_KEY',    ']w/53g;JyE-<1U-MVQ{QF?8hvO_ZEYvkxAS&VXt&OY/7X-Y._pgPmim$f>cXvUk[');
define('NONCE_KEY',        'hXZ%ANpvA;>mdm8p!7{BNGiS-1e+x36I$nOV`Nl1^@x1SmL@UKj|~o5G#NZ9(ukq');
define('AUTH_SALT',        'Yu|rgLSusa;n,|q0?ivI|F[]/+$tNPu&Qi^$o:8U?>/$4-h^lVV-1:GfKlxC35|i');
define('SECURE_AUTH_SALT', '0.gHYpm2+iR3*]QBJKp1qZr`Q7{3dixiq^}8ncWU_96+RV~_>;u/f*4[A|bzoz.}');
define('LOGGED_IN_SALT',   'Mci+9t<yPO%Bk`&x$SeL+x-aEcG+DSVJtCff{DrH*>KM<)k80CJKJJw^G_(SY5#^');
define('NONCE_SALT',       '(>Y@$M$8i2(,~8sfKwG9(eM~3dEQ5:axj_$tA|cZ-?t RI[-8T8EGRBP]]6RTZOO');


$table_prefix = 'wp_';


define( 'WP_HOME', 'http://vccw.dev' );
define( 'WP_SITEURL', 'http://vccw.dev' );
define( 'JETPACK_DEV_DEBUG', true );
define( 'WP_DEBUG', true );
define( 'FORCE_SSL_ADMIN', false );
define( 'SAVEQUERIES', false );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
