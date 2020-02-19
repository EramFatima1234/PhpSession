<?php

$str = '082307';
echo substr(chunk_split($str, 2, ':'), 0, -1);

?>  