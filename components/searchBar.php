<form action="" method="post" class="formSearchBar">
    <div>
        <h1 class="textInfoSearchBar">Inscrivez <span class="textGreen">le matricule </span>d'un utilisateur.</h1>
    </div>
    <div class="boxSelectFacture">
        <select class="selectSearch form-select form-select-md" name="role" aria-label="Default select example">
            <option selected value="none">Choisissez un rôle :</option>
            <option value="student">Etudiant</option>
            <?php if($selectSearchBar):?>
                <option value="parent">Parent</option>
            <?php endif; ?>
        </select>
    </div>

    <div class="boxSearchBar">
        <input type="text" name="inputSearch" class="searchBar" placeholder="Recherche :">
        <button type="submit" class="btnSearch"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
    </div>

</form>
