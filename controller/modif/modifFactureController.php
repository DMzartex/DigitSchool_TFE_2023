<?php
$uri = $_SERVER['REQUEST_URI'];

if($uri == "/DigitSchool_TFE_2023/index.php?/templates/modif/modifFacture" || !empty($_GET['factureIdmodif'])){

    if(!empty($_GET['factureIdmodif'])){
        $factureId = htmlspecialchars($_GET['factureIdmodif']);

        if(isset($_POST['btnModifFact'])){
            if(isset($_POST['nomFacture'])){
                $nomFactureModif = htmlspecialchars($_POST['nomFacture']);
                if(isset($_POST['prenomFacture'])){
                    $prenomFactureModif = htmlspecialchars($_POST['prenomFacture']);
                    if(isset($_POST['adresseFacture'])){
                        $adressFactureModif = htmlspecialchars($_POST['adresseFacture']);
                        if(isset($_POST['codePostalFacture'])){
                            $postalCodeModif = htmlspecialchars($_POST['codePostalFacture']);
                            if(isset($_POST['descriptionFacture'])){
                                $comFactureModif = htmlspecialchars($_POST['descriptionFacture']);
                                if(isset($_POST['montantFacture'])){
                                    $montantFactureModif = htmlspecialchars($_POST['montantFacture']);
                                    if(isset($_POST['studentIdFacture'])){
                                        $studentIdModif = htmlspecialchars($_POST['studentIdFacture']);
                                        if(isset($_POST['parentIdFacture'])){
                                            $parentIdModif = htmlspecialchars($_POST['parentIdFacture']);
                                            modifFacture($conn,$factureId,$nomFactureModif,$prenomFactureModif,$adressFactureModif,$postalCodeModif,$comFactureModif,$montantFactureModif,$studentIdModif,$parentIdModif);
                                            $_SESSION['flashMessage'] = "La facture à bien été modifiée.";
                                            $_SESSION['color'] = "success";
                                            //header('Location:'.$uri);
                                        }else{
                                            $_SESSION['flashMessage'] = "Vous devez entrer l'id du parent.";
                                            $_SESSION['color'] = "danger";
                                        }
                                    }else{
                                        $_SESSION['flashMessage'] = "Vous devez entrer l'id de l'étudiant.";
                                        $_SESSION['color'] = "danger";
                                    }
                                }else{
                                    $_SESSION['flashMessage'] = "Vous devez entrer un montant.";
                                    $_SESSION['color'] = "danger";
                                }
                            }else{
                                $_SESSION['flashMessage'] = "Vous devez entrer une communication.";
                                $_SESSION['color'] = "danger";
                            }
                        }else{
                            $_SESSION['flashMessage'] = "Vous devez entrer le code postal";
                            $_SESSION['color'] = "danger";
                        }
                    }else{
                        $_SESSION['flashMessage'] = "Vous devez entrer l'adresse du destinataire.";
                        $_SESSION['color'] = "danger";
                    }
                }else{
                    $_SESSION['flashMessage'] = "Vous devez entrer le prénom du destinataire.";
                    $_SESSION['color'] = "danger";
                }
            }else{
                $_SESSION['flashMessage'] =  "Vous devez entrer le nom du destinataire.";
                $_SESSION['color'] = "danger";
            }
        }
    }

    $resultInfosFacture = getInfosFactureModif($conn,$factureId);
    if(!empty($resultInfosFacture)){
        foreach ($resultInfosFacture as $infoFacture){
            $nomFacture = $infoFacture['name'];
            $prenomFacture = $infoFacture['firstName'];
            $adresseFacture = $infoFacture['adress'];
            $codePostalFacture = $infoFacture['postalCode'];
            $descriptionFacture = $infoFacture['communication'];
            $montantFacture = $infoFacture['montant'];
            $studentId = $infoFacture['studentId'];
                $parentId = $infoFacture['parentId'];
            var_dump("foreach");
        }
    }
    require_once 'templates/modif/modifFacture.php';
}