<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
require __DIR__ . '/../vendor/autoload.php';
use DI\Container;



$container = new Container();
$container->set('view', function() {
    return Twig::create(
		__DIR__ . '/../app/Views',
       []
    );
});

AppFactory::setContainer($container);

$app = AppFactory::create();
$app->add(TwigMiddleware::createFromContainer($app));


include __DIR__ . '/../app/Routes.php';
$app->run();
