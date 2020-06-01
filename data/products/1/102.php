<?php

return [
    'category_id' => 1,
    'id' => 102,
    'data' => [
        'title' => 'Корейка',
        'long_title' => 'Корейка свиная',
        'image' => '2.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'nutrients' => ['p' => 26, 'f' => 32, 'c' => 28, 'e' => 452],
        'props' => ['Удельный вес тканей', 'Жировая ткань: 5\10', 'Мышечное волокно: 4\10', 'Соединительная ткань: 1\10', 'Кости: 2\10'],
        // Опции товара
        'options' => [
            [
                'code' => 'slicing',
                'title' => 'Нарезка',
                'required' => true,
                'exclusive' => true,
                'values' => [
                    [
                        'title' => 'Отсутствует',
                        'image' => '2.jpg',
                        'price_per_unit' => 370, // Цена за кг
                        'unit' => 'кг',
                        'options' => [
                            [
                                'code' => 'piece_size',
                                'title' => 'Количество ребер',
                                'required' => true,
                                'exclusive' => true,
                                'values' => [
                                    [
                                        'title' => '3',
                                        'unit_multiplier' => .2,
                                    ],
                                    [
                                        'title' => '6',
                                        'unit_multiplier' => .4,
                                    ],
                                    [
                                        'title' => '9',
                                        'unit_multiplier' => .6,
                                    ]
                                ]
                            ],
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Стейк',
                        'image' => '2.jpg',
                        'unit' => 'кг',
                        'options' => [
                            [
                                'code' => 'piece_size',
                                'title' => 'Тип',
                                'required' => true,
                                'exclusive' => true,
                                'values' => [
                                    [
                                        'title' => 'Кость',
                                        'price_per_unit' => 390,
                                        'unit_multiplier' => .3
                                    ],
                                    [
                                        'title' => 'Без кости',
                                        'price_per_unit' => 450,
                                        'unit_multiplier' => .2
                                    ],
                                ]
                            ],
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Куски',
                        'image' => '2.jpg',
                        'price_per_unit' => 450, // Цена за кг
                        'unit' => 'кг',
                        'options' => [
                            [
                                'code' => 'piece_size',
                                'title' => 'Размер',
                                'required' => true,
                                'exclusive' => true,
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
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Фарш',
                        'image' => '2.jpg',
                        'price_per_unit' => 450, // Цена за кг
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