var indexQuestao = 0;
var pontos = 0;
// var acertos, erros;

var container = document.getElementById('quizContainer');
var questionEl = document.getElementById('question');

var opt1 = document.getElementById('opt1');
var opt2 = document.getElementById('opt2');
var opt3 = document.getElementById('opt3');
var opt4 = document.getElementById('opt4');

var totQuestao = QuizQuestoes.length;
var nextButton = document.getElementById('nextButton');
var resultCont = document.getElementById('result');

// gera as questao no formulario
function loadQuestion(questionIndex) {
  var objetoVetor = QuizQuestoes[questionIndex];
  questionEl.textContent = (questionIndex + 1) + ". " + objetoVetor.questao;
  
  opt1.textContent = objetoVetor.respostas.a;
  opt2.textContent = objetoVetor.respostas.b;
  opt3.textContent = objetoVetor.respostas.c;
  opt4.textContent = objetoVetor.respostas.d;
};

function loadNextQuestion() {
  var selectedOption = document.querySelector('input[type=radio]:checked');
   // clicar no bottao antes de marcar a respota mostra error
  if(!selectedOption){
    console.log(!selectedOption);
    alert('por favor selecione sua resposta');
    return;
  }

  // atribuir ponto se marca a resposta correta
  var resposta = selectedOption.value;
  // compara a resposta do vetor com a do formulario
  if(QuizQuestoes[indexQuestao].respostaCorreta == resposta){
    pontos += 10;
  }

  selectedOption.checked = false;
  indexQuestao++;
  if(indexQuestao == totQuestao -1){
    nextButton.textContent =  'Finish';
  }

  if(indexQuestao == totQuestao){
    container.style.display = 'none';
    resultCont.style.display = '';
    resultCont.textContent = "Seus pontos é: " + pontos;
    return;
  }
  loadQuestion(indexQuestao);
}


loadQuestion(indexQuestao);
