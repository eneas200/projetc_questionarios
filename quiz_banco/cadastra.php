<?php 
            
			include("conn.php");
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
        

			$sql = "INSERT INTO jogadores (nome,email,senha) VALUES('$nome','$email','$senha')";
			
			if (mysqli_query($conn, $sql)) {
				  echo "New record created successfully";
			} else {
				  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);

?>
        
        
   
