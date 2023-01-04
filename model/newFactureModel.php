<?php
function getUser(){

    $stmt = $conn->prepare("select studentFirstName,studentName FROM student where studentFirstName = 'DOrian' AND studentName = 'MichauX'");
}