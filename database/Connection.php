<?php

class Connection{

    public static function connect(){
        try{
            return new PDO ('mysql:host=localhost;dbname=inventory','root','root');
        }
        catch(PDOException $e){
        die($e);
        return;
        }
    }

}