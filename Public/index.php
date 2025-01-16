<?php

use App\Controller\Controller;
use App\Controller\ArticleController;

require "../vendor/autoload.php";

$router = new AltoRouter();

$router->map('GET', '/', function () {
    require "../Views/Home/pages/home.php";
});

$router->map('GET', '/liste', function () {
    $test = new ArticleController();
    $test->index();
});

// $router->map('GET', '/test', function () {
//     require "../Views/Home/pages/test.php";
// });

$router->map('GET', '/contact', function () {
    require "../Views/Home/Contact.php";
});

$router->map('GET', '/articles/detail', function () {
    require "../Views/Home/Article/detail.php";
});

$match = $router->match();

// call closure or throw 404 status
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
