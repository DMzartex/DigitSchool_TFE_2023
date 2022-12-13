<form action="" method="post">
    <div class="infoFacture">
        <label for="desti">Nom du destinataire :</label>
        <input type="text" name="nomDesti" id="desti">
    </div>
    <div class="infoFacture">
        <label for="adresse">Adresse du destinataire :</label>
        <input type="text" name="addrDesti" id="adresse">
    </div>
    <div class="infoFacture">
        <label for="postalCode">Code postal du destinataire :</label>
        <input type="text" name="postalCodeDesti" id="postalCode">
    </div>
    <div class="infoFacture">
        <label for="communication">Communication :</label>
        <input type="text" name="communicationFacture" id="communication">
    </div>
    <div class="infoFacture">
        <label for="montant">Montant de la facture :</label>
        <input type="text" name="montantFacture" id="montant">
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