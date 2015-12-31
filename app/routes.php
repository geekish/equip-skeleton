<?php

use Spark\Directory;
use Spark\Skeleton\Domain;

return function (Directory $dir) {
    return $dir
        ->get('/hello[/{name}]', Domain\Hello::class)
        ->post('/hello[/{name}]', Domain\Hello::class);
};
