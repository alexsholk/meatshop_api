<?php

return  [
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
            'slicing' => [
                'title' => 'Нарезка',
                'required' => true,
                'values' => [
                    [
                        'title' => 'Большой кусок',
                        'price' => 540, // Цена за кг
                        'image' => '2.jpg',
                        'options' => [
                            'piece_size' => [
                                'title' => 'Размер куска',
                                'required' => true,
                                'options' => [
                                    [
                                        'title' => 'Крупный (2кг)',
                                        'units' => 2.0,
                                    ],
                                    [
                                        'title' => 'Средний (1.4кг)',
                                        'units' => 1.4,
                                    ],
                                    [
                                        'title' => 'Малый (900гр)',
                                        'units' => .9,
                                    ]
                                ]
                            ],
                            [
                                'title' => 'Описание',
                                'content' => '<p>Lorem ipsum dolor sit amet.</p>'
                            ],
                            [
                                'title' => 'Маринад',
                                'options' => [
                                    [
                                        'title' => 'Горчичный',
                                        'price_multiplier' => 1.1
                                    ],
                                    [
                                        'title' => 'Гранатовый',
                                        'price_multiplier' => 1.2
                                    ],
                                    [
                                        'title' => 'Квасной',
                                        'price_multiplier' => 1.1
                                    ],
                                    [
                                        'title' => 'Чесночный',
                                        'price_multiplier' => 1.1
                                    ],
                                    [
                                        'title' => 'Томатный',
                                        'price_multiplier' => 1.1
                                    ],
                                    [
                                        'title' => 'Апельсиновый',
                                        'price_multiplier' => 1.2
                                    ],
                                ]
                            ]
                        ]
                    ],
                    [
                        'title' => 'Стейк',
                        'price' => 550,
                        'image' => '1.jpg',
                    ],
                    [
                        'title' => 'Куски',
                        'price' => 550,
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Фарш',
                        'price' => 550,
                        'image' => '2.jpg',
                    ]
                ]
            ],
        ]
    ]
];