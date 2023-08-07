<?php
$HOST = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DB = 'c203_p12';
$link = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB) or die(mysqli_connect_error());
global $link;