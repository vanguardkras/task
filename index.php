<?php

$max = 50;

for ($value = 1; $value <= $max; $value++) {

    $result = $value;

    $isDivisibleToFive = $value % 5 === 0;
    $isDivisibleToSeven = $value % 7 === 0;

    if ($isDivisibleToFive || $isDivisibleToSeven) {
        $result = '';
    }

    if ($isDivisibleToFive) {
        $result .= 'да';
    }

    if ($isDivisibleToSeven) {
        $result .= 'нет';
    }

    echo $result;
    echo PHP_EOL;
}