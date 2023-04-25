<?php
$uri = $_SERVER['REQUEST_URI'];
if($uri == "/DigitSchool_TFE_2023/index.php?/templates/modif/modifFacture" || !empty($_GET['factureIdmodif'])){
    if(!empty($_GET['factureIdmodif'])){
        $factureId = htmlspecialchars($_GET['factureIdmodif']);
        $resultInfosFacture = getInfosFactureModif($conn,$factureId);
        if(!empty($resultInfosFacture)){
            foreach ($resultInfosFacture as $infoFacture){
                $nomFacture = $infoFacture['name'];
                $prenomFacture = $infoFacture['firstName'];
                $adresseFacture = $infoFacture['adress'];
                $codePostalFacture = $infoFacture['postalCode'];
                $descriptionFacture = $infoFacture['communication'];
                $montantFacture = $infoFacture['montant'];
            }
        }
    }
    require_once 'templates/modif/modifFacture.php';
}