<?php include '../functions/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
  <form action="exit.php"> 
    <button type="submit">Выйти</button>
  </form>
  <form action="card.php"> 
    <button type="submit">Корзина</button>
  </form>
 
<?php
session_start();
echo "Привет {$_SESSION['login']}";
getProducts();
addToCard();
?>
</body>

</html>