<!DOCTYPE html>
<html>
<head>
    <title>Customer View</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="Scripts/Functions.js"></script>
</head>

<?php
session_start();

$host = "localhost";
$dbname = "statanalysis";
$user = $_SESSION['username'];
$password = $_SESSION['password'];

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die();
}
else {
    echo "Connected to the database successfully";
}

?>

<body>
<h1>Available Products:</h1>
<p>
<form action="purchase.php" method="post">
    <div class="product">
        <label for="product1">
            <input type="radio" name="product" id="product1" value="Cooking Oil" style="display:none;">
            <img src="product_images\CookingOil.png" alt="Cooking Oil" onclick="selectProduct('product1', this);">
        </label>
        <p>Cooking Oil</p>
    </div>
    <div class="product">
        <label for="product2">
            <input type="radio" name="product" id="product2" value="Olpers Cream" style="display:none;">
            <img src="product_images/OlpersCream.png" alt="Olpers Cream" onclick="selectProduct('product2', this);">
        </label>
        <p>Olpers Cream</p>
    </div>
    <div class="product">
        <label for="product3">
            <input type="radio" name="product" id="product3" value="Chicken Bread" style="display:none;">
            <img src="product_images\ChickenBread.png" alt="Chicken Bread" onclick="selectProduct('product3', this);">
        </label>
        <p>Chicken Bread</p>
    </div>
    <div class="product">
        <label for="product4">
            <input type="radio" name="product" id="product4" value="Mineral Water" style="display:none;">
            <img src="product_images\Water.png" alt="Mineral Water" onclick="selectProduct('product4', this);">
        </label>
        <p>Mineral Water</p>
    </div>
    <div class="product">
        <label for="product5">
            <input type="radio" name="product" id="product5" value="Walls IceCream" style="display:none;">
            <img src="product_images\IceCream.png" alt="Walls IceCream" onclick="selectProduct('product5', this);">
        </label>
        <p>Walls IceCream</p>
    </div>
    <div>
        <label for="quantity">Quantity:</label>
        <button type="button" onclick="changeQuantity(-1)" style="width: 100px; height: 70px">-</button>
        <input type="number" id="quantity" name="quantity" value="1" min="1" style="width: 100px; height: 70px;">
        <button type="button" onclick="changeQuantity(1)" style="width: 100px; height: 70px">+</button>
        <button type="button" onclick="Deselect()" style="width: 100px; height: 70px">Deselect</button>
        <input type="submit" value="Confirm Purchase" style="width: 200px; height: 100px">
    </div>
</form>
</p>

</body>
</html>