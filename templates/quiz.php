<?php
include_once '../header.php';
include_once '../connect.php';

$loggedIn = false;
if (isset($_SESSION['userid'])) {
    $loggedIn = true;
} else {
    $loggedIn = false;
}

$quizid = $_GET['quizid'];


$query = "SELECT * FROM quiz_timing WHERE userid = " . $_SESSION['userid'] . " AND quizid = " . $quizid . " LIMIT 1";
$stmt = $pdo->query($query);
$quizTiming = $stmt->fetch();
$query = "SELECT * FROM quiz_progress qp LEFT JOIN question q ON qp.question = q.id WHERE qp.quiz_timingid = " . $quizTiming['id'] . "";
$stmt = $pdo->query($query);
$quizProgress = $stmt->fetchAll();
?>
<script type="text/javascript" src="../js/script.js"></script>
<main>
    <?php
    if ($loggedIn == false) {
        echo "<p>Je moet ingelogd zijn om deze pagina te bekijken.</p>";
    } else {
    ?>
        <!-- Content -->
        <div class="wrapper">
            <?php

            foreach ($quizProgress as $question) {
            ?>

                <div id="<?php echo $question['placement']; ?>" class="question">

                    <?php
                    if ($question['type'] === 1) {
                        include './question_multiplechoice.php';
                    } elseif ($question['type'] === 3) {
                        include './question_open.php';
                    } else if ($question['type'] === 4) {
                        include './question_code.php';
                    }
                    ?>
                    <div class="question__nav">
                        <?php

                        if ($question['placement'] != 1) {
                        ?>
                            <input id="prev-<?php echo $question['placement']; ?>" class="prev <?php echo $question['placement']; ?>" type="button" name="prev" value="Vorige vraag" onclick="prevQuestion()">
                        <?php
                        }
                        ?>
                        <input id="check-<?php echo $question['placement']; ?>" class="check <?php echo $question['placement']; ?> active" type="button" name="check" value="Controleer antwoord" onclick="checkAnswer(<?php echo $question['id'] . ', ' . $question['placement'] . ', ' . $quizTiming['id']; ?>)">

                        <?php
                        if ($question['placement'] != count($quizProgress)) {
                        ?>

                        <?php
                        }
                        if ($question['placement'] == count($quizProgress)) {
                        ?>
                        <?php
                        }

                        ?>
                        <input id="next-<?php echo $question['placement']; ?>" class="next <?php echo $question['placement']; ?>" type="button" name="next" value="Volgende vraag" onclick="nextQuestion()">

                        <input id="submit-<?php echo $question['placement']; ?>" class="submit" type="button" name="submit" value="Naar resultaten" onclick="a_submit()">

                    </div>
                    
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
