<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <title>QUIZ</title>
</head>
<body>
    <header>
        <div id="img1">
            <img src="img/geral.png">
        </div>
    </header>

    <div id="quiz">
        <h1>QUIZ</h1>
        <h2>Teste aqui seus conhecimentos sobre tecnologia.</h2>
    </div>

    <div id="form">
        <form name="formLogin" action="log.php" method="POST" onsubmit="return validarLogin()">
            <p class="login">Login</p><br>
            
            <label for="email" class="label">E-mail</label><br>
            <input class="input" type="text" name="email" id="email"><br>
            <div id="msg1"></div>
            <div id="msg4">nnnn</div>
            <label for="senha" class="label">Senha</label><br>
            <input class="input" type="password" name="senha" id="senha"><br>
            <div id="msg2"></div>

            <p class="fazercadastro">Não tem uma conta? <a id="link" href="index.php">Cadastre-se</p></a>

            <input class="submit" type="submit" name="submit" value="Login">
			
        </form>
    </div>
    <script src="js/script.js"></script>
</body>
</html>