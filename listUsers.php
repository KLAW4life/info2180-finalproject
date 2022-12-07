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
        <link href="home.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="listUsersScript.js" type="text/javascript"></script>
        
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
                    <li class="side-button">
                        <span class="material-symbols-rounded">home</span>
                        <a href= "home.php">Home</a>
                    </li>
                    <li class="side-button">
                        <span class="material-symbols-rounded">person_add</span>
                        <a href= "">New Contact</a>
                    </li>
                    <li class="side-button">
                        <span class="material-symbols-rounded">group</span>
                        <a href= "listUsers.php">Users</a>
                    </li>
                    <hr>
                    <li class="side-button">
                        <span class="material-symbols-rounded">power_settings_new</span>
                        <a href= "logout.php">Logout</a>
                    </li>
                </nav>
            </div>
            <div class="content">
                <div id="viewUserList">
                    <div id="userListDiv">
                        <h1>Users</h1>
                        <a href="adduser.php"><button id="addUserBtn" ><span class="material-symbols-rounded">person_add</span> Add User</button></a>
                    </div>
                    <div id="userListresult">
                        <div id ="checkingR"></div>
                        <div id="userListresultspace">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <p>Copyright 2022 © Dolphin CRM</p>
            </div>
        </footer>
    </body>
</html>
