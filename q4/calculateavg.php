<?php
function Found_average($array)
{
    return array_sum($array) / count($array);
}
$x = [3, 7, 5, 6, 4];
$average = Found_average($x);
echo "The Average of this array is" . " " . $average;
