<?php

$string = 'The brown fox';
$insert = 'quick';
$insert_pos = 4;
$new_string = substr_replace($string, $insert.' ', $insert_pos, 0);
echo $new_string."\n";
