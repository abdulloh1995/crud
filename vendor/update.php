<?php 
require_once '../config/db.php';

// print_r($_POST);die;
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect, "UPDATE `products` 
                        SET `title` = '$title', `price` = '$price', `description` = '$description' 
                        WHERE `products`.`id` = '$id'");

header('Location: ../index.php');
