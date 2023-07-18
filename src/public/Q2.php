<?php
$arrayList = [
	[3, 5, 1, 0, 9, 12],
	[1, 2, 14, 10, 9, 1],
	[0, 3, 4, 10, 20, 2]
];

foreach ($arrayList as $array) {
    $maxMultipleOfThree = null;
    foreach ($array as $value) {
        if ($value % 3 === 0) {
            if ($maxMultipleOfThree === null || $value > $maxMultipleOfThree) {
                $maxMultipleOfThree = $value;
                // var_dump($maxMultipleOfThree);
            }
        }
    }
    echo $maxMultipleOfThree . "<br>";
}