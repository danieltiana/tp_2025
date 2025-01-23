<?php
session_start();
use App\Controller\ArcticleController;
use App\Controller\HomeController;

require "../vendor/autoload.php"; 
$router = new AltoRouter();


$router->map( 'GET', '/',[HomeController::class,"index"]) ;
$router->map( 'GET', '/admin',[ArcticleController::class,"index"]) ;
$router->map( 'GET', '/admin/article',[ArcticleController::class,"article"]) ;
$router->map( 'POST', '/admin/article/save',[ArcticleController::class,"nouveau"]) ;
$router->map( 'GET', '/admin/nouveau',[ArcticleController::class,"create"]) ;
$router->map( 'GET', '/articles',[ArcticleController::class,"Tous"]) ;

$match = $router->match();
// var_dump($match);

// call closure or throw 404 status
if( is_array($match) && class_exists($match['target'][0]) && method_exists($match['target'][0],$match['target'][1]))
 {
	// call_user_func_array( $match['target'], $match['params'] );
	$controlleur = new $match['target'][0];
	call_user_func([$controlleur, $match['target'][1]]);
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}


	// require  '../Views/Home/Login.php';
// });
// $router->map( 'GET', '/admin/articles', function() {
// 	$articles = new ArcticleControlleur();
// 	$articles -> index(); 
// });
// $router->map( 'GET', '/Admin/Article/AjoutArticle', function() {
// 	$articles = new ArcticleControlleur();
// 	$articles -> create(); 
// });