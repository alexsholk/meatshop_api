<?php

return [
    'category_id' => 2,
    'id' => 204,
    'data' => [
        'title' => 'Филейный край',
        'image' => '1.jpg',
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
                        'image' => '2.jpg',
                        'unit' => 'кг',
                        'options' => [
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Стейк',
                        'price' => 550,
                        'image' => '2.jpg',
                        'unit' => 'кг',
                        'options' => [
                            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
                            getSpiceOption(generateRandomIntArray(6, 1, 17)),
                        ]
                    ],
                    [
                        'title' => 'Куски',
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