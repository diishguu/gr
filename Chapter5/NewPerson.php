<?php
namespace base; // обращение к пространству имен
class Person
{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
}
?>