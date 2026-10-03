<h2>Введение в регуляргын выражения</h2>
<?php
$str = 'grkso';
$str=preg_replace('#gr#', '!', 'grkso');
echo $str
?>
<h2>Операторы повторения симвоов в регулярках</h2>
<?php
$str= 'aa aba abba abbba abca abea';
$str=preg_replace('#a#', 'b', 'aa aba abba abba abca abea');
echo $str;
?>
