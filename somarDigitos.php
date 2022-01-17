<?php
echo"----Sum of digit using php----";
echo"<br/ >";

$num=-9876511;
$sum=0;
$rem=0;

    for($i=0;$i<=$num;$i++)
        {
            $rem=$num%10;
            $sum=$sum+$rem;
            $num=$num/10;
        }

echo "The sum of digit 98765 is ".$sum;

?>