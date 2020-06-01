<?php

return [
    'categoryId' => 1,
    'id' => 101,
    'data' => [
        'title' => 'Шея',
        'longTitle' => 'Шея свиная',
        'image' => '1.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque odio nesciunt quibusdam, inventore quam maiores.',
        'nutrients' => ['p' => 24, 'f' => 35, 'c' => 21, 'e' => 472],
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
                        'title' => 'Большой кусок',
                        'image' => '2.jpg',
                        'price_per_unit' => 540, // Цена за кг
                        'unit' => 'кг',
                        'options' => [
                            [
                                'code' => 'piece_size',
                                'title' => 'Размер куска',
                                'required' => true,
                                'exclusive' => true,
                                'values' => [
                                    [
                                        'title' => 'Крупный (2кг)',
                                        'unit_multiplier' => 2.0,
                                    ],
                                    [
                                        'title' => 'Средний (1.4кг)',
                                        'unit_multiplier' => 1.4,
                                    ],
                                    [
                                        'title' => 'Малый (900гр)',
                                        'unit_multiplier' => .9,
                                    ]
                                ]
                            ],
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Стейк',
                        'image' => '1.jpg',
                        'price_per_unit' => 550, // Цена за кг
                        'unit' => 'кг',
                        'options' => [
                            [
                                'code' => 'thickness',
                                'title' => 'Толщина',
                                'required' => true,
                                'exclusive' => true,
                                'values' => [
                                    [
                                        'title' => 'Толстый',
                                        'unit_multiplier' => .3,
                                    ],
                                    [
                                        'title' => 'Средний',
                                        'unit_multiplier' => .2,
                                    ],
                                    [
                                        'title' => 'Тонкий',
                                        'unit_multiplier' => .1,
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
                        'price_per_unit' => 550, // Цена за кг
                        'unit' => 'кг',
                        'options' => [
                            [
                                'code' => 'size',
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
                        'price_per_unit' => 550, // Цена за кг
                        'unit' => 'кг',
                        'options' => [
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ]
                ]
            ],
        ]
    ]
];