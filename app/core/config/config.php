<?php

/**
 * Envoi les erreurs au Logger.php
 */
set_exception_handler('logger::exception_handler');
set_error_handler('logger::error_handler');

/**
 * Définition du timezone
 */
date_default_timezone_set('Europe/Paris');

/**
 * Configuration de la BDD
 */
define('DB_TYPE','mysql');
define('DB_HOST','localhost'); 
define('DB_NAME','mvc'); 
define('DB_USER','root'); 
define('DB_PASS',''); 
define('DB_PREFIX','mvc_');
