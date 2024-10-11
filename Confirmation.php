<!DOCTYPE html>
<html>
<head>
    <title>TindahanPH Login</title>
    <link rel="stylesheet" href="ConfirmStyle.css">
</head>
<body>

    <?php

    session_start();
    include("DBconnection.php");

    $query2 = "SELECT * FROM products";
    $result = mysqli_query($conn, $query2);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if (isset($row['product_name']) && isset($row['product_price']) && isset($row['details']) && isset($row['image'])) {
            $product_name = $row['product_name'];
            $product_price = $row['product_price'];
            $details = $row['details'];
            $image = $row['image'];

            echo "<div id='photo-item'>";
            echo "<img src='$image' id='image-size' />";
            echo "</div>";

            echo "<div id='product_details_position'>";
            echo "<div id='text-size'>";
            echo "<h3>$product_name</h3>";
            echo "<p>Price: PHP $product_price.00</p>";
            echo "<p>$details</p>";
            echo "</div>";
            echo "</div>";
            }
        }
    }

    ?>

    <button id="confirm" onclick="location.href='Successfull.php';">

        Confirm Payment

    </button>

    <select name="category" id="category">
        <option value="">Select Payment</option>
        <option value="Music">Cash on Delivery</option>
        <option value="Arts">GCash</option>
        <option value="Sports">Paypal</option>
        <option value="Cooking">PayMaya</option>
    </select>

    <p id="quantity_text">Quantity:</p>
    <input type="number" name="number" min = "0" max="100" step="1" value="1" id="quantity">



</body>
</html>