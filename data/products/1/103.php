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
                'title' => 'Нарезка',
                'required' => true,
                'values' => [
                    [
                        'title' => 'Отсутствует',
                        'price' => 450, // Цена за кг
                        'unit' => 'кг',
                        'input_type' => 'count',
                        'options' => [
                            [
                                'title' => 'Размер куска',
                                'required' => true,
                                'values' => [
                                    [
                                        'title' => 'Крупный (3кг)',
                                        'weight' => 3000,
                                    ],
                                    [
                                        'title' => 'Средний (2кг)',
                                        'weight' => 2000,
                                    ],
                                    [
                                        'title' => 'Малый (1.5кг)',
                                        'weight' => 1500,
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
                        'input_type' => 'count',
                        'options' => [
                            [
                                'title' => 'Толщина',
                                'required' => true,
                                'values' => [
                                    [
                                        'title' => 'Толстый',
                                        'weight' => 300,
                                    ],
                                    [
                                        'title' => 'Средний',
                                        'weight' => 200,
                                    ],
                                    [
                                        'title' => 'Тонкий',
                                        'weight' => 100,
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
                        'input_type' => 'weight',
                        'options' => [
                            [
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
                        'input_type' => 'weight',
                        'options' => [
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ]
                ]
            ]
        ]
    ]
];
