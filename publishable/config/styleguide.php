<?php

return [

    'menu' => [
        'typography',
        'buttons',
        'badges',
        'banners',
        'footers'
    ],

    'view_path' => 'styleguide',

    'title' => 'Style Guide',

    'assets_path' => '/vendor/cswiley/styleguide/assets',

    /*
    |--------------------------------------------------------------------------
    | The prefix you wish to use with your style guide installation
    |--------------------------------------------------------------------------
    |
    | specify the domain prefix you would like your users to visit in order
    | to view the Style Guide page
    |
    */

    'prefix'      => 'styleguide',


    /*
     |--------------------------------------------------------------------------
     | Application stylesheets
     |--------------------------------------------------------------------------
     |
     | Specify your application stylesheets to load
     */
    'stylesheets' => [
        env('APP_URL') . '/css/app.css',
    ],

    /*
    |--------------------------------------------------------------------------
    | Application script
    |--------------------------------------------------------------------------
    |
    | Specify your application scripts to load
    */
    'scripts'     => [
        'https://use.fontawesome.com/b9c1035ab3.js',
        env('APP_URL') . '/js/app.js',
    ]
];
