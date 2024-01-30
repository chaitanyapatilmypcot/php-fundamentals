<?php 


$books = [
    [
        'name' => 'Project Hail Merry',
        'author'=> 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'https://example.com',
    ],
    
    [   

        'name' => 'The Martian',
        'author'=> 'martian',
        'releaseYear' => 2011,
        'purchaseUrl' => 'https://example.com',
    ],
    [   

        'name' => 'The Martian',
        'author'=> 'hemanshu',
        'releaseYear' => 2011,
        'purchaseUrl' => 'https://example.com',
    ],
];


$movies = [
    [
        'name' => 'Back to the Future',
        'releaseYear' => 1985,
    ],

    [
        'name' => "Weekend at Bernie's",
        'releaseYear' => 1989,
    ],

    [
        'name' => 'Pirates of the Caribbean',
        'releaseYear' => 2000,
    ],

    [
        'name' => 'Interstellar',
        'releaseYear' => 2014,
    ],
];

// 1. Movie filter by year Function
// function filterByRecent($movies)
//     {
//         $filteredMovies = [];

//         foreach ($movies as $movie) {
//             if ($movie['releaseYear'] >= 2000) {
//                 $filteredMovies[] = $movie;
//             }
//         }

//         return $filteredMovies;
//     }

// 2. Filter books with Authors name (refactored using lambda funtions)
// function filter($items,$fn) { 

//     $filteredItems = [];
    
//     foreach ($items as $item) {
//         if ($fn($item)) {
//             $filteredItems[] = $item;
//         }
//     }
        
//     return $filteredItems;
// }   


// Using Anonymys function to have a hand on how we want to manipulate data


$filteredBooks = array_filter($books, function($book) {
    return $book['author'] === 'Andy Weir';
});


$filteredMovies = array_filter($movies, function($movie) {
    return $movie['releaseYear'] >= 2000;
});

require "index.view.php";

    

