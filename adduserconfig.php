<?php

$host = "localhost";
$dbemail = "admin@project2.com";
$username = "root";
$dbpassword = "";
$dbname = "dolphin_crm2";


$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $dbpassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo"Connected to $dbname at $host successfully.";

?>