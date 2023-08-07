<?php
include("dbFunctions.php");
global $link;

$module_code = $_GET["module_code"];

$query = "SELECT * FROM student s
INNER JOIN allocation a ON s.student_id = a.student_id
WHERE a.module_code = '$module_code '";
$students = array();
$result = mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result)) {
    $students[] = $row;
}
echo json_encode($students);

