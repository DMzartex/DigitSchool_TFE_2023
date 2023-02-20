<?php
$uri = $_SERVER['REQUEST_URI'];

if($uri == "/DigitSchool_TFE_2023/index.php?/templates/factures/newFacture" || !empty($_GET['id'])){
    if(!empty($_POST['role'])){
        $_SESSION['roleSearchBar'] = $_POST['role'];
        $_SESSION['roleIdSearch']  = $_POST['role'].'Id';
        if(!empty($_POST['inputSearch'])){
            $_SESSION['userSearchBar'] = $_POST['inputSearch'];
            $arr = explode(' ',$_SESSION['userSearchBar']);
            $result = getUser($conn,$arr);
            $_SESSION['resultSearch'] = $result;
        }
    }
    if(isset($_GET['id'])){
        $_SESSION['infoForm'] = getInfoForm($conn,$_GET['id']);
        foreach ($_SESSION['infoForm'] as $infoForm){
            $_SESSION['infoName'] = $infoForm['name'];
            $_SESSION['infoFirstName'] =  $infoForm['firstName'];
            $_SESSION['infoAdress'] = $infoForm['adress'];
            $_SESSION['infoPostalCode'] = $infoForm['postalCode'];
        }
        if(!empty($_POST['nameDesti'] && $_POST['firstNameDesti'] && $_POST['addrDesti'] && $_POST['postalCodeDesti'] && $_POST['communicationFacture'] && $_POST['montantFacture'])){
            if($_SESSION['roleSearchBar'] == "student"){
                $id1 = $_GET['id'];
                $role2 = "parentId";
                $id2 = getSecondId($conn,$role2,$id1);
            }else if ($_SESSION['roleSearchBar'] == "parent"){
                $id2 = $_GET['id'];
                $role2 = "studentId";
                $id1 = getSecondId($conn,$role2,$id2);
            }
            if(isset($_POST['sendFacture'])){
                createFacture($conn,$id1,$id2);
            }
        }
    }
    require_once "templates/factures/newFacture.php";
}