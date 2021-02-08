<?php include '../db/db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
 
<?php 
$products = query("SELECT * FROM shop.products WHERE id={$_GET["id"]}");
?>

<?php foreach($products as $product) :?>
<div class='card mb-3'>
  <img src='/photo/<?=$product[3]?>' class='card-img-top' alt=''>
  <div class='card-body'>
    <h5 class='card-title'><?=$product[1]?></h5>
    <p class='card-text'><?=$product[4]?></p>
    <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>
  </div>
</div>
<?endforeach?>
</body>

</html>