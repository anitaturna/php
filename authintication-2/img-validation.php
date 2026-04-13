<?php

//session start ei code ta dilam cz("joto gulo tab open korte chai" tar age ei code ta copy kore "toto gulai"paste korte hobe ei page ei)

session_start();

if(!isset($_SESSION['username'])){
    header('location:session1.php');
    exit();
}

if(isset($_POST['submitbtn'])){
    $fileName = $_FILES['f']['name'];
    $tmp = $_FILES['f']['tmp_name'];
    $typ = pathinfo($fileName, PATHINFO_EXTENSION);
    $s = "img/";

    if($typ == "jpg" || $typ == "png"){
        move_uploaded_file($tmp, $s . $fileName);
    } else {
        echo "only jpg, png uploaded";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
<body> 

<form action="" method="post" enctype="multipart/form-data"> 
    <input type="file" name="f">
    <input type="submit" name="submitbtn">
</form>

<?php
if(isset($_POST['submitbtn'])){
    $s = "img/";
     $files = scandir("$s");
    foreach($files as $file){
        if($file != "." && $file != ".."){
    echo "<img src='".$s.$file."' width='200'>";}
    }
    echo "<br>";
    echo "File uploded & Stored successfully";
}


?>


        <!-- //logout code -->
         <a href="logout.php">
        <h2>logout</h2>
    </a>

</body>
</html>