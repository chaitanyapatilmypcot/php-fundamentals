<?php

$arr=[1,2,3];

// Array Functions

// 1. count()
// echo count($arr);

// 1.1 Print whole array

// var_dump($arr);
// print_r($arr); 

//2. Loop through array items (indexed)

// foreach ($arr as $item) {
//     echo $item . "<br>";
// }

//2.1 push at last 

    // array_push($arr, 4);
    // print_r($arr);

// 3. Associative Arrays

// $books = [

//     'name' => 'Bhagwat Geeta',
//     'author' => 'Shri. Kripaluji Maharaj',
// ];

// print_r($books['author']);



// 3.1 Creating - Print Keys

// foreach ($books as $key => $value) {
//     echo $key . "<br>";
// }

// 3.2 declare and later assign array

// $movies = [];

// $movies['name'] = 'Ford Vs Ferrari';

// print_r($movies);


// 3.3 Accessing - Function in arrays


function introduction() {
    echo "<br> This is call for associate array. ";  
}

function myFunction($arr2, $arr3) {
    if ($arr2 === $arr3) {
         return 0;
    } 
    return ($arr2>$arr3) ? 1:-1;
 }
 

// $arr1 = [4,5,6];
// $sample = [4,2,3];

$arr2 = [

'name' => 'Chaitanya Patil',
'college' => 'vcet',
'messages' => introduction(),

];

$arr3 = [

    'name' => 'Varun Patil',
    'college' => 'vcet',
    'message' => introduction(),   
    
];

//call index array
// $arr1[2]();


//associate array
// $arr['message']();


//$arr1 = [4,5,6,7,8,9];
// 4 .Remove Array Item 
// unset($arr1);
// print_r($arr1);


// 5. splice 

// array_splice($arr2, 1,2);
// print_r($arr2);



// 6. Sorting  
// sort($arr1)
// rsort($arr1);
// print_r($arr1);


// 6.1 sorting asssociate arr by value

// asort($arr2);         //asscending
// arsort($arr2);       //descending
// print_r($arr2);


// 6.2 by key

// ksort($arr2);       //asc
// krsort($arr2);      //desc
// print_r($arr2);


// 2d array 
$movies = [
    ['movie' => 'interstellar',
    2010,
    9.8
    ],

    ['movie' => "tenet",
    2022,
    8.9
    ],
];

// 7. Change key case
// print_r(array_change_key_case($arr2, CASE_UPPER));


// 8. array_chunk - mak arr into desired chunks
// print_r(array_chunk($arr1, 1));


// 9. Display a praticular column from db or arr
// print_r(array_column($movies, 'movie'));


//10. Combine Two Arrays to make a key and value pair                     
                        //key  //value
//  print_r(array_combine($arr1, $sample));


// 11. Count the no of occurence (frequency) of all values of an array 
// print_r(array_count_values($arr1));


// 12. Difference in two Arrays that will be printed
// print_r(array_diff($arr1, $sample));


// 13. Diff in associate array
// print_r(array_diff_assoc($arr2, $arr3));


// 14. Diff in Keys -> will return the colunm/entries that are in arr1 and not in other
//   print_r(array_diff_key($arr2, $arr3));


// 15. diff in assoc arr while checking key & value pairs and a user made function
// print_r(array_diff_uassoc($arr2, $arr3, "myFunction"));


// 16. diff in keys check only key 
// print_r(array_diff_ukey($arr2, $arr3, "myFunction"));


// 17. array_fill() - fill values in array
// print_r(array_fill(0, 1, "blue"));


// 18. array_fill_keys - fill with keys and values
// $keys = ['a','b'];
// print_r(array_fill_keys($keys, "blue"));

// 19. array_filter() - filter based on the user function or condition
// print_r(array_filter($arr1, function ($ele) {
//     return ($ele & 1);
// }));

// 20 . array_flip() - exchange key and value pairs 
// print_r(array_flip($arr3));

// 21. Compare the two arrays (Values) and give the matching values
// print_r(array_intersect($arr2, $arr3));

//22 . array_intersect_assoc($a1, $a2, $a3) - check key and values

// 23. array_intersect_uassoc($a1, $a2 , "myFunction") - check key and values with user defined function

//24. array_intersect_ukey($a1, $a2, "myFunction")

// 25. array_key_exits("key_name" , $arr);

//26. array_keys($arr);

// 27. array_map('myfunction', $arr1);

// 28. array_merge($arr1, $arr2); - merges two arrays and overides the same key with the last value 

// 29. array_merge_recursive($arr1, $arr2); - merges two arrays with same key as one more array

// 30. array_multisort($a1,SORT_ASC, $a2, SORT_DESC); - Sort more than two arrays in the ascending order.

// 31. array_pad($arr, 5, 'blue') - make arr of 5 size and append 'blue' after $arr is finished, and if -5 the 'blue' will start from starting.

// 32. array_pop($arr) ; array_product($arr); array_push($arr, "blue"); array_rand($arr, 1);

//33. array_reduce($arr1, "myFunction"); array_replace();

//34. array_replace_recursive($arr, $arr2) 

//35. array_reverse($arr);

//36. array_search('red', $arr);

// 37. array_shift($arr1) : Remove the first element (red) from an array, and return the value of the removed element:

//38. array_slice($arr, 1, 2)

//39. Splice()

$arr1 = [4,5,6,7,8,9];
$sample = [4,2,3];

array_splice($arr1, 1, 2, $sample);
 //array_splice($arr1, count($arr1), 0, $sample); // Remove elements from an array and replace it with new elements:
 print_r($arr1);


 // 40 Check Values - Check key and values with user function
 //array_udiff(); array_udiff_assoc(); array_udiff_uassoc();
//array_uintersect(); array_uintersect_assoc(); array_uintersect_uassoc();

 // 41. array_values($arr); - values of the assoc array and not the key

 // 42. array_walk($a, "myfunction");

 //43.