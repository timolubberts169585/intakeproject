<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    
</body>
</html>

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

</main>
<?php 
include_once './footer.php';