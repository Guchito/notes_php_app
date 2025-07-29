<?php
$config = require('config.php');
$db = new Database($config['database']);
// Start the session
$heading = "Note";
$currentUserId = 1;

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    abort(404);
}

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

require "views/notes/show.view.php";