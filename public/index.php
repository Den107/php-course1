<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
    <input type="number" name="res">
  </form>
</body>

</html>