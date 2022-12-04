<?php

session_start();

require('adduserconfig.php');

$fname_raw = $lname_raw = $email_raw = $pword_raw = "";

if (isset($_POST['savebtn'])){

    $fname_raw = filt_input($_POST["fname"]);
    $fname = filter_var($fname_raw, FILTER_SANITIZE_STRING);

    $lname_raw = filt_input($_POST["lname"]);
    $lname = filter_var($lname_raw, FILTER_SANITIZE_STRING);

    $email_raw = filt_input($_POST["email"]);
    $email = filter_var($email_raw, FILTER_SANITIZE_EMAIL);

    $pword_raw = filt_input($_POST["pword"]); 
    $pword = filter_var($pword_raw, FILTER_SANITIZE_STRING);
    $hashpword = password_hash($pword, PASSWORD_DEFAULT);

    $role = $_POST["role"];

    $sql = "INSERT INTO Users (fname, lname, hashpword, email, role, created_at) VALUES(?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$fname,$lname,$hash_password,$email,$role,date("Y-m-d h:i:s")]);
    
    //  Mary
    // Jane 
    // mj@gmail.com
    // D5hjuiyt
}

function filt_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>