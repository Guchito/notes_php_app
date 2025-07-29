<?php
$config = require base_path('config.php');
$db = new Database($config['database']);
// Start the session

$notes = $db->query("SELECT * FROM notes WHERE user_id = 1")->all();



view("notes/index.view.php", [
    'heading' => "My notes",
    'notes' => $notes
]);