<?php
//connecting to the database
$servername = "localhost";
$username = "root";
$password = "password123";
$dbname = "dolphin_crm";

// Create connection
$dbcon = mysqli_connect($servername,$username,"");
mysqli_select_db($dbcon,$dbname); 

?>
