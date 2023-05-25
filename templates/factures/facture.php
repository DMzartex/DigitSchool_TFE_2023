<link rel="stylesheet" href="css/facture/facture.css">
<div class="containerFull">
    <div class="BlockHeaderFacture">
        <?php if(!empty($_SESSION['flashMessage'])): ?>
            <?php require_once 'components/alertFlashMessage.php' ?>
        <?php endif; ?>
        <div class="containerTitle">
            <p class="TitleFacture">il n'a <span class="textGreen">jamais</span> été aussi <span class="textGreen">simple</span> de payer une facture</p>
            <p class="SecTitleFacture">grâce à notre <span class="textGreen">partenaire STRIPE</span></p>
        </div>
        <!-- si parents ou éleves alors afficher cette partie -->
        <?php if($_SESSION['role'] == "parent" || $_SESSION['role'] == "student"): ?>
            <div class="boxT-2">
                <div class="colCard-1">
                    <div class="card">
                        <span class="iconCard"><i class="fa-solid fa-handshake-simple"></i></span>
                        <h1 class="textCard">Rapide et efficace</h1>
                    </div>
                    <div class="card">
                        <span class="iconCard"><i class="fa-solid fa-users"></i></span>
                        <h1 class="textCard">Simple d'utilisation</h1>
                    </div>
                </div>
                <div class="colCard-2">
                    <div class="card">
                        <span class="iconCard"><i class="fa-solid fa-shield-halved"></i></span>
                        <h1 class="textCard">Payer en toute sécurité</h1>
                    </div>
                    <div class="card">
                        <span class="iconCard"><i class="fa-solid fa-seedling"></i></span>
                        <h1 class="textCard">Responsable de l'environnement</h1>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- si secrétaire alors afficher cette partie -->
        <?php if($_SESSION['role'] == "secretary"): ?>
            <div class="containerHeaderSearchBar">
                <?php require_once 'components/searchBar.php'; ?>
                <a class="btnFacture" href="index.php?/templates/factures/newFacture">Créé une facture</a>
            </div>
        <?php endif; ?>
    </div>

    <!-- Block commun a tous -->
    <div class="containerFacture">
        <div class="BlocTitleFacture">
            <p>En attente de payement</p>
        </div>
        <!-- Afficher les factures si elle ne sont pas payé -->
        <?php if(isset($resultFacture)): ?>
            <?php foreach ($resultFacture as $facture): ?>
                <?php if($facture['paye'] === 0): ?>
                    <div class="blocFacture">
                        <p class="factureNameDesti">Nom : <?=$facture['name'] ?></p>
                        <p class="factureFirstNameDesti">Prenom : <?= $facture['firstName'] ?></p>
                        <p class="factureAdressDesti">Adresse : <?= $facture['adress'] ?></p>
                        <p class="facturePostalCodeDesti">Code Postal : <?= $facture['postalCode'] ?></p>
                        <p class="descritptionFacture">Description : <?= $facture['communication'] ?></p>
                        <p class="montantFacture">Montant : <?= $facture['montant'] ?> €</p>
                        <!-- Si parent ou éleve, ils ont le bouton payés -->
                        <?php if($_SESSION['role'] == "parent" || $_SESSION['role'] == "student"): ?>
                            <a href="index.php?/templates/payement/payement&factureId=<?=$facture['factureId']?>" class="BtnPayerFacture bckgColorGreen">PAYER</a>
                        <?php endif; ?>
                        <!-- Si secrétaire, il a le bouton modifié -->
                        <?php if($_SESSION['role'] == "secretary") : ?>
                            <a href="index.php?/templates/modif/modifFacture&factureIdmodif=<?=$facture['factureId']?>" class="BtnPayerFacture bckgColorGreen">Modifier</a>
                            <a href="index.php?/templates/factures/facture&factureIdSuppr=<?=$facture['factureId']?>" class="BtnPayerFacture bckgColorRed">Supprimer</a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="BlocTitleFacture">
            <p>Historique de payement</p>
        </div>
        <!-- Afficher les factures si elle sont payé -->
        <?php if(isset($resultFacture)): ?>
            <?php foreach ($resultFacture as $facture): ?>
                <?php if($facture['paye'] === 1): ?>
                    <div class="blocFacture">
                        <p class="factureNameDesti">Nom : <?=$facture['name'] ?></p>
                        <p class="factureFirstNameDesti">Prenom : <?= $facture['firstName'] ?></p>
                        <p class="factureAdressDesti">Adresse : <?= $facture['adress'] ?></p>
                        <p class="facturePostalCodeDesti">Code Postal : <?= $facture['postalCode'] ?></p>
                        <p class="descritptionFacture">Description : <?= $facture['communication'] ?></p>
                        <p class="montantFacture">Montant : <?= $facture['montant'] ?> €</p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif;?>
    </div>
</div>
