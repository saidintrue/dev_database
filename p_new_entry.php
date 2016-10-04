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
		<form method="post" action="p_new_entry.php">
		<div>Request ID:</div> <input type="text" name="request">
		<br>
		<div>Project:</div> <input type="text" name="project">
		<br>
		<br>
		<input type="submit" name="submit" value="Create New Entry">  
		</form>
		<?php require 's_create_new_request.php';?>
	</section>
	
</body>
</html>



