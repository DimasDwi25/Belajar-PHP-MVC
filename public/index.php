<?php 

require_once __DIR__. "/../vendor/autoload.php";

use ProgrammerZamanNow\Belajar\PHP\MVC\App\Router;
use ProgrammerZamanNow\Belajar\PHP\MVC\Controller\HomeController;
use ProgrammerZamanNow\Belajar\PHP\MVC\Controller\ProductController;
use ProgrammerZamanNow\Belajar\PHP\MVC\Middleware\AuthMiddleware;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/about', HomeController::class, 'about', [AuthMiddleware::class]);

Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');


Router::run();

?>