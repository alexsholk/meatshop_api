<?php

return [
    'categoryId' => 1,
    'id' => 103,
    'data' => [
        'title' => 'Окорок мякоть',
        'longTitle' => 'Окорок свиной',
        'image' => '1.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, facere, nulla.',
        'nutrients' => ['p' => 22, 'f' => 37, 'c' => 25, 'e' => 460],
        'props' => ['Удельный вес тканей', 'Жировая ткань: 5\10', 'Мышечное волокно: 4\10', 'Соединительная ткань: 1\10', 'Кости: 2\10'],
        'options' => [
            'slicing' => [
                'title' => 'Нарезка',
                'required' => true,
                'values' => [
                    [
                        'title' => 'Отсутствует',
                        'price' => 450, // Цена за кг
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Стейк',
                        'price' => 460,
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Куски',
                        'price' => 460,
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Фарш',
                        'price' => 460,
                        'image' => '2.jpg',
                    ]
                ]
            ]
        ]
    ]
];
