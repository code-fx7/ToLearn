<?php


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

# $app->get('/hello/{name}'
$app->get('', function (Request $request, Response $response, array $args) {
    #$name = $args['name'];
    $response->getBody()->write("Hello World");
    return $response;
});

$app->run();


echo "Hallo Februar";