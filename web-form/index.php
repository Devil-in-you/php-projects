<!DOCTYPE html>
<html>
<head>
    <title>PHP Logger</title>
</head>
<body>

<h2>PHP User Logger</h2>

<?php
if (isset($_GET['success'])) {
    echo "<p style='color: green;'>✅ Logged successfully!</p>";
} elseif (isset($_GET['error'])) {
    echo "<p style='color: red;'>❌ Please enter valid name and email.</p>";
}
?>

<form action="handle.php" method="post">
    <label>Name: <input type="text" name="name" required></label><br><br>
    <label>Email: <input type="email" name="email" required></label><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
