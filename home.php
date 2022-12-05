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
        <script src="scripts.js" type="text/javascript"></script>
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
                        <p>Home</p>
                    </li>
                    <li class="side-button">
                        <span class="material-symbols-rounded">person_add</span>
                        <p>New Contact</p>
                    </li>
                    <li class="side-button">
                        <span class="material-symbols-rounded">group</span>
                        <p>Users</p>
                    </li>
                    <hr>
                    <li class="side-button">
                        <span class="material-symbols-rounded">power_settings_new</span>
                        <a href= "logout.php">Logout</a>
                    </li>
                </nav>
            </div>
            <div class="content">
                <main>
                    <div class="dashboard">
                        <div class="dashboard-header">
                            <h1>Dashboard</h1>
                        <button class="contact-btn"><span class="material-symbols-rounded">person_add</span>Add Contact</button>
                        </div>
                        <div class="contact-list">
                            <div class="filter-section">
                                <div class="filter-by">
                                    <span class="material-symbols-rounded">filter_list</span>
                                    <p>Filter by:</p>
                                </div>
                                <li class="filter-all">
                                    <p>All Contacts</p>
                                </li>
                                <li class="sales-lead">
                                    <p>Sales Leads</p>
                                </li>
                                <li class="support">
                                    <p>Support</p>
                                </li>
                                <li class="assigned">
                                    <p>Assigned to Me</p>
                                </li>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <p>Copyright 2022 © Dolphin CRM</p>
            </div>
        </footer>
    </body>
</html>