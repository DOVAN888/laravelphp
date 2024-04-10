<?php   
return [
    'review' => [
        'index' => [
            'title' => 'レビュー管理',
            'table' => 'レビュー一覧',
        ],
        'create' => [
            'title' => '新しいレビューを追加',
        ],
    ],
    'promotion' => [
        'index' => [
            'title' => 'プロモーション管理',
            'table' => 'プロモーション一覧',
        ],
        'create' => [
            'title' => '新しいプロモーションを追加',
            'translate' => '{language}のプロモーションを作成',
        ],
    ],
    'order' => [
        'index' => [
            'title' => '注文管理',
            'table' => '注文一覧',
        ],
        'detail' => [
            'title' => '注文詳細管理',
        ],
    ],
    'source' => [
        'index' => [
            'title' => '顧客ソース管理',
            'table' => '顧客ソース一覧',
        ],
        'create' => [
            'title' => '新しい顧客ソースを追加',
        ],
    ],
    'widget' => [
        'index' => [
            'title' => 'ウィジェット管理',
            'table' => 'ウィジェット一覧',
        ],
        'create' => [
            'title' => '新しいウィジェットを追加',
            'translate' => '{language}のウィジェットを作成',
        ],
    ],
    'slide' => [
        'index' => [
            'title' => 'スライド管理',
            'table' => 'スライド一覧',
        ],
        'create' => [
            'title' => '新しいスライドを追加',
            'children' => '項目に対するサブスライドを更新'
        ],
        'translate' => [
            'title' => '{language}の翻訳を作成',
        ],
        'show' => [
            'title' => 'スライド一覧'
        ],
    ],
    'menu' => [
        'index' => [
            'title' => 'メニュー管理',
            'table' => 'メニュー一覧',
        ],
        'create' => [
            'title' => '新しいメニューを追加',
            'children' => '項目に対するサブメニューを更新'
        ],
        'translate' => [
            'title' => '{language}の翻訳を作成',
        ],
        'show' => [
            'title' => 'メニュー一覧'
        ],
    ],
    'system' => [
        'index' => [
            'title' => 'システム設定',
        ],
        'create' => [
            'title' => 'システム設定情報を設定する'
        ],
    ],
    'galleryCatalogue' => [
        'index' => [
            'title' => '画像管理',
            'table' => '画像一覧'
        ],
        'create' => [
            'title' => '新しい画像グループを追加'
        ],
        'edit' => [
            'title' => '画像グループを更新'
        ],
        'delete' => [
            'title' => '画像グループを削除'
        ],
    ],
    'productCatalogue' => [
        'index' => [
            'title' => '製品グループ管理',
            'table' => '製品グループ一覧'
        ],
        'create' => [
            'title' => '新しい製品グループを追加'
        ],
        'edit' => [
            'title' => '製品グループを更新'
        ],
        'delete' => [
            'title' => '製品グループを削除'
        ],
    ],
    'attributeCatalogue' => [
        'index' => [
            'title' => '属性タイプ管理',
            'table' => '属性タイプ一覧'
        ],
        'create' => [
            'title' => '新しい属性タイプを追加'
        ],
        'edit' => [
            'title' => '属性タイプを更新'
        ],
        'delete' => [
            'title' => '属性タイプを削除'
        ],
    ],
    'attribute' => [
        'index' => [
            'title' => '属性管理',
            'table' => '属性一覧'
        ],
        'create' => [
            'title' => '新しい属性を追加'
        ],
        'edit' => [
            'title' => '属性を更新'
        ],
        'delete' => [
            'title' => '属性を削除'
        ],
    
    ],
    'product' => [
        'index' => [
            'title' => '製品管理',
            'table' => '製品一覧'
        ],
        'create' => [
            'title' => '新しい製品を追加'
        ],
        'edit' => [
            'title' => '製品を更新'
        ],
        'delete' => [
            'title' => '製品を削除'
        ],
        'information' => '一般情報',
        'code' => '製品コード',
        'made_in' => '製造国',
        'price' => '販売価格',
    ],
    'postCatalogue' => [
        'index' => [
            'title' => '投稿グループ管理',
            'table' => '投稿グループ一覧'
        ],
        'create' => [
            'title' => '新しい投稿グループを追加'
        ],
        'edit' => [
            'title' => '投稿グループを更新'
        ],
        'delete' => [
            'title' => '投稿グループを削除'
        ],
    ],
    'post' => [
        'index' => [
            'title' => '投稿管理',
            'table' => '投稿一覧'
        ],
        'create' => [
            'title' => '新しい投稿を追加'
        ],
        'edit' => [
        'title' => '記事の更新'
        ],
        'delete' => [
        'title' => '記事の削除'
        ],
        ],
        'userCatalogue' => [
        'index' => [
        'title' => 'メンバーグループの管理',
        'table' => 'メンバーグループリスト'
        ],
        'create' => [
        'title' => '新しいメンバーグループの追加'
        ],
        'edit' => [
        'title' => 'メンバーグループの更新'
        ],
        'delete' => [
        'title' => 'メンバーグループの削除'
        ],
        'permission' => [
        'title' => '権限の更新'
        ],

        ],
        'customerCatalogue' => [
        'index' => [
        'title' => '顧客グループの管理',
        'table' => '顧客グループリスト'
        ],
        'create' => [
        'title' => '新しい顧客グループの追加'
        ],
        'edit' => [
        'title' => '顧客グループの更新'
        ],
        'delete' => [
        'title' => '顧客グループの削除'
        ],
        ],
        'customer' => [
        'index' => [
        'title' => '顧客グループの管理',
        'table' => '顧客グループリスト'
        ],
        'create' => [
        'title' => '新しい顧客グループの追加'
        ],
        'edit' => [
        'title' => '顧客グループの更新'
        ],
        'delete' => [
        'title' => '顧客グループの削除'
        ],
        ],
        'permission' => [
        'index' => [
        'title' => '権限の管理',
        'table' => '権限リスト'
        ],
        'create' => [
        'title' => '新しい権限の追加'
        ],
        'edit' => [
        'title' => '権限の更新'
        ],
        'delete' => [
        'title' => '権限の削除'
        ],

        ],
        'language' => [
        'index' => [
        'title' => '言語の管理',
        'table' => '言語リスト'
        ],
        'create' => [
        'title' => '新しい言語の追加'
        ],
        'edit' => [
        'title' => '言語の更新'
        ],
        'delete' => [
        'title' => '言語の削除'
        ],
        ],
        'parent' => '親カテゴリを選択',
        'parentNotice' => '親カテゴリがない場合はルートを選択してください',
        'subparent' => 'サブカテゴリを選択してください（存在する場合）',
        'image' => 'プロフィール画像を選択',
        'advange' => '高度な設定',
        'search' => '検索',
        'searchInput' => '検索したいキーワードを入力してください...',
        'perpage' => 'エントリ',
        'title' => 'タイトル',
        'description' => '短い説明',
        'content' => '内容',
        'upload' => '複数の画像をアップロード',
        'seo' => 'SEO設定',
        'seoTitle' => 'SEOタイトルがありません',
        'seoCanonical' => 'https://your-url.html',
        'seoDescription' => 'SEOの説明がありません',
        'seoMetaTitle' => 'SEOタイトル',
        'seoMetaKeyword' => 'SEOキーワード',
        'seoMetaDescription' => 'SEOの説明',
        'canonical' => 'カノニカル',
        'character' => '文字',
        'tableStatus' => 'ステータス',
        'tableAction' => 'アクション',
        'tableName' => 'タイトル',
        'tableOrder' => '順序',
        'tableGroup' => '表示グループ：',
        'deleteButton' => 'データの削除',
        'tableHeading' => '一般情報',
        'save' => '保存',
        'publish' => [
        '0' => 'ステータスを選択',
        '1' => '未公開',
        '2' => '公開',
        ],
        'follow' => [
        '1' => 'フォロー',
        '2' => 'フォローしない',

        ],
        'album' => [
        'heading' => '写真アルバム',
        'image' => '画像を選択',
        'notice' => '画像を選択するボタンを使用するか、ここをクリックして画像を追加してください'
        ],
        'generalTitle' => '一般情報',
        'generalDescription' => '削除したい言語が次のとおりです： データを復元することはできません。この機能を実行することを確認してください。'
        ];