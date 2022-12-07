<?php
session_start();
$host = 'localhost';
$username = 'finalproj_user';
$password = 'password123';
$dbname = 'dolphin_crm2';


$contId = "1";
$userId = "1";
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT title, firstname, lastname, email, company, telephone, assigned_to, created_by, created_at, updated_at FROM Contacts WHERE id = $contId");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
$stmt = $conn->query("SELECT firstname, lastname FROM Users WHERE id = $userId");
$results2 = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
$stmt = $conn->query("SELECT created_by, created_at, comment FROM Notes WHERE created_by = $userId");
$results3 = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolphin CRM</title>

    <link rel="stylesheet" href="styles/viewContact.css">
    <script src="scripts/viewContact.js"></script>
    <script src="scripts/sidebar.js" type="text/javascript"></script>

</head>
<body>
    <section class = "bannerSection"></section>
        <header class = "banner">
            <img src="dolphin-svgrepo-com.svg" alt="logo">
            
            <h1>Dolphin CRM</h1>
        </header>
    <section class = "mainContent">
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
        <div class = "viewContainer">
            <div class = "buttonsAndProfile">
                <div class = "profile">
                    <img src ="Circle-icons-profile.svg.png" alt = "profileImage">
                    <div class = "continfo">
                        <?php
                        echo "<h2>".$results['title']." ".$results['firstname']. " ".$results['lastname']. "</h2>";
                        echo "<p>Created on ".$results['created_at']." by ". $results['created_by']."</p>";
                        echo "<p>Updated on ".$results['updated_at']."</p>";?>
                    </div>
                </div>
                <button class="assign">Assign to me</button>
                <button class="switch">Switch to Sales Lead</button>
            </div>
            <div class = "contactHeading">

            </div>
            <div class ="contactDetails">
                <div class = "details">
                    <h3>Email</h3>
                    <?php
                    echo "<p>".$results['email']."</p>";?>
                </div>
                <div class = "details">
                    <h3>Company</h3>
                    <?php
                    echo "<p>".$results['company']."</p>";?>
                </div>
                <div class = "details">
                    <h3>Telephone</h3>
                    <?php
                    echo "<p>".$results['telephone']."</p>";?>
                </div>
                <div class = "details">
                    <h3>Assigned to</h3>
                    <?php
                    echo "<p>".$results['assigned_to']."</p>";?>
                </div>
            </div>
            <div class = "notes">
                <div class = "notesHeading">
                    <img src="notes-icon.svg" alt="logo">
                    <h3 id ="notesHeading">Notes</h3>
                </div>
                <hr>
                <div class ="viewNotes">
                <?php
                    echo "<h3>" .$results2['firstname']." ".$results2['lastname']."</h3>";
                    echo "<p>"  .$results3['comment']. "</p>";
                    echo "<p>"  .$results3['created_at']."</p>";?>
                </div>
                <div class = "addNoteContainer">
                    <div class = "addNotes">
                        <?php
                        echo "<h3>Add a note about"." ".$results['firstname']." ".$results['lastname']."</h3>";?>
                        <input type="note" placeholder="Enter details here" id = "noteInput">
                        <button class="Add">Add note</button>
                    </div>
                </div>
            </div>
            
        </section>
    </section>
    <span class ="getUserId">
    <?php
        echo "<p>".$results2['userId']."</p>";?>
    </span>
</body>


