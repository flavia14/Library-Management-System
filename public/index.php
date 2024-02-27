<?php

declare(strict_types=1);

use App\Controller\AuthorController;
use App\Service\AuthorService;
use Bramus\Router\Router;

require dirname(__DIR__) . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

require '../Database/ConnectDatabase.php';

$router = new Router();

$router->set404(function (): void {
    header('HTTP/1.1 404 Not Found');
    echo 'Resource not found.';
});

$authorService = new AuthorService();
$authorController = new AuthorController($router, $authorService);

$router->run();
