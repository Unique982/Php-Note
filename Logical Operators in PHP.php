<!-- Logical Operators in PHP -->
<!-- Operators
    1. && -> Logical AND -> (4<2)&&(4>3)- output False
        2. || -> Logical OR -> (4<2)||(4>3)- output True
     3. ! -> Logical Not -> !(4<2) -> output  True
        4. and -> Logical AND -> (4<2)and(4>3)- output False
      5. or -> Logical OR -> (4<2)or(4>3)- output True
        xor -> Exclusive OR ->(4<2)xor(4>3)- output True
       

         &&/and
         operand 1 -> true  operand 2 -> true (output->True)
          operand 1 -> true  operand 2 -> false (output->false)
           operand 1 -> false  operand 2 -> true (output->false)
            operand 1 -> false  operand 2 -> false (output->false)

             ||/ or
             operand 1 -> true  operand 2 -> true (output->True)
          operand 1 -> true  operand 2 -> false (output->True)
           operand 1 -> false  operand 2 -> true (output->True)
            operand 1 -> false  operand 2 -> false (output->false)

             ! 
             operand-> false ->(output: True)
             operand-> True ->(output: false)

              xor
                operand 1 -> true  operand 2 -> true (output->false)
          operand 1 -> true  operand 2 -> false (output->True)
           operand 1 -> false  operand 2 -> true (output->True)
            operand 1 -> false  operand 2 -> false (output->false)
    -->
    <!-- Example  -->
    <?php
    // && 
     if((4<2)&&(4<2)){
        echo "condition is true <br>";
     }
     else{
        echo "condition is false <br>";
     }
      // and
     if((10>5)and(4>1)){
        echo "condition is true <br>";
     }
     else{
        echo "condition is false <br>";
     }
     // ||
     if((4<2)||(4>2)){
        echo "condition is true <br>";
     }
     else{
        echo "condition is false <br>";
     }
     // xor
     if((20<2)xor(4<20)){
        echo "condition is true <br>";
     }
     else{
        echo "condition is false <br>";
     }
     // !
     if(!(4>2)){
        echo "condition is true <br>";
     }
     else{
        echo "condition is false <br>";
     }
    
    
    
    
    
    ?>