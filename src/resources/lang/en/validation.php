<?php

return [

    'required' => ':attribute を入力してください。',
    'email'    => ':attribute には有効なメールアドレスを入力してください。',
    'max'      => [
        'string' => ':attribute は :120max 文字以内で入力してください。',
    ],
    'min'      => [
        'string' => ':attribute は :1min 文字以上で入力してください。',
    ],

    // ★ここを追加！
    'custom' => [
        'tel.*' => [
            'required' => '電話番号はすべて入力してください。',
            'digits_between' => '電話番号は半角数字で入力してください。',
        ],

        'gender' => [
            'required' => '性別を選択してください。',
        ],

        'type' => [
            'required' => 'お問い合わせの種類を選んでください。',
        ],

        'content' => [
            'required' => 'お問い合わせ内容を入力してください。',
            'max' => 'お問い合わせ内容は :max 文字以内で入力してください。',
        ],
    ],

    'attributes' => [
        'name_sei' => '姓',
        'name_mei' => '名',
        'gender'   => '性別',
        'email'    => 'メールアドレス',
        'tel.'     => '電話番号',
        'address'  => '住所',
        'building' => '建物名',
        'type'     => 'お問い合わせの種類',
        'content'  => 'お問い合わせ内容',
    ],
];
