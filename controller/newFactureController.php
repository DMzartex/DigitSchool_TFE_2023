<?php
$uri = $_SERVER['REQUEST_URI'];

if($uri == "/DigitSchool_TFE_2023/index.php?/templates/factures/newFacture" || !empty($_GET['id'])){
    require_once "templates/factures/newFacture.php";
    var_dump($_SESSION['userId']);
    if(!empty($_POST['role'])){
        $_SESSION['roleSearchBar'] = $_POST['role'];
        if(!empty($_POST['nameFirstName'])){
            echo 'Dorian';
            $_SESSION['userSearchBar'] = $_POST['nameFirstName'];
            $arr = explode(' ',$_SESSION['userSearchBar']);
            $roleName = $_SESSION['roleSearchBar']."Name";
            $roleFirstName = $_SESSION['roleSearchBar']."FirstName";
            $roleEmail = $_SESSION['roleSearchBar']."Email";
            $result = getUser($conn,$arr);
            $_SESSION['resultSearch'] = $result;
            var_dump($_SESSION['resultSearch']);
        }
    }
    if(isset($_GET['id'])){
        $_SESSION['infoForm'] = getInfoForm($conn,$_GET['id']);
        foreach ($_SESSION['infoForm'] as $infoForm){
            $_SESSION['infoName'] = $infoForm['studentName'];
            $_SESSION['infoFirstName'] =  $infoForm['studentFirstName'];
            $_SESSION['infoAdress'] = $infoForm['studentAdress'];
            $_SESSION['infoPostalCode'] = $infoForm['studentPostalCode'];
        }
        var_dump($_SESSION['infoName']);
    }
}