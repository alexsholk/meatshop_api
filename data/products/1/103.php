<?php

return [
    'category_id' => 1,
    'id' => 103,
    'data' => [
        'title' => 'Окорок мякоть',
        'image' => IMAGE_DIR . '1.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, facere, nulla.',
        'options' => [
            [
                'code' => 'slicing',
                'title' => 'Нарезка',
                'required' => true,
                'values' => [
                    [
                        'title' => 'Отсутствует',
                        'price' => 450, // Цена за кг
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
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Стейк',
                        'price' => 460, // Цена за кг
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
                        'price' => 460, // Цена за кг
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
                        'price' => 460, // Цена за кг
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
