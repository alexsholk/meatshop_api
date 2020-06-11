<?php

return [
    'category_id' => 1,
    'id' => 102,
    'data' => [
        'title' => 'Корейка',
        'image' => '2.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        // Опции товара
        'options' => [
            [
                'code' => 'slicing',
                'title' => 'Нарезка',
                'required' => true,
                'values' => [
                    [
                        'title' => 'Отсутствует',
                        'image' => '2.jpg',
                        'price' => 370, // Цена за кг
                        'unit' => 'кг',
                        'options' => [
                            [
                                'code' => 'piece_size',
                                'title' => 'Кол-во ребер',
                                'required' => true,
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
                                'values' => [
                                    [
                                        'title' => 'Кость',
                                        'price' => 390,
                                        'unit_multiplier' => .3
                                    ],
                                    [
                                        'title' => 'Без кости',
                                        'price' => 450,
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
                        'price' => 450, // Цена за кг
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
                        'price' => 450, // Цена за кг
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