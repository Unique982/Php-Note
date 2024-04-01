<!-- Global Variable in PHP 
The variable which is declared outside a function has a GLOBAL scope. Its accessibility is just outside the function
If we want to access data outside a function from code inside a function we have to use global keyword with the function.
$a =10;
function display(){
    global $a; // defining  its global
    echo "Acessing Value Inside Function =$a <br>";
}
display();
echo "Accessiong Value Outside Function =$a <br>";

// example
$a = 10:// Global Variable
fucntion display();
{
    // below code wont work, can't access $a inside function
    // echo "Accessing value Inside Function = $a </br>";
}
display();
echo"Accessing value outside fucntion =$a<br/>";
-->
<?php 
$a = 10; // global variable
function display(){
    // echo "$a"; // error message
    global $a;// defining its global
    echo "Acessing Value Inside Function =$a <br>";
}
display();
echo"Accessing value outside function =$a";
?>