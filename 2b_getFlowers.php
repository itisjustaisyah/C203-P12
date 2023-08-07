<?php

include('dbFunctions.php');
global $link;

$flowers = Array();

// SQL queery returns multiple databse records
$catID = $_GET['cat_id'];
$query = "SELECT id, name FROM flowers WHERE cat_id LIKE $catID ORDER BY name;";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $flowers[] = $row;
}
echo json_encode($flowers);



