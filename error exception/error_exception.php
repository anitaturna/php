<?php

$a = 10;

try{
    if($a > 30){
      throw new Exception("valid Number");

    }else{
        throw new exception("invalid Number");
    }
}