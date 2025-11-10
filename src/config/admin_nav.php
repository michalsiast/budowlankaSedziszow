<?php

return [
    [
        'label' => 'CMS',
        'icon' => '',
        'items' => [
            'index' => [
                'label' => 'admin.nav.index',
                'icon' => 'home',
                'route_name' => 'admin.dashboard',
            ],
            'const_field' => [
                'label' => 'admin.const_field.plural',
                'icon' => 'anchor',
                'route_name' => 'admin.const_field.index',
            ],
            'nav_item' => [
                'label' => 'admin.nav_item.plural',
                'icon' => 'menu',
                'route_name' => '',
                'items' => [
                    'nav_item_main' => [
                        'label' => 'admin.navs.main',
                        'icon' => 'arrow-up-left',
                        'route_name' => 'admin.nav_item.index',
                        'params' => 'main'
                    ],
//                    'nav_item_footer' => [
//                        'label' => 'admin.navs.footer',
//                        'icon' => 'arrow-up-left',
//                        'route_name' => 'admin.nav_item.index',
//                        'params' => 'footer'
//                    ],
                ]
            ],
            'page' => [
                'label' => 'admin.page.plural',
                'icon' => 'file',
                'route_name' => 'admin.page.index',
            ],
            'rotator' => [
                'label' => 'Rotator/Slider',
                'icon' => 'sliders',
                'route_name' => 'admin.rotator.index',
            ],
            'article' => [
                'label' => 'admin.article.plural',
                'icon' => 'book',
                'route_name' => 'admin.article.index',
            ],
        ]
    ],
];
