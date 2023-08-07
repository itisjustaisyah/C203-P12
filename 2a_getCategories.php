<?php

include('dbFunctions.php');
global $link;

$categories = Array();

// SQL queery returns multiple databse records
$query = "SELECT id, name FROM flower_categories ORDER BY name;";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $categories[] = $row;
}
echo json_encode($categories);



