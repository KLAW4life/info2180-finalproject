<?php

session_start();

require 'adduserconfig.php';

$fname_raw = $lname_raw = $email_raw = "";

if (isset($_POST['save-btn'])){

    $title_raw = filt_input($_POST["title"]);
    $title = filter_var($title_raw, FILTER_SANITIZE_STRING);

    $fname_raw = filt_input($_POST["firstname"]);
    $firstname = filter_var($fname_raw, FILTER_SANITIZE_STRING);

    $lname_raw = filt_input($_POST["lastname"]);
    $lastname = filter_var($lname_raw, FILTER_SANITIZE_STRING);

    $email_raw = filt_input($_POST["email"]);
    $email = filter_var($email_raw, FILTER_SANITIZE_EMAIL);

    $phone = $_POST["phone"];

    $company_raw = filt_input($_POST["company"]);
    $company = filter_var($company_raw, FILTER_SANITIZE_STRING);

    $type = $_POST["type"];

    $user = $_POST["user"];

    $userId = $_SESSION["id"];



    $sql = "INSERT INTO Contacts (title,firstname, lastname, email, telephone, company, type, assigned_to, created_by, created_at, updated_at) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$title, $firstname ,$lastname ,$email, $phone,$company, $type, $user, $userId, date("Y-m-d h:i:s"), date("Y-m-d h:i:s")]);


}

function filt_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
