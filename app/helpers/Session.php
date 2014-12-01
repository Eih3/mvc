<?php

class Session {

	private static $_sessionStarted = false;

	public static function start(){

		if(self::$_sessionStarted == false){
			session_start();
			self::$_sessionStarted = true;
		}

	}

	public static function set($key,$value){
		$_SESSION[$key] = $value;
	}

	public static function get($key,$secondkey = false){

		if($secondkey == true){

			if(isset($_SESSION[$key][$secondkey])){
				return $_SESSION[$key][$secondkey];
			}

		} else {

			if(isset($_SESSION[$key])){
				return $_SESSION[$key];
			}

		}

		return false;

	}

	/**
	 * Retourne true si une session est définie et
	 * non nulle. La session peut etre simple ou
	 * en array().
	 */
	public static function exist($key, $secondkey = false)
	{

		if ($secondkey == true) {

			if (isset($_SESSION[$key][$secondkey])) {
				if (strlen($_SESSION[$key][$secondkey]) > 0) {
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}

		} else {

			if (isset($_SESSION[$key])) {
				if (strlen($_SESSION[$key]) > 0) {
					return true;
				} else {
					return false;
				}
				
			} else {
				return false;
			}

		}

		return false;

	}

	public static function display(){
		return $_SESSION;
	}

	public static function destroy(){

		if(self::$_sessionStarted == true){
			session_unset();
			session_destroy();
		}

	}

}