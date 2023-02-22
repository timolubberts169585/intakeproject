<?php 
include_once './header.php'; 
if(!isset($_SESSION['userid'])){
    header('Location: ./login.php');
    die();
  }
?>
<main>
    <?php 
    //print_r($_SESSION);

    ?>
    <div class="dashboard">
      <div class="dashboard__welcome">
        <h2>
          <?php echo "Welkom, " . $_SESSION['firstname'] . ". Je laatste login was op " . date('m-d-Y', $_SESSION['lastlogin']) . " om " . date('H:i', $_SESSION['lastlogin']); ?>
        </h2>
      </div>
    </div>

</main>
<?php 
include_once './footer.php';