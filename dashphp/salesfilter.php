<?php

  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: *");

?>

<?php

$host= 'localhost';
$username = 'finalproj_user';
$password = 'password123';
$dbname = 'dolphin_crm2';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM Contacts");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo("<table>");
  echo("<tr>");
    echo("<th>Name</th>");
    echo("<th>Email</th>");
    echo("<th>Company</th>");
    echo("<th>Type</th>");
    echo("<th></th>");
  echo("</tr>");
    foreach ($result as $row) {
      if (($row["type"] == "SALES LEAD")){
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
        echo("<td><button id=\"view\">View</button></td>");
        echo("</tr>");
      }
    }
echo("</table>");
?>