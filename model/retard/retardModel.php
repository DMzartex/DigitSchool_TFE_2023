<?php

function getRetard($conn,$userId){
 $query = $conn->prepare("SELECT * from retard WHERE studentId = :userId");
 $query->execute([
    "userId" => $userId
 ]);
 $result = $query->fetchAll();
 return $result;
}

function createRetard($conn){

}