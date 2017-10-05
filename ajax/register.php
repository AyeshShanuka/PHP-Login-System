<?php

	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Always return jason format
		header('Content-Type: application/json');

		$return = [];

		// Make sure the user does not exist

		// Make sure the user can be added and is added

		// Return proper infoirmation to the java script to redirect

		$return['redirect'] = 'dashboard.php';

		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else {
		// Die. Kill the script and redirect the user and do 
		exit('test');
	}

?>
