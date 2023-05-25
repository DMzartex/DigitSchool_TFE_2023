<?php
function getInfosFactureModif($conn,$id){
    $query = $conn->Prepare("SELECT * FROM facture WHERE factureId = :id");
    $query->execute([
        "id" => $id
    ]);
    $result = $query->fetchAll();
    return $result;
}

function modifFacture($conn,$id,$nom,$prenom,$adresse,$codePostal,$communication,$montant,$studentId,$parentId){
    $query = $conn->prepare("UPDATE facture SET name = :nom, firstName = :prenom, adress = :adresse, postalCode = :codePostal, communication = :communication, 
                   montant = :montant, studentId = :studentId, parentId = :parentId WHERE factureId = :id");
    $query->execute([
        "nom" => $nom,
        "prenom" => $prenom,
        "adresse" => $adresse,
        "codePostal" => $codePostal,
        "communication" => $communication,
        "montant" => $montant,
        "studentId" => $studentId,
        "parentId" => $parentId,
        "id" => $id
    ]);
}