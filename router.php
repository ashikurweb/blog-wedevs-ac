<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/'         => 'controllers/index.php',
    '/list'     => 'controllers/list.php',
    '/details'  => 'controllers/details.php',
    '/login'    => 'views/auth/login.php',
    '/register' => 'views/auth/register.php',
    '/logout'   => 'controllers/auth/logout.php',
    '/admin'    => 'controllers/backend/index.php', 
    '/admin/blog-create' => 'controllers/backend/blog-create.php',
    '/admin/user-profile' => 'controllers/backend/user-profile.php',
    '/admin/settings' => 'controllers/backend/settings.php',
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