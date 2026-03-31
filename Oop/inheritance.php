<?php
class Student{
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



class Teacher extends Student{
    public $experience;
    public function teacherDetails(){
        echo "Hello Teacher";
    }
}


class Authority extends Teacher{
    public $position ="consultent";
    public function isdb(){
        echo "Result is published";
    }
}


$tr = new Teacher();
echo $tr->name;
$tr->teacherDetails();

$st =new Student();
echo "<br>";
$st->details("Turna");
echo "<br>";

$st->_contruct();
$at = new Authority();
echo $at ->position;
echo "<br>";
$at->isdb();




?>