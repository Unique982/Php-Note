<!-- foreach loop With Numeric Array in PHP 
-> The foreach loop works only on arrays and is used to loop through each key/value pair in array.
-> The first from loop over the array given by array_expression. on each iteration the value of the current
element is assigned to $value and the internal array pointer is advanced by one (so on the next iteration, you'll be looking at the next elements.)
syntax: 
foreach($array as $value){
    block of statements like
}
// 2nd way
foreach($array as $value):
    block of statements;
endforeach;
// 3
foreach($array as $key =>$value){
    block of statements;
}
where $value is array's value 
$key is array's key/index
-->
<?php
$a = array("Ram","sita","gita","hari");
foreach($a as $key =>$a){
    echo $a ."<br>"; // Output-> Ram sita gita hari
}
// 
$a = array("Ram","sita","gita","hari");
foreach($a as $key =>$a):
    echo $a ."<br>"; // Output-> Ram sita gita hari
endforeach;
 echo "<br>";
 // 
 $a = array("Ram","sita","gita","hari");
//  $a [0] = "Ram";
//  $a [1] = "Gita";
//  $a [2] = "Sita";
foreach($a as $key => $value){
    echo $key ." " .$value ."<br>"; // Output-> 0 Ram 1 sita 2 gita 3 hari
}
?>
