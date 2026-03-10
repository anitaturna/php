<?php
    $add = function ($a){
        echo "hello $a";
    };
    $add("world");



    //arrow function
    $functionvarName = fn() => "hello world";

    echo $functionvarName ();
    $a= function (){};

    $b= fn($a,$b) => "";
?>