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

function connectToMysql(){
    try{
        return new PDO ('mysql:host=localhost;dbname=inventory','root','root');
    }
    catch(PDOException $e){
    die($e);
    return;
    }
}

function getAllTasks($pdo){
    $statement = $pdo->prepare('select * from todos');
    $statement -> execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'TaskObj');
    }