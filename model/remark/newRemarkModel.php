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
function getNameCours($coursIdSelect){
    foreach ($_SESSION['listCoursNewRemark'] as $cours){
        if($cours['coursId'] == $coursIdSelect){
            $resultName = $cours['name'];
        }
    }
    return $resultName;
}

function createRemark($conn,$idStudent,$intiRem,$contentRem,$date,$coursIdSelect,$nameCoursSelect,$teacherId,$educatorId,$teacherName,$educatorName){
    $query = $conn->prepare("INSERT INTO remark (title,content,date,teacherId,studentId,educatorId,coursId,coursName,teacherName,educatorName) 
             values (:intiRem,:contentRem,:date,:teacherId,:studentId,:educatorId,:coursIdSelect,:nameCoursSelect,:teacherName,:educatorName)");
    $query->execute([
        "intiRem" => $intiRem,
        "contentRem" => $contentRem,
        "date" => $date,
        "teacherId" => $teacherId,
        "studentId" => $idStudent,
        "educatorId" => $educatorId,
        "coursIdSelect" => $coursIdSelect,
        "nameCoursSelect" => $nameCoursSelect,
        "teacherName" => $teacherName,
        "educatorName" => $educatorName
    ]);
}