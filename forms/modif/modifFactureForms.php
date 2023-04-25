<link rel="stylesheet" href="css/modif/modifFormFacture.css">
<form action="" method="post">
    <div class="boxInputFormModifFacture">
        <label class="labelFormModifFacture" for="nomFacture">Nom :</label>
        <input class="inputFormModifFacture" type="text" name="nomFacture" id="nomFacture" value="<?=$nomFacture?>">
    </div>
    <div class="boxInputFormModifFacture">
        <label class="labelFormModifFacture" for="prenomFacture">Prenom :</label>
        <input class="inputFormModifFacture" type="text" name="prenomFacture" id="prenomFacture" value="<?=$prenomFacture?>">
    </div>
    <div class="boxInputFormModifFacture">
        <label class="labelFormModifFacture" for="adresseFacture">Adresse :</label>
        <input class="inputFormModifFacture" type="text" name="adresseFacture" id="adresseFacture" value="<?=$adresseFacture?>">
    </div>
    <div class="boxInputFormModifFacture">
        <label class="labelFormModifFacture" for="codePostalFacture">CodePostal :</label>
        <input class="inputFormModifFacture" type="text" name="codePostalFacture" id="codePostalFacture" value="<?=$codePostalFacture?>">
    </div>
    <div class="boxInputFormModifFacture">
        <label class="labelFormModifFacture" for="descriptionFacture">Description : :</label>
        <input class="inputFormModifFacture" type="text" name="descriptionFacture" id="descriptionFacture" value="<?=$descriptionFacture?>">
    </div>
    <div class="boxInputFormModifFacture">
        <label class="labelFormModifFacture" for="montantFacture">Montant :</label>
        <input class="inputFormModifFacture" type="text" name="montantFacture" id="montantFacture" value="<?=$montantFacture?>">
    </div>
    <div class="boxInputFormModifFacture">
        <button type="submit" class="btnModifFacture">Modifier</button>
    </div>

</form>