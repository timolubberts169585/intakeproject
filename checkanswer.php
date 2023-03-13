<?php 


$function = $_POST["function"];

if ($function == "test") {
    test();
    //print_r($_POST);
}
function test(){
    include_once './connect.php';

    //print_r($_POST);
    $query = "SELECT * FROM question WHERE id = " . $_POST['id'] . "";
    $stmt = $pdo->query($query);
    $question = $stmt->fetch();
    
    if($question['correct_answer'] == $_POST['input']){
        echo 'true';
    } else{
        echo 'false';
    }

}
?>