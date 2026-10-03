<?php
class Person {
    public $name, $age;
    static $retirementAge = 65;
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    function sayHello() {
        echo "<br>Привет, меня зовут $this->name!<br>";
    }
    static function printPerson($person) {
        echo "Имя: $person->name Возраст: $person->age<br>";
    }
    function checkAge()
    {
        if ($this->age >= self::$retirementAge)
                echo "<br>Пора на пенсию<br>";
            else
                echo "<br>До пенсии еще " . (Person::$retirementAge - $this->age) . " лет<br>";
    }

}
$tom = new Person('Tom', 36);
// вызов нестатического метода
$tom->sayHello();

// Вызов статического метода
Person::printPerson($tom);
// обращение статическому свойству
echo "Пенсионный возраст: " . Person::$retirementAge . "<br>";

$tom->checkAge();
?>