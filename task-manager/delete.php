<?php
if (isset($_GET['index'])) {
    $index = (int) $_GET['index'];

    if (file_exists("data.json")) {
        $json = file_get_contents("data.json");
        $tasks = json_decode($json, true) ?? [];

       
        if (isset($tasks[$index])) {
            unset($tasks[$index]);
            $tasks = array_values($tasks);
            file_put_contents("data.json", json_encode($tasks, JSON_PRETTY_PRINT));
        }
    }
}

header("Location: index.php");
exit;
?>
