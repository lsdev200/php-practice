<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

$user_id = $_SESSION['user_id'];

// Fetch to-do items
$stmt = $pdo->prepare("SELECT * FROM todos WHERE user_id = :user_id");
$stmt->execute(['user_id' => $user_id]);
$todos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>To-Do List</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="container">

    <h2>Your To-Do List</h2>
    <form action="add_todo.php" method="POST">
      <input type="text" name="title" placeholder="New to-do item" required>
      <button type="submit">Add</button>
    </form>
    <ul>
      <?php foreach ($todos as $todo): ?>
        <li>
          
            <?= htmlspecialchars($todo['title']) ?>
            <form action="delete_todo.php" method="POST" style="display:inline;">
              <input type="hidden" name="id" value="<?= $todo['id'] ?>">
              <button type="submit">Delete</button>
            </form>
            <form action="update_todo.php" method="POST" style="display:inline;">
              <input type="hidden" name="id" value="<?= $todo['id'] ?>">
              <button type="submit" name="completed" value="<?= $todo['completed'] ? 0 : 1 ?>">
                <?= $todo['completed'] ? 'Undo' : 'Complete' ?>
              </button>
            </form>
          
        </li>
      <?php endforeach; ?>
    </ul>
    <p><a href="logout.php">Logout</a></p>
  </div>
</body>

</html>