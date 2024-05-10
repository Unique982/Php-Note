<?php
// Cannot access protected Property or Method outside class or Object
// Protected Property Or class can be accessed within same class and
// Child class can access parent's or GrandParent's protected property or method.

class Father{
    protected $a = 50;

}
class Son extends Father{
    protected $b =60;
}
class GrandSon extends Son{
    public function displayGrandSon(){
        echo $this->a . " " . $this->b;
    }
}
$obj = new GrandSon;
$obj->displayGrandSon();


?>