<?php

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);    //sort

$arrlength = count($numbers);
for ($x = 0; $x < $arrlength; ++$x) {
    echo $numbers[$x];
    echo '<br>';
}
echo '<br>'; echo '<br>'; echo '<br>';

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);   //rsort

$arrlength = count($numbers);
for ($x = 0; $x < $arrlength; ++$x) {
    echo $numbers[$x];
    echo '<br>';
}
echo '<br>'; echo '<br>'; echo '<br>';

$age = array('eram' => '35', 'sadaf' => '37', 'sahil' => '43');
asort($age);       //asort

foreach ($age as $x => $x_value) {
    echo 'Key='.$x.', Value='.$x_value;
    echo '<br>';
}
echo '<br>'; echo '<br>'; echo '<br>';

$age = array('eram' => '35', 'sadaf' => '37', 'sahil' => '43');
ksort($age);    //ksort

foreach ($age as $x => $x_value) {
    echo 'Key='.$x.', Value='.$x_value;
    echo '<br>';
}
echo '<br>'; echo '<br>'; echo '<br>';

$age = array('eram' => '35', 'sadaf' => '37', 'sahil' => '43');
arsort($age);    //arsort

foreach ($age as $x => $x_value) {
    echo 'Key='.$x.', Value='.$x_value;
    echo '<br>';
}
echo '<br>'; echo '<br>'; echo '<br>';

$age = array('eram' => '35', 'sadaf' => '37', 'sahil' => '43');
krsort($age);    //krsort

foreach ($age as $x => $x_value) {
    echo 'Key='.$x.', Value='.$x_value;
    echo '<br>';
}
