<?php

$fruits = array("Apple", "Banana", "Orange");
$fruits = ["Apple", "Banana", "Orange"];

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
$age = ["Peter"=>35, "Ben"=>37, "Joe"=>43];

$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$color = array('white', 'green', 'red');

echo implode(", ", $color) . "\n";

foreach($color as $c) {
    echo $c . "\n";
}
?>