<?php

	class Connection
	{
		private $host;
		private $user;
		private $password;
		private $dbname;
		private $conn;

		public function __construct()
		{
			$this->host = '162.241.203.36';
			$this->user = 'msdeve73_admin2';
			$this->password = '12345';
			$this->dbname = 'msdeve73_karate';
			$this->conn = new mysqli($this->host, $this->user, $this->password,$this->dbname);
			if ($this->conn->connect_error) {
			    die("Connection failed: " . $this->conn->connect_error);
			}
		}
		public function getConnection(){
			return $this->conn;
		}
	}


?>
