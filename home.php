<?php
session_start();
$host = 'localhost';
$username = 'finalproj_user';
$password = 'password123';
$dbname = 'dolphin_crm2';


$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM Contacts");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
        <script src="scripts/home.js" type="text/javascript"></script>
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
                    <div class="dashboard">
                        <div class="dashboard-header">
                            <h1>Dashboard</h1>
                        <button id="contact-btn"><span class="material-symbols-rounded">person_add</span>Add Contact</button>
                        </div>
                        <div class="contact-list">
                            <div class="filter-section">
                                <div class="filter-by">
                                    <span class="material-symbols-rounded">filter_list</span>
                                    <p>Filter by:</p>
                                </div>
                                <button id="filter-all">All Contacts</button>
                                <button id="sales-lead">Sales Leads</button>
                                <button id="support">Support</button>
                                <button id="assigned">Assigned to Me</button>
                            </div>
                            <div id="contact-table">
                                <table name="contactstable">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Company</th>
                                        <th>Type</th>
                                        <th></th>
                                    </tr>
                                    <?php
                                        foreach ($result as $row) {
                                            echo("<tr>");
                                            echo("<td class=\"contact-name\">".$row["title"]. " " .$row["firstname"]. " " .$row["lastname"]."</td>");
                                            echo("<td>".$row["email"]."</td>");
                                            echo("<td>".$row["company"]."</td>");
                                            if (($row["type"] == "SALES LEAD")){
                                                echo("<td><div class=\"sales-type\">".$row["type"]."</div></td>");
                                            }
                                            elseif(($row["type"] == "SUPPORT")){
                                                echo("<td><div class=\"support-type\">".$row["type"]."</div></td>");
                                            }
                                            echo("<td><a href=\"viewContact.php\" id=\"view\">View</a></td>");
                                            echo("</tr>");
                                        }
                                    ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <p>Copyright 2022 ?? Dolphin CRM</p>
            </div>
        </footer>
    </body>
</html>
