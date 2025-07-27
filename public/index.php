<?php


const BASE_PATH = __DIR__ .'/../';


require BASE_PATH.'Core/functions.php';

spl_autoload_register(function ($class) {
    require base_path("Core/" . $class . '.php');
});


require base_path('Core/router.php');

//commands
//  comand p: you can search for a file in the top instead of looking through your directory and acces perviouslu opened file by doing it twice
// comand s: saves codd
// command /: turns highlighted area into comment or opposite
// sudo nano /etc/hosts: changes hosts in terminal used if i want to make a new project