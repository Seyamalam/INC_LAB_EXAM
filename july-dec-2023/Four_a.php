<?php
function findBiggest($arr) {
    $max = $arr[0];
    foreach($arr as $num) {
        if($num > $max) {
            $max = $num;
        }
    }
    return $max;
}

$numbers = [23, 45, 12, 67, 34];
echo findBiggest($numbers);
?>