<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function getDB(){
    global $db;
    if(!isset($db)) {
        try{
            require_once(__DIR__. "/config.php");
            $connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";
            $db = new PDO($connection_string, $dbuser, $dbpass);
 	    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	}
   	catch(Exception $e){
            error_log("getDB() error: " . var_export($e, true));
            $db = null;
        }
    }
    return $db;
}
?>