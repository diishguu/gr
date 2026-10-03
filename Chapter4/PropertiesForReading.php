<?php
class Person
{
    public $name, $age;
    const maxAge = 110;
    function __construct($name, $age)
    {
        $this->name = $name;
        if ($age > Person::maxAge) $age = Person::maxAge;
        $this->age = $age;
    }
    function print()
    {
        echo "<br>Имя: $this->name Возраст: $this->age<br>";
    }
}

$tom = new Person('Tom', '20');
$bob = new Person('Bob', '120');
$tom->print();
$bob->print();
// обращение к статическому свойству
echo "Максимальный возраст: " . Person::maxAge . "<br>";

?>