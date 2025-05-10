<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="name">Name:</label>    
        <input type="text" name="name" placeholder="Enter your name"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter your email"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
function isValidName($name) {
    return strlen(trim($name)) >= 2;
}

function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}



$name = $_POST['name'];
$email = $_POST['email'];

if (isValidName($name) && isValidEmail($email)) {
    $entry = "Name: $name | Email: $email\n";
    file_put_contents("log.txt", $entry, FILE_APPEND);
    echo "✅ Logged successfully!\n";
} 

?>
