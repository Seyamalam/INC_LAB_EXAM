<?php
$day = date('l');
if($day == 'Friday') {
    echo "Have a nice weekend!";
} elseif($day == 'Sunday') {
    echo "Have a nice Sunday!";
} else {
    echo "Have a nice day!";
}
?>