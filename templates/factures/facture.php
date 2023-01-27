<link rel="stylesheet" href="css/facture.css">
    <div class="containerFull">
        <div class="BlockHeaderFacture">
            <div class="containerTitle">
                <p class="TitleFacture">il n'a <span class="textGreen">jamais</span> été aussi <span class="textGreen">simple</span><br> payer une facture</p>
                <p class="SecTitleFacture">grâce à notre <span class="textGreen">partenaire STRIPE</span></p>
            </div>
            <?php if($_SESSION['role'] == "secretary"): ?>
                <div class="containerHeaderSearchBar">
                    <?php require_once 'components/searchBar.php'; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="containerFacture">
            <div class="BlocTitleFacture">
                <p>En attente de payement</p>
            </div>
            <?php foreach ($_SESSION['resultFacture'] as $resultFacture): ?>
                <div class="blocFacture">
                    <p class="factureNameDesti">Nom : <?=$resultFacture['name'] ?></p>
                    <p class="factureFirstNameDesti">Prenom : <?= $resultFacture['firstName'] ?></p>
                    <p class="factureAdressDesti">Adresse : <?= $resultFacture['adress'] ?></p>
                    <p class="facturePostalCodeDesti">Code Postal : <?= $resultFacture['postalCode'] ?></p>
                    <p class="descritptionFacture">Description : <?= $resultFacture['communication'] ?></p>
                    <p class="montantFacture">Montant : <?= $resultFacture['montant'] ?></p>
                    <p class="statusFacture">Status : <?= $resultFacture['paye']?></p>

                    <?php if('facturePaye' === "False") : ?>
                        <?php if($_SESSION['role'] == "parent" || $_SESSION['role'] == "student"): ?>
                            <button class="BtnPayerFacture">PAYER</button>
                        <?php endif; ?>
                        <?php if($_SESSION['role'] == "secretary") : ?>
                            <button class="BtnPayerFacture">Modifier</button>
                        <?php endif; ?>
                    <?php endif;?>
                </div>

            <?php endforeach; ?>

            <div class="BlocTitleFacture">
                <p>Historique de payement</p>
            </div>

            <div class="blocFacture">
                <?php if('facturePaye' === "true") : ?>
                    <?php foreach($factures as $facture) : ?>
                        <p class="factureNameDesti">Nom : <? $facture->factureNameDesti ?></p>
                        <p class="factureFirstNameDesti">Prenom : <? $facture->factureFirstNameDesti ?></p>
                        <p class="factureAdressDesti">Adresse : <? $facture->factureAdressDesti ?></p>
                        <p class="facturePostalCodeDesti">Code Postal : <? $facture->facturePostalCodeDesti ?></p>
                        <p class="descritptionFacture">Description : <? $facture->factureCommunication ?></p>
                        <p class="montantFacture">Montant : <? $facture->factureMontant ?></p>
                        <p class="statusFacture">Status : <? $facture->facturePaye?></p>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>




<?php if($_SESSION['role'] == "secretary"): ?>
    <div class="factureBtn">
        <a href="index.php?/templates/factures/newFacture">Créé une facture</a>
    </div>
<?php endif; ?>