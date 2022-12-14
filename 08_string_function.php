<?php

$string = "Hello World";
/* ----- strlen is for the length of the string ----- */
// echo strlen($string);


/* ---- find the position of the first occurrence of a substring in a string -------*/
// echo strpos($string, 'o');


/*------  find the position of the last occurrence of a substring in a string -------*/
// echo strrpos($string, 'o');


/* ------   reverse a string ------- */
// echo strrev($string);

/* ---- convert a string to lower case ------- */
// echo strtolower($string);

/* ------ convert a string to upper case ------- */
// echo strtoupper($string);

/* ------ upper case for only the first letter of the words */
// echo ucwords($string);

/* -------change words in a string ------ */
// echo str_replace('World' , 'Everyone', $string);

/* ------ return specific string base on its offset value and length ----- */
// echo substr($string, 0 , 5); // 0 index to  5 index
// echo substr($string, 5); // 5 index up

/* ------- starts with ------ */

// if (str_starts_with($string, 'Hello')) {
//     echo 'yes';
// }

// /* --------- ENDS WITH ---------- */
// if (str_ends_with($string, 'World')) {
//     echo "Yes";
// }


/*---- special chars to specify that it was html entity ---- */
$string2 = '<h1>Apple </h1>';
echo $string2;

$string3 = '<script>alert(1)</script>'; //this will run as script
// echo $string3;
//but if we use special chars
echo htmlspecialchars($string3); // it will run as natural html

/* using specifier and printf() */
printf('%s is the founder of the %s', 'mark', 'future');
//it will print mark is the founder of the future
//useful for generating data

printf('1+1 = %s', 1+1); //no decimal, integer
printf('1+1=%f', 1+1)

?>