<?php

$connect = mysqli_connect('localhost', 'root', '', 'crud');

if (!$connect) {
    die; 'Erorr in connect to data base';
}