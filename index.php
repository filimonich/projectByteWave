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
// Добавление элементов в массив
// 'name' - это ключ или индекс, значение 'John'
// => - это оператор, который связывает ключи и значения 
// в ассоциативном массиве
  
  $student = [];

  $student = [
    'name' => 'John',
    'age' => 20,
    'major' => 'Computer Science'
  ];

  // Вывод информации о студенте
  echo "Student Name: " . $student['name'] . "<br>";
  echo "Student Age: " . $student['age'] . "<br>";
  echo "Student Major: " . $student['major'] . "<br>";
  ?>


  <?php
  // Преобразование данных в формат JSON
  // $jsonData = json_encode($student);
  
  // Вывод данных в формате JSON
  // echo $jsonData;
  ?>
  <br>
  <?php
  // Создание массива с данными о пользователях и продуктах
  $serverData = [
    'users' => [
      ['id' => 1, 'name' => 'John', 'age' => 25],
      ['id' => 2, 'name' => 'Jane', 'age' => 30],
      ['id' => 3, 'name' => 'Bob', 'age' => 35],
    ],
    'products' => [
      ['id' => 1, 'name' => 'Product 1', 'price' => 10],
      ['id' => 2, 'name' => 'Product 2', 'price' => 20],
      ['id' => 3, 'name' => 'Product 3', 'price' => 30],
    ],
  ];

  // Преобразование массива с данными в формат JSON
  $jsonData = json_encode($serverData);

  // Установка заголовка ответа для указания, что возвращаемые данные являются JSON
  // header('Content-Type: application/json');
  
  // Вывод данных в формате JSON
  echo $jsonData;
  ?>
  <br>
  <?php
  // Предположим, что у вас есть массив данных о пользователе
  $userData = ['John Doe', 'johndoe@example.com', 'New York'];

  // Используем функцию list() для присваивания значений элементов массива переменным
  list($name, $email, $location) = $userData;

  // Выводим данные пользователя
  echo 'Name: ' . $name . '<br>';
  echo 'Email: ' . $email . '<br>';
  echo 'Location: ' . $location;

  ?>
  <br>
  <?php

  // Предположим, у вас есть результат запроса к базе данных, который возвращает несколько строк данных
  $result = [
    ['id' => 1, 'name' => 'John Doe', 'email' => 'johndoe@example.com'],
    ['id' => 2, 'name' => 'Jane Smith', 'email' => 'janesmith@example.com'],
    ['id' => 3, 'name' => 'Bob Johnson', 'email' => 'bobjohnson@example.com']
  ];

  // Создаем пустой массив для хранения данных из базы данных
  $data = [];

  // Перебираем каждую строку результата запроса и сохраняем данные в массиве
  foreach ($result as $row) {
    $data[] = [
      'id' => $row['id'],
      'name' => $row['name'],
      'email' => $row['email']
    ];
  }

  // Теперь у вас есть массив $data, который содержит данные из базы данных
  echo json_encode($data);
  ?>
  <?php
  /////////////////
  // Функция, которая принимает массив данных и выводит их на экран
  function displayData($data)
  {
    echo '<br>' . 'Name: ' . $data['name'] . '<br>';
    echo 'Email: ' . $data['email'] . '<br>';
  }

  // Создаем массив с данными
  $userData = [
    'name' => 'John Doe',
    'email' => 'johndoe@example.com'
  ];

  // Вызываем функцию и передаем массив с данными
  displayData($userData);

  /////////////////
  // Предположим, что у вас есть форма с полями "имя" и "электронная почта"
  
  // Обработка данных формы
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем значения из формы
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Создаем массив с данными пользователя
    $userData = [
      'name' => $name,
      'email' => $email
    ];
  }

  /////////////////////////////
  
  // Предположим, у вас есть класс "Product" для представления товаров
  
  class Product
  {
    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price)
    {
      $this->id = $id;
      $this->name = $name;
      $this->price = $price;
    }
  }

  // Создаем массив с объектами "Product"
  $products = [
    new Product(1, 'Apple', 0.99),
    new Product(2, 'Banana', 0.49),
    new Product(3, 'Orange', 0.79)
  ];

  foreach ($products as $product) {
    echo '<br>' . 'ID: ' . $product->id . '<br>';
    echo 'Name: ' . $product->name . '<br>';
    echo 'Price: ' . $product->price . '<br><br>';
  }

  //////////////////////
  
  // Отправляем запрос к API
  // $response = // ваш код для отправки запроса к API;
  
  // Преобразуем ответ в массив
  $data = json_decode($response, true);

  // Используем данные из массива
  echo 'Name: ' . $data['name'] . '<br>';
  echo 'Email: ' . $data['email'] . '<br>';

  ////////////////////
  ?>


  <?php


  ?>
</body>

</html>