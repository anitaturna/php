<?php

namespace UserTwo;

class User{
    public $name = "Tina";
    public $deg = "EMPLOYEE ";

    public function userInfo()
    {
        echo "This is " .$this->name;
    }
}

?>