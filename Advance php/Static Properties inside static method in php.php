<!-- Static properties inside static method
-> self keyword is used to access the static properties inside static method.
Static properties cannot be accessed through the object using the qrrow operator ->. $this is 
not available inside the method declared as static. Static method cannot access non-static properties.



-->
<?php 
class Teacher{
public static $a= 30;
public static function display(){
    echo self::$a;
 //echo $this->$a;// no static 
} 
}
Teacher::display("Coding");
// Static with inheritance 
class Father{
    public static $a=20;
}
class Son extends Father{
    function disp(){
        echo Father::$a;
    }
}
$obj = new Son;
$obj ->disp();
?>