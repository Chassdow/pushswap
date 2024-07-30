<?php

$la = array_slice($argv, 1);

function Radix_sort(&$la)
{
    $string = [];
    $bits = 64;
    $lbs = count($la);
    $ra = 'ra';
    $pb = "pb";
    $pa = "pa";
    $lb = [];
    if(count($la) == 1){
        array_push ($string, " ");
    }else{
    for ($i = 0; $i < $bits; $i++) {
        $tail_1 = 0;
        for ($j = 0; $j < $lbs; $j++) {
            if (($la[0] & (1 << $i))) {
                $firstElement = array_shift($la);
                $la[] = $firstElement;
                array_push($string, $ra);
            } else {
                array_unshift($lb, $la[0]);
                array_shift($la);
                $tail_1++;
                array_push($string, $pb);
            }
        }
        for ($j = 0; $j < $tail_1; $j++) {
            array_unshift($la, $lb[0]);
            array_shift($lb);
            array_push($string, $pa);
        }
        
    }
    $size = count($la);
    for ($i = 0; $i < $size && $la[$i] > 0; $i++) {
        array_push($string, $ra);
    }
}
    $stringfinal = implode(" ", $string);
    echo trim($stringfinal) . PHP_EOL;
}

$tri = $la;
sort($tri);

if ($tri === $la) {
    echo "\n";
    return;
}
Radix_sort($la);

