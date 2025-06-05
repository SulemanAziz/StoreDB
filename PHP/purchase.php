<?php
session_start();
$host = "localhost";               
$dbname = "statanalysis";
$user = $_SESSION['username'];
$password = $_SESSION['password'];

$conn = new mysqli($host, $user, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];

    
    $stmt = $conn->prepare("CALL New_Sale(?, ?)");
    $stmt->bind_param("si", $product, $quantity);
    
    if ($stmt->execute()) {
        echo "Purchase recorded successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>

<html>
<br>
<a href="Custview.php">Back to products page</a>
</html>