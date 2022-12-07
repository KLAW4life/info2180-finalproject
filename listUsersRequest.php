<?php
session_start();
$host= 'localhost';
$username = 'finalproj_user';
$password = 'password123';
$dbname = 'dolphin_crm';

$reject = '1';

$query = $_GET["query"];
$query = filter_var($query, FILTER_SANITIZE_STRING);

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$conn2 = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

if(isset($_SESSION['email'])){

    $sql = "SELECT u.role FROM Users u WHERE u.email = '$_SESSION['email']'";
    $gstmt = $conn2->query($sql);
    $role = $gstmt->fetch(PDO::FETCH_ASSOC);

    if($role === 'Admin'){
        if($query === 'Users'){
        $stmt = $conn->query("SELECT u.firstname, u.lastname,u.email, u.role, u.created_at  FROM Users u ");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        usersCall($results);  
        }else{
            usersReject();
        }
    }
    
}




?>



<?php function usersCall($results){ ?>
    <p></p>
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

<?php function usersReject(){?>
    <p> 1</p>
<?php } ?>