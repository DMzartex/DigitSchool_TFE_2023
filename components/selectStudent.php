<select class="selectSearch form-select form-select-md" name="role" aria-label="Default select example">
    <option selected value="none">Choisissez un rôle :</option>
    <?php foreach ($_SESSION['resultNameStudent'] as $resNameStudent): ?>
        <option value="student"><?=$resNameStudent ?></option>
    <?php endforeach; ?>
</select>