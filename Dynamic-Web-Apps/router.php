<?php 


$routes = require('routes.php');


// dd($uri);



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

//1. ROUTING (passing the current uri and routing to that file)

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);

