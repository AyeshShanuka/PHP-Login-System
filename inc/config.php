<?php

	// If theres no constant var called __CONFIG__ , do not load this file
	if(!defined('__CONFIG__')) {
		exit("You do not have a config file");
	}

	// Allow the footer
	define('ALLOW_FOOTER', true);

	// Config is below

	include_once 'classes/DB.php';

	$con = DB::getConnection();

?>