<?php

function upadatePayement($conn){
    $factureId = preg_replace("/[^a-zA-Z0-9]/", "", $_SESSION['factureId']);
    $query = $conn->prepare('UPDATE facture set paye = 1 where factureId = :id');
    $query->execute([
        'id'=>(int)$factureId
    ]);
}