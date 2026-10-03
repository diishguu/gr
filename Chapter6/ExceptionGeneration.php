<h3>Когда возникает необходимость самим вручную сгенерировать исключение, то:</h3>
<?php
class Person
{
    private $name, $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function printInfo()
    {
        echo "Имя: $this->name<br> Возраст: $this->age<br>";
    }
}
$tom = new Person("Tom", "-30");
$tom->printInfo();
?>
<h3>Для генерации исключения используется оператор Throw</h3>
<?php /*
class Person1
{
    private $name, $age;
    function __construct($name, $age)
    {
        if($age < 0)
        {
            throw new Exception("Недействительный возраст");
        }
        $this->name = $name;
        $this->age = $age;
    }
    function printInfo()
    {
        echo "Имя: $this->name<br> Возраст: $this->age<br>";
    }
}
$tom = new Person1("Tom", "-30");
$tom->printInfo(); */
?>

<h3>Вызов лучше поместить в конструкцию try - catch</h3>

<?php
class Person2
{
    private $name, $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        if($age < 0)
        {
            throw new Exception("Недейтсвительный возраст");
        }
        $this->age = $age;
    }
    function printInfo()
    {
        echo "Имя: $this->name<br> Возраст: $this->age<br>";
    }
}
try
{
    $tom = new Person2("Tom", "-130");
    $tom->printInfo();
}
catch(Exception $ex)
{
    echo $ex->getMessage();
}
?>
<h2>Создание классов исключений</h2>
<?php
class PersonInvalidAgeException extends Exception
{
    function __construct($age)
    {
        $this-> message = "Недействительный возраст: $age. Возраст должен быть в диапозоне от 0 до 100";
    }
}
class Person3
{
    private $name, $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        if($age < 0)
        {
            throw new PersonInvalidAgeException($age);
        }
        $this->age = $age;
    }
    function printInfo()
    {
        echo "Name: $this->name<br>Age: $this->age";
    }
}

try {
    $tom = new Person3("Tom", "-130");
    $tom->printInfo();
}
catch(PersonInvalidAgeException $ex)
{
    echo $ex->getMessage();
}
?>
