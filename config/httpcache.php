<?php

return [

   /*
    |--------------------------------------------------------------------------
    | HttpCache Settings
    |--------------------------------------------------------------------------
    |
    | - Enable the HttpCache to cache public resources, with a shared max age (or TTL)
    | - Enable ESI for edge side includes (parts that can be cached separate)
    | - Set the cache to a writable dir, outside the document root.
    |
    */

    'enabled'   => !env('APP_DEBUG', true),
    'esi'       => false,
    'cache_dir' => storage_path('httpcache'),

    /*
     |--------------------------------------------------------------------------
     | Extra options
     |--------------------------------------------------------------------------
     |
     | Configure the default HttpCache options. See for a list of options:
     | http://symfony.com/doc/current/book/http_cache.html#symfony2-reverse-proxy
     |
     */

    'options' => [
        'debug'                  => env('APP_DEBUG', true),
        'default_ttl'            => 0,
        'private_headers'        => ['Authorization', 'Cookie'],
        'allow_reload'           => true,
        'allow_revalidate'       => true,
        'stale_while_revalidate' => 2,
        'stale_if_error'         => 60,
    ],

];
