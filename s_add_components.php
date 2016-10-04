<?php	
if(isset($_POST['submit']))
{
	$servername = 'localhost';
	$username = 'root';
	$password = 'php9Q!7';
	$dbname = 'lims_dev_db';
	$component = $_POST['component'];
  	$description = $_POST['description'];
	$new_mod = $_POST['newmod'];
  	$version = $_POST['version'];
	$req = $_SESSION['request'];
	
	if (isset($_SESSION["request"]))
	{
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		} 
	
		$sql = "INSERT INTO components (request_id, component_id, description, new_mod, version)
				VALUES ('$req', '$component','$description','$new_mod','$version')";
					
		if ($conn->query($sql) === TRUE) 
		{
		} 
		else
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	
		$conn->close();
	}
} 
?>
