<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = trim($_POST['task']);

    if ($task !== '') {
        
        $tasks = [];
        if (file_exists("data.json")) {
            $json = file_get_contents("data.json");
            $tasks = json_decode($json, true) ?? [];
        }

        $tasks[] = $task;
      
        file_put_contents("data.json", json_encode($tasks, JSON_PRETTY_PRINT));
    }
}

header("Location: index.php");
exit;
?>
