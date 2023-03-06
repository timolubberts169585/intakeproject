<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php
  session_start();
  // if(!isset($_SESSION['employeeID'])){
  //   header('Location: ./login.php');
  //   die();
  // }
  ?>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  <header class="header">
    <nav class="header__nav">
      <div class="header__nav--desktop">
        <div class="header__nav--desktop__logo">

        </div>
        <div class="header__nav--desktop__menu">
          <ul class="main-menu">
            <?php if (isset($_SESSION['userid'])) { ?>
              <li class="main-menu__item">
                <a href="./index.php">Home</a>
              </li>
              <li class="main-menu__item">
                <a href="./index.php">HTML</a>
              </li>
              <li class="main-menu__item">
                <a href="./index.php">CSS</a>
              </li>
              <li class="main-menu__item">
                <a href="./index.php">Python</a>
              </li>
              <li class="main-menu__item menu-login">
                <a href="./logout.php">Uitloggen</a>
              </li>
            <?php } else{ ?>
              <li class="main-menu__item menu-login">
                <a href="./login.php">Inloggen</a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <div class="header__nav--mobile">

      </div>
    </nav>

  </header>