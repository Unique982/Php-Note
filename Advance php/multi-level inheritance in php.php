<?php
// multi-inheritance
class Father{
    public $a;
    public $b;
    function getValue($x,$y){
        $this->a = $x;
        $this->b = $y;

    }
}
class Son extends Father{
    public $c = 30;
    public $sum;
    function add(){
$this->sum = $this->a + $this->b + $this->c;
return $this->sum;
    }
    
}
class GrandSon extends Son{
    function display(){
        echo "Value of a is: $this->a <br/>";
        echo "Value of b is: $this->b <br/>";
        echo "Value of c is: $this->c <br/>";
        echo "Sum of a,b and c is: ".$this->add();
    }
}
$obj = new GrandSon;
$obj-> getValue(10,20);
$obj->display();
?>
