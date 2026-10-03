<h2>Перемещение файла</h2>
<h3>Функция rename()</h3>
<?php
if (!rename("hello.txt", "subdir/hello.txt"))
    echo "Ошибка перемещения файла";
else echo "Файл перемещен";
?>
<h2>Копирование файла</h2>
<h3>Функция copy()</h3>
<?php
if (copy("hello.txt", "hello_copy.txt"))
    echo "Копия файла создана";
else echo "Ошибка копирования файла";
?>
<h2>Удаление файла</h2>
<h3>Функция unlink</h3>
<?php
if (unlink("hello_copy.txt"))
    echo "Файл удален";
else echo "Ошибка при удалении файла";
?>
<h2>Создание каталога</h2>
<h3>Функция mkdir()</h3>
<?php
if(mkdir("newdir"))
    echo "Каталог создан";
else
    echo "Ошибка при создании каталога";
?>
<h2>Удаление каталога</h2>
<h3>Функция rmdir()</h3>
<?php
if(rmdir("newdir"))
    echo "Каталог удален";
else
    echo "Ошибка при удалении каталога";
?>
<h2>Операции с каталогами</h2>
<h3>Для получения пути к текущему каталогу используется getcwd()</h3>
<?php
$path = getcwd();
echo $path;
?>
<h3>Функция opendir() открывает определенный каталог</h3>
<h3>Закрыть closedir()</h3>
<h3>Для считывания применяется функция readdir()</h3>
<?php
$dir = getcwd(); //получаем текущей каталог
if(is_dir($dir)) //ялвялется ли путь каталогом
{
    if ($dh = opendir($dir)) //открываем каталог
    {
        //считываем по одному файл или подктаалогу
        //пока не дойдем до конца
        while (($file = readdir($dh)) !== false)
            //пропускаем символы .. и .
        {
            if($file != "." || $file != "..") continue;
                //если ктаалог или файл
            if(is_dir($file)) echo "каталог: $file <br>";
            else echo "файл: $file <br>";
        }
        closedir($dh);//Закрываем
    }
}
?>