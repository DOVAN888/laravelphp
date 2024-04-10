<?php   
return [
    'module' => [
        [
            'title' => '製品管理',
            'icon' => 'fa fa-cube',
            'name' => ['product','attribute'],
            'subModule' => [
                [
                    'title' => '製品カタログ管理',
                    'route' => 'product/catalogue/index'
                ],
                [
                    'title' => '製品管理',
                    'route' => 'product/index'
                ],
                [
                    'title' => '属性カタログ管理',
                    'route' => 'attribute/catalogue/index'
                ],
                [
                    'title' => '属性管理',
                    'route' => 'attribute/index'
                ],

            ]
        ],
        [
            'title' => '注文管理',
            'icon' => 'fa fa-shopping-bag',
            'name' => ['order'],
            'subModule' => [
                [
                    'title' => '注文管理',
                    'route' => 'order/index'
                ],
            ]
        ],
        [
            'title' => '顧客グループ管理',
            'icon' => 'fa fa-user',
            'name' => ['customer'],
            'subModule' => [
                [
                    'title' => '顧客グループ管理',
                    'route' => asset('customer/catalogue/index')
                ],
                [
                    'title' => '顧客管理',
                    'route' => 'customer/index'
                ],
            ]
        ],
        [
            'title' => 'マーケティング管理',
            'icon' => 'fa fa-money',
            'name' => ['promotion', 'source'],
            'subModule' => [
                [
                    'title' => 'プロモーション管理',
                    'route' => 'promotion/index'
                ],
                [
                    'title' => 'ソース管理',
                    'route' => 'source/index'
                ],
            ]
        ],
        [
            'title' => '記事管理',
            'icon' => 'fa fa-file',
            'name' => ['post'],
            'subModule' => [
                [
                    'title' => '記事カタログ管理',
                    'route' => 'post/catalogue/index'
                ],
                [
                    'title' => '記事管理',
                    'route' => 'post/index'
                ]
            ]
        ],
        [
            'title' => 'コメント管理',
            'icon' => 'fa fa-comment',
            'name' => ['reviews'],
            'subModule' => [
                [
                    'title' => 'コメント管理',
                    'route' => 'review/index'
                ]
            ]
        ],
        [
            'title' => 'メンバーグループ管理',
            'icon' => 'fa fa-user',
            'name' => ['user','permission'],
            'subModule' => [
                [
                    'title' => 'メンバーグループ管理',
                    'route' => 'user/catalogue/index'
                ],
                [
                    'title' => 'ユーザー管理',
                    'route' => 'user/index'
                ],
                [
                    'title' => '権限管理',
                    'route' => 'permission/index'
                ]
            ]
        ],
        [
            'title' => 'バナー＆スライド管理',
            'icon' => 'fa fa-picture-o',
            'name' => ['slide'],
            'subModule' => [
                [
                    'title' => 'スライド設定',
                    'route' => 'slide/index'
                ],
            ]
        ],
        [
            'title' => 'メニュー管理',
            'icon' => 'fa fa-bars',
            'name' => ['menu'],
            'subModule' => [
                [
                    'title' => 'メニュー設定',
                    'route' => 'menu/index'
                ],
            ]
        ],
        [
            'title' => '一般設定',
            'icon' => 'fa fa-file',
            'name' => ['language', 'generate', 'system', 'widget'],
            'subModule' => [
                [
                    'title' => '言語管理',
                    'route' => 'language/index'
                ],
                // [
                //     'title' => 'モジュール管理',
                //     'route' => 'generate/index'
                // ],
                [
                    'title' => 'システム設定',
                    'route' => 'system/index'
                ],
                [
                    'title' => 'ウィジェット管理',
                    'route' => 'widget/index'
                ],
                
            ]
        ]
    ],
];
