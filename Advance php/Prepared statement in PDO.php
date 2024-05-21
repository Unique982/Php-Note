<!-- Prepared statement
A prepared statement or a parameterized statement is used to execute the same statement repeatedly with high efficiency.
The prepared statement execution of two stages: Prepare and execute
At theprepare stage a statement template is sent to the database server. The 
server performs a syntax check and initialize server internal resources for later use.
AT the execute Starge the parameter values are sent to the server. The server creates a statement from the statement
template and these values to execute it.
The MYSQL server supports anonymous positional placeholer(?), as well as the named placeholders.
A named placeholer begins with a coln (:) followed by an identifier
ex: INSERT INTO my_table (name,address) VALUES(?,?);
   INSERT INTO my_table (name,address) VALUES(:test,:KTM);
 
// Advantages
.-> Prepared statements are very useful against SQL injections
.-> Prepared statements reduce parsing time as the preparation on the query is done oly one
(although the statement is executed multiple times)
.-> Bounds parameters minimize bandwidth to the server as you need send only the parameters each time, and not the whole query
-->
