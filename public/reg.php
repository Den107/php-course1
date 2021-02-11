<?php
include '../functions/functions.php'; 


reg($_POST['login'], $_POST['password']);?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
  <?php echo "Вы зарегистрированы под ником: {$_POST['login']} <br>"; ?>
<label>Форма Регистрации
  <form action="reg.php" method="POST">
    <input type="text" name="login" placeholder="Login"><br>
    <input type="text" name="password" placeholder="Password"><br>
    <button type="submit">Зарегистрироваться</button>
  </form>
</label>
<br>
<br>
<br>
<br>
<br>
<label>Форма входа
  <form action="auth.php" method="POST">
    <input type="text" name="login" placeholder="Login"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">Войти</button>
  </form>
</label>
</body>

</html>