<?php 

//1. ROUTING (passing the current uri and routing to that file)

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// dd($uri);

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/contact.php',
];

function abort($code) {

    http_response_code($code);

    require "views/${code}.php";

    echo "Page Not Found!";

    die();
}

function routeToController($uri, $routes) {

    if (array_key_exists($uri, $routes)) {

        require $routes[$uri];
    
    } else {
    
        abort(404);
    
    }

}

routeToController($uri, $routes);

