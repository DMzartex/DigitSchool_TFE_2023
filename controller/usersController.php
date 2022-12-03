<?php

$uri = $_SERVER['REQUEST_URI'];


if($uri == "/DigitSchool_TFE_2023/index.php?/templates/login/login.php" && !isset($_SESSION['isLogin'])){
    require_once "templates/login/login.php";
}elseif($uri == "/DigitSchool_TFE_2023/index.php?/templates/login/login.php" && $_SESSION['isLogin'] == true){
    echo "Vous êtes déja connecter";
}


