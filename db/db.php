<?php

function query($sql){
  $host = '127.0.0.1';
  $login = 'mysql';
  $password = 'mysql';
  $dbName = 'shop';

  $connection = mysqli_connect($host, $login, $password, $dbName);
  $res = mysqli_query($connection, $sql);

  return mysqli_fetch_all($res);
}