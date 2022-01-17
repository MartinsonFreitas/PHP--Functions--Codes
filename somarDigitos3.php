<?php

//array_sum(str_split($number));

$number = 1234567890;
$sum = 0;

do {
    $sum += $number % 10;
}
while ($number = (int) $number / 10);

echo $sum;

?>