<?php

/**
 * Initialisation des fichiers
 */

// Fichier de Définition
require 'Define.php';

require CORE . 'Autoloader' . PHP;

// Gestion affichage des erreurs
Environment::set('dev');

//start sessions
Session::start();


Environment::maintenance();

require CONF . 'config' . PHP;


/*
require CORE . 'Controller' . PHP;
require LIBS . 'Environment' . PHP;
require LIBS . 'Model' . PHP;
require LIBS . 'Load' . PHP;
require LIBS . 'Registry' . PHP;
require LIBS . 'Request' . PHP;
require LIBS . 'Router' . PHP;
require LIBS . 'Skeleton' . PHP;
*/
/**
 * EOF
 * Init.php
 */