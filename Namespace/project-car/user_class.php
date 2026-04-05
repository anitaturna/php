<?php

namespace UserOne;

class User{
    public $name = "Bina";
    public $deg = "CEO";

    public function userInfo()
    {
        echo "This is " .$this->name;
    }
}

?>