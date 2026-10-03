<?php

// Получение ID сессии
session_start();
// Сохранение данных в сессии
$_SESSION["name"] = "Samuel";
$_SESSION["age"] = "52";

echo session_id(); // идентификатор сесси
echo session_name(); // имя сессии
echo "<br>";
echo $_COOKIE["PHPSESSID"];

// Получение данных сессии
if (isset($_SESSION["name"]) && isset($_SESSION["age"])) {
    $name = $_SESSION["name"];
    $age = $_SESSION["age"];
    echo "<br>Name: $name <br> Age: $age";
}
// Удаление данных сессии - unset
unset($_SESSION["age"]);
// Удалить все данные сессии можно с помощью функции session_destroy();
?>