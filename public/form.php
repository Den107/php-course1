<?php
$num1 = (int) $_POST["firstNum"];
$num2 = (int) $_POST["secondNum"];
$oper = $_POST["selectOperation"];


function calc($a, $b, $oper){
  switch($oper){
    case 'sum':
      return $a + $b;
      break;
    case 'minus':
      return $a - $b;
      break;
    case 'multi':
      return $a * $b;
      break;
    case 'dev':
      if ($b === 0){
        return 'На ноль делить нельзя';
      }
      return $a / $b;
      break;
  }
}

$res = calc($num1, $num2, $oper);

$_POST["res"] = $res;
?>
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
    <input type="text" name="res" value="<?=$_POST["res"]?>">
  </form>