<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
//1
$i = 0;
while($i <= 100){
  if($i % 3 === 0){
    echo $i . '<br>';
  }
  $i++;
}

//2
$i2 = 0;
do{
  if($i2 === 0){
    echo $i2 . ' - ноль' . '<br>';
  }elseif($i2 % 2 !== 0){
    echo $i2 . ' - нечетное число' . '<br>';
  }else {
    echo $i2 . ' - четное число' . '<br>';
  }
  $i2++;
}while($i2 <= 10);

//3
$cities = [
  'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
  'Ленинградская область' => ['Санкт-Петербург', 'Всеволжск', 'Павловск', 'Кронштадт'],
  'Ростовская область' => ['Ростов-на-Дону', 'Таганрог', 'Азов', 'Батайск'],
  'Краснодарский край' => ['Краснодар', 'Сочи', 'Горячий ключ'],
  'Республика Адыгея' => ['Майкоп', 'Тульский']
];

foreach($cities as $key => $value){
   echo "<br>$key:<br>";
  foreach($cities[$key] as $value){
    echo "$value" . ', ';
  }
}

//4
function transliterate(string $word) {

  $word = mb_strtolower($word);

  $dictionary = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'i',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'kh',
    'ц' => 'ts',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'shch',
    'ы' => 'y',
    'э' => 'e',
    'ю' => 'iu',
    'я' => 'ia',
    'ь' => '',
    'ъ' => ''
  ];

  $arrFromWord = preg_split('//u', $word, 0, PREG_SPLIT_NO_EMPTY);

  $result = '';

  foreach($arrFromWord as $value){
    if(isset($dictionary[$value])){
      $result .= $dictionary[$value];
    }else{
      $result .= $value;
    }
  }
   
  return "<br>$result<br>";
}
echo transliterate('Я люблю программировать');

//5
function getSpacesToSub($str){
  $str = strtolower($str);

  $arrFromStr = str_split($str);

  $result = '';

  foreach($arrFromStr as $value){
    if($value !== ' '){
      $result .= $value;
    }else{
      $result .= '_';
    }
  }

  return "<br>$result<br>";
}
echo getSpacesToSub('i love php');

//7
for ($i = 0; $i < 10; print_r($i++)){}

//8
$cities = [
  'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
  'Ленинградская область' => ['Санкт-Петербург', 'Всеволжск', 'Павловск', 'Кронштадт'],
  'Ростовская область' => ['Ростов-на-Дону', 'Таганрог', 'Азов', 'Батайск'],
  'Краснодарский край' => ['Краснодар', 'Сочи', 'Горячий ключ'],
  'Республика Адыгея' => ['Майкоп', 'Тульский']
];

foreach($cities as $key => $value){
   echo "<br>$key:<br>";
  foreach($cities[$key] as $value){
    if(mb_substr($value, 0, 1) === 'К'){
      echo "$value" . ', ';
    }
  }
}

//9
function getTranslateAndSub($str){
  
  $str = transliterate($str);
  $str = getSpacesToSub($str);
  return "<br>$str<br>";
}
echo getTranslateAndSub('Я сделал это задание');
?>
</body>
</html>
