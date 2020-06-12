<?php

return [
    'category_id' => 1,
    'id' => 104,
    'data' => [
        'title' => 'Грудинка',
        'image' => IMAGE_DIR . '2.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maiores mollitia nihil sint vero?',
        'options' => [
            [
                'title' => 'Нарезка',
                'required' => true,
                'values' => [
                    [
                        'title' => 'Отсутствует',
                        'price' => 340, // Цена за кг
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
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Бекон',
                        'price' => 360, // Цена за кг
                        'unit' => 'кг',
                        'input_type' => 'weight',
                        'options' => [
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Куски',
                        'price' => 360, // Цена за кг
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
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Фарш',
                        'price' => 360, // Цена за кг
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