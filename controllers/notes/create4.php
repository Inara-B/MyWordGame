<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

session_start();
$errors = [];

$levelId = 4;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Reset guess count when the page is loaded (fresh)
    if (!isset($_SESSION['guess_counts'])) {
        $_SESSION['guess_counts'] = [];
    }

    $_SESSION['guess_counts'][$levelId] = 0;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$body = trim($_POST['body'] ?? '');
$guess = strtolower($body);
$levelId = 4;

if (!isset($_SESSION['guess_counts'])) {
    $_SESSION['guess_counts'] = [];
}

if (!isset($_SESSION['guess_counts'][$levelId])) {
    $_SESSION['guess_counts'][$levelId] = 0;
}

// Always increment guess count when form is submitted
$_SESSION['guess_counts'][$levelId]++;
$guesses = $_SESSION['guess_counts'][$levelId];
//answer require

if ($guess !== 'require') {
        $errors['body'] = 'Try again.';
    }

  if (strlen($guess) < 7) {
    $errors['body'] = 'Your answer is too short.';
} elseif (strlen($guess) > 7) {
    $errors['body'] = 'Your answer is too long.';
}

    // If all is good
      if (empty($errors)) {

     $userId = $_SESSION['user_id'] ?? null;

      if (!$userId) {
    header("Location: /");
    exit;
      }
      
 // Insert into notes
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $body,
            'user_id' => $userId
        ]);

    

        //If correct guess
        if ($guess === 'require') {
        if (!isset($_SESSION['level']) || $_SESSION['level'] < $levelId) {
        $_SESSION['level'] = $levelId;
    }

        $db->query("INSERT INTO user_progress (user_id, level_id, guesses)
                    VALUES (:user_id, :level_id, :guesses)
                    ON DUPLICATE KEY UPDATE guesses = :guesses", [
            'user_id' => $userId,
            'level_id' => $levelId,
            'guesses' => $guesses
        ]);

       header('Location: /end');
        exit;
    }
     
    }

    
}

view("notes/create.view4.php",[
'heading' => '&#x1F4BB &#x1F4BE &#x1F4D1 Level 4 Theme: PHP terms &#x1F50B &#x1F50C &#x1F5A5',
'errors' => $errors
]);