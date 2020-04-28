<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        
        

    </head>
    <body>
        <?php 
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
        
        ?>
        <h1>Nome: <?= $nome; ?></h1>
        <h1>Email: <?= $email; ?></h1>
        <h1>Senha: <?= $senha; ?></h1>
        
    </body>
</html>
