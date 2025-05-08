<?php
echo "--ENTER YOUR NAME--\n";
$name = trim(fgets(STDIN));

$date = date("l");
echo "Hello, $name! Today is $date\n";
?>
