<?php
include 'db.php';
session_start();

if (isset($_SESSION['user_id']) && isset($_POST['id'])) {
    $stmt = $pdo->prepare("DELETE FROM todos WHERE id = :id AND user_id = :user_id");
    $stmt->execute(['id' => $_POST['id'], 'user_id' => $_SESSION['user_id']]);
}

header("Location: index.php");
exit();
