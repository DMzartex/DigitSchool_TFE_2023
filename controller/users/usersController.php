<?php
$uri = $_SERVER['REQUEST_URI'];

if($uri == "/DigitSchool_TFE_2023/index.php?/templates/login/login.php" && empty($_SESSION['isLogin'])){
    require_once "templates/login/login.php";
    require_once "./model/login/loginModel.php";
    if(isset($_POST['login'])){
      connectUser($conn);
    }
}elseif(!empty($_SESSION['isLogin']) && $_SESSION['isLogin'] == true){
    if(!empty($_SESSION['role'])){
        if($uri == "/DigitSchool_TFE_2023/index.php?/templates/users/workSpace.php")
        require_once "templates/users/workSpace.php";
        if($uri == "/DigitSchool_TFE_2023/index.php?/templates/factures/facture"){
            require_once "templates/factures/facture.php";
        }
    }
    if(!empty($_GET['disconnect'])){
        disconnect();
    }
}


