<?php

require_once 'config/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff ;
    }

    td {
        background: #b5b5b5;
    }

</style>
<body>
    
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Price</th>
        <th>Description</th>
    </tr>
            <?php
                
                $products = mysqli_query($connect, "SELECT * FROM `products`");
                $products = mysqli_fetch_all($products);
                // print_r($products);
                foreach ($products as $product) {
                    
                ?>
                        <tr>
                            <td><?= $product[0]?></td>
                            <td><?= $product[1]?></td>
                            <td><?= $product[2]?></td>
                            <td><?= $product[3]?></td>
                            <td><a href="product.php?id=<?= $product[0]?>">View</a></td>
                            <td><a href="update.php?id=<?= $product[0]?>">Update</a></td>
                            <td><a style="color: indianred;" href="vendor/delete.php?id=<?= $product[0]?>">Delete</a></td> 
                        </tr>

                <?php
                }
            ?>
</table>

<h3> Add new product</h3>

<form action="vendor/create.php" method="POST">
                <p>TITLE</p>
                <input type="text" name="title">
                <p>Discription</p>
                <textarea name="description"></textarea>
                <p>Price</p>
                <input type="number" name="price"> <br> <br>
                <button type="submit ">Add new product</button>
</form>



</body>
</html>