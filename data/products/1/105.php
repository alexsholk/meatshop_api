<?php

return [
    'category_id' => 1,
    'id' => 105,
    'data' => [
        'title' => 'Ребра',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing.',
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
    ]
];