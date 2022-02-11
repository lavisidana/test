<?php

echo $_SERVER['REQUEST_URI'];

$routes = ["/" => __DIR__ . '/views/index.view.php', "/contact-us" => __DIR__ . '/views/contact.view.php', "/about-us" => __DIR__ . '/views/about.view.php',];

$requestUri = $_SERVER['REQUEST_URI'];

if(isset($routes[$requestUri])){
    require $routes[$requestUri];
} else{
    echo "no route found";
    echo "Added in dev-sidanalavi";
    echo "Added in newww";
}
