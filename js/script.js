var questions = document.getElementsByClassName("question");
var activeQuestion = 0;

var next;
var prev;
var check;
var submitBtn;

// init buttons
window.addEventListener('DOMContentLoaded', (event) => {
    questions[activeQuestion].classList.add('active');
    next = document.getElementById('next');
    prev = document.getElementById('prev');
    check = document.getElementById('check');
    submitBtn = document.getElementById('submit');
    
})


// check user answer
function checkAnswer(id, input, quizTimingID, type) {
    var currQuestion = document.getElementById(input);

    if(type ==  1){
        var options = currQuestion.getElementsByClassName("input");
        var answer;
        for(i = 0; i < options.length; i++){
            options[i].classList.add('done');

            if(options[i].checked){
                answer = i;
            }
        }
    } else if (type == 4){
        console.log('output-'+id)
        var input = document.getElementById('input-'+id);
        var result = document.getElementById('output-'+id);

        result.innerHTML = input.value;

        //input.classList.add('done');
    }


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

        check.classList.remove('active');

        currQuestion.classList.add('answered');

        if(input == questions.length){
            submit.classList.add('active');
        } else{
            next.classList.add('active');

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
    window.location.replace("https://www.youtube.com/watch?v=dQw4w9WgXcQ");
    
}