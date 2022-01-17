<?php

function closestToZero(array $ts)
{
    if (count($ts) === 0) return 0;

    $closest = $ts[0];

    foreach ($ts as $d)
    {
        $absD = abs($d);
        $absClosest = abs($closest);
        if ($absD < $absClosest)
        {
            $closest = $d;
        }
        else if ($absD === $absClosest && $closest < 0)
        {
            $closest = $d;
        }
    }

    return $closest;
}

$ts = [7,-10, 13, 8, 4, -7.2, -12, -3.7, 3.5, -9.6, 6.5, -1.7, -6.2, 7];
// Result: -1.7
echo "Result: " . closestToZero($ts) . "<br>";

$ts = [5, 6, 7, 9 , 2, - 2];
// Result: 2
echo "Result: " . closestToZero($ts) . "<br>";

$ts = [];
// Result: 0
echo "Result: " . closestToZero($ts) . "<br>";

?>
