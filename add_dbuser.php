<?php
session_start();

$host= 'localhost';
$username = 'finalproj_user';
$password = 'password123';
$dbname = 'dolphin_crm2';


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

    try {
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
      $sql = $conn->prepare("INSERT INTO Users (firstname, lastname, `password`, email, `role`, created_at) VALUES ($fname, $lname, $hashpword, $email, $role, NOW())");
      
      $sql->bindParam(":fname",$fname);
      $sql->bindParam(":lname",$lname);
      $sql->bindParam(":hashpword",$hashpword);
      $sql->bindParam(":email",$email);
      $sql->bindParam(":role",$role);
      $sql->execute();
      echo "New User created successfully";
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
}

function filt_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>