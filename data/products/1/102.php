<?php

return [
    'categoryId' => 1,
    'id' => 102,
    'data' => [
        'title' => 'Корейка',
        'longTitle' => 'Корейка свиная',
        'image' => '2.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'nutrients' => ['p' => 26, 'f' => 32, 'c' => 28, 'e' => 452],
        'props' => ['Удельный вес тканей', 'Жировая ткань: 5\10', 'Мышечное волокно: 4\10', 'Соединительная ткань: 1\10', 'Кости: 2\10'],
        'options' => [
            'slicing' => [
                'title' => 'Нарезка',
                'required' => true,
                'values' => [
                    [
                        'title' => 'Отсутствует',
                        'price' => 370, // Цена за кг
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Стейк',
                        'price' => 390, // 450
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Куски',
                        'price' => 450,
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Фарш',
                        'price' => 450,
                        'image' => '2.jpg',
                    ]
                ]
            ]
        ]
    ]
];