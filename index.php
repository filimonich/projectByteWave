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
  $array1 = array("a" => "green", "red", "blue", "red");
  $array2 = array("b" => "green", "yellow", "red");
  $result = array_diff($array1, $array2);

  print_r($result);
  ?>
  <br>
  <?php
  class A
  {
    private $B;          // Приватное свойство $B
    protected $C;        // Защищенное свойство $C
    public $D;           // Публичное свойство $D
  
    function __construct()
    {
      $this->{1} = null;    // Инициализация свойства с именем "1" значением null
    }
  }

  var_export((array) new A());    // Преобразование объекта класса A в массив и его вывод
  ?>


  <?php
  // Показываем все ошибки
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  $arr = array('fruit' => 'apple', 'veggie' => 'carrot');

  // Верно
  print $arr['fruit'];  // apple
  print $arr['veggie']; // carrot
  
  // Неверно. Это работает, но из-за неопределённой константы с
// именем fruit также вызывает ошибку PHP уровня E_NOTICE
//
// Notice: Use of undefined constant fruit - assumed 'fruit' in...
  print $arr[fruit];    // apple
  
  // Давайте определим константу, чтобы продемонстрировать, что
// происходит. Мы присвоим константе с именем fruit значение 'veggie'.
  define('fruit', 'veggie');

  // Теперь обратите внимание на разницу
  print $arr['fruit'];  // apple
  print $arr[fruit];    // carrot
  
  // Внутри строки это нормально. Внутри строк константы не
// рассматриваются, так что ошибки E_NOTICE здесь не произойдёт
  print "Hello $arr[fruit]";      // Hello apple
  
  // С одним исключением: фигурные скобки вокруг массивов внутри
// строк позволяют константам там находиться
  print "Hello {$arr[fruit]}";    // Hello carrot
  print "Hello {$arr['fruit']}";  // Hello apple
  
  // Это не будет работать и вызовет ошибку обработки, такую как:
// Parse error: parse error, expecting T_STRING' or T_VARIABLE' or T_NUM_STRING'
// Это, конечно, также действует и с суперглобальными переменными в строках
// print "Hello $arr['fruit']";
// print "Hello $_GET['foo']";
// Генерируем ошибку и записываем ее в журнал ошибок
  
  // Ещё одна возможность - конкатенация
  print "Hello " . $arr['fruit']; // Hello apple
  ?>


  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', true);
  ini_set('html_errors', false);
  // Простой массив:
  $array = array(1, 2);
  $count = count($array);
  for ($i = 0; $i < $count; $i++) {
    echo "<br>Проверяем $i: <br>";
    echo "<br> Плохо: " . $array['$i'] . "<br>";
    echo "Хорошо: " . $array[$i] . "<br>";
    echo "<br> Плохо: {$array['$i']}<br>";
    echo "Хорошо: {$array[$i]}<br>";
  }
  ?>



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

  // Предположим, у вас есть класс "Product" для представления товаров
  
  class Product
  {
    // Публичное свойство "id"
    public $id;
    // Публичное свойство "name"
    public $name;
    // Публичное свойство "price"
    public $price;

    // это объявление конструктора __construct() класса Product
    public function __construct($id, $name, $price)
    {
      // Присваиваем значение аргумента $id свойству "id"
      $this->id = $id;
      // Присваиваем значение аргумента $name свойству "name"
      $this->name = $name;
      // Присваиваем значение аргумента $price свойству "price"
      $this->price = $price;
    }
  }

  // Создаем массив с объектами "Product"
  $products = [
    // Создаем объект "Product" с аргументами 1, 'Apple', 0.99
    new Product(1, 'Apple', 0.99),
    // Создаем объект "Product" с аргументами 2, 'Banana', 0.49
    new Product(2, 'Banana', 0.49),
    // Создаем объект "Product" с аргументами 3, 'Orange', 0.79
    new Product(3, 'Orange', 0.79)
  ];

  foreach ($products as $product) {
    // Выводим значение свойства "id" объекта "Product"
    echo '<br>' . 'ID: ' . $product->id . '<br>';
    // Выводим значение свойства "name" объекта "Product"
    echo 'Name: ' . $product->name . '<br>';
    // Выводим значение свойства "price" объекта "Product"
    echo 'Price: ' . $product->price . '<br><br>';
  }
  ?>


  <?php
  $array = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d",
  );

  var_dump($array);

  ?>

  <br>
  <?php
  $array = array(
    "foo" => "bar",
    "bar" => "foo",
    100 => -100,
    -100 => 100,
  );
  var_dump($array);
  ?>
  <br>
  <?php
  // Создаём простой массив.
  $array = array(1, 2, 3, 4, 5);
  print_r($array);

  // Теперь удаляем каждый элемент, но сам массив оставляем нетронутым:
  foreach ($array as $i => $value) {
    unset($array[$i]);
  }
  print_r($array);

  // Добавляем элемент (обратите внимание, что новым ключом будет 5, вместо 0).
  $array[] = 6;
  print_r($array);

  // Переиндексация:
  $array = array_values($array);
  $array[] = 7;
  print_r($array);
  ?>
  <br>
  <?php ?>
  <br>
  <?php ?>

</body>

</html>