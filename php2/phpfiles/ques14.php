<?php

function Substring($str)
{
    $len = strlen($str);

    echo substr($str, -15, -6), "\n";
}

$str = 'www.example.com/public_html/index.php?q=123';
Substring($str);

?> 