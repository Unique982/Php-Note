<!-- Destructors
In php destructor are called when you explicitly destroy an object or when all 
references to the object go out of scope.
Destructor have a special name in PHP __destruct.
Destructor do not have any arguments.
syntax:
function __destruct(){
    echo "destroyed";
}
-->
<?php
class Teacher{
    public $name;
    function __construct($email){
        echo "construct Called<br/>";
        $this->name=$email;
        echo $this->name;
    }


function __destruct(){
    echo "Object Trashed";
}}
$te = new Teacher('gmail.com');


?>