       <!-- Constant
     -> Whose value can't be modified.
     -> define() function is used to create a constant.
     syntax:-
       defien("constant_variable",value, case_sensitive)
       ex:- define("pi",3.3333); <--Here "pi" is case-sensitive
       ex:- define("pi",3.3333,TRUE);<-- here "pi" is non-case-sensitive
       ex:- defien("site","testing");
    -->
    <!-- Rules
 1. -> No need to strat constants variable name with $ sign.
 2. -> Name Only starts with a letter and an underscore(_).
 3. -> Variable name cannot start with a number.
 4. -> It is case sensitive which impiles that the variable num in lowercase is different from the variable NUM in uppercase. But we can make it case insensitive.
 5. -> Constants are automatically global and can be used accross the entire script.
 6. -> Can't use predefined constants name Eg. PHP_VERSION, PHP_OS etc.
 7. Can't Use reserved keywords. eg else, if etc.
 -->
 <!--  Some Example  -->
 <?php
//  Example 1
  define("site","Testing");
  echo site; 
//   Example 2
   define("num", 2.2222);
  echo num;
 ?>