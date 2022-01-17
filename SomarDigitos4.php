<?php

$num = 525;
$sum = 0;

while ($num > 0)
{
    $sum= $sum + ($num % 10);
    $num= $num / 10;
}
echo "Soma = " . $sum;

?>
