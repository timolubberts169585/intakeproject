var questions = document.getElementsByClassName("question");
var activeQuestion = 0;


window.addEventListener('DOMContentLoaded', (event) => {
    questions[activeQuestion].classList.add('active');


})

function checkAnswer(id, input) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        console.log(this.responseText);
        if(xmlhttp.responseText == 'true'){
            for(i = 0; i < options.length; i++){
                options[i].classList.add('answered');
            }
            nextQuestion();
        }
    }
    var options = document.getElementById(input).getElementsByClassName("input");
    var answer;
    for(i = 0; i < options.length; i++){
        if(options[i].checked){
            answer = i;
        }
    }
    xmlhttp.open("POST", "../checkanswer.php", true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send('function=test&id='+id+'&input='+answer);


}

function nextQuestion() {

    questions[activeQuestion].classList.remove('active');
    activeQuestion++;
    questions[activeQuestion].classList.add('active');
}

function prevQuestion() {
    questions[activeQuestion].classList.remove('active');
    activeQuestion--;
    questions[activeQuestion].classList.add('active');
}