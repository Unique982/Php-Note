<!-- Write a program to check student grade based on marks. -->
<?php 
 $marks= 40;
 if($marks>=80){
    $marks= "A";
    }
    elseif($marks>=70){
        $marks= "B";
    }
    elseif($marks>=60){
        $marks= "C";
    }
 elseif($marks>=50)
 $marks="D";
elseif($marks>=40){
    $marks= "E";
}
else {
    $marks= "failed";
}
echo "student grade :-".$marks;

?>