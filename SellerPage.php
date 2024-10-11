<?php
    session_start();
    include("DBconnection.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['product_name'])) {
            $product_name = $_POST['product_name'];
        }
        if (isset($_POST['product_price'])) {
            $product_price = $_POST['product_price'];
        }
        if (isset($_POST['details'])) {
            $product_detail = $_POST['details'];
        }

        $targetDir = "photo/";
        $targetFile = $targetDir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);

        $sql = "INSERT INTO products (product_name, product_price, details, image) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $product_name, $product_price, $product_detail, $targetFile);
        $stmt->execute();
        $stmt->close();
    
        header("Location: MainMenuUserSell.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>TindahanPH Sell</title>
    <link rel="stylesheet" href="SellerStyle.css">
</head>
<body>   

    <div id="form1">

        <form action="" method="POST" enctype="multipart/form-data">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" id="product_name" required><br><br>

            <label for="product_price">Product Price:</label>
            <input type="text" name="product_price" id="product_price" required><br><br>

            <label for="product_price">Details:</label><br>
            <textarea id="details" name="details" required></textarea><br><br>

            <label for="video_path">Upload Image:</label>
            <input type="file" name="image" id="image" required><br><br>

            <input type="submit" value="Submit">
        </form>

    </div>

    <p id="magtinda">MAGTINDA NA!!!</p>

</body>
</html>