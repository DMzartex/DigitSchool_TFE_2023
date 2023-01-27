<?php
/* start des sessions */
session_start();
$uri = $_SERVER['REQUEST_URI'];
/*require*/
require_once 'config/connect.php';
require_once 'model/loginModel.php';
require_once 'model/newFactureModel.php';
require_once 'model/usersModel.php';
require_once 'model/factureModel.php';

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
    <link rel="stylesheet" href="css/factureForms.css">
      <script src="https://kit.fontawesome.com/cdc07db3e6.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/searchBar.css">
  </head>
  <body>
    <?php require_once 'components/header.php' ?>
    <?php require_once 'controller/usersController.php' ?>
    <?php require_once 'controller/factureController.php'?>
    <?php require_once 'controller/newFactureController.php'?>
    <?php require_once 'controller/remarqueController.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>