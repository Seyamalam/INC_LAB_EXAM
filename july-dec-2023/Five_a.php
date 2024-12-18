<?php
$string = "Hello World! How are you?";
$wordCount = str_word_count($string);
echo "Word count: " . $wordCount;

$var = "";
if(empty($var)) {
    echo "Variable is empty";
}
if($var == "") {
    echo "Variable is empty";
}
?>