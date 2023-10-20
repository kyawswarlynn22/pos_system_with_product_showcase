<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DISK', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been set up for each driver as an example of the required values.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

        // 'do' => [
        //     'driver' => 's3',
        //     'key' => env('DO_ACCESS_KEY_ID'),
        //     'secret' => env('DO_SECRET_ACCESS_KEY'),
        //     'region' => env('DO_DEFAULT_REGION'),
        //     'bucket' => env('DO_BUCKET'),
        //     'url' => env('DO_URL'),
        //     'endpoint' => env('DO_ENDPOINT'),
        //     'use_path_style_endpoint' => env('DO_USE_PATH_STYLE_ENDPOINT', false ),
        //     'throw' => false,
        // ],

        'do' => [
            'driver' => 's3',
            'key' => env('DO_ACCESS_KEY_ID'),
            'secret' => env('DO_SECRET_ACCESS_KEY'),
            'region' => env('DO_DEFAULT_REGION'),
            'bucket' => env('DO_BUCKET'),
            'folder' => env('DO_FOLDER'),
            'cdn_endpoint' => env('DO_CDN_ENDPOINT'),
            'url' => env('DO_URL'),
            'endpoint' => env('DO_ENDPOINT'),
            'use_path_style_endpoint' => env('DO_USE_PATH_STYLE_ENDPOINT', false),
        ],

        'spaces' => [
            'driver' => 's3',
            'key' => env('SPACES_ACCESS_KEY_ID', 'DO00XV8T3GVHR9W3JPVA'),
            'secret' => env('SPACES_SECRET_ACCESS_KEY', '7rmD8PMLMJeDHh6CMBFK7qS5lv+fCeLOgI+nM3t+S4k'),
            'region' => env('SPACES_DEFAULT_REGION', 'sgp1'),
            'bucket' => env('SPACES_BUCKET', 'sks'),
            'url' => env('SPACES_URL'),
            'endpoint' => env('SPACES_ENDPOINT', 'https://sgp1.digitaloceanspaces.com')
         ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
