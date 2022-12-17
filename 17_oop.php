<?php
/* From php5 onwards you can write PHP in either a procedural
or Object Oriented way. OOP consists of classes that can hole
"properties" and "methods" . Objects can be created from classes.
*/

class User {
    //properties are attributes that belong to a class

    //access modifiers: public, private, protected
    //public - can be accessed from anywhere
    //private -can only be accessed from inside the class
    //protected - can only be accessed from inside the class and by inheriting classes

    public $name;
    public $age;
    public $email;
    public $password;

    //method is a function that belongs to a class
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    //a constructor is a method that runs when
    //an object is created
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    
}
//instatiate a user object
$user1 = new User('mark', 'mark@gmail.com', '60616');
$user2 = new User('john', 'john@gmail.com', '567144');

// echo $user1->email;
// echo $user2->name;

class Employee extends User {
    public function __construct($name, $email, $password, $title)

    {
        parent::__construct($name, $email, $password, $title);
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->title = $title;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_password() {
        return $this->password;
    }
    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('sarah', 'sarah@gmail.com', '454312', 'sarah store');

echo $employee1->get_name();
echo $employee1->get_email();
echo $employee1->get_password();
echo $employee1->get_title();
// $user1->set_name('Mark');
// $user2->set_name('John');
//to give a value on name
// $user1 -> name = 'Mark';
// echo $name;

// var_dump($user1);
// echo $user1;

// echo $user1->get_name();
// echo $user2->get_name();
?>
