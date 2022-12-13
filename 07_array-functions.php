<?php
// $fruit = ['apple', 'orange' ,'pear', 'mango', 'banana'];

//count or length in javascript
// echo count($fruit);

//to search if the item is in the array

// var_dump(in_array('apple', $fruit));

//adding item to an array
// $fruit[] = 'grapes';
// array_push($fruit, 'mango', 'strawberry');
// array_unshift($fruit, 'mangos');
// /* -----remove from array ------*/
// array_pop($fruit);
// array_shift($fruit);

//chunked every item in the array to specific number, remmber that debugging array is in the object with indexes

// $chunked_array = array_chunk($fruit, 2);
// print_r($chunked_array);
// print_r($fruit); //in printing array in the dom for debugging, we need ot use print_r not echo, print-r are us in arrays and objects

/* -------adding two arrays -------- */
// $arr1 = [1 , 2 , 3];
// $arr2 = [4, 5 ,6];

// $arr4 = array_merge($arr1, $arr2); //just like concat in javascript

// //using spread operator
// $arr5 = [...$arr1, ...$arr2];

// print_r($arr5)

/* ------ array_combine --------- */
//it means combing those two array, one being most likely the index and the other is the value
//will almost look like an object
// $a = ['firstName', 'name', 'lastName'];
// $b = ['mark', 'john', 'saspa'];
// $c = array_combine($a,$b);


//keys
// $keys = array_keys($c);
// print_r($keys);
// $c = array_keys($a, $b);


//flipped
// $flipped = array_flip($c);
// $c = array_flip($a, $b);
// print_r($flipped)

/* ------number ranges --------*/
$numbers = range(1, 30);
// print_r($numbers)

/* ------map-------- */

// $newNumbers = array_map(function($param) {
//     return "Number is $param";
// }, $numbers);
// print_r($newNumbers);

// //using filter

// $filter = array_filter($numbers, function($num) {
//     return $num <=10;
// });

//using shorthand
// $filter = array_filter($numbers, fn($nums) => $nums <= 10);

// print_r($filter)

//reduce
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);

?>