<?php include("conn.php"); ?>
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
        
    </div>
    <div id="sobre">
        <h2>Esse quiz possui 30 perguntas de múltipla escolha sobre tecnologia, divididas em 3 níveis: fácil, intermediário e difícil. Você tem 10 segundos para responder cada pergunta, passando o tempo e não havendo resposta, a questão é considerada como errada. Confira no final sua pontuação! </h2>
    </div>

    <div id="botoes">
        <button class="voltar">Voltar</button>
        <button onclick="window.location.href = 'perguntas.php';" id="comecar">Começar</button>
    </div>

    <div class="footer"><a class="footer" href="desenvolvedores.php">&copy; Desenvolvedores</a></div>
</body>
</html>