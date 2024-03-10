<!-- Multi Dimenional Array in Php -->
<!-- Mutidimensional array is Arrays of Arrays.
Multidimensional array can be 2D, 3D, 4D 
ex:-
2D-$name[][];
3D-$name[][][];
-->
<!-- Example of 2D 
        0     1    2
      * * * * *  * *  * 
  0-> * 10 * 100 * 11 *
  1-> * 20 * 200 * 17 *
  2-> * 30 * 300 * 18 *
      * * * * *  * *  * 
      output 
      [0][0]=10, [0][1]= 100, [0][1] =11
      [1][0]=20, [1][1]=200, [1][2] =17
      [2][0]=30, [2][1]=300, [2][2] =18
-->
<?php 
$price[0][0]=10;
$price[0][1]=100;
$price[1][0]=1000;
$price[1][1]=20;
$price[2][0]=210;
$price[2][1]=1870;
echo $price[1][1];// 20
echo $price[2][1];//1870

 // 2nd example
 $prices =array(
    "laptop" => array("Dell"=>1000,"Hp"=>20000),
    "Subject" => array("Php"=>21000,"HTML"=>1000)
 );
 echo $prices["laptop"]["Hp"];//20000
 echo $prices["Subject"]["Php"];//21000

?>