<?php

return [
    'category_id' => 4,
    'id' => 401,
    'data' => [
        'title' => 'Целиком',
        'image' => IMAGE_DIR . '1.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
        'price' => 180,
        'unit' => 'кг',
        'input_type' => 'weight',
        'options' => [
            getMarinadeOption(generateRandomIntArray(6, 1, 20)),
            getSpiceOption(generateRandomIntArray(6, 1, 17)),
        ]
    ]
];
