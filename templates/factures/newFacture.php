<link rel="stylesheet" href="css/facture/newFacture.css">


<div class="container-fluid containerTop">
    <div class="boxT-1">
        <div class="boxTxt">
            <h1 class="textBanner"><span class="textGreen">Rechercher un élève</span> ou un parent d'élève <span class="textGreen">en un click</span></h1>
        </div>
        <div class="boxSearch">
            <?php require_once 'components/searchBar.php'?>
        </div>
    </div>
    <div class="boxT-2">
        <div class="colCard-1">
            <div class="card">
                <span class="iconCard"><i class="fa-solid fa-handshake-simple"></i></span>
                <h1 class="textCard">Rapide et efficace.</h1>
            </div>
            <div class="card">
                <span class="iconCard"><i class="fa-solid fa-users"></i></span>
                <h1 class="textCard">Simple d'utilisation</h1>
            </div>
        </div>
        <div class="colCard-2">
            <div class="card">
                <span class="iconCard"><i class="fa-solid fa-shield-halved"></i></span>
                <h1 class="textCard">Payer en ligne en toute sécurité</h1>
            </div>
            <div class="card">
                <span class="iconCard"><i class="fa-solid fa-seedling"></i></span>
                <h1 class="textCard">Responsable de l'environnement</h1>
            </div>
        </div>
    </div>
</div>

<?php require_once 'components/resultSearchUser.php'?>

    <div class="containerFormFacture">
        <div class="boxFormFacture">
            <div class="contentFormFacture">
                <?php require_once 'forms/factureForms.php'?>
            </div>
            <div class="boxTxtFormFacture">
                <h1 class="txtFormFacture"><span class="textGreen">Envoyez une facture</span> depuis votre <span class="textGreen">smartphone</span> ou votre <span class="textGreen">ordinateur</span> rapidement en toute simplicité.</h1>
            </div>
        </div>
    </div>
</div>