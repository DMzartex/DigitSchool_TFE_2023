<?php
$uri = $_SERVER['REQUEST_URI'];
require_once 'class/StripePayement.php';

// le || permet d'accepter que l'url contiennent un paramètre GET
if($uri == "/DigitSchool_TFE_2023/index.php?/templates/payement/payement" || !empty($_GET['factureId'])){
    $_SESSION['factureId'] = $_GET['factureId'];
    // récupération des informations de la facture par rapport à son id
    $facture = getFactureById($conn);
    // Récupèration des informations de la variable $facture et remplissage des sessions
    foreach ($facture as $infoFacture){
        $_SESSION['communication'] = $infoFacture['factureId'];
        $_SESSION['montant'] = $infoFacture['montant'];
    }
    if($_SESSION['role'] == "student"){
        $id1 = $_SESSION['userId'];
        $role2 = "parentId";
        $id2 = getSecondId($conn,$role2,$id1);
        // Création d'une session de payement stripe
        createCheckoutSession($conn,$id1,$id2);
    }else if($_SESSION['role'] == "parent"){
        $id1 = $_SESSION['userId'];
        $role2 = "studentId";
        $id2 = getSecondId($conn,$role2,$id1);
        createCheckoutSession($conn,$id2,$id1);
    }
}elseif ($uri == "/DigitSchool_TFE_2023/index.php?/templates/payement/successPayement"){
    if(isset($_SESSION['sessionId'])){
        if(VerifPayment($conn)){
            UpdatePayement($conn);
        }
    }
    require_once 'templates/payement/successPayement.php';
}