<?php

$config = require base_path('config.php');

$db = new Database($config['database']);
$heading = "Create Note";
$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){

   

    if(Validator::string($_POST['body'])){
        $errors['body'] = "The body must be at least 3 characters long.";
    } 

    if(empty($errors)){
        $db->query('INSERT INTO notes (title, body, user_id) VALUES (:title, :body, :user_id)', [
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'user_id' => 1
        ]);

    }
};

view("notes/create.view.php", [
    'heading' => $heading,
    'errors' => $errors ?? [],
]);