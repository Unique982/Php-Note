<?php
 class Student{
    public $name;
    function ShowStudent($roll){
        $this->name = $roll;
        echo "Roll number: $this->name <br>";

    }
 }
 class Teacher{
    public $teacher;
    function showTeacher($name){
        global $teacher;
        $teacher = $name;
       echo "Teacher Name: $teacher <br>";

    }
 }
//  create object
 $Hari = new Student();
    $Hari->ShowStudent(101);
    $Sita = new Student();
    $Sita->ShowStudent(102);

    $Unique = new Teacher();
    $Unique->showTeacher("Sita");
    $Testing =new Teacher();
    $Testing -> showTeacher("Testing");
 
  
    

    
 
?>