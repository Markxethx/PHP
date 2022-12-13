<?php
//function has it's own socket_getpeername
// $y = 10;
// function random() { //it will not run because even if it's global, we cannot call it locally
//     echo $y;
// }
// random()


//to get the global defined item we need to specify inside a function

// $y = 10;
// function print_me() {
//     global $y; //here we specify to be a global
//     echo $y;
// }

// print_me()

//using return

// function numbers($n1, $n2) {
//     return $n1 + $n2;
// }

// echo numbers(2,3); //we can use echo to print it in the dom, 

// $newNumbers = numbers(3, 4);
// echo $newNumbers

//writing is as defined function

// $subtract = function($n1 , $n2) { // in js we write it as const apple = () => {}
//     return $n1 - $n2;
// };

// echo $subtract(3 ,2)

//using arrow function

$multiply = fn($n1, $n2) => $n1 * $n2; //arrow function uses fn, define name = fn (argument) => conditions

echo $multiply(3, 7)

// $dob = function ($age) {
//     if (!$age) { return null; }
//     $new_age = 2021 - ^$age; 
//     echo "Your new age is ". $new_age;

//     return $new_age;
// }
?>