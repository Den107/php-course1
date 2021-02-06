<?php
function getGallery($dir){
  $openDir = opendir($dir);
  echo "<ul>";
  while (false !== ($pic = readdir($openDir))) { 
    if ($pic != "." && $pic != ".."){
      echo '<li><a href="'.$dir.'/'.$pic.'" target="_blank"><img src="'.$dir.'/'.$pic.'"></a></li>';
    }
}
  echo "</ul>";
  closedir($openDir);
}





function query(string $sql) {
  $host = '127.0.0.1';
  $login = 'mysql';
  $password = 'mysql';
  $dbName = 'photo';

  $connection = mysqli_connect($host, $login, $password, $dbName);
  $res = mysqli_query($connection, $sql);



  return mysqli_fetch_all($res, MYSQLI_ASSOC);

}

$id = (int) $_GET['id'];
$image = query("SELECT * FROM photo WHERE id = {$id}")[0];
include "D:\OpenServer\domains\php-course1\public\photo.php";