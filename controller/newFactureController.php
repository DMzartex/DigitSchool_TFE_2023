<?php
$uri = $_SERVER['REQUEST_URI'];

if($uri == "/DigitSchool_TFE_2023/index.php?/templates/factures/newFacture" || !empty($_GET['id'])){
    require_once "templates/factures/newFacture.php";
    var_dump($_SESSION['userId']);
    if(!empty($_POST['role'])){
        $_SESSION['roleSearchBar'] = $_POST['role'];
        $_SESSION['roleIdSearch']  = $_POST['role'].'Id';
        if(!empty($_POST['nameFirstName'])){
            $_SESSION['userSearchBar'] = $_POST['nameFirstName'];
            $arr = explode(' ',$_SESSION['userSearchBar']);
            $result = getUser($conn,$arr);
            $_SESSION['resultSearch'] = $result;
            var_dump($_SESSION['resultSearch']);
        }
    }
    if(isset($_GET['id'])){
        $_SESSION['infoForm'] = getInfoForm($conn,$_GET['id']);
        var_dump($_SESSION['roleSearchBar']);
        var_dump($_SESSION['infoForm']);
        foreach ($_SESSION['infoForm'] as $infoForm){
            $_SESSION['infoName'] = $infoForm['name'];
            $_SESSION['infoFirstName'] =  $infoForm['firstName'];
            $_SESSION['infoAdress'] = $infoForm['adress'];
            $_SESSION['infoPostalCode'] = $infoForm['postalCode'];
        }

        if(!empty($_POST['nameDesti'] && $_POST['firstNameDesti'] && $_POST['addrDesti'] && $_POST['postalCodeDesti'] && $_POST['communicationFacture'] && $_POST['montantFacture'])){
            if($_SESSION['roleSearchBar'] == "student"){

            }else{

            }
            if(!empty($_POST['sendFacture'])){
                createFacture($conn);
            }
        }
        var_dump($_SESSION['infoName']);
    }
}