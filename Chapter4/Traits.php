<?php

// Traits - представляют группу методов
// позволяют определять блоки функционала и
// многократно повторно их использовать
// (могут содержать только статические и нестатические методы)

trait Printer
{
    public function printSimpleText($text) { echo "<br>$text<br>" ;}
    public function printHeaderText($text) { echo "<br>$text<br>" ;}
}
class Message
{
    use Printer;
}
$myMessage = new Message();
$myMessage->printSimpleText("Hello PHP-8");
$myMessage->printHeaderText("Hello World!");

?>