

<?php
    echo strlen("I love my Country but i want to go abroad.");

    echo "<br>";
    $info = "Bangladesh is riverer country.";
    echo strlen($info);
    echo "<br>";
    echo strtoupper($info);
    echo "<br>";
    echo strtolower($info);
    echo "<br>";
    echo str_replace("Bangladesh","India", $info);
    echo "<br>";
    echo ucwords($info);
    echo "<br>";
    echo str_word_count($info);
    echo "<br>";
    echo strrev($info);
    echo "<br>";
    echo ucfirst($info);
    echo "<br>";
    

?>