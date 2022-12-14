<?php

setcookie('name', 'mark', time() + 84600);

//to log it out in the DOM
if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

//to unset the cookie
setcookie('name', '', time() - 84600);
?>