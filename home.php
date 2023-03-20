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
    <div class="quizzes">
        <a class="link" href="">Algemeen</a>
        <a class="link" href="">HTML</a>
        <a class="link" href="">CSS</a>
        <a class="link" href="">Python</a>
    </div>

</main>
<?php 
include_once './footer.php';