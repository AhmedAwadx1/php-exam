<?php
$input = array(4, 3, 6, 5, 8, 7, 2);
function odd_fun($input)
{
    return ($input & 1);  //number is odd if least significant  bit = 1

}
function even_fun($input)
{
    return !($input & 1);  //number is even if least significant  bit not = 1

}
$odd = array_filter($input, 'odd_fun');
$even = array_filter($input, 'even_fun');
echo "even numbers in this array"."".print_r($even); //even numbers[4,6,8,2]
echo "<br>";
foreach ($input as $key => $value) {
    if ($value % 2 == 0) {
        unset($input[$key]);
        unset($even);
    }
}

print_r($input);//[3,5,7]
print_r($even);//error
print_r($odd);//[3,5,7]
