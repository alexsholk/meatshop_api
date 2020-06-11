<?php

return [
    'category_id' => 1,
    'id' => 101,
    'data' => [
        'title' => 'Шея',
        'image' => '1.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque odio nesciunt quibusdam, inventore quam maiores.',
        // Опции товара
        'options' => [
            [
                'code' => 'slicing',
                'title' => 'Нарезка',
                'required' => true,
                'values' => [
                    [
                        'title' => 'Большой кусок',
                        'image' => '2.jpg',
                        'price' => 540, // Цена за кг
                        'unit' => 'кг',
                        'options' => [
                            [
                                'code' => 'piece_size',
                                'title' => 'Размер куска',
                                'required' => true,
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
                        'price' => 550, // Цена за кг
                        'unit' => 'кг',
                        'options' => [
                            [
                                'code' => 'piece_size',
                                'title' => 'Толщина',
                                'required' => true,
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
                        'price' => 550, // Цена за кг
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
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Фарш',
                        'image' => '2.jpg',
                        'price' => 550, // Цена за кг
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