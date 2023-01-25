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
            <li>
                <a href="#">Informations</a>
            </li>
            <?php if(!empty($_SESSION['role'])): ?>
                <?php if($_SESSION['role'] == "student" || "parent" || "secretary"): ?>
                    <li>
                        <a href="index.php?/templates/factures/facture">Factures</a>
                    </li>
                <?php endif; ?>
                <?php if($_SESSION['role'] == "student" || "parent" || "teacher"): ?>
                    <li>
                        <a href="#">Interrogation</a>
                    </li>
                <?php endif; ?>
                <?php if($_SESSION['role'] == "student" || "parent" || "educator" ): ?>
                    <li>
                        <a href="">Absence</a>
                    </li>
                <?php endif; ?>
                <?php if($_SESSION['role'] == "student" || "parent" || "educator" || "teacher"): ?>
                    <li>
                        <a href="#">Retard</a>
                    </li>
                <?php endif; ?>
                <?php if($_SESSION['role'] == "student" || "parent" || "educator" || "teacher"): ?>
                    <li>
                        <a href="index.php?/templates/remarque/remarque">Remarques</a>
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