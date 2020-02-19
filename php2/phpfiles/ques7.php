<?php

function callbyvalue($num)
{
    $num = $num + 1;
    echo $num."\n";
}

$n = 1;

callbyvalue($n); //output 2

echo $n; //output 1

echo '<br>';

function callbyreference(&$num)
{
    $num = $num + 1;
    echo $num."\n";
}

$n = 1;

callbyreference($n); //output 2

echo $n; //output 2
