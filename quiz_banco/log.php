<?php 
            
			include("conn.php");
            $email = $_POST['email'];
            $senha = $_POST['senha'];
        

			$sql = "SELECT senha FROM jogadores WHERE  email = '$email' AND senha = '$senha'";
			$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
			$row = mysqli_num_rows($resultado);
			
			 
			if ($row == 1) {
				  echo "Usuario encontrado";
			$_SESSION['email'] = $email;
			header('Location: perguntas.php');
			exit();
			} else {
				  echo "Usuario não encontrado";
				  header('Location: login.php');
			      exit();
			}
			mysqli_close($conn);

?>