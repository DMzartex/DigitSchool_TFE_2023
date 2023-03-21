<link rel="stylesheet" href="css/remark.css">
<link rel="stylesheet" href="css/newRemark.css">

<div class="rmFullContent">
    <div class="rmSearchContent">
        <div class="rmTxtContent">
            <h1 class="rmTxt-1 txtPInter"><span class="textGreen">Rechercher un élève</span> pour ajouter une nouvelle remarque</span></h1>
        </div>
        <!-- si secrétaire alors afficher cette partie -->
        <div class="rmHeader2">
            <?php if($_SESSION['role'] == "teacher"): ?>
                <div class="newRmSearchBarContent">
                    <?php require_once 'components/searchBar.php'?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php require_once 'components/resultSearchUser.php'?>

    <div class="rmResultContent">
        <div class="rmForm">
            <?php require_once 'forms/remarkForms.php'; ?>
        </div>
    </div>
</div>