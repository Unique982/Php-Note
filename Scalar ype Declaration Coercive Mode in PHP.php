<!-- Scalar ype Declaration Coercive Mode in PHP
Scalra type declarations come in two flavours.
1. coercive (default)
2. strict.
ex;
function sum(int $, int $b){
    return $a+$b;
}
echo sum(2,7);
echo sum(10,"test"); <- error
10 is converted to string (possible to conver) because strick mode is off.
echo sum(10,"100"); <- output 110 
here it is possible to convert and strict mode if off.
 
-->
<?Php
$x = 10;
echo gettype($x);// check type
 function test(int $a,int $b)
 {
    return ($a+$b);
 }
 echo test(10,100);// 110
 echo test(10,"Hello");// error output
 echo test(10,"20");// 30
?>