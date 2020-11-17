<?php

$dsn        = ''; 
$user       = '';   
$password   = ''; 

class dao{
    public $pdo = null;

    function __construct(){
        $pdo = new PDO(
            $dsn, 
            $user, 
            $password,
            array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            )
        );
    }

    function select(){
        $this->$pdo->prepare();
    }
}
    
