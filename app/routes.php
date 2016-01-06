<?php

use Equip\Directory;
use Equip\Skeleton\Domain;

return function (Directory $dir) {
    return $dir
        ->get('/hello[/{name}]', Domain\Hello::class)
        ->post('/hello[/{name}]', Domain\Hello::class)
        ->get('/', Domain\Home::class);
};
