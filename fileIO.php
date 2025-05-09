<?php
echo "Enter your name: ";
$name = trim(fgets(STDIN));

echo "Enter your email: ";
$email = trim(fgets(STDIN));

if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($name) > 2) {
    $entry = "Name: $name | Email: $email\n";
    file_put_contents("log.txt", $entry, FILE_APPEND);
    echo "✅ Logged successfully!\n";
} else {
    echo "❌ Invalid name or email.\n";
}

echo "\nCurrent log entries:\n";
echo file_get_contents("log.txt");
?>
