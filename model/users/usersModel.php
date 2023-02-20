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

function getSecondId($conn,$role2,$id){
    $roleIdSearch =  preg_replace("/[^a-zA-Z0-9]/", "", $_SESSION['roleIdSearch']);
    $role2 = preg_replace("/[^a-zA-Z0-9]/", "", $role2);
    $firstId = preg_replace("/[^a-zA-Z0-9]/", "", $id);
    $query = $conn->prepare("SELECT $role2 FROM student_parent WHERE $roleIdSearch = :id ");
    $query->execute([
        'id' => $firstId
    ]);
    $idResult = $query->fetchColumn();
    return $idResult;
}

/*function getStudentIdByParent($conn,$id){
    $parentId = $roleIdSearch = preg_replace("/[^a-zA-Z0-9]/", "", $id);
    $stmt = $conn-prepare("SELECT studentId FROM student_parent WHERE parentId = :id ");
    $stmt->execute([
       'id' => $parentId
    ]);
    $resultId = $stmt->fetchAll();
    return $resultId;
}*/

