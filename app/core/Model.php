<?php 

class Model {

	protected $_db;
	
	public function __construct(){
		
		/**
		 * Initialisation de la base de donnée
		 */
		$this->_db = new Database();
	}
}
