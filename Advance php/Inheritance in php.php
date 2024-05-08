<!-- Inheritance
The mechanism of deriving a new class from an old one is called inheritance or derivation

// Siper class and sub class
The old is referred to as the super class and the new one is called the subclass.
Parent Class:- Base classs, Or super class
Child class :- Derived class, Extended class, or subclass.

// Declaration of child class
class ChildClassName extends parentClassName
{
    members of child class;

} 

// Type of Inheritance
.-> Single Inheritance
-> If a class is derived from one base class(parent class), it is called Single Inheritance.
ex:
class Father{
    members of class father;
}
class son extends Father{
    members of class son;
}
.-> Multiple Inheritance(no use)
-> If a class is derived from more than one parent class, then it is called multiple inheritance.

.-> Multi-level Inheritance
-> In multi-level inheritance, the class inherits the feature of another derived class(child class).
syntax: 
class Father{
    members of class father;
}
class son extends Father{
    members of class son;
}
class GrandSon extends Son{
    members of class GrandSon;
}
.->Hierarchical Inheritance

-->
<?php
// single Inheritance
class Father{
    public $a;
    public $b;
    function getValue($x,$y){
        $this->a = $x;
        $this->b = $y;

    }
}
class Son extends Father{
    function display(){
        echo "Value of a is: $this->a <br/>";
        echo "Value of b is: $this->b <br/>";
    }
}
$obj = new Son();
$obj->getvalue(10,20);
$obj->display();
?>