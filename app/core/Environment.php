<?php

class Environment
{   
    
    public static function set($env)
    {
        switch($env)
        {
            case 'dev':
                ini_set('display_errors', true);
                error_reporting(-1);
                break;

            case 'prod':
                ini_set('display_errors', false);
                error_reporting(0);
                break;

            default:
                error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        }
    }

    public static function maintenance()
    {
        //Url::redirect('test');
    }
    
}
