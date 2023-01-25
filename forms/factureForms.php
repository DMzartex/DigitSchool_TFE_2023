<link rel="stylesheet" href="css/factureForms.css">
<form action="" method="post">
    <div class="display-flex-column">
        <label for="nameDesti" class="labelFormFact">Nom du destinataire :</label>
        <input class="input" type="text" name="nameDesti" id="nameDesti" <?php if(isset($_SESSION['infoName'])):?> value="<?=$_SESSION['infoName']?>"<?php endif;?>>
    </div>
    <div class="display-flex-column">
        <label for="firstNameDesti" class="labelFormFact">Prénom du destinataire :</label>
        <input class="input" type="text" name="firstNameDesti" id="firstNameDesti" <?php if(isset($_SESSION['infoFirstName'])):?> value="<?=$_SESSION['infoFirstName']?>"<?php endif;?>>
    </div>
    <div class="display-flex-column">
        <label for="adresse" class="labelFormFact">Adresse du destinataire :</label>
        <input class="input" type="text" name="addrDesti" id="adresse" <?php if(isset($_SESSION['infoAdress'])):?> value="<?=$_SESSION['infoAdress']?>"<?php endif;?>>
    </div>
    <div class="display-flex-column">
        <label for="postalCode" class="labelFormFact">Code postal du destinataire :</label>
        <input class="input" type="text" name="postalCodeDesti" id="postalCode" <?php if(isset($_SESSION['infoPostalCode'])):?> value="<?=$_SESSION['infoPostalCode']?>"<?php endif;?>>
    </div>
    <div class="display-flex-column">
        <label for="communication" class="labelFormFact">Communication :</label>
        <input class="input" type="text" name="communicationFacture" id="communication">
    </div>
    <div class="display-flex-column">
        <label for="montant" class="labelFormFact">Montant de la facture :</label>
        <input class="input" type="text" name="montantFacture" id="montant">
    </div>
    <?php if(empty($_POST['nameDesti'])): ?>
        <div class="btnSend">
            <button type="submit" name="sendFacture" id="btnSend">Envoyer</button>
        </div>
    <?php endif; ?>
    <?php if(!empty($_POST['nomDesti'])): ?>
        <div class="btnEdit">
            <button type="submit" name="edit" id="btnSend">Modifier</button>
        </div>
    <?php endif; ?>
</form>
