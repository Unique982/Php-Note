<!-- Constructor
PHP supports a special type of method called constructor for initializing an object when it is created.
This is known as automatic initialization of objects.
A class constructor if defined is called whenever a program creates an object of that class.
They are invoked directly when an object is created.
Constructor have a special name in PHP_construct.
ex:
class Teacher{
    function_construct(){
        echo "construct Called";
    }

}
-->
<?php 
class Emp{
    function __construct(){
        echo"Construct Called <br/>";
    }
}
$e = new Emp;

// Parameterized Constructor
// The constructors that can take the arguments are called parameterized constructors
// Once you create your own constructo, the default constructor is no longer accessible.

class Teacher{
    public $name;
    function __construct($email){
        echo "construct Called<br/>";
        $this->name=$email;
        echo $this->name;
    }
}
$te = new Teacher('gmail.com');


?>