
<?php
//include () function:-
$a = 10;
echo ' <br> the value is:'.$a;
include 'my.php';
echo ' <br> the value is:'.$a;

echo '<br><br>';

//require() function :-
$a = 10;
echo ' <br> the value is:'.$a;
require 'my.php';
echo ' <br> the value is:'.$a;
?>