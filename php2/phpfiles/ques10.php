<?php

$number = 123;
printf('With 2 decimals: %1$.2f
<br>With no decimals: %1$u', $number);
$str = 'Hello world!';
echo'<br><br>';
echo $str;
echo '<br>What a nice day!';
echo'<br> <br>'.$number; $text = sprintf('%f', $number);
echo'<br> <br> '.$text;
$num2 = 2307;
vprintf('%f %d ', array($number, $num2));
$file = fopen('test.txt', 'w');
vfprintf($file, '%f%f', array($num1, $num2));
$txt1 = vsprintf('%f%f', array($number, $num2));
echo'<br> <br> '.$txt1;
