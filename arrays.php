<?php
// Arrays are used like all other languages with $name[number of index] to access elements
$numbers = [1, 2, 3];
$fruits = ['apple', 'orange'];

//Associative Array
$color = [
    1 => 'red',
    2 => 'blue',
    3 => 'green'
];

$hex = [
    'black' => '#111',
    'white' => '#FFF'
];

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy'
];

//Access blue color
echo $color[2];

var_dump($numbers);

//Multi Dimnetional or Nested Arrays
$people = [
    [
        'first_name' => 'john',
        'last_name' => 'doe',
        'email' => 'john.doe@example.com'
    ],
    [
        'first_name' => 'john',
        'last_name' => 'doe',
        'email' => 'john.doe@example.com'
    ],
];

//Displays the nested array in JSON format
var_dump(json_encode($people));
