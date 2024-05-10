<?php
// Private property or Method can be accessed only within same class.
// Private Property cannot be access outside class or with object.
// In Inhertance, child class cannot access parent's Private property or method

class Father{
    public $a =30;

}
class Son extends Father{
    public function displayChild(){
        echo $this->a;
    }
}
$obj = new Son;
$obj->displayChild();
?>