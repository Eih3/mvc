<?php

ob_start();

function autoloader($class)
{

   $filename = "webroot/controllers/".strtolower($class).".php";
   if(file_exists($filename)){
      require $filename;
   } 

   $filename = "app/core/".strtolower($class).".php";
   if(file_exists($filename)){
      require $filename;
   }

   $filename = "app/helpers/".strtolower($class).".php";
   if(file_exists($filename)){
      require $filename;
   } 
 
}

spl_autoload_register('autoloader');



