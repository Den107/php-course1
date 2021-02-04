<?php
$host = '127.0.0.1';
$login = 'root';
$password = 'root';
$dbName = 'main_db';

$connection = mysqli_connect($host, $login, $password, $dbName);

$sql = "INSERT INTO products (title, description, price) 
        VALUE ('АК-47', 'автомат калашникова', 100),
        ('Кольт', 'lklkl;;lk;l', 100),
        ('Ружье', 'lklkl;;lk;l', 100),
        ('Нож', 'lklkl;;lk;l', 100)
";

$res = mysqli_query(
    $connection, $sql
);

var_dump(mysqli_error($connection));