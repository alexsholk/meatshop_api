<?php

return [
    'categories' => [
        [
            'id' => 1,
            'parentId' => null,
            'data' => [
                'slug' => 'pork',
                'title' => 'Свинина'
            ]
        ],
        [
            'id' => 2,
            'parentId' => null,
            'data' => [
                'slug' => 'beef',
                'title' => 'Говядина'
            ]
        ],
        [
            'id' => 3,
            'parentId' => null,
            'data' => [
                'slug' => 'mutton',
                'title' => 'Баранина'
            ]
        ],
        [
            'id' => 4,
            'parentId' => null,
            'data' => [
                'slug' => 'chicken',
                'title' => 'Курица'
            ]
        ],
    ],
    'products' => [
        // ========================== Свинина ==========================
        [
            'categoryId' => 1,
            'id' => 101,
            'data' => [
                'title' => 'Шея',
                'longTitle' => 'Шея свиная',
                'image' => '1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque odio nesciunt quibusdam, inventore quam maiores.',
                'nutrients' => ['p' => 24, 'f' => 35, 'c' => 21, 'e' => 472],
                // Опции товара
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Большой кусок',
                                'price' => 540, // Цена за кг
                                'options' => [
                                    [
                                        'code' => 'piece_size',
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
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 550,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 550,
                            ]
                        ]
                    ],
                ]
            ]

        ],
        [
            'categoryId' => 1,
            'id' => 102,
            'data' => [
                'title' => 'Корейка',
                'longTitle' => 'Корейка свиная',
                'image' => '2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'nutrients' => ['p' => 26, 'f' => 32, 'c' => 28, 'e' => 452],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Отсутствует',
                                'price' => 370, // Цена за кг
                            ],
                            [
                                'title' => 'Стейк',
                                'price' => 390, // 450
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 450,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 450
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'categoryId' => 1,
            'id' => 103,
            'data' => [
                'title' => 'Окорок мякоть',
                'longTitle' => 'Окорок свиной',
                'image' => '1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, facere, nulla.',
                'nutrients' => ['p' => 22, 'f' => 37, 'c' => 25, 'e' => 460],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Отсутствует',
                                'price' => 450, // Цена за кг
                            ],
                            [
                                'title' => 'Стейк',
                                'price' => 460,
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 460,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 460
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'categoryId' => 1,
            'id' => 104,
            'data' => [
                'title' => 'Грудинка',
                'longTitle' => 'Грудинка свиная',
                'image' => '2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque maiores mollitia nihil sint vero?',
                'nutrients' => ['p' => 23, 'f' => 34, 'c' => 28, 'e' => 435],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Отсутствует',
                                'price' => 340, // Цена за кг
                            ],
                            [
                                'title' => 'Бекон',
                                'price' => 360,
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 360,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 360
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'categoryId' => 1,
            'id' => 105,
            'data' => [
                'title' => 'Ребра',
                'longTitle' => 'Ребра свиные',
                'image' => '1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing.',
                'nutrients' => ['p' => 24, 'f' => 35, 'c' => 21, 'e' => 472],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Отсутствует',
                                'price' => 350, // Цена за кг
                            ],
                        ]
                    ]
                ]
            ]
        ],
        [
            'categoryId' => 1,
            'id' => 106,
            'data' => [
                'title' => 'Лопатка',
                'longTitle' => 'Лопатка свиная',
                'image' => '2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Отсутствует',
                                'price' => 350, // Цена за кг
                            ],
                            [
                                'title' => 'Стейк',
                                'price' => 390,
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 390,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 390
                            ]
                        ]
                    ]
                ]
            ]
        ],
        // ========================== Говядина ==========================
        [
            'categoryId' => 2,
            'id' => 201,
            'data' => [
                'title' => 'Шея',
                'longTitle' => 'Шея (говядина)',
                'image' => '2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Большой кусок (Только кость)',
                                'price' => 520, // Цена за кг
                            ],
                            [
                                'title' => 'Мякоть шеи',
                                'price' => 520,
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 550,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 550
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'categoryId' => 2,
            'id' => 202,
            'data' => [
                'title' => 'Корейка',
                'longTitle' => 'Корейка (говядина)',
                'image' => '2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Большой кусок (Только кость)',
                                'price' => 530, // Цена за кг
                            ],
                            [
                                'title' => 'Мякоть шеи',
                                'price' => 550, // 580
                            ],
                            [
                                'title' => 'Куски (БК)',
                                'price' => 580,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 580
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'categoryId' => 2,
            'id' => 203,
            'data' => [
                'title' => 'Вырезка',
                'longTitle' => 'Вырезка (говядина)',
                'image' => '1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Большой кусок (Только кость)',
                                'price' => 1600, // Цена за кг
                            ],
                            [
                                'title' => 'Стейк',
                                'price' => 1700,
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 1700,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 1700
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'categoryId' => 2,
            'id' => 204,
            'data' => [
                'title' => 'Филейный край',
                'longTitle' => 'Филейный край (говядина)',
                'image' => '1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Большой кусок (Только кость)',
                                'price' => 530, // Цена за кг
                            ],
                            [
                                'title' => 'Стейк',
                                'price' => 550,
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 580,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 580
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'categoryId' => 2,
            'id' => 205,
            'data' => [
                'title' => 'Мякоть. Яблочко',
                'longTitle' => 'Мякоть. Яблочко (говядина)',
                'image' => '1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Большой кусок',
                                'price' => 700, // Цена за кг
                            ],
                            [
                                'title' => 'Стейк',
                                'price' => 750,
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 750,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 750
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'categoryId' => 2,
            'id' => 206,
            'data' => [
                'title' => 'Мякоть. Лопатка',
                'longTitle' => 'Мякоть. Лопатка (говядина)',
                'image' => '2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Большой кусок',
                                'price' => 630, // Цена за кг
                            ],
                            [
                                'title' => 'Стейк',
                                'price' => 650,
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 650,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 650
                            ]
                        ]
                    ]
                ]
            ]
        ],
        // ========================== Баранина ==========================
        [
            'categoryId' => 3,
            'id' => 301,
            'data' => [
                'title' => 'Шея',
                'longTitle' => 'Шея (баранина)',
                'image' => '2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Большой кусок (Только кость)',
                                'price' => 470, // Цена за кг
                            ],
                            [
                                'title' => 'Стейк',
                                'price' => 490,
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 0, // not active
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 550
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'categoryId' => 3,
            'id' => 302,
            'data' => [
                'title' => 'Корейка',
                'longTitle' => 'Корейка (баранина)',
                'image' => '1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Большой кусок (Только кость)',
                                'price' => 600, // Цена за кг
                            ],
                            [
                                'title' => 'Пистолетики',
                                'price' => 630,
                            ],
                            [
                                'title' => 'Куски (БК)',
                                'price' => 0,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 0
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'categoryId' => 3,
            'id' => 303,
            'data' => [
                'title' => 'Спина',
                'longTitle' => 'Спина (баранина)',
                'image' => '2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Большой кусок (Только кость)',
                                'price' => 530, // Цена за кг
                            ],
                            [
                                'title' => 'Стейк (Только кость)',
                                'price' => 550,
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 0,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 0
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'categoryId' => 3,
            'id' => 304,
            'data' => [
                'title' => 'Лопатка',
                'longTitle' => 'Лопатка (баранина)',
                'image' => '1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Большой кусок (Только кость)',
                                'price' => 550, // Цена за кг
                            ],
                            [
                                'title' => 'Стейк (Только кость)',
                                'price' => 580,
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 0,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 580
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'categoryId' => 3,
            'id' => 305,
            'data' => [
                'title' => 'Нога',
                'longTitle' => 'Нога (баранина)',
                'image' => '2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Большой кусок',
                                'price' => 570, // Цена за кг
                            ],
                            [
                                'title' => 'Стейк',
                                'price' => 610,
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 600,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 600
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'categoryId' => 3,
            'id' => 306,
            'data' => [
                'title' => 'Грудинка/Ребра',
                'longTitle' => 'Грудинка/Ребра (баранина)',
                'image' => '1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'options' => [
                    'slicing' => [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Большой кусок',
                                'price' => 450, // Цена за кг
                            ],
                            [
                                'title' => 'Ребра',
                                'price' => 450,
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 0,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 0
                            ]
                        ]
                    ]
                ]
            ]
        ],
        // ========================== Курица ==========================
        [
            'categoryId' => 4,
            'id' => 401,
            'data' => [
                'title' => 'Целиком',
                'longTitle' => 'Курица целиком',
                'image' => '1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'price' => 180,
                'options' => [
                    'slicing' => false
                ]
            ]
        ],
        [
            'categoryId' => 4,
            'id' => 402,
            'data' => [
                'title' => 'Грудка',
                'longTitle' => 'Грудка (курица)',
                'image' => '2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'options' => [
                    'slicing' =>  [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Большой кусок',
                                'price' => 260, // Цена за кг
                            ],
                            [
                                'title' => 'Филе',
                                'price' => 280,
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 290,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 290
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'categoryId' => 4,
            'id' => 403,
            'data' => [
                'title' => 'Крылья',
                'longTitle' => 'Крылья (курица)',
                'image' => '1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'options' => [
                    'slicing' =>  [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Большой кусок',
                                'price' => 165, // 190
                            ],
                        ]
                    ]
                ]
            ]
        ],
        [
            'categoryId' => 4,
            'id' => 404,
            'data' => [
                'title' => 'Ноги',
                'longTitle' => 'Ноги (курица)',
                'image' => '1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae eveniet id iste, omnis possimus velit vitae.',
                'nutrients' => ['p' => 21, 'f' => 28, 'c' => 18, 'e' => 430],
                'options' => [
                    'slicing' =>  [
                        'title' => 'Нарезка',
                        'required' => true,
                        'variants' => [
                            [
                                'title' => 'Большой кусок (только кость)',
                                'price' => 230, // 250/220
                            ],
                            [
                                'title' => 'Филе',
                                'price' => 280,
                            ],
                            [
                                'title' => 'Куски',
                                'price' => 290,
                            ],
                            [
                                'title' => 'Фарш',
                                'price' => 290,
                            ],
                        ]
                    ]
                ]
            ]
        ],
    ]
];