<!-- filter_var()
-> filter_var(): - This function is used to validate and sanitize data. This function filters a 
single variable with a specified filter.
syntax: filter_var(variable,filter,options);
variable- Value of filter and
Filter- The id of the filter to apply.
option - It specifies one or more flags/options to use.
ex:filter_var('contact@testgmail.com',FILTER_VALIDATE_EMAIL);
filter-var($email,FILTER_VALIDATE_EMAIL);
filter_var($email,SANITIZE_VALIDATE_EMAIL);
filter_var($email,FILTER_CALLBACK, array('option'=>'strtoupper'));

.-> FILTER_CALLBACK
-> This is used to call user-defined function to filter data.
ex: filter_var($email,FILTER_CALLBACK,array('options'=>'strtoupper'));
-->
<?php 
$email = 'testin@gmail.com';
$vemail = filter_var($email,FILTER_VALIDATE_EMAIL);
if($vemail == FALSE){
    echo "Invalid Email";
}
else{
    echo "email is valid". $vemail ."<br>";
}function convertt($info){
    return str_replace("website","www.testing.com",$info);
}
$info ="You can vist our website and learn php from website ";
echo filter_var($info, FILTER_CALLBACK, array("options=>","convertt"));


?>