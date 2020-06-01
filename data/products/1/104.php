<?php

return [
    'categoryId' => 1,
    'id' => 104,
    'data' => [
        'title' => 'Грудинка',
        'longTitle' => 'Грудинка свиная',
        'image' => '2.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maiores mollitia nihil sint vero?',
        'nutrients' => ['p' => 23, 'f' => 34, 'c' => 28, 'e' => 435],
        'props' => ['Удельный вес тканей', 'Жировая ткань: 5\10', 'Мышечное волокно: 4\10', 'Соединительная ткань: 1\10', 'Кости: 2\10'],
        'options' => [
            'slicing' => [
                'title' => 'Нарезка',
                'required' => true,
                'values' => [
                    [
                        'title' => 'Отсутствует',
                        'price' => 340, // Цена за кг
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Бекон',
                        'price' => 360,
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Куски',
                        'price' => 360,
                        'image' => '2.jpg',
                    ],
                    [
                        'title' => 'Фарш',
                        'price' => 360,
                        'image' => '2.jpg',
                    ]
                ]
            ]
        ]
    ]
];