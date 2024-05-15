<!-- Implementing class
.-> More than one interface can be implemented in a single class.
.-> A class implements an interface using implements keyword.
.-> if a class is implementing an interface it has to define all the method given in that interface.
.-> if a class does not implement all the methods declared in the interface, the class must be declared abstract.
.-> The method signature for the method in the class must match the method signature as it appears in the interface.
.-> Any class can use an interface's constants from the name of the interface like Test::roll.
.-> Classes that implement an interface can trat the constants as they were inherited.

-->
<!-- one interface can be implemented in a single class
interface Father{
    const mark = 10;
    public function Test();
}
class Son implements Father{
    public function Test(){
        echo Father::mark();
    }
}
// more than one interface can be implemented in a single
interface Father{
    const mark = 10;
    public function Test();
    public function getValue();

}
interface Mother{
    const math = 78;
}
class Son implements Father,Mother{
    public function Test(){
        echo Father::mark();
        echo Mother::math();
    }
    public function getValue(){}
}
$obj = new Son();
$obj->Test();

-->
<?php
interface Father{
    const mark = 10;
    public function Test();
    public function getValue();

}
class Son implements Father{
    public $a ;
    public function Test(){
        echo Father::mark;
    }
    public function getValue(){}
}
$obj = new Son();
$obj->Test();

?>