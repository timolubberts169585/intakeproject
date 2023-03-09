var questions = document.getElementsByClassName("question");
var activeQuestion = 0;


window.addEventListener('DOMContentLoaded', (event) => {
    questions[activeQuestion].classList.add('active');


})

function nextQuestion() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        console.log(this.responseText);
        // If you wanted to call the function in here, then just make another whole xhr var and send it in this function
    }
    
    xmlhttp.open("POST", "../checkanswer.php", true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send('function=test');

    questions[activeQuestion].classList.remove('active');
    activeQuestion++;
    questions[activeQuestion].classList.add('active');
}

function prevQuestion() {
    questions[activeQuestion].classList.remove('active');
    activeQuestion--;
    questions[activeQuestion].classList.add('active');
}