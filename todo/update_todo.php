<?php
include 'db.php';
session_start();

if (isset($_SESSION['user_id']) && isset($_POST['id']) && isset($_POST['completed'])) {
    $stmt = $pdo->prepare("UPDATE todos SET completed = :completed WHERE id = :id AND user_id = :user_id");
    $stmt->execute(['completed' => $_POST['completed'], 'id' => $_POST['id'], 'user_id' => $_SESSION['user_id']]);
}

header("Location: index.php");
exit();
