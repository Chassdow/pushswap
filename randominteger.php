<?php

function make_random_list(int $size)
{
    $array = array();
    for ($i = 0; $i < $size; $i++) {
        array_push($array, random_int(PHP_INT_MIN, PHP_INT_MAX));
    }
    return ($array);
}

function print_list(array $array)
{
    $max = (count($array) - 1);
    for ($i = 0; $i < $max; $i++) {
        echo $array[$i]." ";
    }
    echo $array[$max];
}

// if (count($argv) > 1) {
//     $size = intval($argv[1], 10);
//     if ($size != 0)
//         print_list(make_random_list($size));
//     else
//         echo "Need a valid integer as [size]\n";
// } else {
//     echo "Usage :\n\nphp random_list_generator.php [size]\n\n -\t[size] integer, dictates list size\n\n";
// }
 

