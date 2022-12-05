<?php
session_start(); //session starts here

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" git content="width=device-width, initial-scale=1.0">

        <title>Dolphin CRM</title>
        <link href="styles.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <script src="login.js" type="text/javascript"></script> -->
    </head>
    <body>
        <div class="content">
            <header class="headerContainer">
                <div class="container">
                    <img src="dolphin-svgrepo-com.svg" alt="Drawing of a Dolphin">
                    <h1>Dolphin CRM</h1>
                </div>
            </header>
            <main>
                <section id="userLogin">
                    <div class="login-card">
                        <div class="login-header">
                            <h1>Log In</h1>
                        </div>
                        <form class="login-form" method="post" action="home.php">
                            <div class="login-input">
                                <span class="material-symbols-rounded">mail</span>
                                <input id="email" type="text" placeholder="Email Address">
                            </div>
                            <div class="login-input">
                                <span class="material-symbols-rounded">key</span>
                                <input id="password" type="text" placeholder="Password">
                            </div>
                            <button type="submit" name="login" value="login">Log In</button>
                        </form>
                    </div>
                </section>
            </main>
        </div>
        <footer class="footer">
            <div class="container">
                <p>Copyright 2022 © Dolphin CRM</p>
            </div>
        </footer>
    </body>
</html>

<?php

include("database.php");

if(isset($_POST['login'])){

    // username and password sent from form 
    $user_email = mysqli_real_escape_string($dbcon,$_POST['email']);
    $user_pwd = mysqli_real_escape_string($dbcon,$_POST['password']); 

    $sql = "SELECT id FROM Users WHERE email = '$user_email' and password = '$user_pwd'";
    echo "$sql";

    $run = mysqli_query($dbcon,$sql);

    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('home.php','_self')</script>";  
  
        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  


?>