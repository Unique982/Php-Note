<!-- Sign Specifier in Php
-> Sign specifier that forces a sign (- or +) to be used on a number. By default only the 
- sign is used on a number if it's negative. This specifier forces positive numbers to have the + sign attached as well.

ex;
printf("%+d",45) -> output it will print (+45)
printf("%d",45) -> output it will not print (+45)
-->
<!-- Example -->
<?php
 printf("%d",-67);// output:- 67
 printf("%d",67); // -output :- 67
 printf("%+d",67); // -output :- +67
?>