<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <form method="POST" action="">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br><br>
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>


<?php

class Input {
    public $id;
    public $name;
    public static $fileName="store.txt";

     public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function Child(){
        return $this->id."," . $this->name."\n"; 
    }

    public function saveToFile(){
        file_put_contents(self::$fileName, $this->Child(), FILE_APPEND);
  
    }  
 } 
  
?>

<?php
if(isset($_POST['submit']) ){

    $userInputId = $_POST['id'];
    $userInputName = $_POST['name'];
    $userInput = new Input($userInputId, $userInputName);
    $userInput->saveToFile();
}

?>

<!-- <?php
// $result = fopen("store.txt","r") or die("file is not found");
// echo fread($result, filesize("store.txt"));
// echo "<br>";
// fclose($result);
// echo readfile("store.txt");

// $r = file_get_contents("store.txt");
// echo $r;
?> -->
