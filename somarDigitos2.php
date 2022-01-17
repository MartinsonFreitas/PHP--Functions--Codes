<?php

$n = 12345105;
$nstr = $n . "";

$sum = 0;

    for ($i = 0; $i < strlen($nstr); ++$i)
        {
            $sum += $nstr[$i];
        }

echo $sum;

?>

