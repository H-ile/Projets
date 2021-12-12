<?php
// 
// init.php
//


$dsn = 'mysql:dbname=todolist;host=localhost';
$db_user = 'root';
$db_password = '';
try {
    $dbh = new PDO($dsn,$db_user,$db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    die ($ex->getMessage());
}

if (!isset($_SESSION['user_id'])) {
}

?>