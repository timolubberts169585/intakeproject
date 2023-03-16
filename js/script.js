var questions = document.getElementsByClassName("question");
var activeQuestion = 0;

var next;
var prev;
var check;
var submitBtn;

window.addEventListener('DOMContentLoaded', (event) => {
    questions[activeQuestion].classList.add('active');
    next = document.getElementById('next');
    prev = document.getElementById('prev');
    check = document.getElementById('check');
    submitBtn = document.getElementById('submit');

})



function checkAnswer(id, input, quizTimingID) {
    var currQuestion = document.getElementById(input);
    var options = currQuestion.getElementsByClassName("input");
    var answer;

    next = document.getElementById('next-'+input);
    prev = document.getElementById('prev-'+input);
    check = document.getElementById('check-'+input);
    submit = document.getElementById('submit-'+input);

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        console.log(xmlhttp.responseText);
        if(xmlhttp.responseText == 'true'){
            currQuestion.getElementsByClassName('question__answer--correct')[0].classList.add('active');
        } else{
            currQuestion.getElementsByClassName('question__answer--false')[0].classList.add('active');

        }

        for(i = 0; i < options.length; i++){
            options[i].classList.add('done');
        }
        check.classList.remove('active');

        currQuestion.classList.add('answered');

        if(input == questions.length){
            submit.classList.add('active');
        } else{
            next.classList.add('active');

        }

    }

    for(i = 0; i < options.length; i++){
        if(options[i].checked){
            answer = i;
        }
    }
    xmlhttp.open("POST", "../checkanswer.php", true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send('function=checkAnswer&id='+id+'&input='+answer+'&quiztimingid='+quizTimingID);


}

function nextQuestion() {

    questions[activeQuestion].classList.remove('active');
    activeQuestion++;
    questions[activeQuestion].classList.add('active');

    if(activeQuestion == questions.length){
        submit.classList.add('active');
        next.classList.remove('active');

    }
}

function prevQuestion() {
    questions[activeQuestion].classList.remove('active');
    activeQuestion--;
    questions[activeQuestion].classList.add('active');
}

function a_submit(){
    
}