<link rel="stylesheet" href="css/remark.css">
<div class="rmFullContent">
    <div class="rmSearchContent">
        <div class="rmTxtContent">
            <h1 class="rmTxt-1 txtPInter"><span class="textGreen">Rechercher un élève</span> pour obtenir la liste des remarques.</span></h1>
        </div>
        <!-- si secrétaire alors afficher cette partie -->
        <div class="rmHeader2">
            <?php if($_SESSION['role'] == "teacher"): ?>
                <div class="rmSearchBarContent">
                    <?php require_once 'components/searchBar.php'?>
                </div>
                <a class="btnNewremarque" href="/DigitSchool_TFE_2023/index.php?/templates/remark/newRemark">Ajouter une nouvelle remarque</a>
            <?php endif; ?>

            <!-- si parents ou éleves alors afficher cette partie -->
            <?php if($_SESSION['role'] == "parent" || $_SESSION['role'] == "student"): ?>
                <div class="boxT-3">
                    <div class="card">
                        <span class="iconCard"><i class="fa-solid fa-handshake-simple"></i></span>
                        <h1 class="textCard">Consulter</h1>
                    </div>
                    <div class="card">
                        <span class="iconCard"><i class="fa-solid fa-users"></i></span>
                        <h1 class="textCard">Clairement</h1>
                    </div>

                    <div class="card">
                        <span class="iconCard"><i class="fa-solid fa-shield-halved"></i></span>
                        <h1 class="textCard">discrétion</h1>
                    </div>
                    <div class="card">
                        <span class="iconCard"><i class="fa-solid fa-seedling"></i></span>
                        <h1 class="textCard">à tout moments</h1>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- si parents ou éleves alors afficher cette partie -->
    <?php if($_SESSION['role'] == "parent"): ?>
        <div class="rmSearchClass">
            <h1 class="rmSearchTitle">Filtre tes recherches :</h1>
            <?php require_once 'forms/SelectStudentForms.php'?>
            <?php if(isset($_POST['selectStudent']) && isset($_SESSION['listCours']) && $_POST['selectStudent'] != "none"): ?>
               <?php require_once 'forms/selectCoursForms.php'?>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if($_SESSION['role'] == "student"): ?>
    <div class="rmSearchClass">
        <h1 class="rmSearchTitle">Filtre tes recherches :</h1>
        <?php require_once 'forms/selectCoursForms.php'?>
    </div>
    <?php endif; ?>

    <div class="rmResultContent">
        <?php if(isset($_SESSION['resultRemark'])) :?>
            <?php foreach ($_SESSION['resultRemark'] as $result): ?>
                <div class="rmCase">
                    <div class="rmCaseFirst">
                        <h1 class="rmCaseDate"><?= $result['date'] ?></h1>
                    </div>
                    <div class="rmCaseSecond">
                        <p class="rmCaseContent"><?=$result['title']?></p>
                        <p class="rmCaseClasse"><?=$result['content'] ?></p>
                        <p class="rmCaseClasse"><?= $result['coursName']?></p>
                        <p class="rmCaseClasse"><?= $result['teacherName']?></p>
                        <?php if($result['educatorName']!= null): ?>
                            <p class="rmCaseClasse"><?= $result['educatorName']?></p>
                        <?php endif; ?>

                        <!-- Si secrétaire, il a le bouton modifié -->
                        <?php if($_SESSION['role'] == "teacher") : ?>
                            <button class="rmBtnModifier">Modifier</button>
                            <button class="rmBtnDelete">Supprimer</button>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>