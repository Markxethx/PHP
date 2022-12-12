<?php

// echo - output strings, numbers, html, etc

//echo 123, 'hello', 10.5


// print is like an echo but only take single argument;
// print 123
//  print_r([1,2,3]);
// var_dump() - returns more info like data types and lengths
// var_dump("Hello");
// var_dump(true)

// var_export() - similar to var_dump(). Output a string representation of variables

// var_export('hello')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Post One'; ?></h1>
    <!--short hand of php and echo-->
    <h1><?= 'i believe' ?></h1>
</body>
</html>

//this is good
