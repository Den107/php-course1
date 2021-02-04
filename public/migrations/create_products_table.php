<?php

$host = '127.0.0.1';
$login = 'root';
$password = 'root';
$dbName = 'main_db';

$connection = mysqli_connect($host, $login, $password, $dbName);
$sql = "
    CREATE TABLE products (
        id int PRIMARY KEY AUTO_INCREMENT,
        title varchar (100) NOT NULL,
        description TEXT,
        price float DEFAULT 0
    )";

$res = mysqli_query(
    $connection, $sql
);


