<?php

require_once('./private/dao.php');
require_once('./private/database.php');

// TODO：ヘッダー認証

$user_id = $_GET['user_id'];

if(!$user_id){
    //TODO
    echo 'error';
}

if(is_numeric($user_id)){
    //TODO
    echo 'error';
}

try{
    $dao = new dao($pdo);

    $taskList = $dao->getTasks($user_id);

    echo json_encode($taskList);
}
catch(PDOException $e){
    echo 'error';
}


