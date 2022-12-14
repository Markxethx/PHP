<?php

// if (isset($_POST['submit'])) { //but still, this may output some unwanted input
//     echo $_POST['name'];
//     echo $_POST['age'];
// }

if (isset($_POST['submit'])) {
    
    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    //we can also use this one

    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
    echo $age;
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=john&age=30">Click Me</a>

<!--in php name is very important -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

        <label for="name">Name:</label>
        <input type="text" name="name">


        <label for="age">Age:</label>
        <input type="text" name="age">

<input type="submit" name="submit">
</form>