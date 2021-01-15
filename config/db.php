
<?php 
include_once 'db-config.php'; 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db_database = DATABASE;
$pdo_dsn = 'mysql:dbname='.DATABASE.';host='.HOST;
$pdo_username = USER;
$pdo_password = PASSWORD;
$db;

try {
    $db = new PDO($pdo_dsn, $pdo_username, $pdo_password); // also allows an extra parameter of configuration
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
} catch(PDOException $e) {
    /* Error Report */
        die('Lidhja me databazë dështoj, provo pas 30 sekondave <br>');
}
