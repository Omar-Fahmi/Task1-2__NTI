<?php
    $char = 'z';
    $nextChar = ++$char;
        
    //check the length to reset it back for value 'a' 
        if(strlen($nextChar) > 1 ){

            $nextChar = 'a';
        }
    echo $nextChar;

?>