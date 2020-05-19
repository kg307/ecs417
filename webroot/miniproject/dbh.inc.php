<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("user");
$dbpwd = getenv("password");
$dbname = getenv("ecs417");


$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error); }
 ?>
