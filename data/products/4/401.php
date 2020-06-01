<?php

return [
    'category_id' => 4,
    'id' => 401,
    'data' => [
        'title' => 'Целиком',
        'long_title' => 'Курица целиком',
        'image' => '1.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
        'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
        'props' => ['Удельный вес тканей', 'Жировая ткань: 5\10', 'Мышечное волокно: 4\10', 'Соединительная ткань: 1\10', 'Кости: 2\10'],
        'price' => 180,
        'options' => [
            'slicing' => false,
            'marinade' => [
                'title' => 'Маринад',
                'required' => false,
                'values' => [
                    [
                        'title' => 'Острый',
                        'price_multiplier' => 1.3,
                    ],
                    [
                        'title' => 'Горчичный',
                        'price_multiplier' => 1.3,
                    ],
                    [
                        'title' => 'Терияки',
                        'price_multiplier' => 1.3,
                    ],
                    [
                        'title' => 'Ореховый',
                        'price_multiplier' => 1.3,
                    ],
                    [
                        'title' => 'Барбекю',
                        'price_multiplier' => 1.3,
                    ],
                    [
                        'title' => 'Чесночный',
                        'price_multiplier' => 1.3,
                    ],
                ]
            ],
            'spice' => [
                'title' => 'Специи',
                'required' => false,
                'values' => [
                    [
                        'title' => 'Приправа для гриля с солью',
                        'price_multiplier' => 1.15,
                    ],
                    [
                        'title' => 'Карри острая',
                        'price_multiplier' => 1.15,
                    ],
                    [
                        'title' => 'Пять перцев',
                        'price_multiplier' => 1.15,
                    ],
                    [
                        'title' => 'Корейская',
                        'price_multiplier' => 1.15,
                    ],
                    [
                        'title' => 'Для курицы',
                        'price_multiplier' => 1.15,
                    ],
                    [
                        'title' => 'Чесночная',
                        'price_multiplier' => 1.15,
                    ],
                ]
            ]
        ]
    ]
];
