<header>
    <nav>
        <!--Nom-->
        <div class="logo">DigitSchool</div>
        <!--3 barre du menu-->
        <input type="checkbox" id="checkbox">
        <label for="checkbox" id="icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </label>

        <!--lien de navbar -->
        <ul>
            <li>
                <a href="#" class="active">Accueil</a>
            </li>
            <?php if(!empty($_SESSION['role'])): ?>
                <?php if($_SESSION['role'] == "student" || $_SESSION['role'] == "parent" || $_SESSION['role'] ==  "secretary"): ?>
                    <li>
                        <a href="index.php?/templates/factures/facture">Factures</a>
                    </li>
                <?php endif; ?>
                <?php if($_SESSION['role'] == "student" || $_SESSION ['role'] == "parent" || $_SESSION['role'] == "educator" || $_SESSION['role'] == "teacher"): ?>
                    <li>
                        <a href="index.php?/templates/retard/retard">Retard</a>
                    </li>
                <?php endif; ?>
                <?php if($_SESSION['role'] == "student" || $_SESSION['role'] == "parent" || $_SESSION['role'] == "educator" || $_SESSION['role'] == "teacher"): ?>
                    <li>
                        <a href="index.php?/templates/remark/remark">Remarques</a>
                    </li>
                <?php endif; ?>
                <?php if($_SESSION['role'] == "secretary"): ?>
                    <li>
                        <a href="index.php?/templates/signup/signup">Enregistrement</a>
                    </li>
                <?php endif; ?>
                <li>
                    <a href="<?=$uri?>&disconnect=true">Deconnexion</a>
                </li>
            <?php endif; ?>
            <?php if(empty($_SESSION['isLogin'])):?>
                <li>
                    <a href="/DigitSchool_TFE_2023/index.php?/templates/login/login.php">Connexion</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</header>