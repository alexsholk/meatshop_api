<?php

return [
    'category_id' => 1,
    'id' => 104,
    'data' => [
        'title' => 'Грудинка',
        'image' => '2.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maiores mollitia nihil sint vero?',
        'nutrients' => ['p' => 23, 'f' => 34, 'c' => 28, 'e' => 435],
        'props' => ['Удельный вес тканей', 'Жировая ткань: 5\10', 'Мышечное волокно: 4\10', 'Соединительная ткань: 1\10', 'Кости: 2\10'],
        'options' => [
            [
                'code' => 'slicing',
                'title' => 'Нарезка',
                'required' => true,
                'values' => [
                    [
                        'title' => 'Отсутствует',
                        'image' => '2.jpg',
                        'price' => 340, // Цена за кг
                        'unit' => 'кг',
                        'options' => [
                            [
                                'code' => 'piece_size',
                                'title' => 'Размер куска',
                                'required' => true,
                                'values' => [
                                    [
                                        'title' => 'Крупный (3кг)',
                                        'unit_multiplier' => 3.0,
                                    ],
                                    [
                                        'title' => 'Средний (2кг)',
                                        'unit_multiplier' => 2.0,
                                    ],
                                    [
                                        'title' => 'Малый (1.5кг)',
                                        'unit_multiplier' => 1.5,
                                    ]
                                ]
                            ],
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Бекон',
                        'image' => '2.jpg',
                        'price' => 360, // Цена за кг
                        'unit' => 'кг',
                        'options' => [
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Куски',
                        'image' => '2.jpg',
                        'price' => 360, // Цена за кг
                        'unit' => 'кг',
                        'options' => [
                            [
                                'code' => 'piece_size',
                                'title' => 'Размер',
                                'required' => true,
                                'values' => [
                                    [
                                        'title' => 'Большой',
                                    ],
                                    [
                                        'title' => 'Средний',
                                    ],
                                    [
                                        'title' => 'Малый',
                                    ],
                                ]
                            ],
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Фарш',
                        'image' => '2.jpg',
                        'price' => 360, // Цена за кг
                        'unit' => 'кг',
                        'options' => [
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ]
                ]
            ]
        ]
    ]
];