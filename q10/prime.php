<?php
function prime($num){
    if ($num==1) {
        return false;
    }for ($i=2; $i <= $num/2; $i++) { 
        if ($num%$i==0) {
            return false;
        }
    }
    return true; 
}
$num=225;

if (prime($num) == 1)
    echo "Prime";
else
    echo "Not Prime";



?>