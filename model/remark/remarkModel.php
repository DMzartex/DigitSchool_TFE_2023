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

