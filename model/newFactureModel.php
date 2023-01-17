<?php
function getUser($conn,$arr){
    $stmt = $conn->prepare("select studentId,studentFirstName,studentName,studentEmail FROM student where studentFirstName = '$arr[1]' AND studentName = '$arr[0]'");
    $stmt->execute();
    $users = $stmt->fetchAll();
    return $users;
};

function getInfoForm($conn,$id){
    $stmt = $conn->prepare("SELECT studentName,studentFirstName,studentAdress,studentPostalCode FROM student where studentId = '$id'");
    $stmt->execute();
    $infoForm = $stmt->fetchAll();
    return $infoForm;
};

function createFacture($conn){
        if($_SESSION['roleSearchBar'] == "student"){
            $roleId = "studentId";
        }else{
            $roleId = "parent";
        }
        $query = "insert into facture (factureNameDesti, factureFirstNameDesti, factureAdressDesti, facturePostalCodeDesti,factureCommunication,factureMontant,secretaryID, '$roleId')
                values  (:factureNameDesti,:factureFirstNameDesti,:factureAdressDesti,:facturePostalCodeDesti,:factureCommunication,:factureMontant,:secretaryId,:'$roleId')";
        $ajoute = $conn->prepare($query);
        $ajoute->execute([
            'factureNameDesti' => htmlentities($_POST['nameDesti']),
            'factureFirstNameDesti' => htmlentities($_POST['firstNameDesti']),
            'factureAdressDesti' => htmlentities($_POST['addrDesti']),
            'facturePostalCodeDesti' => htmlentities($_POST['postalCodeDesti']),
            'factureCommunication' => htmlentities($_POST['communicationFacture']),
            'factureMontant' => htmlentities($_POST['montantFacture']),
            'secretaryId' => $_SESSION['userId'],
            ''$roleId => $_GET['id']
        ]);
}