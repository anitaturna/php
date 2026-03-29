<?php
class Student{
    public $name ="Turna";
    private $age = "22";
    protected $degree ="BSC";

    private function pInfo(){
        echo "This is private method";
            echo "<br>";
    }

    public function pInfoDetails(){
        echo "This is private full method".$this->pInfo();
    
    }


    public function fullinfo(){
        echo $this->name; 
        echo "<br>";
        echo $this->age;
        echo "<br>";
        echo $this->degree;
        echo "<br>";
    }

}


class Child extends Student{
    public function show(){
        echo "my degree".$this->degree;
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
 $child =new Child();
 $child->pInfoDetails();


?>