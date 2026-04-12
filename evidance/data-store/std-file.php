<?php
class Student
{
    public $id;
    private $name;
    private $batch;

    public static $file_source = "store.txt";

    public function __construct($_id, $_name, $_batch)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->batch = $_batch;
    }

    public function child()
    {
        return $this->id . "," . $this->name . "," . $this->batch . PHP_EOL;
    }

    public function store()
    {
        file_put_contents(self::$file_source, $this->child(), FILE_APPEND);
    }

//     public static function result($id)
// {
//     $data = file(self::$file_source);

//     foreach ($data as $line) {
//         $arr = explode(",", trim($line));

//         if(isset($arr[0]) && isset($arr[1]) && isset($arr[2])){
//             if($arr[0] == $id){
//                 echo "ID: " . $arr[0] . "<br>";
//                 echo "Name: " . $arr[1] . "<br>";
//                 echo "Batch: " . $arr[2] . "<br>";
//                 return;
//             }
//         }
//     }   
// }




public static function display()
    {
        $data = file(self::$file_source);

        foreach ($data as $line) {

            $arr = explode(",", trim($line));

            if(isset($arr[0]) && isset($arr[1]) && isset($arr[2])){

                echo "ID: " . $arr[0] . "<br>";
                echo "Name: " . $arr[1] . "<br>";
                echo "Email: " . $arr[2] . "<br><br>";
            }
        }
    }

}
?>
