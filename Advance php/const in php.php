<!-- const
-> these are constants designed to be used by classes, not objects.
Once you initalize a count variable you can't reinitiate it. const
keyword is used to create class constants in php class.
ex: const mark = 101;
acess inside class using self keyword eg. self::marks;
acess outside class using class name e.g. classname::mark;
-->
<?php
class Father{
    const mark = 1111;
    function disp(){
        echo self::mark;

    }
}
// $obj = new Father;
// $obj->disp();

echo Father::mark;

?>