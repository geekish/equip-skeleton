<?php

use Auryn\Injector;
use Spark\Application;

Application::build(require __DIR__ . '/di.php')
    ->setConfiguration(require __DIR__ . '/config.php')
    ->setMiddleware(require __DIR__ . '/middleware.php')
    ->setRouting(require __DIR__ . '/routes.php')
    ->run();
