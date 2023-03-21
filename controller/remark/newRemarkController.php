<?php
$uri = $_SERVER['REQUEST_URI'];

if($uri == "/DigitSchool_TFE_2023/index.php?/templates/remark/newRemark"){
    if(!empty($_POST['inputSearch'])){
        $matricule = $_POST['inputSearch'];
        // Vérifier si le contenu de l'input de la bar de recherche ne contient que des chiffres
        if (ctype_digit($matricule)){
            // Select des factures en fonction du matricule entré dans la bar de recherche
            $_SESSION['resultSearch'] = getStudentById($conn,$matricule);
        } else {
            echo "L'input ne ne contient pas uniquement des chiffres";
        }
    }
    require_once 'templates/remark/newRemark.php';
}