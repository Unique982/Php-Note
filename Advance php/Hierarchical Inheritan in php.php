<!-- Hierarchical Inheritan
 syntax: class Father{
    members of class Father;
 }
 class Son ectends Father{
    members of class Son;
 }
 class Daughter extends Father{
    members of class Daughter;
 }
-->
<?php
class Father{
    public $a;
    public $b;
    function getValue($x,$y){
        $this->a = $x;
        $this->b = $y;

    }
}
class Son extends Father{
    function add(){
        return $this->a + $this->b;
    }
    function display(){
        echo "value of A: $this->a <br/>";
        echo "value of B: $this->b <br/>";
echo "Adition:". $this->add() . "<br>";
    }
}
class Daughter extends Father{
    function multi(){
        return $this->a * $this->b;
    }
    function display(){
        echo "value of A: $this->a <br/>";
        echo "value of B: $this->b <br/>";
        echo "Multiple:" . $this->multi() . "<br/>";
}}
$objs = new Son();
$objs->getValue(10,20);
$objs->display();
$objd =new Daughter();
$objd->getValue(10,20);
$objd->display();


?>