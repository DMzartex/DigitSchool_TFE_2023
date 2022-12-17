<link rel="stylesheet" href="css/factureForms.css">
<div class="boxForms background-yellow">
    <div class="">
        <div class="">

        </div>
        <div class="">
            <form action="" method="post">
                <div class="display-flex-column">
                    <label for="desti">Nom du destinataire :</label>
                    <input class="input" type="text" name="nomDesti" id="desti">
                </div>
                <div class="display-flex-column">
                    <label for="adresse">Adresse du destinataire :</label>
                    <input class="input" type="text" name="addrDesti" id="adresse">
                </div>
                <div class="display-flex-column">
                    <label for="postalCode">Code postal du destinataire :</label>
                    <input class="input" type="text" name="postalCodeDesti" id="postalCode">
                </div>
                <div class="display-flex-column">
                    <label for="communication">Communication :</label>
                    <input class="input" type="text" name="communicationFacture" id="communication">
                </div>
                <div class="display-flex-column">
                    <label for="montant">Montant de la facture :</label>
                    <input class="input" type="text" name="montantFacture" id="montant">
                </div>
                <?php if(empty($_POST['nomDesti'])): ?>
                    <div class="btnSend">
                        <button type="submit" name="send" id="btnSend">Envoyer</button>
                    </div>
                <?php endif; ?>

                <?php if(!empty($_POST['nomDesti'])): ?>
                    <div class="btnEdit">
                        <button type="submit" name="edit" id="btnSend">Modifier</button>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>
