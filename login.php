<?php
include_once './header.php';
include_once './connect.php';

$errormessage = '';

if (!empty($_POST['login'])) {
    $query = "SELECT * FROM `user` WHERE `username` = '" . $_POST['username'] . "' ";
    $stmt = $pdo->query($query);
    $user = $stmt->fetch();

    if (empty($user)) {
        // No record found in database
        $errormessage = 'Ongeldige inloggegevens!';
    } else {
        if(password_verify($_POST['password'], $user['password'])){

            $_SESSION['userid'] = $user['userid'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];
            $_SESSION['lastlogin'] = time();

            header('Location: ./index.php');
            die();

        } else{
            $errormessage = 'Ongeldige inloggegevens!';
        }
    }
}

if (isset($_SESSION['userid'])) {
    header('Location: ./index.php');
    die();
}
?>

<main>
    <div class="login">
        <div class="login__title">
            <h2>Inloggen</h2>
        </div>
        <div class="login__form">
            <form action="#" method="POST">
                <input class="login__form--input" type="text" placeholder="Gebruikersnaam" name="username">

                <input class="login__form--input" type="password" placeholder="Wachtwoord" name="password">

                <input type="hidden" name="login" value="1">

                <input class="login__form--button" type="submit" value="Inloggen">
            </form>
            <div class="login__form--register">
                <a href="./register.php">Nog geen account? Maak er hier een aan!</a>
            </div>
            <div class="login__form--forgor">
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Wachtwoord vergeten?</a>
            </div>
            <?php
            echo $errormessage;

            ?>
        </div>

    </div>

</main>
<?php
include_once './footer.php';
