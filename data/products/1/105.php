<?php

return [
    'categoryId' => 1,
    'id' => 105,
    'data' => [
        'title' => 'Ребра',
        'longTitle' => 'Ребра свиные',
        'image' => '1.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing.',
        'nutrients' => ['p' => 24, 'f' => 35, 'c' => 21, 'e' => 472],
        'props' => ['Удельный вес тканей', 'Жировая ткань: 5\10', 'Мышечное волокно: 4\10', 'Соединительная ткань: 1\10', 'Кости: 2\10'],
        'options' => [
            'slicing' => [
                'title' => 'Нарезка',
                'required' => true,
                'values' => [
                    [
                        'title' => 'Отсутствует',
                        'price' => 350, // Цена за кг
                        'image' => '2.jpg',
                        'options' => [
                            'cut' => [
                                'title' => 'Деление пластины на ребра',
                                'required' => true,
                                'values' => [
                                    [
                                        'title' => '3',
                                        'image' => '3.png',
                                    ],
                                    [
                                        'title' => '6',
                                        'image' => '3.png',
                                    ],
                                    [
                                        'title' => '9',
                                        'image' => '3.png',
                                    ],
                                ]
                            ]
                        ]
                    ],
                ]
            ],
        ]
    ]
];