<?php
//connecting to the database
$servername = "localhost";
$username = "root";
$password = "password123";
$dbname = "dolphin_crm2";

// Create connection
// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }


// Create connection
// $conn = mysqli_connect($servername,$username,$password,$dbname);
$dbcon = mysqli_connect("localhost","root","");
mysqli_select_db($dbcon,"dolphin_crm2"); 
// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
//   }
//   echo "Connected successfully";
?>