<?php
if($uri == "/DigitSchool_TFE_2023/index.php?/templates/login/login.php" && empty($_SESSION['isLogin'])){
    require_once "templates/login/login.php";
    require_once "model/loginModel.php";
    if(isset($_POST['login'])){
        connectUser($conn);
    }
}elseif(!empty($_SESSION['isLogin']) && $_SESSION['isLogin'] == true){
    disconnect();
    if(!empty($_SESSION['role'])){
        if($uri == "/DigitSchool_TFE_2023/index.php?/templates/users/".$_SESSION['role'].".php"){
            require_once "templates/users/".$_SESSION['role'].".php";
        }
    }
}


