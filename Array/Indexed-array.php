<?php
//index array(automatically or manually)

//automatically
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo "<br>";
echo $cars[0];
echo "<br>";
echo $cars[1];
echo "<br>";
echo $cars[2];
echo "<br>";


//displays all item in array
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x){
    echo "$x <br>";
}
?>