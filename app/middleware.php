<?php

use Relay\Middleware;
use Equip\Handler;

return [
    Middleware\ResponseSender::class,
    Handler\ExceptionHandler::class,
    Handler\DispatchHandler::class,
    Handler\JsonContentHandler::class,
    Handler\FormContentHandler::class,
    Handler\ActionHandler::class,
];
