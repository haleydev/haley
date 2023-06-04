<?php
// --------------------------------------------------------------------------|
//                           DATABASE CONFIGURATIONS                         |
// --------------------------------------------------------------------------|

return [
    'connections' => [
        // 'default' => [
        //     'driver' => env('DB_DRIVE'),
        //     'host' => env('DB_HOST'),
        //     'port' => env('DB_PORT'),
        //     'database' => env('DB_DATABASE'),
        //     'username' => env('DB_USERNAME'),
        //     'password' => env('DB_PASSWORD'),
        //     'engine' => 'InnoDB',
        //     'charset' => 'utf8mb4',
        //     'collate' => 'utf8mb4_general_ci',
        //     'options' => extension_loaded('pdo_mysql') ? array_filter([
        //         PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        //         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        //     ]) : [],
        // ],       

        'default' => [
            'driver' => env('DB_DRIVE', 'mysql'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', 3306),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME', ''),
            'password' => env('DB_PASSWORD', ''),
            'engine' => 'InnoDB',
            'charset' => 'utf8mb4',
            'collate' => 'utf8mb4_general_ci',
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_PERSISTENT => true
            ]) : [],
        ]
    ],
];
