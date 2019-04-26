<?php  
	$host = 'localhost';
	$user = 'root';
	$password = '12345';
	$dbname = 'karate';
	$conn = new mysqli($host, $user, $password,$dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
?>