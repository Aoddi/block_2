<?php

$title = 'Hello, World';
$red = (bool) rand(0, 1);

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
        ],
    ]
];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Заголовок</title>
    <style type="text/css">
        .red {
            color: red;
        }
    </style>
</head>

<body>
    <h1 <?php if ($red) :?>class="red"<?php endif?>>Заголовок</h1>
    <div>Авторов на портале <?= count($result3['authors']) ?></div>
    <!-- Выведите все книги -->
    <?php foreach ($result3['books'] as $book):?>
    <p>
        Книга <?= $book['name'] ?>, ее написал
        <?= $result3['authors'][$book['mail']]['fullName'] ?>
        <?= $result3['authors'][$book['mail']]['yearOfBirth'] ?>
        (<?= $book['mail'] ?>)
    </p>
    <?php endforeach?>

</body>
</html>