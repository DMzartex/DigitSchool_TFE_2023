<?php
/* start des sessions */
session_start();
$uri = $_SERVER['REQUEST_URI'];
$selectSearchBar = true;
$txtSearchBar = true;
/*require*/
require_once 'config/connect.php';
require_once 'model/login/loginModel.php';
require_once 'model/facture/newFactureModel.php';
require_once 'model/users/usersModel.php';
require_once 'model/facture/factureModel.php';
require_once 'model/remark/remarkModel.php';
require_once 'model/payement/payementModel.php';
require_once 'model/remark/newRemarkModel.php';
require_once 'model/signup/signupModel.php';
require_once 'model/modif/modifFactureModel.php';
require_once 'model/retard/retardModel.php';
require_once 'model/retard/retardModel.php';
require_once('vendor/autoload.php'); // Charge la bibliothèque Stripe PHP
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DigitSchool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/structure.css">
    <link rel="stylesheet" href="css/facture/factureForms.css">
      <script src="https://kit.fontawesome.com/cdc07db3e6.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/searchBar.css">
  </head>
  <body>

    <?php require_once 'components/header.php' ?>
    <?php require_once 'controller/users/usersController.php' ?>
    <?php require_once 'controller/facture/factureController.php' ?>
    <?php require_once 'controller/facture/newFactureController.php' ?>
    <?php require_once 'controller/remark/remarkController.php' ?>
    <?php require_once 'controller/payement/payementController.php'?>
    <?php require_once 'controller/remark/newRemarkController.php'?>
    <?php require_once 'controller/signup/signupController.php'?>
    <?php require_once 'controller/modif/modifFactureController.php'?>
    <?php require_once 'controller/retard/retardController.php'?>
    <?php require_once 'controller/retard/newRetardController.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>