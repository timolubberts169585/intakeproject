<?php 
include_once '../header.php'; 
$loggedIn = false;
if(isset($_SESSION['userid'])){
    $loggedIn = true;
} else{
    $loggedIn = false;
}
?>
<main>
    <?php 
    if($loggedIn == false){
        echo "<p>Je moet ingelogd zijn om deze pagina te bekijken.</p>";
    }
    ?>
    <!-- Content -->
    <div class="question">
        <div class="question__id">
            <p>Vraag 1</p>
        </div>
        <div class="question__title">
            <h5>Hoe print je hello world?</h5>
        </div>
        <div class="question__description">
            <p>10 levels per programmeertaal.
            Python, CSS en HTML Quiz.
            levels gaan van makkelijk naar moeilijk.
            je mag zelf bepalen welke level je maakt dus het is niet per se dat je van level 1 naar 10 gaat maar je moet ze wel allemaal afronden.
            je kan elk level maar 1 keer maken.
            als je het antwoord niet goed hebt komt het antwoord in beeld en moet je door naar de volgende vraag.
            Voor elke taal heb je 5 multiple choice vragen en 5 programmeer vragen.
            Een extra kopje voor algemene info over de opleiding
            Einde van algemene info staat een open vraag voor wat studenten verwachten van de opleiding.
            </p>
        </div>
        <div class="question__wrapper">
            <form action="">
                <div class="question__wrapper--option">
                    <label for="option2">Vraag 2</label>
                    <input type="radio" value="Vraag2" name="option2">
                </div>

                <div class="question__wrapper--option">
                    <label for="option2">Vraag 2</label>
                    <input type="radio" value="Vraag2" name="option2">
                </div>

                <div class="question__wrapper--option">
                    <label for="option2">Vraag 2</label>
                    <input type="radio" value="Vraag2" name="option2">
                </div>

                <div class="question__wrapper--option">
                    <label for="option2">Vraag 2</label>
                    <input type="radio" value="Vraag2" name="option2">
                </div>



                <input type="submit" name="Sunmit" value="submit">
            </form>
            
        </div>
    </div>
</main>
<?php 
include_once '../footer.php';