<?php
class Car{
    //properties
    public $name ="BMW";
    public $color ="Blue";
    public $model ="sd12";
    function info($c){
        echo "Beautiful country is Bangladesh";
        echo "<br>";
        //color change
        $this->color = $c;
        return $this->color;
    }

}
$result = new Car();
echo $result-> model;

echo "<br>";
echo $result->info("black");


?>