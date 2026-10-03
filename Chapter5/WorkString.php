<?php

$s = <<< LABEL
Hello World!
Bye World...
LABEL;
echo "<br>$s<br>";

// Обращение к символам строки
$str = "Hello Tom";
echo $str[0]; // получим первый символ

$str[1] = "i"; // смена символа
echo "<br>" . $str . "<br>";

// Функции strpos() и mb_strpos() - возвращают позицию подстроки
$input = "This is the end";
$search = "is";
$position = strpos($input, $search);
echo $position;

// Функция trim() - удаляет из строки начальные и конечные пробелы

// Изменение регистра - mb_strtolower() и mb_strtoupper()

// Функция strlen() - возвращает длину строки

// Функция mb_substr() - позволяет получить из одной строки ее определенную часть

// Функция str_replace - замена определенной части подстроки
?>