<?php
/*function getRemark($conn,$idStudent){
    $roleIdSearch = preg_replace("/[^a-zA-Z0-9]/", "", $_SESSION['roleIdSearch']);
    $query = $conn->prepare("SELECT * FROM remark where $roleIdSearch = :idStudent");
    $query->execute([
        'idStudent'=>(int)$idStudent
    ]);
    $result = $query->fetchAll();
    return $result;
}*/

function getRemarkByCoursId($conn,$idCours,$idStudent){
    $query = $conn->prepare("SELECT * from remark where studentId = :idStudent AND coursId = :idCours");
    $query->execute([
       'idStudent'=>(int)$idStudent,
        'idCours' =>(int)$idCours
    ]);
    $result = $query->fetchAll();
    return $result;
}
function getIdStudent_Parent($conn,$idParent){
    $query = $conn->prepare("SELECT studentId FROM student_parent WHERE parentId = :idParent");
    $query->execute([
       'idParent'=>(int)$idParent
    ]);
    $result = $query->fetchAll();
    return $result;
}

function getNameStudent($conn){
    $idStudent_parent = $_SESSION['idStudent_parent'];
    $index = 0;
    foreach ($idStudent_parent as $idStudent){
        // Boucle for si la boucle foreach ne suffit pas.
        $query = $conn->prepare("SELECT firstName,studentId FROM student where studentId = :id");
        $query->execute([
            'id' => $idStudent['studentId']
        ]);
        $resultName = $query->fetchAll();

        foreach ($resultName as $name){
            $nameStudent[$index] = $name['firstName'];
            $index += 1;
        }
    }
    return $nameStudent;
}

function getRemarkFilter($conn,$idStudent,$idCours){

}
