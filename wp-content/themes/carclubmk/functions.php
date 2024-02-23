<?php 

require_once 'core/after-setup-theme.php';

// funkcija za godini na 2 


function isOlder ($age1,$age2)
{
    $isTrue = false; 
    if($age1 > $age2){
        $isTrue = true;
    }; 
    return $isTrue;
};
