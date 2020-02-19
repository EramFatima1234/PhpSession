<?php

$time1 = new DateTime('2012-11-04 05:04:00', new DateTimeZone('GMT'));
$time1->setTimezone(new DateTimeZone('IST'));

$istTime1 = $time1->format('Y-m-d\TH:i:s');
$timestamp1 = strtotime($istTime1);

$time2 = new DateTime('2012-11-05 10:44:00', new DateTimeZone('IST'));
$istTime2 = $time2->format('Y-m-d\TH:i:s');
$timestamp2 = strtotime($istTime2);

echo 'timestamp for 2012-11-04 05:04:00 => '.$timestamp1.'<br>';
echo 'timestamp for 2012-11-05 10:44:00 => '.$timestamp2.'<br>';

$diff = abs($timestamp1 - $timestamp2); // to return positive difference only

echo 'Difference is : '.$diff.'<br>';

echo 'Final date is : '.date('Y-m-d H:i:s', $diff);
