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
            <select class="rmSearch form-select form-select-md" name="rmClass" aria-label="Default select example">
                <option selected value="none">Choisissez un cour :</option>
                <option value="math">Mathématique</option>
                <option value="francais">Français</option>
                <option value="science">Science</option>
                <option value="histoire">Histoire</option>
                <option value="geo">Géographie</option>
                <option value="sport">Sport</option>
                <option value="langue">Langue</option>
                <option value="religion">Religion</option>
                <option value="option">Option</option>
            </select>
            <input class="rmSearchBtn" type="button" value="appliquer">
        </div>
    <?php endif; ?>

    <div class="rmResultContent">
        <div class="rmCase">
            <div class="rmCaseFirst">
                <h1 class="rmCaseDate">22/02/2023</h1>
            </div>
            <div class="rmCaseSecond">
                <h2 class="rmcaseName">Gianluca Petronio</h2>
                <p class="rmCaseContent">Gianluca n'a pas fais ses devoir</p>
                <p class="rmCaseClasse">Mathémathique</p>
                <p class="rmCaseClasse">Mr De Mahieu</p>
                <!-- Si secrétaire, il a le bouton modifié -->
                <?php if($_SESSION['role'] == "teacher") : ?>
                    <button class="rmBtnModifier">Modifier</button>
                    <button class="rmBtnDelete">Supprimer</button>
                <?php endif; ?>
            </div>
        </div>

        <div class="rmCase">
            <div class="rmCaseFirst">
                <h1 class="rmCaseDate">22/02/2023</h1>
            </div>
            <div class="rmCaseSecond">
                <h2 class="rmcaseName">Gianluca Petronio</h2>
                <p class="rmCaseContent">Gianluca n'a pas fais ses devoir</p>
                <p class="rmCaseClasse">Mathémathique</p>
                <p class="rmCaseClasse">Mr De Mahieu</p>
                <!-- Si secrétaire, il a le bouton modifié -->
                <?php if($_SESSION['role'] == "teacher") : ?>
                    <button class="rmBtnModifier">Modifier</button>
                    <button class="rmBtnDelete">Supprimer</button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>