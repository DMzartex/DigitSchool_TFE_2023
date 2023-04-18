<?php
function selectAllClass($conn){
    $query = $conn->prepare("select * from class");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

function signup($conn,$nom,$prenom,$date,$numTel,$email,$mdp,$adresse,$codePostal,$ville,$class,$role){
    if($role == "student"){
        $query = $conn->prepare("insert into $role (name,firstName,email,password,adress,postalCode,ville,phoneNumber,birthDate,function,respondablePay,classId)
                                values(:name,:firstName,:email,:password,:adress,:postalCode,:ville,:phoneNumber,:birthDate,:function,1,:class)");
        $query->execute([
            'name' => $nom,
            'firstName' => $prenom,
            'email' => $email,
            'password' => $mdp,
            'adress' => $adresse,
            'postalCode' => $codePostal,
            'ville' => $ville,
            'phoneNumber' => $numTel,
            'birthDate' => $date,
            'function' => $role,
            'class' => $class
        ]);
    }else{
        $query = $conn->prepare("insert into $role (name,firstName,email,password,adress,postalCode,ville,phoneNumber,birthDate,function)
                                values(:name,:firstName,:email,:password,:adress,:postalCode,:ville,:phoneNumber,:birthDate,:function)");
        $query->execute([
            'name' => $nom,
            'firstName' => $prenom,
            'email' => $email,
            'password' => $mdp,
            'adress' => $adresse,
            'postalCode' => $codePostal,
            'ville' => $ville,
            'phoneNumber' => $numTel,
            'birthDate' => $date,
            'function' => $role
        ]);
    }
}