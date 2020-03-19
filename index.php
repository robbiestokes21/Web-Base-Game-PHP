<?php
require ('./includes/Classes/Database/databaseConfigs.php');
require ('./includes/Classes/Database/databaseObject.php');
$dbconfigs = new DBConfig();
$dbConfig = [];
$dbConfig = $dbconfigs->getDBConfigs();
$db = new DatabaseObject($dbConfig['host'], $dbConfig['user'], $dbConfig['password'], $dbConfig['dbname']);

?>