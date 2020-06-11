<?php

return [
    'category_id' => 2,
    'id' => 202,
    'data' => [
        'title' => 'Корейка',
        'image' => '2.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
        'options' => [
            [
                'code' => 'slicing',
                'title' => 'Нарезка',
                'required' => true,
                'values' => [
                    [
                        'title' => 'Большой кусок (Только кость)',
                        'price' => 530, // Цена за кг
                        'image' => '2.jpg','unit' => 'кг',
                        'options' => [
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Мякоть шеи',
                        'price' => 550, // 580
                        'image' => '2.jpg',
                        'unit' => 'кг',
                        'options' => [
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Куски (БК)',
                        'price' => 580,
                        'image' => '2.jpg',
                        'unit' => 'кг',
                        'options' => [
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Фарш',
                        'price' => 580,
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
