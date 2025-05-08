<?php
echo "enter the opration\n";
$num1 = (float)trim(fgets(STDIN));
$opt = trim(fgets(STDIN));
$num2 = (float)trim(fgets(STDIN));

switch ($opt) {
    case "+":
	echo "sol: " . ( $num1+$num2) . "\n";
	break;
    case "-":
	echo "sol: " . ($num1-$num2) . "\n";
	break;
    case "*":
	echo "sol: " . ($num1*$num2) . "\n";
	break;
    case "/":
	if ($num2 != 0) {
	    echo "sol: " . ($num1/$num2) . "\n" ;
	} else {
	    echo "Error: Division by zero!\n";
	}
	break;
    default:
	echo "Invalid operator.\n";
}
?>
