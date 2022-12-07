<?php
session_start();
$host = 'localhost';
$username = 'finalproj_user';
$password = 'password123';
$dbname = 'dolphin_crm2';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST["contId"];
    $contId = filter_var($contId, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $userComment = $_POST["note"];
    $userComment = filter_var($userComment, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $author = $_SESSION["id"]
    $author = filter_var($author, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $date = date('d-m-y');
    $date = filter_var($date, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $stmt = $conn->prepare("INSERT INTO Notes (comment, created_by, created_at
    VALUES (:userComment, :author, :date)");
    $stmt = $conn->prepare("INSERT INTO Notes (contact_id, comment, created_by, created_at
    VALUES (:contId, :userComment, :author, :date)");
    $stmt->bindValue(':contId', $contId, PDO::PARAM_STR);
    $stmt->bindValue(':userComment', $userComment, PDO::PARAM_STR);
    $stmt->bindValue(':author', $author, PDO::PARAM_STR);
    $stmt->bindValue(':date', $date, PDO::PARAM_STR);
    $stmt->execute();
}

function convertDateFormat($date){
    $date = explode("-", $date);
    $monthNum  = $date[1];
    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
    $monthName = $dateObj->format('F');
    return $monthName . " " . $date[2] . " " . $date[0];
}
convertDateFormat(substr($row['created_at'], 0, 10))