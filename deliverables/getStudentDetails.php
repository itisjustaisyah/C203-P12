<?php
include("dbFunctions.php");
global $link;

$student_id = $_GET["student_id"];
$s['studentID'] = $student_id;

$query = "SELECT * FROM student s
WHERE s.student_id = '$student_id '";
$students = array();
$result = mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result)) {
    $students[] = $row;
    $s['firstName'] = $row['first_name'];
    $s['lastName'] = $row['last_name'];
}


echo json_encode($s);

