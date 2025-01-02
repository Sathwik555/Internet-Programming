<?php
session_start();

// Check if the user is logged in by verifying session data
if (!isset($_SESSION['user_name'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}
header("Location: Payment.html?user=" . urlencode($_SESSION['user_name']) . "&email=" . urlencode($_SESSION['user_email']));
exit();
?>