<?php

// Include config file
//require_once "adduser_dbconfig.php";
$fname_raw = $lname_raw = $email_raw = $pword_raw = $role = "";

// Processing form data when form is submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname_raw = filt_input($_POST["fname"]);
    $fname = filter_var($fname_raw, FILTER_SANITIZE_STRING);

    $lname_raw = filt_input($_POST["lname"]);
    $lname = filter_var($lname_raw, FILTER_SANITIZE_STRING);

    $email_raw = filt_input($_POST["email"]);
    $email = filter_var($email_raw, FILTER_SANITIZE_EMAIL);

    $pword_raw = filt_input($_POST["pword"]); 
    $pword = filter_var($pword_raw, FILTER_SANITIZE_STRING);
    $hashpword = password_hash($pword, PASSWORD_DEFAULT);

  }

function filt_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New User</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="scripts.js" type="text/javascript"></script>
</head>
    <body>
        <div class="wrapper">
            <h2>New User</h2>
            <form id = "adduser" method="post">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="Jane" required> 
                </div>    
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Doe" required> 
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="name@email.com" required> 
                </div> 
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="pword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required 
                    oninvalid="this.setCustomValidity('Password must be at least 8 characters in length and must contain at least one number and one upper case letter.')">
                </div> 
                <div class="form-group">
                    <label>Role</label>
                    <select name="role"> 
                        <option value="member">Member</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>              
                <div class="form-group">
                    <button type="submit">Save</button>
                </div>
            </form>
        </div>    
    </body>
</html>