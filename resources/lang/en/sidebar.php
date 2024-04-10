<?php

return [
  'module' => [
    [
      'title' => 'Product Management',
      'icon' => 'fa fa-cube',
      'name' => ['product', 'attribute'],
      'subModule' => [
        [
          'title' => 'Product Category Management',
          'route' => 'product/catalogue/index'
        ],
        [
          'title' => 'Product Management',
          'route' => 'product/index'
        ],
        [
          'title' => 'Attribute Category Management',
          'route' => 'attribute/catalogue/index'
        ],
        [
          'title' => 'Attribute Management',
          'route' => 'attribute/index'
        ],
      ]
    ],
    [
      'title' => 'Order Management',
      'icon' => 'fa fa-shopping-bag',
      'name' => ['order'],
      'subModule' => [
        [
          'title' => 'Order Management',
          'route' => 'order/index'
        ],
      ]
    ],
    [
      'title' => 'Customer Group Management',
      'icon' => 'fa fa-user',
      'name' => ['customer'],
      'subModule' => [
        [
          'title' => 'Customer Group Management',
          'route' => 'customer/catalogue/index'
        ],
        [
          'title' => 'Customer Management',
          'route' => 'customer/index'
        ],
      ]
    ],
    [
      'title' => 'Marketing Management',
      'icon' => 'fa fa-money',
      'name' => ['promotion', 'source'],
      'subModule' => [
        [
          'title' => 'Promotion Management',
          'route' => 'promotion/index'
        ],
        [
          'title' => 'Customer Source Management',
          'route' => 'source/index'
        ],
      ]
    ],
    [
      'title' => 'Post Management',
      'icon' => 'fa fa-file',
      'name' => ['post'],
      'subModule' => [
        [
          'title' => 'Post Category Management',
          'route' => 'post/catalogue/index'
        ],
        [
          'title' => 'Post Management',
          'route' => 'post/index'
        ]
      ]
    ],
    [
      'title' => 'Review Management',
      'icon' => 'fa fa-comment',
      'name' => ['reviews'],
      'subModule' => [
        [
          'title' => 'Review Management',
          'route' => 'review/index'
        ]
      ]
    ],
    [
      'title' => 'User Group Management',
      'icon' => 'fa fa-user',
      'name' => ['user', 'permission'],
      'subModule' => [
        [
          'title' => 'User Group Management',
          'route' => 'user/catalogue/index'
        ],
        [
          'title' => 'User Management',
          'route' => 'user/index'
        ],
        [
          'title' => 'Permission Management',
          'route' => 'permission/index'
        ]
      ]
    ],
    [
      'title' => 'Banner & Slide Management',
      'icon' => 'fa fa-picture-o',
      'name' => ['slide'],
      'subModule' => [
        [
          'title' => 'Slide Configuration',
          'route' => 'slide/index'
        ],
      ]
    ],
    [
      'title' => 'Menu Management',
      'icon' => 'fa fa-bars',
      'name' => ['menu'],
      'subModule' => [
        [
          'title' => 'Menu Configuration',
          'route' => 'menu/index'
        ],
      ]
    ],
    [
      'title' => 'General Configuration',
      'icon' => 'fa fa-file',
      'name' => ['language', 'generate', 'system', 'widget'],
       'subModule' => [
                [
                    'title' => 'QL Ngôn ngữ',
                    'route' => 'language/index'
              ],
        // [
        //   'title' => 'Module Management',
        //   'route' => 'generate/index'
        // ],
        [
          'title' => 'System Configuration',
          'route' => 'system/index'
        ],
        [
          'title' => 'Widget Management',
          'route' => 'widget/index'
        ],
                
            ]
        ]
    ],
];
