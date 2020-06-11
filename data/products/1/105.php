<?php

return [
    'category_id' => 1,
    'id' => 105,
    'data' => [
        'title' => 'Ребра',
        'image' => IMAGE_DIR . '1.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing.',
        'price' => 370, // Цена за кг
        'unit' => 'кг',
        'input_type' => 'count',
        'options' => [
            [
                'code' => 'piece_size',
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
    ]
];