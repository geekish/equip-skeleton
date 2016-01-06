<?php

use Auryn\Injector;
use josegonzalez\Dotenv\Loader;

$di = new Injector;

$di->prepare(Loader::class, function (Loader $loader, $di) {
    $loader->setFilters([function ($data) {
            foreach($data as $key => $value) {
                $data[$key] = str_replace('__ROOT__', dirname(__DIR__), $value);
            }
            return $data;
        }]);
    return $loader;
});

return $di;
