<?php
$scene = array('white', 'green', 'red', 'blue', 'dark');
$text = "The memory of that scene for me resembles an edge of film perpetually frozen at that point: honorary pathway, the green yard, the white house, the heavy sky.";

foreach($scene as $color) {
    if(strpos($text, $color) !== false) {
        echo "$color is found in the text\n";
    }
}
?>