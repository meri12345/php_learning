<?php

$person = [
    'name'=>'Colt',
    'age'=>28,
    'city'=>'New York'
];

$person['career'] = 'Web developer';


$task = [
    'name' => 'Do homework',
    'due' => 'Tuesday',
    'assigned_to' => 'Jeffrey',
    'completed' => true
];

require 'index.view.php';

//htmlspecialchars
//var_dump
//die
//ucwords