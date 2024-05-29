<!-- filter_has_var()
-> filter_has_var():- this function checks if a variable of a specified input type exist, it 
returns TRUE on sucess or FALSE on failure.
syntax: filter_has_var(type,variable);
type:- one of INPUT_GET,INPUT_POST,INPUT_COOKIES,INPUT_SERVER or INPUT_ENV
variable:- name of the variable to check
ex: filter_has_var(INPUT_POST,'email');
filter_has_var(INPUT_GET,"name");
-->