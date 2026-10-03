<?php
interface Messenger
{
    function send();
}
interface EmailMessenger extends Messenger
{

}
class SimpleEmailMessenger implements EmailMessenger
{
    function send()
    {
        echo "Отправка сообщения на электронную почту";
    }
}

$outlook = new SimpleEmailMessenger();
$outlook->send();

interface Messenger1
{
    function send($message);
}
function sendMessage(Messenger1 $messenger, $text)
{
    $messenger->send($text);
}
class EmailMessenger1 implements Messenger1
{
    function send($message)
    {
        echo "<br>Отправка сообщения на электронную почту: $message";
    }
}

$outlook1 = new EmailMessenger1();
sendMessage($outlook1, "Hello World");

// Множественное применение интерфейсов
interface Camera
{
    function makeVideo();
    function makePhoto();
}
interface Messenger2
{
    function sendMessage($message);
}
class Mobile implements Camera, Messenger2
{
    function makeVideo() {
        echo "<br>Запись видео<br>";
    }
    function makePhoto() {
        echo "<br>Съемка фотографиии<br>";
    }
    function sendMessage($message) {
        echo "<br>Отправка сообщения $message<br>";
    }
}
$iphone = new Mobile();
$iphone->makePhoto();
$iphone->makeVideo();
$iphone->sendMessage("Я айфон 12");
?>