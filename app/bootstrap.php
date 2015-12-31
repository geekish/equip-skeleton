<?php

use Spark\Application;

Application::build()
->setConfiguration(require __DIR__ . '/config.php')
->setMiddleware(require __DIR__ . '/middleware.php')
->setRouting(require __DIR__ . '/routes.php')
->run();
