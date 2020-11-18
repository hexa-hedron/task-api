<?php

require_once('/database.php');

class dao{
    public $pdo = null;

    function __construct($pdo){
        $this->$pdo = $pdo;
    }

    function addTask($user_id,$taskName,$taskType){
        $this->$pdo->prepare();
    }

    function getTasks($user_id){
        $this->$pdo->prepare();
    }

    function updateTask($user_id,$task_id){
        $this->$pdo->prepare();
    }

    function deleteTask($user_id,$task_id){
        $this->$pdo->prepare();
    }
}
    
