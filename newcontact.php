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
        <link href="styles/newcontact.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="scripts/newcontact.js" type="text/javascript"></script>
        <script src="scripts/sidebar.js" type="text/javascript"></script>

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
            <div class="content">
                <main>
                    <div class="new-contact">
                        <div class="contact-header">
                            <h1>New Contact</h1>
                        </div>
                        <div class="contact-form">
                            <form id="add-contact">
                                <div class="user-input">
                                    <label for="title">Title</label>
                                    <select name="title" id="title">
                                        <option>Mr.</option>
                                        <option>Ms.</option>
                                        <option>Mrs.</option>
                                        <option>Dr.</option>
                                    </select>
                                </div>
                                <div class="user-input">
                                    <label for="firstname">First Name</label>
                                    <input type="text" placeholder="Jane" id="firstname">
                                </div>
                                <div class="user-input">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" placeholder="Doe" id="lastname">
                                </div>
                                <div class="user-input">
                                    <label for="email">Email</label>
                                    <input type="email" placeholder="something@example.com" id="email">
                                </div>
                                <div class="user-input">
                                    <label for="phone">Telephone</label>
                                    <input type="tel" id="phone">
                                </div>
                                <div class="user-input">
                                    <label for="company">Company</label>
                                    <input type="text" id="company">
                                </div>
                                <div class="user-input">
                                    <label for="type">Type</label>
                                    <select name="type" id="type">
                                        <option>SALES LEAD</option>
                                        <option>SUPPORT</option>
                                    </select>
                                </div>
                                <div class="user-input">
                                    <label for="user">Assigned To</label>
                                    <select name="user" id="user"></select>
                                </div>
                                <div class="saveContainer">
                                    <button id="save-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
                <?php
                    $host = 'localhost';
                    $username = 'finalproj_user';
                    $password = 'password123';
                    $dbname = 'dolphin_crm2';

                    // $_GET["id"]
                    $contId = "1";
                    $userId = $_SESSION["id"];
                    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
                    $stmt = $conn->query("INSERT INTO Contacts (title,firstname, lastname, email, telephone, company, type, assigned_to, created_by, created_at, updated_at) VALUES ($title, $firstname ,$lastname ,$email, $phone,$company, $type, $user, $userId, getdate());")

                ?>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <p>Copyright 2022 © Dolphin CRM</p>
            </div>
        </footer>
    </body>
</html>
