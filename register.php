<?php 
include_once './header.php'; 
include_once './connect.php';

if (isset($_SESSION['userid'])) {
    header('Location: ./index.php');
    die();
}

$errormessage = '';

$minPassLen = 6;
$maxPassLen = 30;

if (!empty($_POST['register'])) {
    // Verify input
    $query = "SELECT `username` FROM `user` WHERE `username` = '" . $_POST['username'] . "'";
    $stmt = $pdo->query($query);
    $user = $stmt->fetch();
    if(empty($user)){

        // Check input lengths
        if( strlen($_POST['username']) >= 3 && strlen($_POST['username']) <= 30
            && strlen($_POST['firstname']) >= 1 && strlen($_POST['firstname']) <= 30
            && strlen($_POST['lastname']) >= 1 && strlen($_POST['lastname']) <= 30
            ){

                // Check password is the same and length
                if( $_POST['password'] === $_POST['password2'] 
                && strlen($_POST['password']) >= $minPassLen 
                && strlen($_POST['password']) <= $maxPassLen){

                    // Check input contains special character
                    foreach($_POST as $val){
                        if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $val)){
                            $errormessage = 'Gebruik geen speciale tekens (/[\'^£$%&*()}{@#~?><>,|=_+¬-]/)';
                        }
                    }
                    if($errormessage === ''){
                        // Register if input is safe :)
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
                    }     
                } else{
                    $errormessage = 'Wachtwoorden komen niet overeen of voldoen niet aan de minimumlengte';
                }
        } else{
            $errormessage = 'Waardes voldoen niet aan minimumlengte';
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
                <input class="login__form--input" type="text" placeholder="Gebruikersnaam (min 3 tekens)" name="username">

                <input class="login__form--input" type="password" placeholder="Wachtwoord (min 6 tekens)" name="password">

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