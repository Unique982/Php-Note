<!-- Default Arguments in PHP
PHP also allows the use of arrays and the special type Null ad defaul values.
ex:
function display($name1,$name2,$name3=NULL)// do not  "null"
{
    if($name1==Null)
    echo"sorray date not Fond!"
}
else{
    echo "$name welcome $name3"
}
display("testing","Rajan","Usa");
synatx : function function_name(para1,para2,para3="value")
{
    blocak of statement;
}
syntax:
function function_name(para1,para2="value",para3)
{
    blocak of statement
} wrong syntax

-->
<!-- Example -->
<?php
 function display($name1,$name2,$name3="testing")
 {
     echo "$name1 to $name2 $name3 <br>";
 
 }
 display("welcome","Your");
 display("welcome","Your","PHP");

function news($name4,$name5,$name6=NULL)// do not  "null"
{
    if($name6==Null){
    echo"sorray date not Fond!";
}

else{
    echo "$name4 welcome $name6";
}
}
news("testing","Rajan","Usa");
?>