
<!DOCTYPE html>
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

    <div id="perguntas">
        <form id="formPerguntas">
            <div class="pergunta">
                <p id="pergunta" class="pergunta">A evolução dos computadores se baseia em quais pontos principais?</p>
            </div>
            <div id="grupo">
                <button type="button" id="alt1">Memórias e facilidade de uso</button></li>
                <button type="button" id="alt2">Processamento e facilidade de uso</button></li>
                <button type="button" id="alt3">Processamento e armazenamento</button></li>
                <button type="button" id="alt4">Processador e memória RAM</button></li>
            </div>
        </form>
        <script>
            document.getElementById('comecar').addEventListener("click", exibir_perguntas("p","1","2","2","3"));
        </script> 
    </div>
    <script js/script.js></script>
</body>
</html>