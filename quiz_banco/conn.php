<?php
			$servername = "remotemysql.com";
			$username = "dkR8RxRQ3F";
			$database= "dkR8RxRQ3F";
			$password = "7WRQnuiqyy";
			//  Create a new connection to the MySQL database using PDO
			$conn = mysqli_connect($servername,$username,$password,$database) or die(mysql_error());
			
			// Check connection
			if (!$conn) {
				  die("Connection failed: " . mysqli_connect_error());
			}
			 
			echo "Connected successfully";	
			
			
?>