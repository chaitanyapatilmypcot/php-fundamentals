<?php 

// 1. To Debug you can kill the execution

function dd($value) {

    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

// 2. Function to check the Uri if '/', '/about.php', '/contact.php'

function isUrl($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

?>