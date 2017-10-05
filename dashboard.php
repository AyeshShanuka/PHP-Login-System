<?php

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php";

	ForceLogin();

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
			Dashboard. You are signed in as user <?php echo $_SESSION['user_id']; ?>
		</div>
		
		<?php require_once 'inc/footer.php'; ?>

	</body>
</html>
