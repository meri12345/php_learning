<?php

return [
    'database'=>[
        'name'=>'inventory',
        'username'=>'root',
        'password'=>'root',
        'connection'=>'mysql:host=localhost',
        'options'=>[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
    ];