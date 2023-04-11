<form action="" method="post" class="formSelectCours">
    <select class="rmSearch form-select form-select-md" name="selectCours">
        <option selected value="none">Choisissez un cours :</option>
        <?php if($stPage == "remark"): ?>
            <?php foreach ($_SESSION['listCours'] as $cours): ?>
                <option value="<?=$cours['coursId']?>"><?=$cours['name']?></option>
            <?php endforeach; ?>
        <?php elseif ($stPage == "newRemark"): ?>
            <?php foreach ($_SESSION['listCoursNewRemark'] as $cours): ?>
                <option value="<?=$cours['coursId']?>"><?=$cours['name']?></option>
            <?php endforeach; ?>
        <?php endif; ?>
    </select>
    <button class="rmSearchBtn" type="submit" value="appliquer">Appliquer</button>
</form>