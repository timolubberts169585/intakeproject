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
    <div class="container pagina">
        <div id="rij" class="row">
            <div class="col-sm-12">
                <h1>resultaten</h1>
                <p><span class="goed">100%</span> goed: Goed gedaan, je hebt al veel kennis voor deze opleiding</p>
                <p><span class="matig">11% 69%</span> goed: Helaas, Je kennis is nog niet goed genoeg. Probeer nog iets meer te leren en overleg met je ouders of deze opleiding echt bij je pas.</p>
                <p><span class="slecht">10%</span> of lager goed: je hebt best veel fout, misschien is het handiger om een andere richting te kiezen.</p>
            </div>
        </div>
        <div id="rij" class="row">
            <div class="col-sm-12">
                <ol class="lijst">
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
            <!-- <div class="col-sm-6">
            <img src="./images/very-good.gif" alt="Your GIF">
            </div> -->
        </div>
        <div id="rij" class="row">
            <div class="col-sm-12">
                <a href="./home">
                    <button class="knop">Home</button>
                </a>
            </div>
        </div>
    </div>


</main>
<?php 
include_once './footer.php';