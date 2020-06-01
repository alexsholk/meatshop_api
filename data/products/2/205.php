<?php

return [
    'category_id' => 2,
    'id' => 205,
    'data' => [
        'title' => 'Мякоть. Яблочко',
        'long_title' => 'Мякоть. Яблочко (говядина)',
        'image' => '1.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
        'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
        'props' => ['Удельный вес тканей', 'Жировая ткань: 5\10', 'Мышечное волокно: 4\10', 'Соединительная ткань: 1\10', 'Кости: 2\10'],
        'options' => [
            'slicing' => [
                'title' => 'Нарезка',
                'required' => true,
                'values' => [
                    [
                        'title' => 'Большой кусок',
                        'price' => 700, // Цена за кг
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Стейк',
                        'price' => 750,
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Куски',
                        'price' => 750,
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Фарш',
                        'price' => 750,
                        'image' => '2.jpg',
                    ]
                ]
            ]
        ]
    ]
];