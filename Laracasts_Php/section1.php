<?php

$books = [
    [
        'name' => 'A Gentleman In Moscow',
        'author' => 'Amor Towels',
        'releaseYear' => '2009',
        'purchaseUrl' => 'https://example.com'
    ],
    [
        'name' => 'Ants',
        'author' => 'Bernard Ferber',
        'releaseYear' => '2003',
        'purchaseUrl' => 'https://example.com'
    ],
    [
        'name' => 'Day of Ants',
        'author' => 'Bernard Ferber',
        'releaseYear' => '2005',
        'purchaseUrl' => 'https://example.com'
    ],
    [
        'name' => 'Revolution of Ants',
        'author' => 'Bernard Ferber',
        'releaseYear' => '2007',
        'purchaseUrl' => 'https://example.com'

    ]
];

$filterBooks = array_filter($books, function ($book)
{
    return $book['releaseYear'] >= 2003 && $book['releaseYear'] <= 2007;
});

require('index.view.php');
