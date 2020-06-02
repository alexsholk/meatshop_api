<?php

return [
    'category_id' => 3,
    'id' => 302,
    'data' => [
        'title' => 'Корейка',
        'long_title' => 'Корейка (баранина)',
        'image' => '1.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
        'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
        'props' => ['Удельный вес тканей', 'Жировая ткань: 5\10', 'Мышечное волокно: 4\10', 'Соединительная ткань: 1\10', 'Кости: 2\10'],
        'options' => [
            [
                'code' => 'slicing',
                'title' => 'Нарезка',
                'required' => true,
                'exclusive' => true,
                'values' => [
                    [
                        'title' => 'Большой кусок (Только кость)',
                        'price' => 600, // Цена за кг
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Пистолетики',
                        'price' => 630,
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Куски (БК)',
                        'price' => 0,
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Фарш',
                        'price' => 0,
                        'image' => '2.jpg',
                    ]
                ]
            ]
        ]
    ]
];