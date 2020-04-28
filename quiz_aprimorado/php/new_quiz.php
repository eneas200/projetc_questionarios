<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aprimorando o quiz</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="quiz.css">
  </head>
  <body>

    <div id="quizContainer" class="container">
        <div class="title">Computer Quiz</div>
        <div id="question" class="question"></div>
        <label class="option"><input type="radio" name="option" value="1"/><span id="opt1"></span> </label>
        <label class="option"><input type="radio" name="option" value="2"/><span id="opt2"></span> </label>
        <label class="option"><input type="radio" name="option" value="3"/><span id="opt3"></span> </label>
        <label class="option"><input type="radio" name="option" value="4"/><span id="opt4"></span> </label>
        <button id="nextButton" class="next-btn" onclick="loadNextQuestion();">Next Question</button>
    </div>
    <div id="result" class="container result" style="display:none;"></div>


    <!-- <script src="script-perguntas.js"></script> -->
    <script src="question.js" charset="utf-8"></script>
    <script src="quiz-script.js" charset="utf-8"></script>
  </body>
</html>
