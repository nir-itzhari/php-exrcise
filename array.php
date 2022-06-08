<?php

function arrayNumber($maxNumber)
{
    $arr = [];
    $sum = 0;
    $avg = 0;

    if ($maxNumber === null) {
        $maxNumber = 20;
    }
    echo "Array of numbers: ";
    for ($i = 1; $i <= $maxNumber; $i++) {
        $arr[] = $i;
        echo $i . " ";
    }

    echo "<br>";
    echo "<br>";

    echo "Sum: ";
    foreach ($arr as $value) {
        $sum += $value;
    }

    echo $sum . "<br>";
    echo "<br>";
    echo "Avg: ";
    $avg = $sum / count($arr);

    echo $avg;
}
