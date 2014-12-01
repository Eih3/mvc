<?php

class Url
{

	public static function redirect($url = null, $fullpath = false)
	{
		
		if ($fullpath == false){
			header('location: ' . URL_SITE . $url);
			die();
		} else {
			header('location: ' . $url);
			die();
		}
		
	}

}