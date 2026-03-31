<?php
class user{
    public static $name ="Hello world!"."<br>";
    const name= "Hello world!"."<br>";

    public static function info(){
        echo "this is static method <br>";
    }
}

//$person = new user();
// $person->info();


echo user:: info();
echo user:: name;

?>