var questions = document.getElementsByClassName("question");
var activeQuestion = 0;


window.addEventListener('DOMContentLoaded', (event) => {
    questions[activeQuestion].classList.add('active');


})

function nextQuestion() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "download.php?q=" + str, true);
    xmlhttp.send();

    questions[activeQuestion].classList.remove('active');
    activeQuestion++;
    questions[activeQuestion].classList.add('active');
}

function prevQuestion() {
    questions[activeQuestion].classList.remove('active');
    activeQuestion--;
    questions[activeQuestion].classList.add('active');
}