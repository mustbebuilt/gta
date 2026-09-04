<?php

var_dump([
    'DB_HOST' => getenv('DB_HOST'),
    'DB_PORT' => getenv('DB_PORT'),
    'DB_DATABASE' => getenv('DB_DATABASE'),
    'DB_USERNAME' => getenv('DB_USERNAME'),
    'DB_PASSWORD' => getenv('DB_PASSWORD') ? 'SET' : 'NOT SET'
]);
