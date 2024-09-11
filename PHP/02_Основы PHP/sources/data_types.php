<?php
$num = -100;
echo "$num<br />";

$num_10 = 28;
$num_2 = 0b11100;
$num_8 = 034;
$num_16 = 0x1C;
echo "num_10: $num_10<br />";
echo "num_2: $num_2<br />";
echo "num_8: $num_8<br />";
echo "num_16: $num_16<br />";

$a1 = 1.5;
$a2 = 1.3e4;
$a3 = 6E-8;
echo "a1: $a1<br />";
echo "a2: $a2<br />";
echo "a3: $a3<br />";

$foo = true;
$boo = false;
echo "foo: $foo<br />";
echo "boo: $boo<br />";

$a = 10;
$b = 5;
$result = "$a+$b <br />";
echo $result;
$result = '$a+$b<br />';
echo $result;

//$text = "Модель "Apple II"";
$text = "Модель \"Apple II\"";
echo "$text<br />";
$text = 'Модель "Apple II"';
echo "$text<br />";

$a = null;
echo "a: $a<br />";
$a = null;
echo "a: $a";

$id = 123;
echo "<p>id = $id</p>";
$id = "Hello, world!";
echo "<p>id = $id</p>";
?>