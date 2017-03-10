<?php
$sum = 8;
$compliments = [];
$numbers = [];
for ($i = 0; $i < 10000; $i++) {
    $numbers[] = mt_rand(-10, 1000);
}
//$numbers = [2, 5, 9, 1, 3, 4, 4, 3];

foreach ($numbers as $number) {
    $compliment = $sum - $number;
    if (isset($compliments[$compliment])) {
    // dump($number.'+'.$compliment);
    } else {
        $compliments[$compliment] = 1;
    }
}