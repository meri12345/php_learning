<?php

$tasksDB=$query->selectAll('todos','TaskObj');

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

$tasks_unfiltered =[ new Task('Go to grocery'),
        new Task('Do Homework'),
        new Task('Sleep'),
        new Task('Study'),];

$tasks_unfiltered[0]->complete();

//filter
$tasks = array_filter($tasks_unfiltered,function ($task){
    return $task->completed==false;
});


require 'views/index.view.php';