<?php 
// DB credentials.
define('DB_HOST','bbdms.cyxnf12x0da3.us-east-1.rds.amazonaws.com');
define('DB_USER','admin');
define('DB_PASS','nik12345');
define('DB_NAME','bbdms');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>