<?php
$uri = $_SERVER['REQUEST_URI'];

if($uri == "/DigitSchool_TFE_2023/index.php?/templates/remark/newRemark" || !empty($_GET['idUserRem'])){
    $stPage = "newRemark";
    if(!empty($_POST['inputSearch'])){
        $matricule = $_POST['inputSearch'];
        // Vérifier si le contenu de l'input de la bar de recherche ne contient que des chiffres
        if (ctype_digit($matricule)){
            // Select des factures en fonction du matricule entré dans la bar de recherche
            $_SESSION['resultSearch'] = getStudentById($conn,$matricule);
        }else{
            echo "L'input ne ne contient pas uniquement des chiffres";
        }
    }
    if(isset($_GET['idUserRem'])){
        // Récupération des cours communs entre l'élève et le prof
        $_SESSION['listCoursNewRemark'] = getCoursForTeacher($conn,(int)$_GET['idUserRem'],$_SESSION['userId']);
        if(isset($_POST['selectCours'])){
            $courSelect = preg_replace("/[^a-zA-Z0-9]/","",$_POST['selectCours']);
            // Récupération du nom du cour séléctionné
            $_SESSION['nameCoursSelect'] = getNameCours($courSelect);
        }
        if(isset($_POST['idStudentRem']) && isset($_POST['intiRem'])
            && isset($_POST['contentRem']) && isset($_POST['coursRem']))
        {
            $idStudent = htmlspecialchars($_POST['idStudentRem']);
            $intiRem = htmlspecialchars($_POST['intiRem']);
            $contentRem = htmlspecialchars($_POST['contentRem']);
            $coursRem = htmlspecialchars($_POST['coursRem']);
            if(isset($_POST['dateRem'])){
                $date = $_POST['dateRem'];
                $format = 'Y-m-d';
                $date_obj = DateTime::createFromFormat($format,$date);
                if($date_obj->format($format) == $date){
                    $dateFormate = $date_obj->format($format);
                    createRemark($conn,$idStudent,$intiRem,$contentRem,$coursRem,$dateFormate);
                }
            }
        }else{
            echo "les champs ne sont pas tous rempli";
        }
    }
    require_once 'templates/remark/newRemark.php';
}