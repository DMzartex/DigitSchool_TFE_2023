<link rel="stylesheet" href="css/newFacture.css">
<div class="containerNewFacture">
    <div class="containerBanner">
        <div class="contentBanner">
            <div class="containerTextBanner">
                <h1 class="textBanner"><span class="textGreen">Rechercher un élève</span> ou un parent d'élève <span class="textGreen">en un click</span></h1>
            </div>
            <div class="containerSearchBar">
                <?php require_once 'components/searchBar.php'?>
            </div>
        </div>
        <div class="containerCard">
            <div class="card">
                <span class="iconCard"><i class="fa-solid fa-handshake-simple"></i></span>
                <h1 class="textCard">Rapide et efficace.</h1>
            </div>
            <div class="card">
                <span class="iconCard"><i class="fa-solid fa-users"></i></span>
                <h1 class="textCard">Simple d'utilisation</h1>
            </div>
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

    <div class="containerForm">
        <div class="contentResult">
            <div class="headerResult">
                <div class="colHeader">
                    <h1 class="txtCol">Id</h1>
                </div>
                <div class="colHeader">
                    <h1 class="txtCol">Nom</h1>
                </div>
                <div class="colHeader">
                    <h1 class="txtCol">Prénom</h1>
                </div>
                <div class="colHeader">
                    <h1 class="txtCol">Email</h1>
                </div>
            </div>
            <div class="containerInfo">
                <?php if(isset($_SESSION['resultSearch'])):?>
                    <?php foreach ($_SESSION['resultSearch'] as $result): ?>
                        <div class="contentInfo">
                            <div class="txtInfo">
                                <a <?php if(empty($_GET['id'])):?> href="<?=$uri?>&id=<?=$result['studentId']?>"<?php endif;?>><?=$result['studentId']?></a>
                            </div>
                            <div class="txtInfo">
                                <a href=""class="link"><?=$result['studentName'] ?></a>
                            </div>
                            <div class="txtInfo">
                                <a href="#"><?=$result['studentFirstName']?></a>
                            </div>
                            <div class="txtInfo">
                                <a href="#"><?=$result['studentEmail']?></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="contentForm">
                <div class="containerformFacture">
                    <h1 class="titleFormFacture">Envoyer votre facture ici</h1>
                    <div class="formNewFacture">
                        <?php require_once 'forms/factureForms.php'?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

