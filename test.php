<?php

require('./private/dao.php');
require('./private/database.php');

try{
    $dao = new dao($pdo);

    $result = $dao->test();

    echo json_encode($result);
}
catch(PDOException $e){
    echo 'error';
}
