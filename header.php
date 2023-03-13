<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php
  session_start();
  ?>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  <header class="header <?php echo basename($_SERVER['REQUEST_URI']);
                        if (basename($_SERVER['REQUEST_URI']) == 'quiz.php?quizid=2') {
                          echo 'html';
                        } else if (basename($_SERVER['REQUEST_URI']) == 'quiz.php?quizid=3'){
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
                <a href="./index.php">Home</a>
              </li>

              <li class="main-menu__item">
                <a href="./templates/quiz.php?quizid=2">HTML</a>
              </li>

              <li class="main-menu__item">
                <a href="./templates/quiz.php?quizid=3">CSS</a>
              </li>

              <li class="main-menu__item">
                <a href="./templates/quiz.php?quizid=1">Python</a>
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