<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$notes = $db->query('SELECT * FROM notes');

view("index.view.php", [
    'heading' => 'Welcome to My Word Guessing Game!',
]);


