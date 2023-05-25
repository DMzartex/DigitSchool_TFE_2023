<?php
$uri = $_SERVER['REQUEST_URI'];

if($uri == "/DigitSchool_TFE_2023/index.php?/templates/factures/newFacture" || !empty($_GET['id'])){
    $stPage = "newFacture";
    // Verifier si un filtre pour les rôle est bien choisi
    if(!empty($_POST['role'])){
        $_SESSION['roleSearchBar'] = $_POST['role'];
        // concaténation de la variable post avec le rôle et le text id => exemple : StudentId
        $_SESSION['roleIdSearch']  = $_POST['role'].'Id';
        // Vérification pour savoir si la bar de recherche contient une valeurs
        if(!empty($_POST['inputSearch'])){
            $userSearchBar = $_POST['inputSearch'];
            // Récupèration de tout les mots séparé par un espace dans la recherche
            $arr = explode(' ',$userSearchBar);
            // select de l'utilisateur
            $result = getUser($conn,$arr);
            $_SESSION['resultSearch'] = $result;
        }
    }// vérifié si l'id d'un utilisateur est séléctionné
    if(isset($_GET['id'])){
        // Récupèration des infos sur l'utilisateur pour remplir le formulaire
        $infoForm = getInfoForm($conn,$_GET['id']);
        // Stockage des informations dans des sessions
        foreach ($infoForm as $infos){
            $infoName = $infos['name'];
            $infoFirstName = $infos['firstName'];
            $infoAdress = $infos['adress'];
            $infoPostalCode = $infos['postalCode'];
        }// Vérifier si tout les champs du formulaire sont rempli
        if(!empty($_POST['nameDesti'] && $_POST['firstNameDesti'] && $_POST['addrDesti'] && $_POST['postalCodeDesti'] && $_POST['communicationFacture'] && $_POST['montantFacture'])){
            // Si l'utilisateur est un étudiant alors je récupère l'id de son parent
            if($_SESSION['roleSearchBar'] == "student"){
                $id1 = $_GET['id'];
                $role2 = "parentId";
                $id2 = getSecondId($conn,$role2,$id1);
            }
            // création de la facture dans la base de données
            if(isset($_POST['sendFacture'])){
                createFacture($conn,$id1,$id2);
            }
        }
    }
    require_once "templates/factures/newFacture.php";
}