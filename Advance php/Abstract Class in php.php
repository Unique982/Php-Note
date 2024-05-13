<!-- Abstract Class
-> A class that is declared with abstract keyword is known as abstract class in PHP.
It can have abstract and non-abstract Methods. It needs to be extended and its method imlemented.
Object of an abstract class cannot be created.

// Abstract Method 
A method that is declared as abstract and does not have implementation is known as abstract method.
abstract function disp(); // on body and abstract
 
// point
.-> We cannot use abstract classes to instantiate object directly.
.-> object of an abstract class cannot be created.
.-> The abstract methods of an abstract must be defined in its subclass.
.-> if there is any abstract method in a class, that class must be abstract 
.-> A class can be abstract without having abstract method.
.-> It is not necessary to  declare all method abstract in a abstract class
.-> we cannot declare abstract construstors or abstract static methods.
.-> if you aree ectending any abstract class that have abstract method, you must either provide the implementation of the method or make this class abstract.
 

abstract class Father{
    abstract function disp();

}
class Son extends Father{
    public function disp(){
        echo "Abstract defined";
    }
}
-->
<?php
  abstract class Father{
    function disp(){
        echo " 1st abstract defined <br>";
    }
    abstract function absmethod();
       
    
}
class Son extends Father{
    public function absmethod(){
    echo "abstract defined <br>";
    }
}
$obj = new Son;
$obj->absmethod();



?>