var questions = document.getElementsByClassName("question");
var activeQuestion = 0;

var next;
var prev;
var check;
var submitBtn;

var editor = CodeMirror(document.getElementById("code-editor"), {
    mode: "python",
    theme: "dracula",
    lineNumbers: true,
    indentUnit: 4, // set the number of spaces for each indentation level
    smartIndent: true // enable smart indentation
});

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
    var answer;

    if (type == 1) {
        var options = currQuestion.getElementsByClassName("input");
        for (i = 0; i < options.length; i++) {
            options[i].classList.add('done');

            if (options[i].checked) {
                answer = i;
            }
        }
    } else if (type == 3) {


    } else if (type == 4) {
        console.log('output-' + id)
        var input = questions[activeQuestion].querySelector("#input")
        var result = questions[activeQuestion].querySelector("#output")
        result.innerHTML = input.value;

        input.classList.add('done');
    } else if (type == 5) {

    }


    next = document.getElementById('next-' + input);
    prev = document.getElementById('prev-' + input);
    check = document.getElementById('check-' + input);
    submit = document.getElementById('submit-' + input);

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onload = function () {
        console.log(xmlhttp.responseText);
        if (xmlhttp.responseText == 'true') {
            currQuestion.getElementsByClassName('question__answer--correct')[0].classList.add('active');
        } else {
            currQuestion.getElementsByClassName('question__answer--false')[0].classList.add('active');

        }

        check.classList.remove('active');

        currQuestion.classList.add('answered');

        if (input == questions.length) {
            submit.classList.add('active');
        } else {
            next.classList.add('active');

        }

    }

    xmlhttp.open("POST", "../checkanswer.php", true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send('function=checkAnswer&id=' + id + '&input=' + answer + '&quiztimingid=' + quizTimingID);


}

function nextQuestion() {

    questions[activeQuestion].classList.remove('active');
    activeQuestion++;
    questions[activeQuestion].classList.add('active');

    if (activeQuestion == questions.length) {
        submit.classList.add('active');
        next.classList.remove('active');

    }
}

function prevQuestion() {
    questions[activeQuestion].classList.remove('active');
    activeQuestion--;
    questions[activeQuestion].classList.add('active');
}

function a_submit() {
    window.location.replace("https://www.youtube.com/watch?v=dQw4w9WgXcQ");

}

function runit() { // Python code compilen

    var code = editor.getValue();
    var mypre = questions[activeQuestion].querySelector("#output");
    mypre.innerHTML = '';
    Sk.pre = "output";
    Sk.configure({ output: outf, read: builtinRead });
    (Sk.TurtleGraphics || (Sk.TurtleGraphics = {})).target = 'mycanvas';
    var myPromise = Sk.misceval.asyncToPromise(function () {
        return Sk.importMainWithBody("<stdin>", false, code, true);
    });
    myPromise.then(function (mod) {
        console.log('success');
    },
        function (err) {
            console.log(err.toString());
        });
}

function outf(text) {
    var mypre = questions[activeQuestion].querySelector("#output");
    mypre.innerHTML = mypre.innerHTML + text;
}
function builtinRead(x) {
    if (Sk.builtinFiles === undefined || Sk.builtinFiles["files"][x] === undefined)
        throw "File not found: '" + x + "'";
    return Sk.builtinFiles["files"][x];
}

function runit_htmlcss(){
    
}