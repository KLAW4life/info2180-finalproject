<?php
$host= 'localhost';
$username = 'finalproj_user';
$password = 'password123';
$dbname = 'dolphin_crm2';

$query = $_GET["query"];
$query = filter_var($query, FILTER_SANITIZE_STRING);

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

if($query === 'Users'){
    $stmt = $conn->query("SELECT u.firstname, u.lastname,u.email, u.role, u.created_at  FROM Users u ");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    usersCall($results);
}




?>



<?php function usersCall($results){ ?>
    <table id="uTable">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Created</th>
        </tr>
    <?php foreach ($results as $row): ?>
        <tr>
            <td><?= $row['firstname']," ", $row['lastname']?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['role'] ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
    <?php endforeach; ?>
  </table>

<?php } ?>