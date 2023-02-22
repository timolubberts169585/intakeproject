<?php 
include_once './header.php'; 
include_once './connect.php';

$loggedIn = false;
if(isset($_SESSION['userid'])){
    $loggedIn = true;
} else{
    $loggedIn = false;
}

$errormessage = '';

if (!empty($_POST['register'])) {
    // Verify input
    // Username
    $query = "SELECT `username` FROM `user` WHERE `username` = '" . $_POST['username'] . "'";
    $stmt = $pdo->query($query);
    $user = $stmt->fetch();
    if(empty($user)){
       // Verify password
       if($_POST['password'] === $_POST['password2']){
        //Insert
        $query = "INSERT INTO user (username, password, firstname, lastname) VALUES (:username, :password, :firstname, :lastname)";

        $data  = [
            'username' => $_POST['username'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
        ];

        $stmt = $pdo->prepare($query)->execute($data);

        header('Location: ./login.php');
        die();
       } else{
        $errormessage = 'Wachtwoorden komen niet overeen';

       }

    } else{
        $errormessage = 'Gebruikersnaam al in gebruik';
    }
}
?>
<main>
    <div class="login">
        <div class="login__title">
            <h2>Registreren</h2>
        </div>
        <div class="login__form">
            <form action="#" method="POST">
                <input class="login__form--input" type="text" placeholder="Gebruikersnaam" name="username">

                <input class="login__form--input" type="password" placeholder="Wachtwoord" name="password">

                <input class="login__form--input" type="password" placeholder="Herhaal wachtwoord" name="password2">

                <input class="login__form--input" type="text" placeholder="Voornaam" name="firstname">

                <input class="login__form--input" type="text" placeholder="Achternaam" name="lastname">

                <input type="hidden" name="register" value="1">

                <input class="login__form--button" type="submit" value="Registreren">
            </form>
            <?php
            echo $errormessage;

            ?>
        </div>

    </div>

</main>
<?php 
include_once './footer.php';