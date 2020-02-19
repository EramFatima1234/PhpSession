<?php

$arrData = array(3, 5, 5, 8, 7, 6, 3, 1, 2, 8, 9);

$out = array();

foreach ($arrData as $item) {
    if (isset($out[$item])) {
        ++$out[$item];
    } else {
        $out[$item] = 1;
    }
}

foreach ($out as $item => $count) {
    echo $item.' '.$count.'<br />';
}

echo count($out);
