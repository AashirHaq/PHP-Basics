<?php
    $user = ['name' => 'Sohaib', 'email' => 'sohaib@gmail.com', 'age' => 22];
    
    $user = serialize($user);
    setcookie('user', $user, time() + (86400 * 30));
    
    $user = unserialize($_COOKIE['user']);
    print_r($user);
