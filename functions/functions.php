<?php
include __DIR__ . "/../db/db.php";

//Показать один продукт
function getProduct(){
  $products = query("SELECT * FROM shop.products WHERE id={$_GET["id"]}");
   foreach($products as $product){
    echo "
    <div class='card mb-3'>
    <img src='/photo/$product[3]' class='card-img-top' alt=''>
    <div class='card-body'>
      <h5 class='card-title'>$product[1]</h5>
      <p class='card-text'>$product[4]</p>
    </div>
  </div>";
  }
}

//Показать все продукты
function getProducts(){
$products = query("SELECT * FROM shop.products");
 foreach($products as $product) {
   echo "
   <div class='card' style='width: 18rem;'>
    <img src='/photo/$product[3]' class='card-img-top' alt='>
    <div class='card-body'>
      <h5 class='card-title'>$product[1]</h5>
      <p class='card-text'>$product[2]</p>
      <a href='product.php?id=$product[0]' class='btn btn-primary'>Подробнее</a>
    </div>
  </div>
<br>";
 }
}

//Регистрация 
function reg($login, $password){
  if(!$login || !$password) return false;
  $password = md5($password);
  query("INSERT INTO shop.users (login, password) VALUES ('$login', '$password')");
}

//Авторизация
function auth($login, $password){
  $password = md5($password);

  $user = query("SELECT * FROM shop.users WHERE login='{$_POST["login"]}' AND password='{$password}'");
 
  if($user['0']){session_start();
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    header('Location: products.php');
  }else {
   echo 'Логин или пароль неверный, вернитесь пожалуйста назад и попробуйте снова';
  }
}


//Exit
function exitOfAuth(){
session_write_close();
header('Location: index.php');
}