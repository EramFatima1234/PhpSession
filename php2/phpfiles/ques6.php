
<?php

function Palindrome($str)
{
    if (strrev($str) == $str) {
        return 1;
    } else {
        return 0;
    }
}

$name = 'eram';
if (Palindrome($name)) {
    echo 'Yes a Palindrome';
} else {
    echo 'Not a Palindrome';
}
?>  