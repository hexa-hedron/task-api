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
        $this->$pdo->prepare("SELECT task_id,task_name,type FROM tasks WHERE user_id = ? AND deleted = 0");

        $pdo->bindValue(1, $user_id, PDO::PARAM_INT);
        $pdo->execute();
        $list = $pdo->fetch(PDO::FETCH_ASSOC);

        return $list;
    }

    function updateTask($user_id,$task_id){
        $this->$pdo->prepare();
    }

    function deleteTask($user_id,$task_id){
        $this->$pdo->prepare();
    }
}
    
