<?php

function getCoursForTeacher($conn,$studentId, $teacherId){

    $query = $conn->prepare("SELECT cours.coursId, cours.name FROM cours
                            INNER JOIN student_cours ON cours.coursId = student_cours.coursId
                            WHERE cours.teacherId = :teacherId  AND student_cours.studentId = :studentId");
    $query->execute([
        "teacherId" => $teacherId,
        "studentId" => $studentId
    ]);
    $result = $query->fetchAll();
    return $result;
}

// fonction qui récupère le nom du cours en fonction
// de l'id séléctionné dans le select contenant la liste des cours
function getNameCours($courSelect){
    foreach ($_SESSION['listCoursNewRemark'] as $cours){
        if($cours['coursId'] == $courSelect){
            $resultName = $cours['name'];
        }
    }
    return $resultName;
}

function createRemark($conn,$idStudent,$intiRem,$contentRem,$coursRem,$date){
    $query = $conn->prepare("INSERT INTO remark (title,content,date,teacherId,studentId,educatorId,coursId,coursName,teacherName) 
values ()");
}