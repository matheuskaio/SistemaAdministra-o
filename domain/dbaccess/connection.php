<?php  
	$host = '162.241.203.36';
	$user = 'msdeve73_admin2';
	$password = '12345';
	$dbname = 'msdeve73_karate';
	$conn = new mysqli($host, $user, $password,$dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	echo "DEU BOM";
?>