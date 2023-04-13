<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php $path = 'http://82.172.3.247/intakeproject'; ?>

  <?php
  session_start();
  ?>
  <link rel="stylesheet" href="<?php echo $path; ?>/css/bootstrap.min.css">

  <link rel="stylesheet" href="<?php echo $path; ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo $path; ?>/css/header.css">
  <link rel="stylesheet" href="<?php echo $path; ?>/css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.3/codemirror.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.3/theme/dracula.min.css">

  <header class="header <?php
                        if (basename($_SERVER['REQUEST_URI']) == 'quiz.php?quizid=2') {
                          echo 'html';
                        } else if (basename($_SERVER['REQUEST_URI']) == 'quiz.php?quizid=3') {
                          echo 'css';
                        } else if (basename($_SERVER['REQUEST_URI']) == 'quiz.php?quizid=1') {
                          echo 'python';
                        } else {
                          echo 'algemeen';
                        }


                        ?>">
    <nav class="header__nav">
      <div class="header__nav--desktop">
        <div class="header__nav--desktop__logo">

        </div>
        <div class="header__nav--desktop__menu">
          <ul class="main-menu">
            <?php if (isset($_SESSION['userid'])) { ?>
              <li class="main-menu__item">
                <a href="<?php echo $path; ?>/index.php">Home</a>
              </li>

              <!-- <li class="main-menu__item">
                <a href="<?php echo $path; ?>/templates/quiz.php?quizid=4">Algemeen</a>
              </li> -->

              <li class="main-menu__item">
                <a href="<?php echo $path; ?>/templates/quiz.php?quizid=2">HTML</a>
              </li>

              <li class="main-menu__item">
                <a href="<?php echo $path; ?>/templates/quiz.php?quizid=3">CSS</a>
              </li>

              <li class="main-menu__item">
                <a href="<?php echo $path; ?>/templates/quiz.php?quizid=1">Python</a>
              </li>

              <li class="main-menu__item menu-login">
                <a href="<?php echo $path; ?>/logout.php">Uitloggen</a>
              </li>

            <?php } else { ?>
              <li class="main-menu__item menu-login">
                <a href="<?php echo $path; ?>/login.php">Inloggen</a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <div class="header__nav--mobile">

      </div>
    </nav>

  </header>