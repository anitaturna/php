

<?php
    echo time();
    echo "<br>";
    echo date('d');   //date
    echo "<br>";
    echo date('D'); //week
    echo "<br>";
    echo date('m'); //month with number
    echo "<br>";
    echo date('M'); //month //short month
    echo "<br>";
    echo date('F'); //month full
    echo "<br>";
    
    echo date('y'); //year 2 digit er dibe
    echo "<br>";
    echo date('Y');  //year 4 digit dibe
    echo "<br>";
    echo date('n'); //month numeric value
    echo "<br>";
    echo date('L'); //leap year return 0 or 1 (leap hole 1 hobe) and (leap year na hole 0 hobe)
    echo "<br>";
    echo date('d-M-Y'); //full format
    echo"<br>";
    echo date('Y/F/d');
    echo "<br>";
    echo date('r');
    echo"<br>"; 
    echo date('a');//small am
    echo"<br>";
    echo date('A'); //capital am
    echo"<br>";
    echo date_default_timezone_get().date('h');
    echo "<br>";
    echo date_default_timezone_set("Asia/Dhaka");
    echo "<br>"; 
    echo date_default_timezone_get().date('h');
    echo "<br>";


    $date1 =date_create("18-09-2003");
    $date2 = date_create("11-03-2026");
    echo "<br>";
    $diff =date_diff($date1,$date2);
    echo $diff->format("%y Years/ %m Months/ %d Days");
    
    
?>