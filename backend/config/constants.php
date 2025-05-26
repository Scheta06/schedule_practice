<?php

return [
    'seed' => [
        /*Начальные данные для пользователя*/
        'UserSeeder' => [
            'surname' => 'Кононов',
            'name' => 'Андрей',
            'patronymic' => 'Николаевич',
            'email' => 'user@example.com',
            'password' => '123123123',
            'role' => 'admin',
        ],
        /*Начальные данные для марок авто*/
        'MarkSeeder' => [
            'toyota',
            'mazda',
            'nissan',
            'mitsubishi',
        ],
        /*Начальные данные для категорий*/
        'CategorySeeder' => [
            'Ежегодное ТО',
            'Штрафы',
            'Бензин',
            'Страховка',
            'Другое',
        ],
        /*Начальные данные для поколений авто*/
        'GenerationSeeder' => [
            'x100',
            'x90',
            'VIII',
            'VII',
            'VI',
            'V',
        ],
        /*Начальные данные для моделей авто*/
        'PatternSeeder' => [
            [
                'title' => 'mark 2',
                'marks_id' => 1,
                'generation_id' => 1,
            ],
            [
                'title' => 'corolla levin',
                'marks_id' => 1,
                'generation_id' => 5,
            ],
        ],
        /*Начальные данные для расходов на авто*/
        'ExtenseSeeder' => [
            [
                'title' => 'Забыл оплатить штраф',
                'cost' => 800,
                'user_id' => 1,
                'category_id' => 2,
            ],
            [
                'title' => 'Записался на ТО',
                'cost' => 20000,
                'user_id' => 1,
                'category_id' => 1,
            ],
        ],
        /*Начальные данные для авто пользователя*/
        'CarSeeder' => [
            [
                'user_id' => 1,
                'pattern_id' => 1,
                'extense_id' => 1,
            ],
        ],
    ],
];
