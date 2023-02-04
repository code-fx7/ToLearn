<?php

use Slim\Factory\AppFactory;

error_reporting(error_level: E_ALL);
ini_set(option: 'display_errors', value: 'On');

require_once __DIR__.'/../vendor/autoload.php';
$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->addDefinitions(...definitions: __DIR__.'/config/services.php');
$container = $containerBuilder->build();

$app = AppFactory::create();

require_once __DIR__.'/config/routes.php';
return $app;