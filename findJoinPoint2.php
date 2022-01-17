<?php

function getDigitsSum($x) {
        $sum = 0;
        while ($x != 0)
        {
            $sum += $x % 10;
            $x /= 10;
        }

        return $sum;
    }

function findJoinPoint($seq1, $seq2)
{
    while ($seq1 != $seq2)
    {
        if ($seq1 < $seq2)
        {
            if ($seq1 == 0)

                return -1; // no chance to join, seq1 is 0

            $seq1 += getDigitsSum($seq1);
        }
        else if ($seq2 < $seq1)
        {
            if ($seq2 == 0)

                return -2; // no chance to join, seq2 is 0

            $seq2 += getDigitsSum($seq2);
        }
    }

    return $seq1;
}

echo findJoinPoint(57, 78). "<br>";
echo findJoinPoint(471, 480). "<br>";

?>