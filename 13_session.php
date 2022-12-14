<?php

// if (isset($_POST['submit'])) { //but still, this may output some unwanted input
//     echo $_POST['name'];
//     echo $_POST['age'];
// }


session_start();
if (isset($_POST['submit'])) {
    
    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    //we can also use this one

    $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
    
    $password = $_POST['password'];

    if ($username == 'john' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: /php-crash/extras/dashboard.php');
    } else {
        echo 'Incorrect Password';
    }
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=john&age=30">Click Me</a>

<!--in php username is very important -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

        <label for="username">username:</label>
        <input type="text" name="username">


        <label for="password">Password:</label>
        <input type="password" name="password">

<input type="submit" name="submit">
</form>