<?php
function isValidName($name) {
    return strlen(trim($name)) >= 2;
}

function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');

    if (isValidName($name) && isValidEmail($email)) {
        $entry = "Name: $name | Email: $email\n";
        file_put_contents("log.txt", $entry, FILE_APPEND);
        header("Location: index.php?success=1");
        exit;
    } else {
        header("Location: index.php?error=1");
        exit;
    }
}
