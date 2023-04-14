<link rel="stylesheet" href="./css/signup/signupForm.css">
<form action="" method="post">
    <div class="blocInput">
        <?php require_once 'forms/signup/selectRoleFormSignup.php'?>
    </div>
   <div class="blocInput">
       <label for="nomSignup" class="labelFormSignup">Nom :</label>
       <input type="text" class="inputSignup" id="nomSignup" name="nomSignup">
   </div>
    <div class="blocInput">
        <label for="prenomSignup" class="labelFormSignup">Prenom :</label>
        <input type="text" class="inputSignup" id="prenomSignup" name="prenomSignup">
    </div>
    <div class="blocInput">
        <label for="dateSignup" class="labelFormSignup">Date de naissance :</label>
        <input type="date" class="inputSignup" id="dateSignup" name="dateSignup">
    </div>
    <div class="blocInput">
        <label for="numTelSignup" class="labelFormSignup">Numéro de téléphone :</label>
        <input type="text" class="inputSignup" id="numTelSignup" name="numTelSignup">
    </div>
    <div class="blocInput">
        <label for="emailSignup" class="labelFormSignup">Email :</label>
        <input type="email" class="inputSignup" id="emailSignup" name="emailSignup">
    </div>
    <div class="blocInput">
        <label for="mdpSignup" class="labelFormSignup">Mot de passe :</label>
        <input type="password" class="inputSignup" id="mdpSignup" name="mdpSignup">
    </div>
    <div class="blocInput">
        <label for="adresseSignup" class="labelFormSignup">Adresse :</label>
        <input type="text" class="inputSignup" id="adresseSignup" name="adresseSignup">
    </div>
    <div class="blocInput">
        <label for="codePostalSignup" class="labelFormSignup">Code postal :</label>
        <input type="text" class="inputSignup" id="codePostalSignup" name="codePostalSignup">
    </div>
    <div class="blocInput">
        <label for="codePostalSignup" class="labelFormSignup">Ville :</label>
        <input type="text" class="inputSignup" id="villeSignup" name="villeSignup">
    </div>
</form>