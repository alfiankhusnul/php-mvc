<?php

require_once __DIR__ . '/../vendor/autoload.php';

use AlfianKhusnul\PHP\MVC\App\Router;
use AlfianKhusnul\PHP\MVC\Controller\HomeController;
use AlfianKhusnul\PHP\MVC\Controller\ProductController;

Router::add('GET', '/product/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');

Router::run();