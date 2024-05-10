<!-- Static Variable
A Variable within a function reset every time when we call it. In case if we need, Variable value to 
remain save even outside the function then we have to use static keyword.
function display(){
    static $a = 0; // static Variable
    $a++;
    return $a;
}
echo"Calling static Variable's Function";
echo display() ."<br>";
echo display();
echo display
-->
<!-- Static Properties
class student{
    public static $name;
    public function disp($nm){

    }
}

Static Method:
static method are class methods they are meant to call on the class, not on an object.
call the method without having to first create an object of that class.

How to create static method?
-> static keyword in front of the function is used to create static method.
ex: public static function display(){
    echo 'testing code";
}

how to call static method?
-> as we know object is not required to call a static method so we can static method using it's class name followed by scope resolution operator(::) followed by function name.
ex:
class Student{
    public static function display(){
        echo "Hello Testing";
    }
}
student::display();
-->
<?php 
class Teacher{
    public static function disp($nm){
        echo "Testing ".$nm;

    }
}
Teacher::disp("Codeing");

?>