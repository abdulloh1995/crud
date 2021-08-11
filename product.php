<?php 

    require_once 'config/db.php';

    $product_id = $_GET['id'];

    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
    $product = mysqli_fetch_assoc($product);
    // print_r($product);

    $comments = mysqli_query($connect, "SELECT * FROM `comments` 
                                        WHERE `product_id` = '$product_id'");
    $comments = mysqli_fetch_all($comments);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
<h1><a href="index.php">Home</a></h1>
    <h2>Title: <?= $product['title']?></h2>
    <h3>Price: <?= $product['price']?></h3>
    <h4>Description: <?= $product['description']?></h4>

    <form action="vendor/create_comment.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id']?>">
        <textarea name="body"></textarea> <br> <br>
        <button type="submit">Add comment</button>
    </form>


<!-- <pre>

<?php
    
    print_r($comments);
    ?>

</pre> -->

    <h3>Comments</h3>

    <ul>
    <?php
    foreach ($comments as $comment){
        ?>
<li><?= $comment[2]?></li>
<?php
    }
?>
    </ul>
</body>
</html>