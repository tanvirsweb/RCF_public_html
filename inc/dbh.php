<?php

session_start();

$dbhServername = "localhost";
// $dbhUsername = "ruetcare_admin";
$dbhUsername = "root";
// $dbhPassword = "ruetcare_admin";
$dbhPassword = "";
$dbhName = "ruetcare_database";

$conn = mysqli_connect($dbhServername, $dbhUsername, $dbhPassword, $dbhName);

 ?>
