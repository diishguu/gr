<?php

// Сохранение cookie - setcookie()
/*
bool setcookie(string $name, string $value, int $expire, string $path,
string $domain, bool $secure, bool $httponly);

name - имя cookie, которое будет использоваться для доступа к его значению
value - значение или содержимое cookie
expire - (необязательный параметр) срок действия в секундах, после которого cookie уничтожаются
Если данный параметр не установлен или = 0, то уничтожение после закрытия браузера происходит

path - (необязательный параметр) путь к каталогу на сервере
domain - (необязательный параметр) задает домен для которого будут доступны cookie
secure - (необязательный параметр) передача cookie по защищенному протоколу (по ум. false)
httponly - (необязательный параметр) если равно true, cookie доступны только через http
*/
// Сохранение массивов в cookie
setcookie("lang[1]", "PHP");
setcookie("lang[2]", "C#");
setcookie("lang[3]", "JavaScript");

// Установка cookie
$name = "Tom";
$age = 36;
setcookie("name", $name);
// Удаление cookie
setcookie("name", "", time() - 3600);
setcookie("age", $age, time() + 3600); // срок действия - 1 час
echo "<br>Куки установлены<br>";

// Получение cookie
if (isset($_COOKIE["name"])) {
    echo "<br>Name: " . $_COOKIE["name"] . "<br>";
}
if (isset($_COOKIE["age"])) {
    echo "<br>Age: " . $_COOKIE["age"] . "<br>";
}

if (isset($_COOKIE["lang"])) {
    foreach ($_COOKIE["lang"] as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "<br>$name. $value<br>";
    }
}


?>