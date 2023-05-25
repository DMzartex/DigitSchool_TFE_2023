<?php

$uri = $_SERVER['REQUEST_URI'];

if($uri == "/DigitSchool_TFE_2023/index.php?/templates/retard/retard"){
    if($_SESSION['role'] == "student"){
        $idStudent = htmlspecialchars($_SESSION['userId']);
        $resultRetard = getRetard($conn,$idStudent);
    }

    if($_SESSION['role'] == "teacher" || $_SESSION['role'] == "educator"){
        $idStudent = htmlspecialchars($_POST['inputSearch']);
        if(!empty($idStudent)){
            $resultRetard = getRetard($conn,$idStudent);
        }
    }

    if($_SESSION['role'] == "parent"){
        $_SESSION['idStudent_parent'] = getIdStudent_Parent($conn,$_SESSION['userId']);
        $_SESSION['nameStudent'] = getNameStudent($conn);
        if(!empty($_POST['selectStudent'])){
            $idStudent = htmlspecialchars($_POST['selectStudent']);
            $resultRetard = getRetard($conn,$idStudent);
        }
    }

    require_once 'templates/retard/retard.php';
}