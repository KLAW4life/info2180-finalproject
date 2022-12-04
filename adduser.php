<?php

// Include config file
//require_once "adduser_dbconfig.php";
$fname = $lname = $email = $pword = $role = "";

// Processing form data when form is submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["fname"])) {
        $fname = "First name is required";
    } else {
        $fname = test_input($_POST["fname"]);
    }

    if (empty($_POST["lname"])) {
        $lname = "Last name is required";
    } else {
        $lname = test_input($_POST["lname"]);
    }

    if (empty($_POST["email"])) {
        $email = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    /*
    if (empty($_POST["pword"])) {
        $pword = "Password is required";
    } else {
        $pword = test_input($_POST["pword"]);
    }
    */
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
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="Jane">
                    <span class="error">* <?php echo $lname;?></span>
                </div>    
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Doe">
                    <span class="error">* <?php echo $lname;?></span>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="name@email.com">
                    <span class="error">* <?php echo $email;?></span>
                </div> 
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="pword">
                    <span class="error">* <?php echo $pword;?></span>
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