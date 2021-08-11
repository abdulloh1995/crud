<?php 

    require_once 'config/db.php';

    $product_id = $_GET['id'];

    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
    $product = mysqli_fetch_assoc($product);
    // print_r($product);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<h3> Update product </h3>

<form action="vendor/update.php" method="POST">
                <input type="hidden" name="id" value="<?= $product['id']?>">
                <p>TITLE</p>
                <input type="text" name="title" value="<?= $product['title']?>">
                <p>Discription</p>
                <textarea name="description"><?= $product['description']?></textarea>
                <p>Price</p>
                <input type="number" name="price" value="<?= $product['price']?>"> <br> <br>
                <button type="submit ">Update</button>
</form>
</body>
</html>