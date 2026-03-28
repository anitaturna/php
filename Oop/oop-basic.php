<?php
// class Car{
//     //properties
//     public $name ="BMW";
//     public $color ="Blue";
//     public $model ="sd12";
//     function info($c){
//         echo "Beautiful country is Bangladesh";
//         echo "<br>";

//         //color change
//         $this->color = $c;
//         return $this->color;
//     }

// }
// $result = new Car();
// echo $result-> model;

// echo "<br>";
// echo $result->info("black");




class dress{
    //properties
   public $color= "Blue-white";
   public $design="New-tersel";
   public $model ="Farsi";
    function dress_brand($d){
        echo "laraiv";
        echo "<br>";
        $this->design= $d;
        return $this->design;

    }

}
$result = new dress();
echo $result->model;
echo "<br>";
echo $result->dress_brand("Artisan");


?>



