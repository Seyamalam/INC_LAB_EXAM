<?php
$car = array(
    "company" => "Honda",
    "model" => "City New",
    101 => 2022,
    102 => 180,
);

// Dumping array information
echo "Array information:<br>";
var_dump($car);
echo "<br><br>";

// Accessing and printing each element through keys
echo "Array elements:<br>";
echo "Value with 'company' key: {$car['company']}<br>";
echo "Value with 'model' key: {$car['model']}<br>";
echo "Value with '101' key: {$car[101]}<br>";
echo "Value with '102' key: {$car[102]}<br>";

//Output
/*
Array information:<br>array(4) {
  ["company"]=>
  string(5) "Honda"
  ["model"]=>
  string(8) "City New"
  [101]=>
  int(2022)
  [102]=>
  int(180)
}
<br><br>Array elements:<br>Value with 'company' key: Honda<br>Value with 'model' key: City New<br>Value with '101' key: 2022<br>Value with '102' key: 180<br>
*/

?>


//Output
/*
The next statement will
print a welcome message
*/