<?php

class DBInfo{
    public const DSN       = 'mysql:host=localhost;dbname=taskstone;'; 
    public const USER      = 'root';   
    public const PASSWORD  = 'mekemeke12'; 
}

$pdo = new PDO(
    DBInfo::DSN,
    DBInfo::USER, 
    DBInfo::PASSWORD
);

return $pdo;