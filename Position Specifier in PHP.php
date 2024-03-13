<!-- Position Specifier in PHP
-> if there are more % signs than arguments you must use placeholders. A Placeholder is inserted
after the % sign, and consists of the argument number "\$".An added benefit is that you can repeat the placeholder without adding more arguments in the code
ex: %2\$d
2 is the argument number and \$ is position specifier 
-->
<!-- Example -->
<?php
// argument or specifie placeholder or position specifier
 $a = 10;
 $b = 20;
 printf("there are %1\$d Ram %2\$d Sita",$a ,$b);

?>