<?php

$y = 12;

function registerUser($email)
{
    //Global variable accessor
    global $y;
    echo $y;

    $x = 10; //Inside the function scope
    echo $email; //Printing the arguments
    echo 'User Registers';
}

//X is not defined as the x inside function is inside it's scope
echo $x;
registerUser('xyz@example.com');

function sum($n, $m)
{
    return $n + $m;
}

echo sum(1, 3);

//Anonymous functions
$subtract = function ($n1, $n2) {
    return $n1 - $n2;
};

//Arrow functions
$multiply = fn ($n1, $n2) => $n1 * $n2;

echo $multiply(3, 4);
echo $subtract(1, 2);
