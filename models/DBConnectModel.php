<?php
/*
* Mysql database connection class 
* This is just for testing purposes, please change host, username, password and dbname if it is needed
*/
class DBConnectModel {
	private $host;
	private $username;
	private $password;
	private $dbname;
	
	// Get mysqli connection
	protected function connect() {
		$this->host = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->dbname = "super_donkey";
		
		$conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
		if ($conn->connect_errno) {
    		die("Failed to connect to MySQL: (".$conn->connect_errno.") ".$conn->connect_error);
		} else {
			return $conn;
		}
	}
	
	
}