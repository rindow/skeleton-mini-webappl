<?php
return [
    'web' => [
        'router' => [
            'builders' => [
                'annotation' => [
                    'controller_paths' => [
                        __DIR__.'/../../Controller' => true,
                    ],
                ],
            ],
            //'pathPrefixes' => [
            //    'Acme\\MiniApp' => '/miniapp',
            //],
        ],
        'view' => [
            'view_managers' => [
                $namespace => [
                    'template_paths' => __DIR__.'/../views/local',
                ],
            ],
        ],
    ],
    'container' => [
        'component_paths' => [
            // Register named components to use the AOP on the "Container::PROXY_MODE_COMPONENT" mode.
            __DIR__.'/../../Controller' => true,
        ],
    ],
];
