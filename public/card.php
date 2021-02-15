<?php include '../functions/functions.php';
session_start();

getCard();
deleteFromCard();

echo '<form method="POST" action="buy.php">
<label>Имя<input type="text" name="name"></label>
<label>Адрес доставки<input type="text" name="adress"></label>
<button type="submit">Купить</button>
</form>';