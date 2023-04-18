<link rel="stylesheet" href="css/signup/signup.css">
<div class="bodyPage">
    <div class="mainBox">
        <div class="txtBox">
            <div class="containerTxt">
                <p class="txt-p1">Inscription <span class="textGreen">simple</span> et <span class="textGreen">rapide</span> pour un accès <span class="textGreen">direct</span> à la <span class="textGreen">platforme</span> en ligne.</p>
            </div>
        </div>
        <div class="formBox">
            <?php if(!empty($error_msg)): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error_msg ?>
                </div>
            <?php endif; ?>
            <h1 class="titreFormSignup">Inscription</h1>
                <?php require_once 'forms/signup/signupForm.php'?>
        </div>
    </div>
</div>