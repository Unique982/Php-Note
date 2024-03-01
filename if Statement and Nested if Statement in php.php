<!-- If Statement and Nested if Statement in php. -->
<!-- It is used to execute an instruction or block of instruction only if a condition is fulfilled or True.
 Syntax: 1.if(condition/expression)
 statement;
 if more than one statement
 2. if(condition/expression){
    block of statements;
  }
  3. if(condition/expression):
  block of statements;
  endif;
-->
<!-- Example -->
<!-- 
 if(10!=9){
    echo "Yes it is true";
 }
  echo "Rest of the code"; 
 -->

  

<!-- // 2 ex -->
  <?php 
  if(10<2):
    echo "Yes it is true";
  endif;
  echo "Rest of the code";
  ?>
<!-- Nested if statement -->
<!-- 1step if(condition){
    block of statements;
    if(condition){
        block of statements;
    }
    if(condition){
        block of statements;
    }
} 
if(condition){
    block statement;
}
.2nd step if(condition):
    block statement;
    if(condition):
        block statement;
        endif:
            if(condition):
                block statement;
                endif:
                    endif:
                        if(condition):
                            block statement;
                            endif:
 -->
 <!-- Example 2 -->
 <?php
  if(10>9){// nested statements  check grw xa true xa ki false
    echo "testing";
  
    if(10>2){
        echo "Nested code executed 1<br>";
    }
    
    if(10>5){
        echo "Nested code executed 1<br>";
    }
}
if(10>5){// normal if statements
    echo "Testing";
}
echo "example";

// 2ns example
if(10>9):// nested statements  check grw xa true xa ki false
    echo "testing";
  
    if(10>2):
        echo "Nested code executed 1<br>";
    endif;
    
    if(10>5):
        echo "Nested code executed 1<br>";
    endif;
endif;
?>
