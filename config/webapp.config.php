<?php
return [
    'module_manager' => [
        //'version' => 1,
        'modules' => [
            Rindow\Container\Module::class     => true,
            Rindow\Web\Mvc\Module::class       => true,
            Rindow\Web\Http\Module::class      => true,
            Rindow\Web\Router\Module::class    => true,
            Rindow\Module\Twig\Module::class   => true,   // Twig view
            Rindow\Web\Session\Module::class   => true,
            Rindow\Web\Security\Csrf\Module::class  => true,
            Rindow\Security\Core\Module::class  => true,
            Acme\MiniApp\Module::class          => true,
        ],
        'imports' => [
            __DIR__.'/local' => '@\.php$@',
        ],
        'annotation_manager' => true,
        'autorun' => Rindow\Web\Mvc\Module::class,
    ],
    'cache' => [
        'filePath'   => __DIR__.'/../cache',
    ],
    'web' => [
        'view' => [
            'view_managers' => [
                'default' => [
                    'template_paths' => __DIR__.'/../resources/views/global',
                    'layout' => 'layout/bootstrap4',
                    //'layout' => 'layout/foundation6',
                    //'layout' => 'layout/mdl13',
                ],
            ],
        ],
        'error_page_handler' => [
            'error_policy' => [
                'display_detail' => true,
                // If you need to redirect:
                //'redirect_url' => '/',
            ],
        ],
    ],
    'security' => [
        'secret' => '---secret very long random string---',
    ],
];
