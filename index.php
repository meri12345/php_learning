<?php

require 'functions.php';
require 'TaskObj.php';

try{
    $pdo = new PDO ('mysql:host=localhost;dbname=inventory','root','root');
}
catch(PDOException $e){
die($e);
}


$statement = $pdo->prepare('select * from todos');
$statement -> execute();

$tasksDB = $statement->fetchAll(PDO::FETCH_CLASS, 'TaskObj');
$tasksDB[1]->complete();

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
    'completed' => false
];

$animals=['dogs','cats'];

class Task{

    public $description;
    public $completed=false;

    public function __construct($description){
        $this->description=$description;
    }

    public function isComplete(){
        return $this->completed;
    }

    public function complete(){
        $this->completed=true;
    }

};

$tasks =[ new Task('Go to grocery'),
        new Task('Do Homework'),
        new Task('Sleep'),
        new Task('Study'),];

$tasks[0]->complete();

require 'index.view.php';

//htmlspecialchars
//var_dump
//die
//ucwords