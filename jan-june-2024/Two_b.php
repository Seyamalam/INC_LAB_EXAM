<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    if ($number == 2) {
        return true;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Example usage:
$number = 29;
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
