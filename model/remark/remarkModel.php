<?php
function getRemark($conn,$id){
    $roleIdSearch = preg_replace("/[^a-zA-Z0-9]/", "", $_SESSION['roleIdSearch']);
    $query = $conn->prepare("SELECT remarkId,title,content,date,teacherId,studentId,educatorId FROM remark where $roleIdSearch = :id");
    $query->execute([
        'id'=>(int)$id
    ]);
    $result = $query->fetchAll();
    return $result;
}
function getIdStudent_Parent($conn,$id){
    $query = $conn->prepare("SELECT studentId FROM student_parent WHERE parentId = :id");
    $query->execute([
       'id'=>(int)$id
    ]);
    $result = $query->fetchAll();
    return $result;
}

function getNameStudent($conn){
    $idStudent_parent = $_SESSION['idStudent_parent'];
    $index = 0;
    foreach ($idStudent_parent as $idStudent){
        var_dump($idStudent['studentId']);
        // Boucle for si la boucle foreach ne suffit pas.
        $query = $conn->prepare("SELECT name FROM student where studentId = :id");
        $query->execute([
            'id' => $idStudent['studentId']
        ]);
        $resultName = $query->fetchAll();
        var_dump($resultName);

        foreach ($resultName as $name){
            $nameStudent[$index] = $name['name'];
            $index += 1;
        }
    }
    return $nameStudent;
}

