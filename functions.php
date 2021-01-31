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

