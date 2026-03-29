<?php
class Student{
    public $name ="Turna";
    private $age = "22";
    protected $degree ="BSC";

    public function fullinfo(){
        echo $this->name; 
        echo "<br>";
        echo $this->age;
        echo "<br>";
        echo $this->degree;
    }

}
 $result = new Student();
 echo $result -> name;
 echo "<br>";
//  echo $result -> age;
//  echo "<br>";
//  echo $result -> degree;
//  echo "<br>";
 $result->fullinfo();



?>