<?php
function calculate($num1, $num2, $operator) {
    switch ($operator) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        case "/":
            return $num2 != 0 ? $num1 / $num2 : "Error: Division by zero!";
        default:
            return "Invalid operator!";
    }
}

echo "Enter first number:\n";
$num1 = (float)trim(fgets(STDIN));

echo "Enter operation (+, -, *, /):\n";
$op = trim(fgets(STDIN));

echo "Enter second number:\n";
$num2 = (float)trim(fgets(STDIN));

$result = calculate($num1, $num2, $op);
echo "Result: $result\n";
?>
