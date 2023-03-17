<?php 


$function = $_POST["function"];

if ($function == "checkAnswer") {
    checkAnswer();
}
function checkAnswer(){
    include_once './connect.php';

    $query = "SELECT * FROM question WHERE id = " . $_POST['id'] . "";
    $stmt = $pdo->query($query);
    $question = $stmt->fetch();

    $correct = 0;

    if($question['correct_answer'] == $_POST['input']){
        echo 'true';
        $correct = 1;

    } else{
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
