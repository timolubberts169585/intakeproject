<?php 
include_once '../header.php'; 
include_once '../connect.php';

$loggedIn = false;
if(isset($_SESSION['userid'])){
    $loggedIn = true;
} else{
    $loggedIn = false;
}

$quizid = $_GET['quizid'];
?>
<script type="text/javascript" src="../js/script.js"></script>
<main>
    <?php 
    if($loggedIn == false){
        echo "<p>Je moet ingelogd zijn om deze pagina te bekijken.</p>";
    } else{
        ?>
        <!-- Content -->
        <div class="wrapper">
                <?php
                
                $query = "SELECT * FROM question WHERE quiz = " . $quizid . "";
                $stmt = $pdo->query($query);
                $questions = $stmt->fetchAll();
                
                foreach($questions as $question){
                    ?>

                    <div class="question <?php if($question['placement'] == 1){ echo 'active'; } ?>">

                    <?php 
                    if($question['type'] === 1){
                        include './question_multiplechoice.php';
                    } elseif($question['type'] === 3){
                        include './question_open.php';

                    } else if($question['type'] === 4){
                        include './question_code.php';

                    }
                    ?>
                    </div>
                    <?php
                }
                ?>
            </div>
        <?php
    }
    ?>
    
</main>
<?php 
include_once '../footer.php';