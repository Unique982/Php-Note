<!-- Final
.-> Final keyword is used to ccreate final method or final class.
.-> A final method cannot be overridden in child class
.-> A final class cannot be iherited it means we can not create subclass of a final class.

-->
<?php
// final method
class Father{
   final function disp(){
        echo "Super class <br>";
    }
    function shows(){
        echo "Testing code <br>";
    }
}
class Son extends Father{
    function disp(){
        echo "Son class <br>";
}
}


?>