<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Logger</title>
</head>
<body>

<?php
// Initialize variables
$name = "";
$email = "";
$message = "";

// Helper functions
function isValidName($name) {
    return strlen(trim($name)) >= 2;
}

function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Handle POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');

    if (isValidName($name) && isValidEmail($email)) {
        $entry = "Name: $name | Email: $email\n";
        file_put_contents("log.txt", $entry, FILE_APPEND);
        $message = "✅ Logged successfully!";
        $name = $email = ""; // Clear after success
    } else {
        $message = "❌ Please enter a valid name and email.";
    }
}
?>

<h2>PHP User Logger</h2>

<?php if ($message): ?>
    <p><strong><?= $message ?></strong></p>
<?php endif; ?>

<form action="index.php" method="post">
    <label for="name">Name:</label>    
    <input type="text" name="name" value="<?= htmlspecialchars($name) ?>" placeholder="Enter your name"><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= htmlspecialchars($email) ?>" placeholder="Enter your email"><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
