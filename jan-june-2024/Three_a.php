<?php
function checkGrade($marks) {
    if ($marks >= 60) {
        echo "Grade: First Division";
    } elseif ($marks >= 45 && $marks <= 59) {
        echo "Grade: Second Division";
    } elseif ($marks >= 33 && $marks <= 44) {
        echo "Grade: Third Division";
    } else {
        echo "Grade: Fail";
    }
}

$marks = 50;    
checkGrade($marks);
?>
