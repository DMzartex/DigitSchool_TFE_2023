<?php
if(!empty($_GET['role'])){
    $_SESSION['roleSearchBar'] = $_GET['role'];
    if(!empty($_GET['nameFirstName'])){
        echo 'Dorian';
        $_SESSION['userSearchBar'] = $_GET['nameFirstName'];
        $arr = explode(' ',$_SESSION['userSearchBar']);
        $roleName = $_SESSION['roleSearchBar']."Name";
        $roleFirstName = $_SESSION['roleSearchBar']."FirstName";
        $roleEmail = $_SESSION['roleSearchBar']."Email";
        $_SESSION['resultSearch'] = getUser($conn,$arr);
        if(!empty($_GET['id'])){
            $_SESSION['infoForm'] = getInfoForm($conn,$_GET['id']);
            foreach ($_SESSION['infoForm'] as $infoForm){
                $_SESSION['infoName'] = $infoForm['studentName'];
                $_SESSION['infoFirstName'] =  $infoForm['studentFirstName'];
                $_SESSION['infoAdress'] = $infoForm['studentAdress'];
                $_SESSION['infoPostalCode'] = $infoForm['studentPostalCode'];
            }
        }
    }
}