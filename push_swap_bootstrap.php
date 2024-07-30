<?php

include_once "randominteger.php";

// $la = [2, 4, 6, 8, 10];

// fusionner($lb);

// print_r($la);

// function fusionner( $lb)
// {
//     $lb = $la;
//     $i = $j = 0;

//      while ($i < count($la) && $j < count($lb)) {
//         if ($la[$i] < $lb[$j]) {
//             $i++;
//         } else {
//             array_splice($la, $i, 0, $lb[$j]); 
//             $i++;
//             $j++;
//         }
//     }

//     while ($j < count($lb)) {
//         $la[] = $lb[$j];
//         $j++;
//     }
// }


//   void radix_sort( Type *const array, int const n, int const bits ) {
// 	Type queue_0[n];
// 	Type queue_1[n];

// 	for ( int i = 0, mask = 1; i < bits; ++i, mask <<= 1 ) {
// 		int tail_0 = 0;
// 		int tail_1 = 0;

// 		for ( int i = 0; i < n; ++i ) {
// 			if ( (array[i] & mask) == 0 ) {
// 				queue_0[tail_0] = array[i];
// 				++tail_0;
// 			} else {
// 				queue_1[tail_1] = array[i];
// 				++tail_1;
// 			}
// 		}

// 		int i = 0;

// 		for ( int j = 0; j < tail_0; ++i, ++j ) {
// 			array[i] = queue_0[j];
// 		}

// 		for ( int j = 0; j < tail_1; ++i, ++j ) {
// 			array[i] = queue_1[j];
// 		}
// 	}
// }



//$la = make_random_list(100000);



// function test(){
//     $la = [4,2,1];
//     $lb =  [5,3,9];

//     if(!empty($lb)){
//         array_unshift($la, $lb[0]);
//         array_shift($lb);
//         echo "pa";
//     }
//     print_r($lb);
//     print_r($la);
// }
// test();


function rra() {
    $la = [3,2,1,9,3];
    if (count($la) >= 2) {
     
        $lastElement = array_unshift($la, $la[0]);

        $la[] = $lastElement;
    }
    print_r($la);
}
rra();





// function sa($la)
// {
//     if (count($la) >= 2) {    
//         $temp = $la[0];   
//         $la[0] = $la[1];
//         $la[1] = $temp;
//     }
// }


// function sb($lb)
// {
//     if (count($lb) >= 2) {
//         $temp = $lb[0];
//         $lb[0] = $lb[1];
//         $lb[1] = $temp;
//     }
// }


function ra($la)
{

    if (count($la) >= 2) {

        $firstElement = array_shift($la);

        $la[] = $firstElement;
    }
}


// function rb($lb) {

//     if (count($lb) >= 2) {

//         $firstElement = array_shift($la);

//         $lb[] = $firstElement;
//     }
// }

function pb($la, $lb)
{
    if (!empty($la)) {
        array_unshift($lb, $la[0]);
        array_shift($la);
        echo "pb";
        return $la;
    }
}


function pa($lb, $la)
{
    if (!empty($lb)) {
        array_unshift($la, $lb[0]);
        array_shift($lb);
        echo "pa";
    }
}


//ra, pa, pb





<?php
$la = array_slice($argv, 1);
function Radix_sort(&$la)
{
    $string = [];
    $bits = 64;
    $lbs = count($la);
    $lb = [];
    for ($i = 0; $i < $bits; $i++) {
        $tail_1 = 0;
        for ($j = 0; $j < $lbs; $j++) {
            if (($la[0] & (1 << $i))) {
                $firstElement = array_shift($la);
                $la[] = $firstElement;
                array_push($string, "ra");
            } else {
                array_unshift($lb, $la[0]);
                array_shift($la);
                $tail_1++;
                array_push($string, "pb");
            }
        }
        for ($j = 0; $j < $tail_1; $j++) {
            array_unshift($la, $lb[0]);
            array_shift($lb);
            array_push($string, "pa");
        }
    }
    for ($i = 0; $la[$i] > 0; $i++) {
        array_push($string, "ra");
    }
    $stringfinal = implode(" ", $string);
    echo trim($stringfinal) . PHP_EOL;
    print_r($la);
}
Radix_sort($la);





























<?php

include_once "randominteger.php";

function Radix_sort($la)
{
    $bits = 64;
    $lbs = count($la);
    $lb = [];
    for ($i = 0; $i < $bits; $i++) {
        $tail_1 = 0;
        for ($j = 0; $j < $lbs; $j++) {
            if (($la[0] & (1 << $i))) {
                $firstElement = array_shift($la);
                $la[] = $firstElement;
                echo "ra";
            } else {
                array_unshift($lb, $la[0]);
                array_shift($la);
                $tail_1++;
                echo "pb";
            }
        }
        for ($j = 0; $j < $tail_1; $j++) {
            array_unshift($la, $lb[0]);
            array_shift($lb);
            echo "pa";
        }
        
    }
    for ($i = 0; $la[$i] > 0; $i++) {
        echo "ra ";
    }
    print_r($la);
}


$la = make_random_list(10);

Radix_sort($la);