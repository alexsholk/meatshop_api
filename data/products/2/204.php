<?php

return [
    'category_id' => 2,
    'id' => 204,
    'data' => [
        'title' => 'Филейный край',
        'long_title' => 'Филейный край (говядина)',
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
                        'price' => 530, // Цена за кг
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Стейк',
                        'price' => 550,
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Куски',
                        'price' => 580,
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Фарш',
                        'price' => 580,
                        'image' => '2.jpg',
                    ]
                ]
            ]
        ]
    ]
];