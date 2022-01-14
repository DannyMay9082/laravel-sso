<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Laravel SSO Settings
     |--------------------------------------------------------------------------
     |
     | Set type of this web page. Possible options are: 'server' and 'broker'.
     |
     | You must specify either 'server' or 'broker'.
     |
     */

    'type' => 'server',

    /*
     |--------------------------------------------------------------------------
     | Settings necessary for the SSO server.
     |--------------------------------------------------------------------------
     |
     | These settings should be changed if this page is working as SSO server.
     |
     */

    'usersModel' => \App\User::class,
    'brokersModel' => AdlyAlimin\LaravelSSO\Models\Broker::class,

    // Table used in AdlyAlimin\LaravelSSO\Models\Broker model
    'brokersTable' => 'brokers',

    // whether multi fields used for authentication
    'multi_enabled' => env('SSO_MULTI_ENABLED', false),

    // user model relationship
    'usingRelation' => env('SSO_WITH_RELATIONSHIP', false),
    'relationName' => '',

    /*
     |--------------------------------------------------------------------------
     | Settings necessary for the SSO broker.
     |--------------------------------------------------------------------------
     |
     | These settings should be changed if this page is working as SSO broker.
     |
     */

    'serverUrl' => env('SSO_SERVER_URL', null),
    'brokerName' => env('SSO_BROKER_NAME', null),
    'brokerSecret' => env('SSO_BROKER_SECRET', null),
    'api' => [
        'enabled' => env('SSO_API_ENABLED', false),
    ]
];
