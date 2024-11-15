<?php
function Get_max($arr)
{
    $max = $arr[0];
    for ($i = 0; $i < count($arr)-1; $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return ['max' => $max];
}
$arr = [10,30,20];
$result = Get_max($arr);
echo "Maximum number of the given array: " . $result['max'];
