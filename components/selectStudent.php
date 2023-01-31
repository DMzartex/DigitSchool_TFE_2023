<select class="selectSearch form-select form-select-md" name="role" aria-label="Default select example">
    <option selected value="none">Choisissez un rôle :</option>
    <?php foreach ($_SESSION['idStudent_parent'] as$resStudent_parent): ?>
        <option value="student"><?=$resStudent_parent['studentId'] ?></option>
    <?php endforeach; ?>
</select>