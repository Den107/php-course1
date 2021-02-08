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
  <form action="form.php" method="post">
    <input type="number" name="firstNum">
    <select name="selectOperation">
      <option value="sum">+</option>
      <option value="minus">-</option>
      <option value="multi">*</option>
      <option value="dev">/</option>
    </select>
    <input type="number" name="secondNum">
    <button type="submit">Вычислить</button>
    <input type="text" name="res">
  </form>
<br>
<?php 
$products = query("SELECT * FROM shop.products");
?>
<?php foreach($products as $product) :?>
  <div class="card" style="width: 18rem;">
    <img src="/photo/<?=$product[3]?>" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title"><?=$product[1]?></h5>
      <p class="card-text"><?=$product[2]?></p>
      <a href="product.php?id=<?=$product[0]?>" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
<br>
  <?endforeach?>

</body>

</html>