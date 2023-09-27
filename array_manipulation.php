<?php
function removeEvenNumbers($numbers) {
    $resultArray = array();

    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $resultArray[] = $number;
        }
    }
    print_r($resultArray);
}

$numbers = range(1, 10);
removeEvenNumbers($numbers);
?>
