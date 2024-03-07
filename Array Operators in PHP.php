<!-- Array Operators in PHP -->
<!-- $a+$b <-(Union) -> The + operators returns the right-hnad array appended to the left-hand array;
for keys that exits in both arrays, the elements from the left-Hand array will be used, and the matching
elements from the right-hand array will be ignored 

$a == $b -> (Equality) -> true if $a and $b have the same key /value pairs. 
$a === $b -> (identity) -> True if $a and $b have the same key/value pairs in the same order and if the same types
$a != $b -> (inequality) -> true if $a is not equal to $b
$a<> $b -> (inequality) -> True if $a i snot equal to $b.
$a !== $b (Non-indentity)-> True if $a is  not identical to $b;

-->
<?php 
 $a = array(100,200,300,400);
 $b = array(200,500,100);
 $c = $a + $b;// Output -> Array ( [0] => 100 [1] => 200 [2] => 300 [3] => 400 ) 
 $c = $b + $a;// output ->Array ( [0] => 200 [1] => 500 [2] => 100 [3] => 400 ) 
//  print_r($c);

 // equality 
 $new = array("Ram","Sita");
 $new1 = array("Ram","Sita");
 if($new ==$new1){
    echo "Both array true";
 }
 else{
    echo "Both array false";
 }
 echo "<br>";
//  // output -> Both array true ;

 //  $a === $b example
 $x= array(100,200,300,400);
 $y = array(200,500,500,600);
 if($x === $y){
    echo "Both key/value pair true";
 }
 else{
   echo "Both key/value pair false";
 }
 echo "<br>";
 // $a != $b example
 $x= array(100,200,300,400);
 $y = array(200,500,500,600);
 if($x !== $y){
    echo "Both key/value pair true";
 }
 else{
   echo "Both key/value pair false";
 }
 echo "<br>";
 //$a<> $b  example
 $x= array(100,200,300,400);
 $y = array(200,500,500,600);
 if($x <> $y){
    echo "Both key/value pair true";
 }
 else{
   echo "Both key/value pair false";
 }

?>

