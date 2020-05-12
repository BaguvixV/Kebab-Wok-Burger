<?php
require_once '../src/config.php';

// CREATE CONNECTION WITH EXCEPTION HANDLING
try {

	$db_conn = new PDO("mysql:host=$PDO_HOST;dbname=$PDO_DB", $PDO_USERNAME, $PDO_PASSWORD);

	// SET ERROR MODE TO EXCEPTION
	$db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

catch(PDOException $error) 
	{
	echo "Connection failed: ". $error->getMessage();
	}