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

function createFacture($conn,$id,$nameDesti,$firstNameDesti,$adressDesti,$postalCodeDesti,$communication,$montant){

}