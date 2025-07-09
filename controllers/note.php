<?php
$config = require('config.php');
$db = new Database($config['database']);
// Start the session
$heading = "Note";

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']])->fetch();

    if (!$note) {
        abort(404);
    }

    $currentUserId = 1;

    if ($note['user_id'] !== $currentUserId) {
        abort(403);
    }

require "views/note.view.php";