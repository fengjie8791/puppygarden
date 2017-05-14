<?php 

$db_host = "localhost";
// $db_host = "juice-up-xichen.com";
$db_database = "juiceupx_WNM608";
$db_usename = "juiceupx_WNM608";
$db_password = "WNM608";


$mysqli = new mysqli($db_host, $db_usename, $db_password, $db_database);
if($mysqli->connect_errno) die($mysqli->connect_errno);


?>
