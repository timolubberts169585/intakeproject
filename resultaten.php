<?php include_once './header.php'; 
$loggedIn = false;
if(isset($_SESSION['userid'])){
    $loggedIn = true;
} else{
    $loggedIn = false;
}
?>
<main>

    <!-- Content -->
    <p>100% goed: Goed gedaan, je hebt al veel kennis voor deze opleiding</p>
    <p>11% 69% goed: Helaas, Je kennis is nog niet goed genoeg. Probeer nog iets meer te leren en overleg met je ouders of deze opleiding echt bij je pas.</p>
    <p>10% of lager goed: je hebt best veel fout, misschien is het handiger om een andere richting te kiezen.</p>
    <div class="antwoorden">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <ol>
                    <li>Antwoord</li>
                    <li>Antwoord</li>
                    <li>Antwoord</li>
                    <li>Antwoord</li>
                    <li>Antwoord</li>
                    <li>Antwoord</li>
                    <li>Antwoord</li>
                    <li>Antwoord</li>
                    <li>Antwoord</li>
                    <li>Antwoord</li>
                </ol>
            </div>
            <div class="col-sm-4">
            <img src="./images/very-good.gif" alt="Your GIF">
            </div>
        </div>
    </div>


</main>
<?php 
include_once './footer.php';