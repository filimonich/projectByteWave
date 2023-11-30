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

  // включение файла session_file.php
  include './session_file.php';

  echo "Текущая дата и время ";
  echo date(DATE_RSS);
  ?>
  <br>
  <?php
  // вывод переменных сессии
  echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
  echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

  ?>

  <br>

  <?php
  if (mt_rand(0, 1)) {
    ?>
    <div style="color: blue">Синий текст</div>
    <?php
  } else {
    ?>
    <div style="color: brown;">Коричневый текст</div>
    <?php
  }
  ?>

  <?php

  // Создание пустого ассоциативного массива
  // функции array()
  // $student = array();
  $student = [];

  // Добавление элементов в массив
  $student = [
    // 'name' - это ключ или индекс, значение 'John'
    // => - это оператор, который связывает ключи и значения в ассоциативном массиве
    'name' => 'John',
    'age' => 20,
    'major' => 'Computer Science'
  ];

  // Вывод информации о студенте
  echo "Student Name: " . $student['name'] . "<br>";
  echo "Student Age: " . $student['age'] . "<br>";
  echo "Student Major: " . $student['major'] . "<br>";
  ?>

</body>

</html>