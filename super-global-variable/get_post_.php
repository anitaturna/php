<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> 
     super global variable
     pre define variables:  $_REQUEST,$_GET,$_POST
    </h3>


    
    <div> 
        <form action="" method="post"> 
            Name: 
            <input type="text" name="n"  id=""> <br>  <br>
            <input type="submit" name="" value="Submit"  id="">
        </form>
    </div>


    <?php
    $store = $_POST['n'];
    echo "Name:".$store;
    // print "Name:".$store;   ///print diya print korle return kore name ture output

    ?>
    
</body>
</html>