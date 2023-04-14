<form action="" method="post">
    <div class="display-flex-column">
        <label for="idStudentRem" class="labelFormFact">Id de l'étudiant :</label>
        <input class="input" type="text" name="idStudentRem" id="idStudentRem"
               <?php if(isset($_GET['idUserRem'])): ?>
                    value="<?=$_GET['idUserRem']?>">
               <?php endif; ?>
    </div>
    <div class="display-flex-column">
        <label for="intiRem" class="labelFormFact">Intitulée de la remarque :</label>
        <input class="input" type="text" name="intiRem" id="intiRem">
    </div>
    <div class="display-flex-column">
        <label for="contentRem" class="labelFormFact">Contenu de la remarque :</label>
        <input class="input" type="text" name="contentRem" id="contentRem">
    </div>
    <div class="display-flex-column">
        <label for="dateRem" class="labelFormFact">Date de la remarque :</label>
        <input class="input" type="date" name="dateRem" id="dateRem">
    </div>
    <?php if ($_SESSION['role'] == "teacher"): ?>
        <div class="display-flex-column">
            <label for="coursRem" class="labelFormFact">cours :</label>
            <input class="input" type="text" name="coursRem" id="coursRem"
            <?php if(isset($nameCoursSelect)): ?>
            value="<?= $nameCoursSelect?>"
            <?php endif; ?>>
        </div>
    <?php endif; ?>
        <div class="btnSend">
            <button type="submit" name="sendFacture" id="btnSend">Envoyer</button>
        </div>
</form>