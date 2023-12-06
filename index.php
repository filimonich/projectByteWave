<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= "New title"; ?>
  </title>
</head>

<body>

  <?php
  // Создание массива $a с указанными ключами и значениями
  $a = array(
    'color' => 'red',    // Ключ 'color' со значением 'red'
    'taste' => 'sweet',  // Ключ 'taste' со значением 'sweet'
    'shape' => 'round',  // Ключ 'shape' со значением 'round'
    'name' => 'apple',   // Ключ 'name' со значением 'apple'
    4                    // Ключом будет автоматически сгенерирован 0, со значением 4
  );

  // Создание массива $b с указанными значениями, ключи будут автоматически сгенерированы
  $b = array('a', 'b', 'c');

  // Создание пустого массива $a
  $a = array();
  // Установка значений по указанным ключам
  $a['color'] = 'red';   // Ключ 'color' со значением 'red'
  $a['taste'] = 'sweet'; // Ключ 'taste' со значением 'sweet'
  $a['shape'] = 'round'; // Ключ 'shape' со значением 'round'
  $a['name'] = 'apple';  // Ключ 'name' со значением 'apple'
// Добавление элемента со значением 4. Ключ будет автоматически сгенерирован и равен 0
  $a[] = 4;

  // Создание пустого массива $b
  $b = array();
  // Добавление элементов в массив. Ключи будут автоматически сгенерированы
  $b[] = 'a';
  $b[] = 'b';
  $b[] = 'c';

  // Вывод результатов на экран
  var_dump($a); // Вывод содержимого массива $a
  echo "<br>";
  var_dump($b); // Вывод содержимого массива $b
  ?>
  <br>

  <?php
  $colors = array('red', 'green', 'blue');

  foreach ($colors as &$color) {
    $color = strtoupper($color);
  }
  unset($color);

  print_r($colors);
  ?>
</body>

</html>