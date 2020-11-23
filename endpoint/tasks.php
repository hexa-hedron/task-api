<?php

require_once('../private/dao.php');
require_once('../private/database.php');

$user_id = $_POST['user_id'];

if(!$user_id){
    //TODO
    return 'error';
}

if(is_numeric($user_id)){
    //TODO
    return 'error';
}

$pdo = new PDO(
    $dsn, 
    $user, 
    $password,
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    )
);

$dao = new dao($pdo);

try{
    $taskList = $dao->getTasks();

    return json_encode($taskList);
}
catch(PDOException $e){

}


