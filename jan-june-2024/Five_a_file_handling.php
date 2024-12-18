<?php
$content = "Hello World! This is a test file.\n";
$content .= "Written on: " . date('Y-m-d H:i:s');

$file = 'test.txt';
file_put_contents($file, $content);

$read_content = file_get_contents($file);

echo "Content read from file:\n";
echo $read_content;
?>