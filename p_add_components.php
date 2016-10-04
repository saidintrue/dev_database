<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style-main.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<title>Create New Entry</title>
</head>

<body>

	<header>
		<h1>Dev Database</h1>
	</header>
	
	<nav>
		<?php require 'menu.php';?>
	</nav>

	<section>
		<div>
			<?php
			if (isset($_SESSION["request"]))
			{
				print("Enter components for request number: " . $_SESSION["request"]);
			}
			?>
		</div>
		
		<form method="post" action="p_add_components.php">
		<div>Component ID:</div> <input type="text" name="component">
		<br>
		<div>Description:</div> <input type="text" name="description">
		<br>
		<div>New / Mod:</div> <input type="text" name="newmod">
		<br>
		<div>Version:</div> <input type="text" name="version">
		<br>
		<br>
		<input type="submit" name="submit" value="Update Entry">  
		</form>
		<?php require 's_add_components.php';?>
	</section>
	
</body>
</html>