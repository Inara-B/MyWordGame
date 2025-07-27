<?php
session_start();
$config = require base_path('config.php');
$db = new Database($config['database']);

$userId = $_SESSION['user_id'] ?? null;

if (!$userId) {
    // Not logged in, redirect to login page
    header('Location: /users');
    exit;
}

// Delete user progress first
$db->query('DELETE FROM user_progress WHERE user_id = :user_id', ['user_id' => $userId]);

// Delete user notes 
$db->query('DELETE FROM notes WHERE user_id = :user_id', ['user_id' => $userId]);

// Delete user account
$db->query('DELETE FROM users WHERE id = :user_id', ['user_id' => $userId]);

// Clear session and log user out
session_unset();
session_destroy();

// Redirect to homepage
header('Location: /'); 
exit;
