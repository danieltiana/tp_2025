<?php
require "../vendor/autoload.php";
$router = new AltoRouter();

$router->map('GET', '/', function () {
    require "../Views/Home/home.php";
});

$router->map('GET', '/contact', function () {
    require "../Views/Home/Contact.php";
});

$match = $router->match();

// call closure or throw 404 status
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
