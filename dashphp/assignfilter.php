<?php

  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: *");

?>

<?php
session_start();

$host= 'localhost';
$username = 'finalproj_user';
$password = 'password123';
$dbname = 'dolphin_crm';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM Contacts");

$stmt2 = $conn->query("SELECT * FROM Users");

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$users = $stmt2->fetchAll(PDO::FETCH_ASSOC);

echo("<table>");
  echo("<tr>");
    echo("<th>Name</th>");
    echo("<th>Email</th>");
    echo("<th>Company</th>");
    echo("<th>Type</th>");
    echo("<th></th>");
  echo("</tr>");
    foreach ($result as $row) {
      if (($row["assigned_to"] == $users[0]["id"])){
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
   }
echo("</table>");
?>
