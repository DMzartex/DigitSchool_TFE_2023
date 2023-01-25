<?php

function getUser($conn,$arr){
    $roleIdSearch = preg_replace("/[^a-zA-Z0-9]/", "", $_SESSION['roleIdSearch']);
    $role =  preg_replace("/[^a-zA-Z0-9]/", "", $_SESSION['roleSearchBar']);
    $stmt = $conn->prepare("select $roleIdSearch,firstName,name,email FROM $role where firstName = :firstName AND name = :name");
    $stmt->execute([
        'firstName'=>htmlentities($arr[1]),
        'name'=>htmlentities($arr[0])
    ]);
    $users = $stmt->fetchAll();
    return $users;
};

