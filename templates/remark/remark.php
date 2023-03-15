<link rel="stylesheet" href="css/remarque.css">
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
                <a class="btnNewremarque" href="index.php?/templates/factures/newRemarque">Ajouter une nouvelle remarque</a>
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
    <?php if($_SESSION['role'] == "parent" || $_SESSION['role'] == "student"): ?>
        <div class="rmSearchClass">
            <h1 class="rmSearchTitle">Filtre tes recherches :</h1>
            <form method="post" class="formSelectCours">
                <select class="rmSearch form-select form-select-md" name="selectCours">
                    <option selected value="none">Choisissez un cours :</option>
                    <option value="2">Math</option>
                    <option value="1">Français</option>
                    <option value="3">Sciences</option>
                </select>
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