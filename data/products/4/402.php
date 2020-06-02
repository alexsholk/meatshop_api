<?php

return [
    'category_id' => 4,
    'id' => 402,
    'data' => [
        'title' => 'Грудка',
        'long_title' => 'Грудка (курица)',
        'image' => '2.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
        'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
        'props' => ['Удельный вес тканей', 'Жировая ткань: 5\10', 'Мышечное волокно: 4\10', 'Соединительная ткань: 1\10', 'Кости: 2\10'],
        'options' => [
            [
                'code' => 'slicing',
                'title' => 'Нарезка',
                'required' => true,
                'exclusive' => true,
                'values' => [
                    [
                        'title' => 'Большой кусок',
                        'price_per_unit' => 260, // Цена за кг
                        'image' => '2.jpg',
                        'unit' => 'кг',
                        'options' => [
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Филе',
                        'price_per_unit' => 280,
                        'image' => '2.jpg',
                        'unit' => 'кг',
                        'options' => [
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Куски',
                        'price_per_unit' => 290,
                        'image' => '2.jpg',
                        'unit' => 'кг',
                        'options' => [
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Фарш',
                        'price_per_unit' => 290,
                        'image' => '2.jpg',
                        'unit' => 'кг',
                        'options' => [
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ]
                ]
            ]
        ]
    ]
];