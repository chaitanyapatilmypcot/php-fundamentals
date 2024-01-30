<?php 

// 1.Array
$names = [
    'Jeff',
    'Chaitanya',
    'Himanshu'
];

$animals = [
    'Tiger',
    'Lion', 
    'Wagh'
];

// 1.1 add in normal array

$animals[] = 'dog';

// 2. Associative array
$persons = [
 'name' => 'Chaitanya',
 'age' => 31,
 'career' => 'web developer'
];

// 2.1add in associate array

$persons['sex'] = 'male';

// printing array
// echo '<pre>';
// var_dump($persons); //dump the variable info and don't continue using die function further
// echo '<pre>';


// 2.2 Task - Make todo asssociate List
$task = [
'title' => 'Create Register and login page',
'due' => 'This week',    // can use timetamp
'assigned_to' => 'Chaitanya Patil',
'completed' => false
];


// 3 Task - Functions and Filtering 

$books = [
    [
        'name' => 'Project Hail Merry',
        'author'=> 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'https://example.com',
    ],
    
    [   

        'name' => 'The Martian',
        'author'=> 'Andy sandy',
        'releaseYear' => 2011,
        'purchaseUrl' => 'https://example.com',
    ],
];














require 'index.view.php';