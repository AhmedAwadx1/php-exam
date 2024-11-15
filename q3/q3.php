<?php
/*ASC*/
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array) - 1; $j++) {
        if ($array[$j + 1] < $array[$j]) {
            $temp = $array[$j + 1];
            $array[$j + 1] = $array[$j];
            $array[$j] = $temp;
        }
    }
}

echo "ترتيب تصاعدي"."  ".print_r($array);




