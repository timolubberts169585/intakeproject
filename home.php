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
                <h3>Wat ga je leren</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h3>Wat voor vragen zijn het</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h3>Waarom moet je deze quiz maken</h3>        
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <a href="./login.php">
                 <button class="knop">Ouders</button>
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <img class="foto" src="https://www.aventus.nl/sites/default/files/styles/image/public/images/opleidingen_in_de_it.jpeg?itok=ii5AE-x4&timestamp=1585573307">
            </div>
            <div class="col-sm-4">
                <a href="./login.php">
                 <button class="knop">Studenten</button>
                </a>      
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
        </div>
    </div>

</main>
<?php //button voor de ouders button voor de studenten
include_once './footer.php';