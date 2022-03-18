<?php

return [

    /*
     * If enabled for voyager-bread-activity package.
     */
    'enabled' => env('VOYAGER_BREAD_ACTIVITY_ENABLED', true),

    /*
     * The config_key for voyager-bread-activity package.
     */
    'config_key' => env('VOYAGER_BREAD_ACTIVITY_CONFIG_KEY', 'joy-voyager-bread-activity'),

    /*
     * The route_prefix for voyager-bread-activity package.
     */
    'route_prefix' => env('VOYAGER_BREAD_ACTIVITY_ROUTE_PREFIX', 'joy-voyager-bread-activity'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadActivity\\Http\\Controllers',
    ],
];
