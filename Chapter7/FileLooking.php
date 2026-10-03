<h2>Чтобы ограничить файл используется функция flock()</h2
    <p>LOCK_SH (или число 1): разделяемая блокировка (чтение файла)</p>
<p>LOCK_EX (или число 2): исключительная блокировка (запись файла)</p>
<p>LOCK_UN (или число 3): для снятия блокировки</p>
<p>LOCK_NB (или число 4): эта константа используется только вместе с одной из предыдущих<br> в битовой маске (LOCK_EX | LOCK_NB), если не надо ждать пока flock() получит блокировку</p>
<?php
$fd = fopen("hello.txt", 'r+') or die("Ошибка открытия файла");
$str = "Hello World!";

if (flock($fd, LOCK_EX)) // установка исключительной блокировки на запись
{
    fseek($fd, 0, SEEK_END); //переход в конец файла
    fwrite($fd, "$str") or die("Ошибка записи"); // запись
    flock($fd, LOCK_UN); // снятие блокировки
}
fclose($fd);

?>
<h2>Если нам надо стереть содержимое файла ftruncate</h2
<?php
$fd = fopen("hello.txt", 'r+') or die("Ошибка");
$str = "Hello World!";
if (flock($fd, LOCK_EX))
{
    ftruncate($fd, 0);
    fwrite($fd, "$str") or die("ошибка записи");
    flock($fd, LOCK_UN);
}
fclose($fd);