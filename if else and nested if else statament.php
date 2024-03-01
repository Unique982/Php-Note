<!-- if else and Nested if else statement -->
 <!-- if..else statement is used when a diffrewnt sequence of instruction is to be
executed depending on the logical value (True/False) of the condition evaluted 
 syntax: 
 if(condition)
 statement_1;
 else
  statement_2;
  statement_3;

  example 1;
  if(condition){
    block statement;
  }
  else{
    block statement;
  }
  statement_3;

  2examples
  if(condition):
    block statement;
    else:
        block statement;
        endif:
            statement_3_block;
-->
 <?php
  if(10==5){
    echo "condition is true";
  }
  else{
    echo "condition is false <br>";
  }

  // 2nd example
  if(10>5):
    echo "condition is true";
  
  else:
    echo "condition is false";
  endif;
 ?>

 <!-- Nested if else statement 
-> In nested if else statement, an entire if else construct is written either the body
of the if statement or the body of an else statement.
 syntax:
 if(condition_1){
    if(condition_2){
        statement_1_block;
    }
    else{
        statement_2_block;
    }
 }
 else{
    statement_3_block;
 }
 statement_4_block;

 // 2nd example
 if(condition_1):
    if(condition_2):
        statement_1_block;
    
    else:
        statement_2_block;
    
 endif;
 else:
    statement_3_block;
 endif:
 statement_4_block;
-->
<?php
if(10==10){
    echo "main condition is true <br>";
    if(10<1){
        echo "condtion 1 is true <br>";
    }
    else{
        echo "condtion is false <br>";
    }
}
// 2nd example
if(10==10):
    echo "main condition is true <br>";
    if(10<20):
        echo "condtion 1 is true <br>";
    endif;
    else:
        echo "condtion is false <br>";
    endif;



?>