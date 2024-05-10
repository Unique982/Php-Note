<?php 
// Visibility Mode/ Access Modifiers
// .->Public/ Default
// .->private
//.-> protected

class Father{
    public $a;
    public function displayParent(){
        echo" Parent $this->a";

    }
}
class Son extends Father{
    public function displayChild($x){
        $this->a = $x;
        echo "Child $this->a <br/>" ;
        $this->displayParent();
    }
}
$obj = new Son;
$obj->displayChild(10);

?>