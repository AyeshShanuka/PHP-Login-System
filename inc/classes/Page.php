<?php

// If theres no constant var called __CONFIG__ , do not load this file
if(!defined('__CONFIG__')) {
	exit("You do not have a config file");
}

class Page {

	// Checking the login
	static function ForceLogin() {
		if(isset($_SESSION['user_id'])) {
			// The user is allowed
		} else {
			// The user is not allowed
			header("Location: login.php"); exit;
		}
	}

	// Checking the logged in user and sends to dashboard
	static function ForceDashboard() {
		if(isset($_SESSION['user_id'])) {
			// Logged user is redirecting
			header("Location: dashboard.php"); exit;
		} else {
			// The user is not allowed
		}
	}
}

?>