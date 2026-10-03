<?php

function sum(array $numbers, callable $condition)
{
    $result = 0;
    foreach ($numbers as $number) {
        if($condition($number)) {
            $result += $number;
        }
    }
    return $result;
}

$isPositive = function ($n)
{
    return $n > 0;
};

$myNumbers = [-2, -1, 0, 1, 2, 3, 4, 5];
$positiveSum = sum($myNumbers, $isPositive);
echo $positiveSum;

// Типизация свойств
class Person
{
    public $name;
    public int $age;
}
$tom = new Person();
$tom->name = "Tom";
$tom->age = 36; // корректное значение
echo "<br>$tom->age<br>";
$tom->age = "36"; // корректное значение, так как PHP может преобразовать в число
echo $tom->age;
// $tom->age = "thirty-eight";
// echo $tom->age;

// Тип Union - объединение, представляет собой объединение типов,
// разделенных вертикальной чертой "|"
function sum1(int|float $n1, int|float $n2,): int|float
{
    return $n1 + $n2;
}
echo "<br>";
echo sum1(4, 5);
echo "<br>";
echo sum1(2.5, 3.7);

?>