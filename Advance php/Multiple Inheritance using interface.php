<!-- Multiple Inheritance using interface
class Father {
    properties;
    Methods;
}
interface Mother{
    const properties;
    Methods;
}
class Son extends Father implements Mother{
    properties;
    Methods;
}
-->
<?php
class Father{
    public $sci = 111;
}
interface Mother{
    const math = 56;
    public function test();
}
class Son extends Father implements Mother{
    public function test(){
    echo $this->sci;
    echo Mother::math;
    }
}
$obj = new Son;
$obj->test();
?>