<!-- Increment and Decrement Operators -->
<!-- ++$a-> Increament $a by 1, then use the new value of $a
      $a-- -> Use value of $a, then increament $a by 1.
      --$b -> Decrement $b by 1, then use the new value of $b
      $b-- -> Use the current value of $b, then decrement by 1.
-->
<!-- Example -->
<?php
  $a =10;
  $b = 15;
  echo "<br>" . $a;
  echo "<br>" . $a++;//$a--
  echo "<br>" . $a;
  echo "<br>" . $b;
  echo "<br>" . --$b;// ++$b
  echo "<br>" . $b;

 ?>