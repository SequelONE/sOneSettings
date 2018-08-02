<?php

return [
    'web' => [
        'index' => [
            'pagetitle' => 'Главная',
            'template' => 1,
            'hidemenu' => false,
        ],
        'about' => [
            'pagetitle' => 'О нас',
            'template' => 2,
            'hidemenu' => false,
        ],
        'news' => [
            'pagetitle' => 'Новости',
            'template' => 8,
            'hidemenu' => false,
            'class_key' => 'TicketsSection',
        ],
        'blog' => [
            'pagetitle' => 'Блог',
            'template' => 8,
            'hidemenu' => false,
            'class_key' => 'TicketsSection',
        ],
        'catalog' => [
            'pagetitle' => 'Каталог',
            'template' => 4,
            'hidemenu' => false,
            'class_key' => 'msCategory',
        ],
        'brands' => [
            'pagetitle' => 'Бренды',
            'template' => 2,
            'hidemenu' => false,
        ],
        'reviews' => [
            'pagetitle' => 'Отзывы',
            'template' => 2,
            'hidemenu' => false,
        ],
        'contacts' => [
            'pagetitle' => 'Контакты',
            'template' => 2,
            'hidemenu' => false,
        ],
        'service' => [
            'pagetitle' => 'Системные файлы',
            'template' => 0,
            'hidemenu' => true,
            'published' => false,
            'menuindex' => 999999,
            'resources' => [
                '404' => [
                    'pagetitle' => 'Страница не найдена',
                    'template' => 9,
                    'hidemenu' => true,
                    'uri' => '404/',
                    'uri_override' => true,
                ],
                'auth' => [
                    'pagetitle' => 'Авторизация',
                    'template' => 6,
                    'hidemenu' => true,
                    'uri' => 'auth/',
                    'uri_override' => true,
                ],
                'cart' => [
                    'pagetitle' => 'Корзина',
                    'template' => 7,
                    'hidemenu' => true,
                    'uri' => 'crat/',
                    'uri_override' => true,
                ],
                'my' => [
                    'pagetitle' => 'Личный кабинет',
                    'template' => 0,
                    'hidemenu' => true,
                    'uri' => 'my/',
                    'uri_override' => true,
                    'class_key' => 'modWebLink',
                    'content' => '{$_modx->makeUrl(10)}',
                    'resources' => [
                        'profile' => [
                            'pagetitle' => 'Профиль',
                            'template' => 2,
                            'hidemenu' => true,
                            'uri' => 'my/profile/',
                            'uri_override' => true,
                        ],
                        'history' => [
                            'pagetitle' => 'История заказов',
                            'template' => 2,
                            'hidemenu' => true,
                            'uri' => 'my/history/',
                            'uri_override' => true,
                        ],
                        'favorite' => [
                            'pagetitle' => 'Избранное',
                            'template' => 2,
                            'hidemenu' => true,
                            'uri' => 'my/favorite/',
                            'uri_override' => true,
                        ],
                    ],
                ],
            ],
        ],
    ],
];