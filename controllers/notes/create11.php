<?php



$config = require base_path('config.php');
$db = new Database($config['database']);


session_start();
$errors = [];

$levelId = 11;

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
$levelId = 11;

if (!isset($_SESSION['guess_counts'])) {
    $_SESSION['guess_counts'] = [];
}

if (!isset($_SESSION['guess_counts'][$levelId])) {
    $_SESSION['guess_counts'][$levelId] = 0;
}

// Always increment guess count when form is submitted
$_SESSION['guess_counts'][$levelId]++;
$guesses = $_SESSION['guess_counts'][$levelId];

//answer hibiscus

if ($guess !== 'hibiscus') {
        $errors['body'] = 'Try again.';
    }

   if (strlen($guess) < 8) {
    $errors['body'] = 'Your answer is too short.';
} elseif (strlen($guess) > 8) {
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
        if ($guess === 'hibiscus') {
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



view("notes/create.view11.php",[
'heading' => '&#x1F33B &#x1F339 🪷 Level 11 Theme: Flowers &#x1F33A &#x1F33C &#x1F338',
'errors' => $errors
]);
