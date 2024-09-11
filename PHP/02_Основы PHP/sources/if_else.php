<?php
echo "First if else: ";
$a = 4;
if ($a > 0)
{
    echo "Переменная a больше нуля!";
}
else
{
    echo "Переменная a меньше нуля!";
}
echo "<br />Second if else: ";
$a = -1;
if ($a > 0)
    echo "Переменная a больше нуля!";
else
    echo "Переменная a меньше нуля!";
echo "<br />First elseif: ";
$a = 5;
if ($a > 0)
{
    echo "Переменная a больше нуля!";
}
elseif ($a < 0)
{
    echo "Переменная a меньше нуля!";
}
else
{
    echo "Переменная a равна нулю!";
}
echo "<br />Конец работы программы!";
?>