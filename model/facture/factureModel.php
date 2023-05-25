<?php
 function getFacture($conn,$id){
     $roleIdSearch = preg_replace("/[^a-zA-Z0-9]/", "", $_SESSION['roleIdSearch']);
     $query = $conn->prepare("SELECT factureId,name,firstName,adress,postalCode,communication,montant,paye FROM facture where $roleIdSearch = :id");
     $query->execute([
         'id'=>(int)$id
     ]);
     $result = $query->fetchAll();
     return $result;
 }

 function getFactureById($conn){
     $idFacture = preg_replace("/[^a-zA-Z0-9]/", "", $_SESSION['factureId']);
     $query = $conn->prepare("SELECT factureId,communication,montant FROM facture where factureId = :id");
     $query->execute([
        'id' => (int)$idFacture
     ]);
     $result = $query->fetchAll();
     return $result;
 }

 function verifPaymentCreated($conn,$factureId){
     $query = $conn->prepare("SELECT * from paymentcreated WHERE factureId = :factureId");
     $query->execute([
         "factureId" => $factureId
     ]);

     $nbrResult = $query->rowCount();

     if($nbrResult > 0){
         return true;
     }else{
         return false;
     }

 }

 function deletPaymentCreated($conn,$factureId){
     try{
         $query = $conn->prepare("DELETE FROM paymentcreated WHERE factureId = :factureId");
         $query->execute([
             "factureId" => $factureId
         ]);
     }catch (PDOException $ex){
         echo "Une erreur s'est produite : " . $ex->getMessage();
     }
 }

 function deleteFacture($conn,$factureId){
     $verif = true;

     if(verifPaymentCreated($conn,$factureId)){
        deletPaymentCreated($conn,$factureId);
     }

     try{
         $query = $conn->prepare("DELETE FROM facture where factureId = :factureId");
         $query->execute([
             "factureId" => $factureId
         ]);
     }catch (PDOException $e){
         $verif = false;
         echo "Une erreur s'est produite : ". $e->getMessage();
     }

     return $verif;

 }

