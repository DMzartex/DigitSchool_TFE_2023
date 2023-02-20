<?php

function getInfoForm($conn,$id){
    $role =  preg_replace("/[^a-zA-Z0-9]/", "", $_SESSION['roleSearchBar']);
    $roleIdSearch =  preg_replace("/[^a-zA-Z0-9]/", "", $_SESSION['roleIdSearch']);
    $stmt = $conn->prepare("SELECT name, firstName, adress, postalCode FROM $role where $roleIdSearch = :id");
    $stmt->execute([
        'id'=>$id,
    ]);
    $infoForm = $stmt->fetchAll();
    return $infoForm;
};

function createFacture($conn,$id1,$id2){
        $id1 = preg_replace("/[^a-zA-Z0-9]/", "", $id1);
        $id2 = preg_replace("/[^a-zA-Z0-9]/", "", $id2);
        $userId = preg_replace("/[^a-zA-Z0-9]/", "", $_SESSION['userId']);
        $query = "insert into facture (name, firstName, adress, postalCode,communication,montant,paye,secretaryId,studentId,parentId)
                values  (:name,:firstName,:adress,:postalCode,:communication,:montant,:paye,:secretaryId,:studentId,:parentId)";
        $ajoute = $conn->prepare($query);
        $ajoute->execute([
            'name' => htmlentities($_POST['nameDesti']),
            'firstName' => htmlentities($_POST['firstNameDesti']),
            'adress' => htmlentities($_POST['addrDesti']),
            'postalCode' => htmlentities($_POST['postalCodeDesti']),
            'communication' => htmlentities($_POST['communicationFacture']),
            'montant' => htmlentities($_POST['montantFacture']),
            'paye' => false,
            'secretaryId' => $userId,
            'studentId' => $id1,
            'parentId' => $id2
        ]);
}



