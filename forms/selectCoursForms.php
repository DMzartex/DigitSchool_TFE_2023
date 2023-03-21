<form action="" method="post" class="formSelectCours">
    <select class="rmSearch form-select form-select-md" name="selectCours">
        <option selected value="none">Choisissez un cours :</option>
        <?php foreach ($_SESSION['listCours'] as $cours): ?>
            <option value="<?=$cours['coursId']?>"><?=$cours['name']?></option>
        <?php endforeach; ?>
    </select>
    <button class="rmSearchBtn" type="submit" value="appliquer">Appliquer</button>
</form>