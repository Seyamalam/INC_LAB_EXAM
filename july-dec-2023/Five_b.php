<?php
function printNumbers($n) {
    if($n > 0) {
        echo $n . " ";
        printNumbers($n - 1);
    }
}
printNumbers(10);
?>