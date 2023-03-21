<form method="post" class="formSelectStudent">
    <?php if($_SESSION['role'] == "parent"): ?>
        <select class="rmSearch form-select form-select-md" name="selectStudent">
            <option selected value="none">Nom de votre enfant :</option>
            <?php for($i = 0; $i < count($_SESSION['nameStudent']); $i++): ?>
                <option value="<?=$_SESSION['idStudent_parent'][$i]['studentId']?>"><?= $_SESSION['nameStudent'][$i] ?></option>
            <?php endfor; ?>
        </select>
    <?php endif; ?>
    <button class="rmSearchBtn" type="submit" value="appliquer">Appliquer</button>
</form>