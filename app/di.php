<?php

use Auryn\Injector;
use League\Plates\Engine;

$di = new Injector;

$di->define(Engine::class, [
    ':directory' => __DIR__ . '/templates'
]);

return $di;
