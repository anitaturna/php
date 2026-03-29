<?php
class student{
    public $name;
    public $age;
    public $adress;
    public $id;
    public $subject;

public function details($n){
    echo "My name is ".$this->name=  $n;
}

    public function _contruct(){
        echo"Hello PWED <br>";
    }
    public function _destruct(){
        echo"<br>Bye";
    }
}



class teacher extends student{
    public $experience;
    public function teacherDetails(){
        echo "Hello Teacher";
    }
}


class authority extends teacher{
    public $position ="consultent";
    public function isdb(){
        echo "Result is published";
    }
}


$tr = new teacher();
echo $tr->name;
$tr->teacherDetails();

$st =new student();
echo "<br>";
$st->details("Turna");
echo "<br>";
$st->_contruct();
$at = new authority();
echo $at ->position;
echo "<br>";
$at->isdb();




?>