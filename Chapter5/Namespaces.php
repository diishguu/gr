<?php
namespace work;
include "NewPerson.php";
$tom = new \base\Person("Tom"); // если конструкции одного пространства имен используются
// в другом пространстве имен, то перед названием конструкции, указывается ее название.

// вложенные пространства имен - /BASE/CLASSES/Person, где base и classes это пространства имен

// Установка псевдонима - use ключевое слово (использую), as - ключевое слово (как)
// use \base\classes\Person as User - используем директорию как слово User

echo $tom->name;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$tom = new Person("Tom");
echo $tom->name;
?>
</body>
</html>
