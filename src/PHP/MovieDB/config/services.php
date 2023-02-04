<?php
$dependencies = [];
$dependencies[\Slim\App::class] = DI\factory([\SlimFactory\AppFactory::class, 'createFromContainer']);

return $dependencies;