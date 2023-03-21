<form action="" method="post">
    <div class="display-flex-column">
        <label for="nameDesti" class="labelFormFact">Intitulée de la remarque :</label>
        <input class="input" type="text" name="intiRem" id="intiRem">
    </div>
    <div class="display-flex-column">
        <label for="firstNameDesti" class="labelFormFact">Contenu de la remarque :</label>
        <input class="input" type="text" name="contenuRem" id="contenuRem">
    </div>
    <div class="display-flex-column">
        <label for="adresse" class="labelFormFact">Date de la remarque :</label>
        <input class="input" type="text" name="dateRem" id="dateRem">
    </div>
    <?php if(empty($_POST['nameDesti'])): ?>
        <div class="btnSend">
            <button type="submit" name="sendFacture" id="btnSend">Envoyer</button>
        </div>
    <?php endif; ?>
</form>