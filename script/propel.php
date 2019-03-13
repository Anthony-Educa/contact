
<?php

return [
    'propel' => [
        'database' => [
            'connections' => [
                'contacts' => [
                    'adapter' => 'mysql',
                    'classname' => 'Propel\Runtime\Connection\ConnectionWrapper',
                    'dsn' => 'mysql:host=localhost;dbname=contacts',
                    'user' => 'root',
                    'password' => 'root',
                    'attributes' => []
                ]
            ]
        ],
        'general' => [
            'project' => 'contact'
        ],
        'paths' => [
            'projectDir' => '/var/www/html/contact',
            'schemaDir' => '/var/www/html/contact/script',
            'phpDir' => '/var/www/html/contact/module/Contact/src'
        ],
        'runtime' => [
            'defaultConnection' => 'contacts',
            'connections' => ['contacts']
        ],
        'generator' => [
            'defaultConnection' => 'contacts',
            'connections' => ['contacts']
        ]
    ]
];