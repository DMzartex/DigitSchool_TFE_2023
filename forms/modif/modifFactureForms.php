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
        <label class="labelFormModifFacture" for="descriptionFacture">Communication : :</label>
        <input class="inputFormModifFacture" type="text" name="descriptionFacture" id="descriptionFacture" value="<?=$descriptionFacture?>">
    </div>
    <div class="boxInputFormModifFacture">
        <label class="labelFormModifFacture" for="montantFacture">Montant :</label>
        <input class="inputFormModifFacture" type="text" name="montantFacture" id="montantFacture" value="<?=$montantFacture?>">
    </div>
    <div class="boxInputFormModifFacture">
        <label class="labelFormModifFacture" for="studentIdFacture">Id de l'étudiant :</label>
        <input class="inputFormModifFacture" type="text" name="studentIdFacture" id="studentIdFacture" value="<?=$studentId?>">
    </div>
    <div class="boxInputFormModifFacture">
        <label class="labelFormModifFacture" for="parentIdFacture">Id du parent :</label>
        <input class="inputFormModifFacture" type="text" name="parentIdFacture" id="parentIdFacture" value="<?=$parentId?>">
    </div>
    <div class="boxInputFormModifFacture">
        <button type="submit" name="btnModifFact" class="btnModifFacture">Modifier</button>
    </div>

</form>