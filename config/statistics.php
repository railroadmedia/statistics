<?php

return [
    // database
    'database_connection_name' => 'mysql',

    // routes
    'autoload_all_routes' => true,
    'route_middleware_public_groups' => ['ecommerce_public'],
    'route_middleware_logged_in_groups' => ['ecommerce_logged_in'],
    'route_prefix' => '',
];