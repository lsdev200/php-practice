<?php
include 'db.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $title = $_POST['title'];
    $user_id = $_SESSION['user_id'];

    $stmt = $pdo->prepare("INSERT INTO todos (title, user_id) VALUES (:title, :user_id)");
    $stmt->execute(['title' => $title, 'user_id' => $user_id]);

    header("Location: index.php");
    exit();
}
