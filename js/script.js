var questions = document.getElementsByClassName("question");
var activeQuestion = 0;

var next;
var prev;
var check;
var submit;

window.addEventListener('DOMContentLoaded', (event) => {
    questions[activeQuestion].classList.add('active');
    next = document.getElementById('next');
    prev = document.getElementById('prev');
    check = document.getElementById('check');
    submit = document.getElementById('submit');

})



function checkAnswer(id, input) {
    var currQuestion = document.getElementById(input);
    var options = currQuestion.getElementsByClassName("input");
    var answer;

    next = document.getElementById('next-'+input);
    prev = document.getElementById('prev-'+input);
    check = document.getElementById('check-'+input);
    submit = document.getElementById('submit-'+input);

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        // console.log(this.responseText);
        if(xmlhttp.responseText == 'true'){
            
        }

        for(i = 0; i < options.length; i++){
            options[i].classList.add('answered');
        }
        check.classList.remove('active');

        currQuestion.classList.add('answered');

        // console.log(input + ' -- ' + activeQuestion + ' -- ' + questions.length);

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
    xmlhttp.send('function=test&id='+id+'&input='+answer);


}

function nextQuestion() {

    questions[activeQuestion].classList.remove('active');
    activeQuestion++;
    questions[activeQuestion].classList.add('active');

    if(activeQuestion == questions.length){
        submit.classList.add('active');
        next.classList.remove('active');

    } else if(activeQuestion == 1){
        next.classList.add('active');

        
    } else{
        submit.classList.remove('active');

    }

    if(questions[activeQuestion].classList.contains('answered')){
        console.log('Answered');
        check.classList.remove('active');

    } else{
        check.classList.add('active');
    }
}

function prevQuestion() {
    questions[activeQuestion].classList.remove('active');
    activeQuestion--;
    questions[activeQuestion].classList.add('active');
    check.classList.remove('active');
    submit.classList.remove('active')

    if(activeQuestion == 1){
        next.classList.add('active');
    }

    if(questions[activeQuestion].classList.contains('answered')){
        console.log('Answered');
    }
}

function submit(){
    console.log('L');
}