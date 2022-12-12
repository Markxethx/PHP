<?php
// 2 types to write an array
// $numbers = [1 , 2, 3, 4, 5];
// $fruits = array("apple", "banana", "orange");
// var_dump($numbers);
// echo $number

// echo $fruits[0]

// associative array

// $color = [
//     1 => 'blue',
//     3 => 'red',
//     6 => 'orange'
// ];

// echo $color[6];

// $hex = [
//     'red' => '#f00',
//     'blue' => '#0f0',
//     'green' => '#00f'
// ];

// echo $hex['red']

$people = [
    ['first_name' => 'mark',
    'last_name' => 'saspa',
    'email' => 'mark@gmail.com'
    ],
    ['first_name' => 'john',
    'last_name' => 'doe',
    'email' => 'john@gmail.com'
    ],
    ['first_name' => 'sofia',
    'last_name' => 'saspa',
    'email' => 'sofia@gmail.com'
    ]
];

echo $people[2]['first_name']
?>