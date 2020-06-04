<?php
	require_once '../src/config.php';

	// connecting to database
	$dboptions = array(
				PDO::ATTR_PERSISTENT => FALSE, 
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
				);
	try {
	$db_conn = new PDO(DB_DRIVER.':host='.DB_SERVER.';dbname='.DB_DATABASE, DB_SERVER_USERNAME, DB_SERVER_PASSWORD , $dboptions);
	
	// setting error message
	} catch (Exception $error) {
	echo 'Connection failed: '. $error->getMessage();
	die;
	}