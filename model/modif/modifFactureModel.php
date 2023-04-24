<?php
function getInfosFactureModif($conn,$id){
    $query = $conn->Prepare("SELECT * FROM facture WHERE factureId = :id");
    $query->execute([
        "id" => $id
    ]);
    $result = $query->fetchAll();
    return $result;
}

function modifFacture($conn,$id){

}