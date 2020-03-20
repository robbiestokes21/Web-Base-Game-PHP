<?php
require ('./includes/Classes/Database/databaseConfigs.php');
require ('./includes/Classes/Database/databaseObject.php');
$dbconfigs = new DBConfig();
$dbConfig = [];
/** @var TYPE_NAME $dbConfig */
$dbConfig = $dbconfigs->getDBConfigs();
$db = new DatabaseObject($dbConfig['host'], $dbConfig['user'], $dbConfig['password'], $dbConfig['dbname'], $dbConfig['port']);

?>