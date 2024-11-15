<?php
function contain_string($string, $sub_string)
{
    $pattern = "/$sub_string/";
    return preg_match($pattern, $string);
}
$main_string = "This is a sample string to test";
$search_string = "sample";
if (contain_string($main_string, $search_string)) {
    echo "The string '$search_string' is found in '$main_string'";
} else {
    echo "The string '$search_string' is not found in '$main_string'";
}
