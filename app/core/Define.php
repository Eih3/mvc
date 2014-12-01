<?php

// Globales
define('DS', DIRECTORY_SEPARATOR);

/**
 * Titre du site web
 */
define('TITRE_SITE', 'SITE');

/**
* URL du site web avec '/' en fin
* ex: http://localhost/
*	  http://monsite.com/site/
*
* Ne pas oublier de changer .htaccess
*/
define('URL_SITE', 'http://localhost/');
define('MAINTENANCE', false);

/**
 * Définition du template par défaut
 * webroot/templates/$template
 */
define('DEFAULT_TEMPLATE', 'default');

// Extensions
define('PHP', '.php');
define('TPL', '.tpl');

// Dossiers ROOT
define('APP', 'app' . DS);

// Dossiers APP
define('CONT', APP . 'controllers' . DS);
define('CORE', APP . 'core' . DS);
define('HELP', APP . 'helpers' . DS);
define('MOD', APP . 'models' . DS);

define('VIEW', APP . 'views' . DS);



// Dossiers CORE
define('CONF', CORE . 'config' . DS);

/**
 * EOF
 * Define.php
 */