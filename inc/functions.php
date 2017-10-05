<?php

// Checking the login
function ForceLogin() {
	if(isset($_SESSION['user_id'])) {
		// The user is allowed
	} else {
		// The user is not allowed
		header("Location: login.php"); exit;
	}
}

// Checking the logged in user and sends to dashboard
function ForceDashboard() {
	if(isset($_SESSION['user_id'])) {
		// Logged user is redirecting
		header("Location: dashboard.php"); exit;
	} else {
		// The user is not allowed
	}
}

?>