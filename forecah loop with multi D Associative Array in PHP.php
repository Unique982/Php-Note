<!--forecah loop with multi D Associative Array in PHP.php  -->
<!-- Example -->
<?php 
  $new = array(
    "name" => array("ram"=>100,"sita"=>200),
    "test"=> array("Hari"=>300,"Gita"=>400)
  );
  foreach($new as $keys=>$values){
    foreach($values as $key=>$data){
        // echo $data; //output-> 100 200 300 400
        echo "<pre>". "[".$keys ."]". "[".  $key ."]"."=".$data;
        // output 
        // [name][ram]=100 [name][sita]=200 [test][Hari]=300 [test][Gita]=400
    }
  }

?>