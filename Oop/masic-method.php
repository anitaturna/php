<?php
class Car {
    public $name;
    public $color;


public function setName($nam){
    $this-> name =$nam;
}
public function getName(){
    return $this->name;
}


   
    public function __destruct(){
        echo "<br> bye";
    }
    public function __construct($n,$c){
        echo "Hello <br> ".$this->name= $n. " color is ".$this ->color=$c;
      
    }


}

$r = new Car("Toyota","Black");

$r->setName("BMW");
echo "<br>";
echo $r->getName();

?>