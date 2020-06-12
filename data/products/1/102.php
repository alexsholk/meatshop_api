<?php

return [
    'category_id' => 1,
    'id' => 102,
    'data' => [
        'title' => 'Корейка',
        'image' => IMAGE_DIR . '2.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        // Опции товара
        'options' => [
            [
                'title' => 'Нарезка',
                'required' => true,
                'values' => [
                    [
                        'title' => 'Отсутствует',
                        'price' => 370, // Цена за кг
                        'unit' => 'кг',
                        'input_type' => 'count',
                        'options' => [
                            [
                                'title' => 'Кол-во ребер',
                                'required' => true,
                                'values' => [
                                    [
                                        'title' => '3',
                                        'weight' => 200,
                                    ],
                                    [
                                        'title' => '6',
                                        'weight' => 400,
                                    ],
                                    [
                                        'title' => '9',
                                        'weight' => 600,
                                    ]
                                ]
                            ],
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Стейк',
                        'unit' => 'кг',
                        'input_type' => 'count',
                        'options' => [
                            [
                                'title' => 'Тип',
                                'required' => true,
                                'values' => [
                                    [
                                        'title' => 'Кость',
                                        'price' => 390,
                                        'weight' => 300
                                    ],
                                    [
                                        'title' => 'Без кости',
                                        'price' => 450,
                                        'weight' => 200
                                    ],
                                ]
                            ],
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Куски',
                        'price' => 450, // Цена за кг
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
                        'price' => 450, // Цена за кг
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