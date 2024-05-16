<!-- Method Overriding 
Overriding refers to the ability of a subclass to re-implement a method inherited from a superclass.
.-> Only inherited methods can be overridden.
.-> Final and static methods cannot be overridden.
.-> The overriding method must have same argument list.

-->
<?php 
class Father {
    function disp(){
        echo "super class";
    }
}
    class Son extends Father{
        function disp(){
            echo "Son class";
        }
    }
    $obj  = new Son;
    $obj->disp();
    $objs = new Father();
    $objs-> disp();


?>