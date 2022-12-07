<header>
    <div class="logo">DigitSchool</div>
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <nav class="nav-bar">
        <ul>
            <li>
                <a href="#">Accueil</a>
            </li>
            <li>
                <a href="#">Informations</a>
            </li>
            <?php if(!empty($_SESSION['role'])): ?>
                <?php if($_SESSION['role'] == "student" || "parent" || "secretary"): ?>
                    <li>
                        <a href="#">Factures</a>
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
                        <a href="#">Remarque</a>
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