<?php

return [
    'categoryId' => 3,
    'id' => 306,
    'data' => [
        'title' => 'Грудинка/Ребра',
        'longTitle' => 'Грудинка/Ребра (баранина)',
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
                        'price' => 450, // Цена за кг
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Ребра',
                        'price' => 450,
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Куски',
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