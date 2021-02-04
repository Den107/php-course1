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

  /*while ($row = mysqli_fetch_assoc($res)) {
$menu[] = $row;
}*/
var_dump($connection);
  return mysqli_fetch_all($res, MYSQLI_ASSOC);

}

function getMenu(): array
{
   return query( "SELECT * FROM photo.photo");
}