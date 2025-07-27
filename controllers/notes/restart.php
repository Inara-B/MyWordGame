<?php
session_start();
$_SESSION['level'] = 0; // or session_unset(), session_destroy() for full reset
header('Location: /'); // go back to your start page
exit;
