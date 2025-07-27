<?php

session_start();
$config = require base_path('config.php');
$db = new Database($config['database']);

$userId = $_SESSION['user_id'] ?? null;
$username = $_SESSION['username'] ?? null;
$email = $_SESSION['email'] ?? null;
$level = $_SESSION['level'] ?? 1;
$progress = [];

if ($userId) {
    $progress = $db->query("SELECT levels.level_name, user_progress.guesses, user_progress.completed_at
        FROM user_progress
        JOIN levels ON levels.id = user_progress.level_id
        WHERE user_progress.user_id = :user_id", [
        'user_id' => $userId
    ])->get();
}

view("notes/users.view.php", [
    'heading' => 'User Progress',
    'username' => $username,
    'email' => $email,
    'level' => $level,
    'progress' => $progress
]);


