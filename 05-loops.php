<?php

//for loops
// for ($x = 1; $x < 10; $x ++) {
//     echo $x; // do not forget this semi colon, it is very important, otherwise your code will break
// }

/* ---------- while loops ---------- */
// $x = 1;
// while ($x < 5) {
//     echo "Number $x <br/>";
//     $x++;
// }

/* ---------- do while loops syntax ------------*/

// $x = 1;

// do {
//     echo "Number $x "; // even if the starting point are not in the conditional, it will run, because this line is first before the condition
//     $x++;
// } while ($x <5);

$posts = ["array1", "array2", "array3"];

// for ($x = 0; $x < count($posts); $x++) {
//     echo "wahha";
// }

// foreach($posts as $post) { //just like other loops
//     echo $post;
// }

// if you want to add the indexes using foreach
foreach($posts as $indexes => $apple) { //note that $index is a built in process in php we do not need to define him
    echo "$indexes - $apple <br />";
}


/* ---------here we will specif another value of array ---------- */

$posts = [
    "name" => "mark",
    "last" => "saspa",
    "email" => "mark@gmail.com"
];

foreach($posts as $keyssfs => $values) {
    echo "$keyssfs - $values <br/>";
}
?>