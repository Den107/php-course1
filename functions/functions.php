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
      <form action='products.php?id=$product[0]' method='GET'>
        <button type='submit'>В корзину</button>
      </form>
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
session_register_shutdown();
header('Location: index.php');
}

//Add to card
function addToCard(){
  $product = query("SELECT * FROM shop.products WHERE id={$_GET["id"]}");
  $productToCard = query("INSERT INTO `shop`.`card` (`name`, `descr`, `img`) VALUES ('{$product['name']}', '{$product['descr']}', '{$product['img']}')");
  header('Location: card.php');
}

//Показать корзину
function getCard(){
  $card = query("SELECT * FROM shop.card");
 foreach($card as $item) {
   echo "
   <div class='card' style='width: 18rem;'>
    <img src='/photo/$item[3]' class='card-img-top' alt='>
    <div class='card-body'>
      <h5 class='card-title'>$item[1]</h5>
      <p class='card-text'>$item[2]</p>
      <a href='card.php?id=$product[0]' class='btn btn-primary'>Удалить</a>
  </div>
<br>";
}



//Delete from card
function deleteFromCard(){
query("DELETE FROM `shop`.`card` WHERE id={$_GET["id"]}");
}}

//Add order
function getOrder($name, $adress, $order){

 query("INSERT INTO `shop`.`order` (`adress`, `name`) VALUES ($name, $adress)");

 query("INSERT INTO `shop`.`order_items` (`prod_id`, `count`) VALUES ($order['id'], $order['count'])");
}