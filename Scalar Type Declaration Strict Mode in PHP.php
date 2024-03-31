<!-- Scalar Type Declaration Strict Mode in PHP
 the enable strict mode, a single declare driective must be placed at the top of the file.
This means that the strictness of typing for scalars is configured on a per-file basic. This 
directive not only affects the type declaration of parameters, but also a function's reture type.
declare(strict_types =1); 
-->
<?php 
// declare(strict_types =1); // strick mode on
function sum(int$a, int$b){
    return $a+$b;
}
echo sum(2,4);

?>