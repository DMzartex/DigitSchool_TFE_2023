<div class="boxForms background-yellow">
    <form action="" method="post">
        <div class="display-flex flex-direction-column">
            <label for="desti">Nom du destinataire :</label>
            <input class="margin-input width-input height-input" type="text" name="nomDesti" id="desti">
        </div>
        <div class="display-flex flex-direction-column">
            <label for="adresse">Adresse du destinataire :</label>
            <input class="margin-input width-input height-input" type="text" name="addrDesti" id="adresse">
        </div>
        <div class="display-flex flex-direction-column">
            <label for="postalCode">Code postal du destinataire :</label>
            <input class="margin-input width-input height-input" type="text" name="postalCodeDesti" id="postalCode">
        </div>
        <div class="display-flex flex-direction-column">
            <label for="communication">Communication :</label>
            <input class="margin-input width-input height-input" type="text" name="communicationFacture" id="communication">
        </div>
        <div class="display-flex flex-direction-column">
            <label for="montant">Montant de la facture :</label>
            <input class="margin-input width-input height-input" type="text" name="montantFacture" id="montant">
        </div>
        <?php if(empty($_POST['nomDesti'])): ?>
        <div class="btnSend">
            <button type="submit" name="send" id="btnSend">Envoyer</button>
        </div>
        <?php endif; ?>

        <?php if(!empty($_POST['nomDesti'])): ?>
        <div class="btnEdit">
            <button type="submit" name="edit" id="btnEdit">Modifier</button>
        </div>
        <?php endif; ?>
    </form>
</div>
