<?php
include("dbFunctions.php");
global $link;

$query = "SELECT * FROM student;";
$students = array();
$result = mysqli_query($link,$query);

while ($row = mysqli_fetch_assoc($result)) {
    $students[] = $row;
}
echo json_encode($students);

