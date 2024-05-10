<?php 
class Father{
    protected function __construct($x){
        echo "<br> Parent construct called <br>";
    $this->a = $x;
    echo $this->a;
    }
    
}
class Son extends Father{
    public $b;
    public function __construct($x,$y){
        parent::__construct($x);// calling Parent Class constructor inside Child class constructor
  
        echo "<br> Child Constructor Called <br>";
       $this->b = $y;
       echo $this->b;
    }
}
$obj = new Son(10,20);

?>