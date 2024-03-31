<!-- Passing Array to Function in PHP -->
<?php 
// passing array to function
$marks = array(10,20,100);
function total($subject){
     $sum = 0;
     foreach($subject as $num)
     {
        $sum = $sum + $num;
     }
     return $sum;

}
echo total($marks);
?>