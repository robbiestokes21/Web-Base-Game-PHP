<?php

/*
Create a ClassObject to return $dbConfig[];
*/

class DBConfig{
    public function getDBConfigs(){
    $dbConfig = [];
    $dbConfig['dbname'] = 'OurQuest';
    $dbConfig['user'] = 'root';
    $dbConfig['password'] = '';
    $dbConfig['host'] = 'localhost';
    $dbConfig['port'] = 3306;
    if(!$dbConfig){
        return false;
    }else{
            return $dbConfig;
        }

    }
}
?>