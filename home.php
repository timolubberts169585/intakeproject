<?php include_once './header.php'; 
$loggedIn = false;
if(isset($_SESSION['userid'])){
    $loggedIn = true;
} else{
    $loggedIn = false;
}
?>

<main>
    <?php 
    ?>
    <!-- Content -->
    <div class="jumbotron text-center">
         <h1>Welkom bij de software development quiz</h1>
         <p>Log in om de vragen te maken</p> 
    </div>
  
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>Wat ga je leren?</h3>
                <p>Er zijn in totaal 4 quizzes. Die bestaan uit Algemeen, HTML, CSS en Python.</p>
                <p>Je gaat leren programeren. En je krijgt informatie over de opleiding zelf.</p>
            </div>
            <div class="col-sm-4">
                <h3>Wat voor quizzes zijn het?</h3>
                <p>De quizzes bestaan uit 10 vragen waarvan 5 meer keuze vragen en 5 programeer vragen.</p>
                <p>De Algemene quiz bestaat uit vragen die over de opleiding gaan.</p>
            </div>
            <div class="col-sm-4">
                <h3>Waarom moet je deze quiz maken?</h3>        
                <p>Je gaat deze quiz maken zodat je er achter komt of deze opleiding bij je past.</p>
                <p>Ook ga je er achter komen hoeveel kennis je hebt met behulp van deze quiz.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <a href="./login.php">
                 <button class="knop">Ouders</button>
                </a>
                <p>Bent u ouder of een verzorger?<br>log dan in bij Ouders.</p>
                <p>Voor meer informatie over de opleiding ga dan naar <a class='informatie' href="https://www.aventus.nl/opleidingen/software-developer-bol">aventus informatie.</a></p>
            </div>
            <div class="col-sm-4">
                <img class="foto" src="https://www.aventus.nl/sites/default/files/styles/image/public/images/opleidingen_in_de_it.jpeg?itok=ii5AE-x4&timestamp=1585573307">
            </div>
            <div class="col-sm-4">
                <a href="./login.php">
                 <button class="knop">Studenten</button>
                </a>      
                <p>Ben je student of leerling?<br>log dan in bij Studenten.</p>
                <p>Ben je benieuwt welke vakken je allemaal krijgt. Ga dan naar <a class='informatie' href="./vakken.php">vakken.</a></p>
            </div>
        </div>
    </div>

</main>
<?php //button voor de ouders button voor de studenten
include_once './footer.php';