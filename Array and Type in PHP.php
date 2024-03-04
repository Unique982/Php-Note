<!-- Array and Type in PHP -->
<!-- Array-> Arrays are colllection of data items stored under a single name.
Array provide a mechanism for declaring and accessinf serval
data item with only one identifier, thereby simplifying the task of
data management.
we use array when we have to deal with multiple data items
// type of array
1. Numeric/Indexed Array -> In this array index will be represented by a number. By default numeric array index satrt from 0.
example 
$a[0]="hari";-> (0 is indexed/Numeric)
$b[1]="Gita";

2. Associative Array -> In this array index/key will be represented by a string
ex: $apple['apple']=500;

3. Multi-dimensional array -> Array of arrays is known as multidimensional arrays
-->
<!-- Example -->
<?php
$a =["Ram","Siat","Gita"];
echo $a[0];



?>