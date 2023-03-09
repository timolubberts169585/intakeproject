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
                
                $questionCtr = 1;
                foreach($questions as $question){
                    ?>

                    <div id="<?php echo $questionCtr; ?>" class="question">

                    <?php 
                    if($question['type'] === 1){
                        include './question_multiplechoice.php';
                    } elseif($question['type'] === 3){
                        include './question_open.php';

                    } else if($question['type'] === 4){
                        include './question_code.php';

                    }

                    if($question['placement'] != 1){
                        ?>
                        <input class="prev <?php echo $question['placement']; ?>" type="button" name="submit" value="Vorige vraag">
                        <?php
                    } 
                    if($question['placement'] != count($questions)){
                        ?>
                        <input class="next <?php echo $question['placement']; ?>" type="button" name="submit" value="Volgende vraag">
                        <?php
                    }
                    $questionCtr++;
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