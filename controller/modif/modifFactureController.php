<?php
$uri = $_SERVER['REQUEST_URI'];
if($uri == "/DigitSchool_TFE_2023/index.php?/templates/modif/modifFacture" || !empty($_GET['factureIdmodif'])){
    if(!empty($_GET['factureIdmodif'])){
        $factureId = htmlspecialchars($_GET['factureIdmodif']);
        $resultInfosFacture = getInfosFactureModif($conn,$factureId);
    }
    require_once 'templates/modif/modifFacture.php';
}