<?php

/* Created @ 16.10.2010 by TheFox */

class user{
	
	var $dbh;
	var $user; // User infos from db.
	
	public $id;
	public $isActive;
	public $isGuest;
	
	function __construct($dbh){
		
		$this->dbh = $dbh;
		$this->user =  array();
		$this->id = 0;
		$this->isActive = false;
		$this->isGuest = true;
		
	}
	
	function loadBySessionId($sessionId){
		/*
			Get the $sessionId from cookie and read the
			user from db.
		*/
		
		if($this->dbh){
			
		}
	}
	
	function loadByUserId($uid){
		if($this->dbh){
			
		}
	}
	
	function get($item){
		return $this->user[$item];
	}
	
	function set($item, $value){
		$this->user[$item] = $value;
	}
	
	function save(){
		// Save the user to the db.
		
		if($this->dbh && count($this->user)){
			
		}
	}
	
	// Internal functions.
	function _isActive(){
		if(isset($this->user['password']))
			if($this->user['password'] != '' && $this->user['password'] != 'x')
				$this->isActive = true;
	}
	
	function __destruct(){
		// __destruct
	}
	
};

?>