<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    header("Location: Custview.php");
} else {
    echo ("Unauthorized access. Username and password are required to connect to the database.");
    echo "<br>";
    echo '<a href="CustLogin.php">Go to login page</a>';
    die();
}
?>