<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Aquí configuras qué orígenes pueden acceder a tu API, qué métodos están
    | permitidos, qué cabeceras pueden enviarse, y si las cookies están habilitadas.
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:5173'], // Vue dev server
    'allowed_headers' => ['*'],
    'supports_credentials' => true,


];
