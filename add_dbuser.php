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

    date_default_timezone_set('UTC');
    $datejoined = date('Y-m-d H:i:s');


    try {
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO Users (firstname, lastname, password, email, role, created_at) VALUES ($fname, $lname, $hashpword, $email, $role, $datejoined)";
      // use exec() because no results are returned
      $conn->exec($sql);
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }

    // try{

    //   $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //   //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   $sql = "INSERT INTO Users (firstname, lastname, password, email, role, created_at) VALUES ('$fname', '$lname', '$hashpword', '$email', '$role', '$datejoined')";
    //   $conn->query($sql);
    //   echo "New record created successfully";


    // } catch(PDOException $e) {
    //   echo $sql . "<br>" . $e->getMessage();
    // }




    // $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $sql = "INSERT INTO Users (firstname, lastname, password, email, role, created_at) VALUES($fname,$lname,$hash_password,$email,$role,date("Y-m-d h:i:s")";
    // // $stmt = $conn->prepare($sql);
    // $conn->exec($sql);
    // $stmt->execute([$fname,$lname,$hash_password,$email,$role,date("Y-m-d h:i:s")]);
    // if (mysqli_query($conn, $sql)) {
    //   echo "New User Registered Successfully";
    // } else {
    //   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }
    
    // mysqli_close($conn);
    
    //  Mary
    // Jane 
    // mj@gmail.com
    // M5pwords
}

function filt_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>