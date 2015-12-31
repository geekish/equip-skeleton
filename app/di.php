<?php

use Auryn\Injector;
use League\Plates\Engine;
use League\Plates\Extension\Asset;

$di = new Injector;

$di->define(Engine::class, [
    ':directory' => __DIR__ . '/templates'
]);

$di->define(Asset::class, [
    ':path' => dirname(__DIR__) . '/public'
]);

$di->prepare(Engine::class, function (Engine $engine, $di) {
    $engine->loadExtension($di->make(Asset::class));
    return $engine;
});

return $di;
