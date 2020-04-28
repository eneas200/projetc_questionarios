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
        <form name="formCadastro" action="cadastra.php" method="POST" onsubmit="return validarCadastro()">
            <p class="cadastro">Cadastro</p><br>

            <label for="nome" class="label">Nome</label><br>
            <input class="input" type="text" name="nome" id="nome"><br>
            <div id="msg1"></div>

            <label for="email" class="label">E-mail</label><br>
            <input class="input" type="text" name="email" id="email"><br>
            <div id="msg2"></div>

            <label for="senha" class="label">Senha</label><br>
           <input class="input" type="password" name="senha" id="senha"><br>
            <div id="msg3"></div>

            <p class="fazerlogin">Já tem uma conta? <a id="link" href="login.php">Login</a></p>

            <input class="submit" type="submit" name="submit" value="Cadastrar">
        </form>
    </div>
    <script src="js/script.js"></script>
</body>
</html>