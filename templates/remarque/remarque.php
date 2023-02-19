<link rel="stylesheet" href="css/remarque.css">
<div class="rmFullContent">
    <div class="rmSearchContent">
        <div class="rmTxtContent">
            <h1 class="rmTxt-1 txtPInter"><span class="textGreen">Rechercher un élève</span> pour obtenir la liste des remarques. <span class="textGreen">Ajouter, supprimer et moddifer</span> des remarques <span class="textGreen">à tout moments.</span></h1>
        </div>
        <div class="rmSearchBarContent">
            <?php if($_SESSION['role'] == "secretary"): ?>
                <?php require_once 'components/searchBar.php'?>
            <?php elseif($_SESSION['role'] == "parent"): ?>

            <?php endif; ?>
        </div>
    </div>
    <div class="rmResultContent">
        <div class="rmB1">
                <div class="rmB1-txt">
                        <h1 class="rmTxt-2">Remarques :</h1>
                </div>
                <div class="rmBlocContent">
                    <div class="rmTitleTxt"></div>
                    <div class="rmContentTxt"></div>
                    <div class="rmDateTxt"></div>
                    <div class="rmTeacherTxt"></div>
                    <div class="rmEducatorTxt"></div>
                </div>
        </div>
        <div class="rmB2">

        </div>
    </div>
</div>