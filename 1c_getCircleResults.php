<?php

$radius = $_GET["radius"];

$type = $_GET["type"];

$result = 0;

if ($type == "area") {
    $result = 3.142 * $radius * $radius;
} else if ($type == "circumference") {
    $result = 3.142 * 2 * $radius;
}

$response['result'] = number_format($result, 3);
echo json_encode($response);



