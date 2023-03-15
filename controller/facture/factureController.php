<?php
$uri = $_SERVER['REQUEST_URI'];

if($uri == "/DigitSchool_TFE_2023/index.php?/templates/factures/facture"){
    $selectSearchBar = true;
    if($_SESSION['role'] == "secretary"){
        if(!empty($_POST['role'])){
            $_SESSION['roleSearchBar'] = $_POST['role'];
            $_SESSION['roleIdSearch']  = $_POST['role'].'Id';
            if(!empty($_POST['inputSearch'])){
                $matricule = $_POST['inputSearch'];
                // Vérifier si le contenu de l'input de la bar de recherche ne contient que des chiffres
                if (ctype_digit($matricule)) {
                    $id = $matricule;
                    // Select des factures en fonction du matricule entré dans la bar de recherche
                    $_SESSION['resultFacture'] = getFacture($conn,$id);

                } else {
                    echo "L'input ne ne contient pas uniquement des chiffres";
                }
            }
        }
    }else if ($_SESSION['role'] == "student"){
        $id = $_SESSION['userId'];
        $_SESSION['roleIdSearch'] = "studentId";
        $_SESSION['resultFacture'] = getFacture($conn,$id);
    }else{
        $id = $_SESSION['userId'];
        $role2 = "studentId";
        $_SESSION['roleIdSearch'] = "parentId";
        $idResult = getSecondId($conn,$role2,$id);
        $_SESSION['resultFacture'] = getFacture($conn,$id);
    }

    var_dump($_SESSION['resultFacture']);

    require_once 'templates/factures/facture.php';

}

