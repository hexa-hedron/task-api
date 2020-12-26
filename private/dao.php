<?php

class dao{
    public $_pdo;

    function __construct(PDO $pdo){
        $this->$_pdo = $pdo;
    }

    function test(){
        $sql = $this->$_pdo->prepare("SELECT 'a'");

        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function addTask($user_id,$taskName,$taskType){
        $sql = $this->$_pdo->prepare("INSERT INTO tasks(task_name,user_id,type,create_date,update_date) VALUES(?,?,?,CURRENT_TIMESTAMP(),CURRENT_TIMESTAMP())");

        $sql->bindValue(1, $taskName, PDO::PARAM_STR);
        $sql->bindValue(2, $user_id, PDO::PARAM_INT);
        $sql->bindValue(3, $taskType, PDO::PARAM_INT);
        $sql->execute();

        return;
    }

    function getTasks($user_id){
        $sql = $this->$_pdo->prepare("SELECT task_id,task_name,type FROM tasks WHERE user_id = ? AND deleted = 0");

        $sql->bindValue(1, $user_id, PDO::PARAM_STR);
        $sql->execute();
        $list = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $list;
    }

    function updateTask($user_id,$task_id){
        $sql = $this->$_pdo->prepare("UPDATE tasks SET done = 1 WHERE task_id = ?");

        $sql->bindValue(1, $task_id, PDO::PARAM_INT);
        $sql->execute();

        $sqlStone = $this->$pdo->prepare("UPDATE users,(SELECT stone_reward FROM tasks WHERE id = ?) a SET stone = stone + a.stone_reward WHERE users.id = ?");
        $sqlStone->bindValue(1, $task_id, PDO::PARAM_INT);
        $sqlStone->bindValue(2, $user_id, PDO::PARAM_INT);
        $sqlStone->execute();

        return;
    }

    function deleteTask($user_id,$task_id){
        $sql = $this->$pdo->prepare("UPDATE tasks SET deleted = 1 WHERE task_id = ?");

        $sql->bindValue(1, $task_id, PDO::PARAM_INT);
        $sql->execute();

        return;
    }
}
    
