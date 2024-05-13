<!-- Interface 
An interface is like a class with nothing but abstract methods
All methods of an interface must be public. it is alsio possible to declare a constructor in an interface.
it's possible to interface to have constants(can not be overridden by a class / interface that inherits them). interface keyword is used to create an interface in php 

// points
.-> Interface don't have instance variables
.-> All methods of an interface is abstract
.-> All methods of an interface are automaticaly (by default) public
.-> We can not use the private and protected specifiers when declaring memeber of an interface.
.-> We can not craete object of interface
.-> More than one interface can be implemented in a single class.
.-> A class implements an interface using implements keyword.
.-> if a class is implementing an interface it has to define all the method given i that interface.
.-> if a class doesnot implement all the method declered in the interface, the class must be declared abstract.
.-> the method signature for the method in the class must the method signature as it appears in the interface.
.-> Any class can use an interface's constants from the name of the interface like Test::roll; 
.-> Classes that implement an intrface can treat the constants as they were inherited.
.-> An interface can extend (inherit) an interface
.-> One interface can inherit another interface using extend keyword. 
.-> An interface can not extends class.

// Definig Interface
syntax:
interface interface_name{
    const properties;
    method;
}
// ex:
interface Father{
    const a =111;
    public function disp();

}
-->
<?php
interface Father{
    const a =111;
    public function disp();
    
}

?>