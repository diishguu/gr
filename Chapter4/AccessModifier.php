<?php

/*
public - свойства и методы, объявленные с данным модификатором, можно обращаться
из внешнего кода и из любой части программы

protected - свойства и методы с данным модификатором доступны из текущего класса,
а также из классов- наследников

private - свойства и методы с данным модификатором доступны только из текущего класса
*/
class Person {
    private $privateA = "private";
    public $publicA = "public";
    protected $protectedA = "protected";

    private function getPrivateMethod()
    {
        echo "private method <br/>";
    }
    protected function getProtectedMethod()
    {
        echo "protected method <br/>";
    }
    public function getPublicMethod()
    {
        echo "public method <br/>";
    }
    function test()
    {
        $this->getPrivateMethod();
        $this->getProtectedMethod();
        $this->getPublicMethod();

        echo "$this->privateA<br>";
        echo "$this->protectedA<br>";
        echo "$this->publicA<br>";
    }
}
class Employee extends Person {
    function test()
    {
        // echo $this->privateA; // нельзя, так как privateA - является приватным
        echo $this->protectedA;
        echo $this->publicA;
        // $this->getPrivateMethod(); // нельзя, так как private в классе-родителе
        $this->getProtectedMethod();
        $this->getPublicMethod();
    }
}
$person = new Person;
// $person->getPrivateMethod(); недоступно, так как private
// $person->getProtectedMethod(); недоступно, так как protected
$person->getPublicMethod();

// echo $person->privateA; недоступно, так как private
// echo $person->protectedA; недоступно, так как protected
echo $person->publicA;

// Доступ к методам и свойствам объекта
class Account {
    private $sum = 0;
    function __construct($sum)
    {
        $this->sum = $sum;
    }
    function getSumFrom($otherAccount, $money) {
        $otherAccount->sum -= $money;
        $this -> sum += $money;
    }
    function printSum() {
        echo "<br>На счете $this->sum y.e.<br>";
    }
}
$acc1 = new Account(100);
$acc2 = new Account(400);

$acc1->getSumFrom($acc2, 200);
$acc1->printSum();
?>