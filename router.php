<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/'         => 'controllers/index.php',
    '/list'     => 'controllers/list.php',
    '/details'  => 'controllers/details.php',
    '/login'    => 'views/auth/login.php',
    '/register' => 'views/auth/register.php',
];

function routeToController ( $uri, $routes ) {
    if (array_key_exists( $uri, $routes )) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}


function abort ( $code ) {
    http_response_code( $code );
    require "views/partials/{$code}.php";
    die();
}


routeToController( $uri, $routes );