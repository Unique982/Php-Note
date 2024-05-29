<!-- Exception
An exception is a generalization of the concept of an error to 
include any unexpected condition encountered during execution.
Exception Handling
try
catch
finally
throw
.-> each try must have at least one corresponding catch or finally bloack.
code within the finally bloack will always be executed after the try and catch blocks,
regardless of whether an exception has been thrown and before normal execution resumes.
.-> if an exception is not caught, a fatal error will be issued with an "Uncaught Exception" message. 
-->
<?php
$a = 50;
try{
    if($a>=100){
        echo $a; 
    }
    else{
        throw new Exception("value greater than 100 ");

    }

}
catch(Exception $e){
    echo $e->getMessage();
}
finally{
    echo " finally bloack";
}

?>