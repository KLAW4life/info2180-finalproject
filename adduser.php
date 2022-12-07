<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dolphin CRM</title>
        <link href="styles/home.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="scripts/sidebar.js" type="text/javascript"></script>
        <script src="scripts/adduser.js" type="text/javascript"></script>
    </head>
    <body>
        <header class="headerContainer">
            <div class="container">
                <img src="dolphin-svgrepo-com.svg" alt="">
                <h1>Dolphin CRM</h1>
            </div>
        </header>
        <div class="main-page">
            <div class="sidebar">
                <nav>
                    <li class="side-button" id="home-btn">
                        <span class="material-symbols-rounded">home</span>
                        <p>Home</p>
                    </li>
                    <li class="side-button" id="new-contact-btn">
                        <span class="material-symbols-rounded">person_add</span>
                        <p>New Contact</p>
                    </li>
                    <li class="side-button" id="users-btn">
                        <span class="material-symbols-rounded">group</span>
                        <p>Users</p>
                    </li>
                    <hr>
                    <li class="side-button" id="logout-btn">
                        <span class="material-symbols-rounded">power_settings_new</span>
                        <p>Logout</p>
                    </li>
                </nav>
            </div>
            <div class="form-content">
                <h1>New User</h1>
                <form id = "adduser" method="post" action="add_dbuser.php">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="fname" id="fname" placeholder="Jane" required> 
                    </div>    
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lname" id="lname" placeholder="Doe" required> 
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" id="email" placeholder="something@email.com" required> 
                    </div> 
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="pword" id="pword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required 
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
                        <button type="submit" id="savebtn" name = "savebtn" >Save</button>
                    </div>
                </form>
            </div>    
        </div>
        <footer class="footer">
            <div class="container">
                <p>Copyright 2022 © Dolphin CRM</p>
            </div>
        </footer>
    </body>
</html>

