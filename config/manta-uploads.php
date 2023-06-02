<?php

return [

    // Url prefix
    'prefix' => 'manta',

    // Routes middleware
    'middleware' => ['web', 'auth:sanctum'], // you probably want to include 'web' here

    'thumbnails' => [200, 400, 500, 800, 1080, 1500]
];
