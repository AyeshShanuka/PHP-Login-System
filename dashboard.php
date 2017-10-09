<?php

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php";

	Page::ForceLogin();

	$user_id = (int)$_SESSION['user_id'];

	$User = new User($user_id);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<title>Dashboard</title>

		<!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css" />
	</head>
	<body>

		<div class="uk-section uk-container">
			<h2>Dashboard</h2>
			<p>Hello <?php echo $User->email; ?>, you registered at <?php echo $User->reg_time; ?></p>
			<p><a href="logout.php">Logout</a></p>
		</div>
		
		<?php require_once 'inc/footer.php'; ?>

	</body>
</html>
