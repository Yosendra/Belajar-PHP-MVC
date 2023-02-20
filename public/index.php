<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Yosendra\Belajar\PHP\MVC\App\Router;
use Yosendra\Belajar\PHP\MVC\Controller\HomeController;
use Yosendra\Belajar\PHP\MVC\Controller\ProductController;
use Yosendra\Belajar\PHP\MVC\Middleware\AuthMiddleware;

Router::add("GET", "/", HomeController::class, "index");
Router::add("GET", "/hello", HomeController::class, "hello", [AuthMiddleware::class]);
Router::add("GET", "/world", HomeController::class, "world", [AuthMiddleware::class]);
Router::add("GET", "/about", HomeController::class, "about");
Router::add("GET", '/product/([A-Za-z0-9]*)/category/([A-Za-z0-9]*)', ProductController::class, "category");

Router::run();