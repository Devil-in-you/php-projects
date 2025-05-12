<?php
$tasks = [];

if (file_exists("data.json")) {
    $json = file_get_contents("data.json");
    $tasks = json_decode($json, true) ?? [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Manager</title>
</head>
<body>
    <h1>📋 Task Manager</h1>

    <form action="create.php" method="POST">
        <input type="text" name="task" placeholder="New Task" required>
        <button type="submit">Add Task</button>
    </form>

    <ul>
        <?php foreach ($tasks as $index => $task): ?>
            <li>
                <?= htmlspecialchars($task) ?>
                <a href="delete.php?index=<?= $index ?>">❌</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
