<?php
    // date_default_timezone_set("Philippines/Manila");
    // $t = date('h'); //in php string is not just a string, it' a declaration of something
    // echo $t;
    // if ($t < 12) {
    //     echo 'Good Morning';
    // } else if ($t < 17) {
    //     echo 'Good Afternoon';
    // } else {
    //     echo 'Good Evening';
    // }


    // $posts = ['something'];

    // if (!empty($posts)) {
    //     echo 'its empty';
    // } else {
    //     echo 'its not empty';
    // }

    // good to remember that $something is like const or let in javascript
        // $posts = ['apple'];

        //$firstPosts = !empty($posts) ? "i love you" : "i do not love you";
        //we can use this too

        // $firstPosts = $posts[0] ?? null;
        // echo $firstPosts

    $favcolor = 'neon';

    switch($favcolor){
        case 'red' :
            echo "your favorite color is red";
            break;
        case 'blue' :
            echo "your favorite color is blue";
            break;
        case 'violet' :
            echo "your favorite color is violet";
        break; case 'pink' :
            echo "your favorite color is pink";
            break;
        default :
            echo "bigat mo";
    }

?>