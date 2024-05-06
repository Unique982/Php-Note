<!-- Object in Php  
-> Object is class type variable. Each time you create an object of a class a copy of each variable defined in the class is created.
We can create multiple objects from a class.
The new operator is used to create an object 
All the objects may haev their own value of variables.
syntax: $object_name = new class_name;

// ex:
class Student{
    public $name ;
    function showStudent($roll) {
        this-> student= $roll;
        echo "Student Roll no is :".$this->student;
}
}
// Accessing class Member Uisng object
-> Operator is used to access class memeber using object
object_name->variable_name;
$hari = new Student();
$hari->showStudent($roll);

object_name-> method_name(parameter_list)
$hari->showStudent(101);
-->