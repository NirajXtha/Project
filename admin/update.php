<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div class="main">
        <h2>Edit Product</h2>
        <?php
        include_once "../pages/dbconfig.php";

        if (isset($_GET['id'])) {
            $productId = $_GET['id'];

            // Retrieve product information by ID
            $sql = "SELECT * FROM product WHERE pid = $productId";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Display the form to edit the product
                ?>
                <form method="post" action="update.php?id=<?=$productId?>">
                    <input type="hidden" name="pid" value="<?= $row['pid'] ?>">
                    <label for="product_name">Product Name:</label>
                    <input type="text" name="product_name" value="<?= $row['product_name'] ?>"><br>
                    <label for="product_desc">Product Description:</label>
                    <textarea name="product_desc"><?= $row['product_desc'] ?></textarea><br>
                    
                    <!-- Add more fields for other attributes you want to edit -->

                    <input type="submit" value="Update">
                </form>
                <?php
            } else {
                echo "Product not found.";
            }
        } else {
            echo "Invalid request.";
        }
        ?>
    </div>

    <!-- ... Your other content ... -->

</body>
</html>