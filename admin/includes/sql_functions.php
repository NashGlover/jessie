<?php
	function connect() {
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$database = "site";
		$conn = new mysqli($servername, $username, $password, $database);
		return $conn;	
	}
?>
