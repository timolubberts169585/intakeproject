<?php include_once './header.php'; 
$loggedIn = false;
if(isset($_SESSION['userid'])){
    $loggedIn = true;
} else{
    $loggedIn = false;
}
?>
<main>
    <!-- Content -->
    <div class="container">
        <img class="vakken" src="./images/vakken.png">
        <a href="./home.php">
            <button class="knop terug">terug</button>
        </a>    
    </div>


</main>
<?php 
include_once './footer.php';