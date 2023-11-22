<?php
// Начало сессии
session_start();

// Вывод переменных сессии
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>