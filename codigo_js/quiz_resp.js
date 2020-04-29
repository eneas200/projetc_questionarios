var indexQuestao = 0;
var pontos = 0;

var totQuestao = QuizQuestoes.length;

var container = document.getElementById('quizContainer');
var questaoEl = document.getElementById('question');
var opt1 = document.getElementById('opt1');
var opt2 = document.getElementById('opt2');
var opt3 = document.getElementById('opt3');
var opt4 = document.getElementById('opt4');
var nextButtom = document.getElementById('nextButton');
var resultCont = document.getElementById('result');


// funções

function loadQuestao(questaoIndex){
	var objVetor = QuizQuestoes[questaoIndex];
	questaoEl.textContent = (questaoIndex +1) + '. ' + objVetor.questao;

	opt1.textContent = objVetor.respostas.a
	opt2.textContent = objVetor.respostas.b
	opt3.textContent = objVetor.respostas.c
	opt4.textContent = objVetor.respostas.d
}


function loadNextQuestion(){
	var selectedOption = document.querySelector("input[type=radio]:checked");
	if(!selectedOption) {
		alert('por favor selecione sua respota')
		return;
	}

	var resposta = selectedOption.value;
	if(QuizQuestoes[indexQuestao].respostaCorreta == resposta){
		pontos += 10;
	}

	selectedOption.checked = false;
	indexQuestao++;
	if(indexQuestao == totQuestao -1){
		nextButton.textContent = 'Finish';
	}
	if(indexQuestao == totQuestao){
		container.style.display = 'none';
		result.style.display = '';
		resultCont.textContent = "seu pontos: " + + pontos;
		return;
	}
	loadQuestao(indexQuestao);
}

loadQuestao(indexQuestao);