<?php
session_start();
$config = require base_path('config.php');
$db = new Database($config['database']);

$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');

if ($username && filter_var($email, FILTER_VALIDATE_EMAIL)) {
  
    $user = $db->query('SELECT * FROM users WHERE email = :email', [
        'email' => $email
    ])->find();

    if ($user) {
     
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['name'];
         $_SESSION['email'] = $user['email'];
    } else {
   
        $db->query('INSERT INTO users(name, email) VALUES(:name, :email)', [
            'name' => $username,
            'email' => $email
        ]);
        $_SESSION['user_id'] = $db->lastInsertId();
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
    }

     

          $progress = $db->query("SELECT level_id, guesses FROM user_progress WHERE user_id = :user_id", [
    'user_id' => $_SESSION['user_id']
])->get();


$_SESSION['guess_counts'] = [];

if (count($progress) > 0) {
 
    $maxLevel = 1;
foreach ($progress as $entry) {
    $_SESSION['guess_counts'][$entry['level_id']] = $entry['guesses'];
    if ($entry['level_id'] > $maxLevel) {
        $maxLevel = $entry['level_id'];
    }
}

$_SESSION['level'] = $maxLevel;
} else {

    $_SESSION['level'] = 0;
}

    header("Location: /users");
    exit;
}


view("notes/users.view.php", [
    'heading' => 'Users',
    'error' => 'Invalid username or email'
]);
