<?php

$fp = fopen('abc.txt', 'a');
fwrite($fp, ' this is additional text ');
fwrite($fp, 'appending data');
fclose($fp);
echo 'File appended successfully';
