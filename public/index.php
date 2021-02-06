<?php
include __DIR__ . '/../functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

<?php


$images = query("SELECT * FROM photo");


foreach ($images as $image) :
  $imgUrl = "photo.php?id={$image['id']}";
  ?>
  <a href="/<?=$imgUrl?>" target='_blank'>
      <img src="/photo/<?=$image['path']?>" width='200'>
  </a>
<? endforeach;?>

</body>

</html>