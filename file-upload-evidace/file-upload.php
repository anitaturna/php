<?php
echo $_FILES['filen']['name'];
echo "<br>";
echo "file type: ".$_FILES['filen']['type'];
echo "<br>";
echo "file temporary name: ".$_FILES['filen']['tmp_name'];
echo "<br>";
echo "file size: ".$_FILES['filen']['size'];
echo "<br>";
echo "file error: ".$_FILES['filen']['error'];
echo "<br>";
echo $_FILES['filen']['full_path']; //$_FILES eta hocche super global variable 

?>


    <form action="" method="post" enctype="multipart/form-data"> 
        <input type="file" name="filen" id="">
        <input type="submit" name="" id="">

    </form>
