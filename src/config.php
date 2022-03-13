<?php

/* For Debugging */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 *  Database configuration
 * Local
 */
$dbPassword = "root";
$databaseHandle = new PDO('mysql:host=socialsaver-mysql;dbname=socialsaver', "root", $dbPassword);


/**
 *  Database configuration
 * Production
 */
//$dbPassword = "15c0184b514c8ce1b7fbb41c";
//$databaseHandle = new PDO('mysql:host=localhost;dbname=socialsaver', "root", $dbPassword);