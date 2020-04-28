<?php
			$servername = "remotemysql.com";
			$username = "dkR8RxRQ3F";
			$database = "dkR8RxRQ3F ";
			$password = "Rj8KvzaoGA";
			//  Create a new connection to the MySQL database using PDO
			$conn = new mysqli($servername, $username, $password ,$database);
			// Check connection
			if ($conn->connect_error) {
				//die("Connection failed: " . $conn->connect_error);
				
			} 
			echo "Connected successfully";
?>