<?php
include('includes/classes/Database/databaseConfigs.php');
include('includes/classes/Database/databaseObject.php');
$dbconfigs = new DBConfig();
$dbconfig = $dbconfigs->getDBConfigs();
$db = new DatabaseObject($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['dbname'], $dbconfig['port']);
?>