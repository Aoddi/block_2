<?php

$result3 = [
    'authors' => [
        'sssss.ya.ru' => 
        [
            'fullName' => 'Feoktistov Artyom Andreevich',
            'yearOfBirth' => 1965,
        ],
        'ivaaan.ya.ru' => 
        [
            'fullName' => 'Ivanov Ivan Ivanovich',
            'yearOfBirth' => 1984,
        ]
    ],
    'books' => [
        [
            'name' => 'lolomg',
            'mail' => 'ivaaan.ya.ru',
        ],
        [
            'name' => '42',
            'mail' => 'sssss.ya.ru',
        ]
    ]
];

foreach ($result3['books'] as $book) {
    var_dump("Книга {$book['name']}, ее написал {$result3['authors'][$book['mail']]['fullName']} {$result3['authors'][$book['mail']]['yearOfBirth']} ({$book['mail']})");
}

shuffle($result3['books']);

foreach ($result3['books'] as $book) {
    var_dump("Книга {$book['name']}, ее написал {$result3['authors'][$book['mail']]['fullName']} {$result3['authors'][$book['mail']]['yearOfBirth']} ({$book['mail']})");
}