<?php
session_start();

$userId = $_SESSION["id"];
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("INSERT INTO Notes id, contact_id, comment, created_by, created_at");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $comment=filter_input(INPUT_POST, 'note', FILTER_SANITIZE_STRING);
}
    