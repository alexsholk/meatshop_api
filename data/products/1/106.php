<?php

return [
    'category_id' => 1,
    'id' => 106,
    'data' => [
        'title' => 'Лопатка',
        'image' => IMAGE_DIR . '2.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
        'options' => [
            [
                'title' => 'Нарезка',
                'required' => true,
                'values' => [
                    [
                        'title' => 'Отсутствует',
                        'price' => 350, // Цена за кг
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
                        'price' => 390, // Цена за кг
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
                        'price' => 390, // Цена за кг
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
                        'price' => 390, // Цена за кг
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