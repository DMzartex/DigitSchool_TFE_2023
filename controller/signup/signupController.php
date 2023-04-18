<?php
$uri = $_SERVER['REQUEST_URI'];
if($uri == "/DigitSchool_TFE_2023/index.php?/templates/signup/signup"){
    if(isset($_POST['selectRoleSignup']) && $_POST['selectRoleSignup'] != "none"){
        $roleSignup = htmlspecialchars($_POST['selectRoleSignup']);
        $_SESSION['roleSignup'] = $roleSignup;
    }
    if(!empty($_SESSION['roleSignup'])){
        if($_SESSION['roleSignup'] == "student"){
            $listClass = selectAllClass($conn);
        }
    }
    if(isset($_POST['btnValideFormSignup'])){
        if(!empty($_POST['nomSignup'])){
            $nomSignup = htmlspecialchars($_POST['nomSignup']);
            if(!empty($_POST['prenomSignup'])){
                $prenomSignup = htmlspecialchars($_POST['prenomSignup']);
                if (!empty($_POST['dateSignup'])){
                    $dateSignup = htmlspecialchars($_POST['dateSignup']);
                    $format = 'Y-m-d';
                    $date_obj = DateTime::createFromFormat($format,$dateSignup);
                    if($date_obj->format($format) == $dateSignup){
                        $dateSignupFormate = $date_obj->format($format);
                        if(!empty($_POST['numTelSignup'])){
                            $numTelSignup = htmlspecialchars($_POST['numTelSignup']);
                            if(!empty($_POST['emailSignup'])){
                                if (filter_var($_POST['emailSignup'], FILTER_VALIDATE_EMAIL)){
                                    $emailSignup = htmlspecialchars($_POST['emailSignup']);
                                    if(!empty($_POST['mdpSignup'])){
                                        $mdpSignup = htmlspecialchars($_POST['mdpSignup']);
                                        if(!empty($_POST['adresseSignup'])){
                                            $adresseSignup = htmlspecialchars($_POST['adresseSignup']);
                                            if(!empty($_POST['codePostalSignup'])){
                                                $codePostalSignup = htmlspecialchars($_POST['codePostalSignup']);
                                                if(!empty($_POST['villeSignup'])){
                                                    $villeSignup = htmlspecialchars($_POST['villeSignup']);
                                                    if(!empty($_POST['selectClass'])){
                                                        $selectClass = htmlspecialchars($_POST['selectClass']);
                                                    }else{
                                                        $selectClass = null;
                                                    }
                                                    signup($conn,$nomSignup,$prenomSignup,$dateSignupFormate,$numTelSignup,$emailSignup,$mdpSignup,$adresseSignup,$codePostalSignup,$villeSignup,(int)$selectClass,$_SESSION['roleSignup']);
                                                }else{
                                                    $error_msg = "Le champ ville est manquant.";
                                                }
                                            }else{
                                                $error_msg = "Le champ code postal est manquant";
                                            }
                                        }else{
                                            $error_msg = "Le champ adresse est manquant.";
                                        }
                                    }else{
                                        $error_msg = "Le champ mot de passe est manquant";
                                    }
                                }else{
                                    $error_msg = "L'addresse email entrée n'est pas valide.";
                                }
                            }else{
                                $error_msg = "Le champ email est manquant.";
                            }
                        }else{
                            $error_msg = "Le champ numéro de téléphone est manquant.";
                        }
                    }else{
                        $error_msg = "La date entrée n'est pas au bon format.";
                    }
                }else{
                    $error_msg = "Le champ date est manquant";
                }
            }else{
                $error_msg = "Le champ prénom est manquant.";
            }
        }else{
            $error_msg = "Le champ nom est manquant.";
        }
    }
    require_once 'templates/signup/signup.php';
}