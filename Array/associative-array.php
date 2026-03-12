<?php
   $dresscode = array(
    "Turna"=>"3-pis",
    "Kiton"=>"Shirt",
    "Hiyo"=>"saree"
   );

   foreach ($dresscode as $Catagory=>$value){
    echo $value;
    echo "<br>";
   }
  


   //another way

$dresscode = array(
    "Turna"=>"3-pis",
    "Kiton"=>"Shirt",
    "Hiyo"=>"saree"
   );
   $name = array_key($dresscode);
   $values = $name[2];
   $secondvalue = $values[$values];
   echo $secondvalue. ":".$values;
   
?>