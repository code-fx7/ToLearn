<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/', function(Request $request, Response $response)
{
    $response->getBody()->write(string: 'Hallo Slim');
    return $response;
}
);