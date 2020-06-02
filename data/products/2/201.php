<?php

return [
    'category_id' => 2,
    'id' => 201,
    'data' => [
        'title' => 'Шея',
        'long_title' => 'Шея (говядина)',
        'image' => '2.jpg',
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
                        'price' => 520, // Цена за кг
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Мякоть шеи',
                        'price' => 520,
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Куски',
                        'price' => 550,
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Фарш',
                        'price' => 550,
                        'image' => '2.jpg',
                    ]
                ]
            ]
        ]
    ]
];