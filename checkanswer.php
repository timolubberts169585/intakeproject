<?php

if ($_POST["function"] == "checkAnswer") {
    checkAnswer();
}
function checkAnswer()
{
    include_once './connect.php';

    $query = "SELECT * FROM question WHERE id = " . $_POST['id'] . "";
    $stmt = $pdo->query($query);
    $question = $stmt->fetch();
    
    if ($question['type'] == 1) {
        check_multipleChoice($question, $pdo);
    } else if ($question['type'] == 5) {
        check_python($question, $pdo);
    } else if ($question['type'] == 3){
        check_open($question, $pdo);
    } else if($question['type'] == 4){
        check_htmlcss($question, $pdo);
    }
}
function check_open($question, $pdo){
    include_once './connect.php';

    $correct = 1;
    echo 'true';


    $query = 'UPDATE quiz_progress SET input = :input, correct = :correct WHERE quiz_timingid = :quiz_timingid AND question = :question';
    $data = [
        'input' => $_POST['input'],
        'correct' => $correct,
        'quiz_timingid' => $_POST['quiztimingid'],
        'question' => $_POST['id'],
    ];
    $stmt = $pdo->prepare($query)->execute($data);
}

function check_htmlcss($question, $pdo){

}

function check_multipleChoice($question, $pdo)
{

    $correct = 0;

    if ($question['correct_answer'] == $_POST['input']) {
        echo 'true';
        $correct = 1;
    } else {
        echo 'false';
    }

    $query = 'UPDATE quiz_progress SET input = :input, correct = :correct WHERE quiz_timingid = :quiz_timingid AND question = :question';
    $data = [
        'input' => $_POST['input'],
        'correct' => $correct,
        'quiz_timingid' => $_POST['quiztimingid'],
        'question' => $_POST['id'],
    ];
    $stmt = $pdo->prepare($query)->execute($data);
}

function check_python($question, $pdo)
{
    include_once './connect.php';
    echo $_POST['input'];
    $correct = 0;
}
