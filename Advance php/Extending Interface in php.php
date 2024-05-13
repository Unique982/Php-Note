<!-- Extending Interface
-> An interface can extends (inherit) an interface
One interface can inherit another intreface using extends keywords.
An interface can not extends classes.

-->
<?php 
// One interface extending one Interface
interface Father{
    const a =1;
    function displ();

}
interface Son extends Father{
    const b = 1222;
     function getvalue();
}

// One interface can extend more than One interface
interface Teacher{
    const c = 111;
    function test();
}
interface Student{
    const d = 17373;
    function showvalue();
}
interface principal extends Teacher, Student{
    const e = 111;
    function getvalue();
}
?>