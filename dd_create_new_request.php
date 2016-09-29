<?php	
if(isset($_POST['submit']))
{
	$servername = 'localhost';
	$username = 'root';
	$password = 'php9Q!7';
	$dbname = 'lims_dev_db';
	$request = $_POST['request'];
  	$project = $_POST['project'];
	$_SESSION["request"] = $request;
	
	if (!empty($request) && !empty($project))
	{
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		} 
	
		$sql = "INSERT INTO main (request_id, project)
				VALUES ('$request', '$project')";
					
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
