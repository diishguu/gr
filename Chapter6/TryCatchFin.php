<?php

//try - код, который может вызвать исключения
//catch - обработка исключения

try
{
    //Код, который может вызвать исключения
    $a=5;
    $b=0;
    $result = $a/$b;
    echo $result;
}
catch (DivisionByZeroError $ex)
{
    //обработка исключения
    echo "Произошло исключение: <br>";
    echo $ex . "<br>";
}
echo "Конец работы программы";

//1 - класс error - ошибки
//2 - класс exception - исключения

?>

<h2>Блок CATCH</h2>

<?php
try
{
    $res = 5 / 0;
    echo $res;
}
catch(ParseError $p)
{
    echo "Произошла ошибка парсинга";
}
catch(DivisionByZeroError $b)
{
    echo "На ноль делить нельзя";
}


//Более конкретные ошибки - в начале, а более с общими - в конце

try {
    $res = 5 / 0;
    echo $res;
}
catch (DivisionByZeroError $ex)
{
    echo "На ноль делить нельзя";
}
catch(ArithmeticError $ex)
{
    echo "Ошибка при выполнении арифметической операции";
}
catch(Error $ex)
{
    echo "Произошла ошибка";
}
catch(Throwable $ex) //Trowable - обработка для всех типов
{
    echo "Ошибка при выполнении программы";
}

?>

<h2>Получение информации об ошибках и исключениях</h2>
<p style="color: darkred; font-size: 20px;">1.getMessage() - возвращает сообщение об ошибке</p>
<p style="color: darkred; font-size: 20px;">2.getCode() - возвращает код исключения</p>
<p style="color: darkred; font-size: 20px;">3.getFile() - возвращает название файла, в котором возникла ошибка</p>
<p style="color: darkred; font-size: 20px;">4.getLine() - возвращает номер строки, в которой возникла ошибка</p>
<p style="color: darkred; font-size: 20px;">5.getTrace() - возвращает трассировку стека</p>
<p style="color: darkred; font-size: 20px;">6.getTraceAsString() - возвращает трассировку стека в виде строки</p>

<?php
try
{
    $result = 5/0;
    echo $result;
}
catch (DivisionByZeroError $ex)
{
    echo "Сообщение об ошибке:" . $ex->getMessage() . "<br>";
    echo "Файл:" . $ex->getFile() . "<br>";
    echo "Номер строки:" . $ex->getLine() . "<br>";
}
?>

<h2>Блок FINALLY</h2>
<p style="font-size: 20px;"> Этот блок выполняется в конце. Используется для закрытия ресурсов.</P>

<?php
try
{
$result = 5/0;
echo $result . "<br>";
}
catch(Throwable $ex)
{
    echo "Ошибка при выполнении программы<br>";
}
finally
{
    echo "Блок finally <br>";
}
echo "Конец работа программы";
?>

