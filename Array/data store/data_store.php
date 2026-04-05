<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style=" width: 320px; height: 320px; 
     border-radius: 10px;
     bos-shadow: 0 0 10px gray;
      padding: 20px; margin: auto; 
       items-align: center; "> 
       <!-- font-family: cursive; -->

        <h2>Add students</h2>
        <form action="#" mehtod="post"> 
            Id: <br>
            <input type="number" name="id" id=""> <br> <br>
            Name: <br>
            <input type="text" name="nam" id=""> <br> <br>
            City : <br>
            <input type="text" name="city" id=""> <br> <br>
            <input type="submit" name="save" id="" value="save"> <br> <br>
        </form>
    </div>


    <?php
    if(isset($_POST['save'])){
        $id = $_POST['id'];
        $name = $_POST['city'];
        $data = $id.",".$nam.",".$city."\n";

        file_put_contents("data.text",$data, FILE_APPEND);
        echo "data saved successfully";

    }
$files = file("data.text");
foreach($files as $file){
    list($id, $name, $city) = explode(",", $file);

    echo "ID: ".$id."<br>";
    echo "Name: ".$name."<br>";
    echo "City: ".$city."<br> <br>";
}

?>
</body>
</html>