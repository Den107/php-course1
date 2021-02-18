<?php
include __DIR__ . "/../db/db.php";


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