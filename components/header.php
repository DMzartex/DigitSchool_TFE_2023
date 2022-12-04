<?php if(empty($_SESSION['isLogin'])):?>
<a href="/DigitSchool_TFE_2023/index.php?/templates/login/login.php">Connexion</a>
<?php endif; ?>

<?php if(!empty($_SESSION['isLogin'])): ?>
<a href="<?=$uri?>&disconnect=true">Deconnection</a>
<?php endif; ?>