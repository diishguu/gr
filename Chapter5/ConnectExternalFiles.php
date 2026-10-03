<?php
// Подключение внешних файлов
// Инструкция include - подключает в программу внешний файл с кодом php.
include "welcome.php"; // подключаем в программу внешний файл
include_once "welcome.php"; // исключаем повторное подключение файла

// require "welcome.php"; // подключение, если файл не найден - действие программы прекратится
// require_once "welcome.php";  // исключение повторного подключения файла

$name = "Tom";
welcome($name);

// Функция sql_autoload_register
function my_autoloader($class) {
    echo "<br>Вызов функции автозагрузки<br>";
    include $class . ".php";
}
spl_autoload_register("my_autoloader"); // принимает функцию автозагрузки
// данная функция автоматически вызывается, когда в программе начинает
// использоваться неизвестный класс или интерфейс

$tom = new Person("Tom", 25);
$tom->printInfo();
?>