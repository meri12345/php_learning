<?php
function dd($value){
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}

function oldEnough($person){
    if($person['age']>21){
        return true;
    }
    else return false;
}
