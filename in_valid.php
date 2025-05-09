<?php
function isValidName($name) {
    return strlen(trim($name)) >= 2;
}

function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

echo "Enter your name: ";
$name = trim(fgets(STDIN));

echo "Enter your email: ";
$email = trim(fgets(STDIN));

if (!isValidName($name)) {
    echo "❌ Name must be at least 2 characters long.\n";
} elseif (!isValidEmail($email)) {
    echo "❌ Invalid email format.\n";
} else {
    echo "✅ Welcome, $name! Your email ($email) is valid.\n";
}
?>
