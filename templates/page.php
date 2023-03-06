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
    if($loggedIn == false){
        echo "<p>Je moet ingelogd zijn om deze pagina te bekijken.</p>";
    }
    ?>
    <!-- Content -->

</main>
<?php 
include_once './footer.php';