<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index1.html');
    exit;
}
?>

<h1>Welcome <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
<a href="logout2.php">Logout</a>