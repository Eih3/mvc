<?php

class View
{	

	public function __construct()
	{
		$this->setTemplate();

		$this->setTemplatePath();
	}

	/**
	 * Retourne le template utilisé par
	 * l'utilisateur ou le template par
	 * default.
	 */
	public function setTemplate()
	{
		if (Session::exist('User','template')) {
			define('TEMPLATE', Session::get('User', 'template'));			
		} else {
			define('TEMPLATE', DEFAULT_TEMPLATE);		
		}
	}

	/**
	 * Retourne le chemin d'accès selon le
	 * template utilisé par l'utilisateur 
	 * pour le css, js, img, etc ..
	 */
	public function setTemplatePath()
	{
		define('TEMPLATE_PATH', 'webroot/templates/' . TEMPLATE . '/');
	}

	/**
	 * 
	 */
	public function render($path, $data = false, $error = false){
		require "webroot/views/$path.php";
	}

	/**
	 *
	 */
	public function rendertemplate($path, $data = false)
	{
		require TEMPLATE_PATH . $path . PHP;		
	}
	
}