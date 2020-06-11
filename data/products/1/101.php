<?php

return [
    'category_id' => 1,
    'id' => 101,
    'data' => [
        'title' => 'Шея',
        'image' => IMAGE_DIR . '1.jpg',
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
                        'price' => 540, // Цена за кг
                        'unit' => 'кг',
                        'input_type' => 'count',
                        'options' => [
                            [
                                'code' => 'piece_size',
                                'title' => 'Размер куска',
                                'required' => true,
                                'values' => [
                                    [
                                        'title' => 'Крупный (2кг)',
                                        'weight' => 2000,
                                    ],
                                    [
                                        'title' => 'Средний (1.4кг)',
                                        'weight' => 1400,
                                    ],
                                    [
                                        'title' => 'Малый (900гр)',
                                        'weight' => 900,
                                    ]
                                ]
                            ],
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Стейк',
                        'price' => 550, // Цена за кг
                        'unit' => 'кг',
                        'input_type' => 'count',
                        'options' => [
                            [
                                'code' => 'piece_size',
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
                        'price' => 550, // Цена за кг
                        'unit' => 'кг',
                        'input_type' => 'weight',
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
                        'price' => 550, // Цена за кг
                        'unit' => 'кг',
                        'input_type' => 'weight',
                        'options' => [
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ]
                ]
            ],
        ]
    ]
];