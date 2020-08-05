<?php

class QueryBuilder{
    
    protected $pdo;

    public function __construct($pdo){
        $this->pdo=$pdo;
    }

    public function selectAll($table,$intoClass){
        $statement = $this->pdo->prepare("select * from $table");
        $statement -> execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function insertRow($table,$value){
        $statement = $this->pdo->prepare("insert into $table (name) values ('$value')");
        $statement -> execute();
        return true;
    }
}