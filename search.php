<?php
include("config.php");


	$searchTerm = $_GET['term'];
	
	if(isset($_GET['history']))
	{
		$query = mysqli_query($con, "SELECT * FROM history WHERE name LIKE '%".$searchTerm."%' ORDER BY name ASC");
	}

	if(isset($_GET['medicine']))
	{
		$query = mysqli_query($con, "SELECT * FROM medicine WHERE name LIKE '%".$searchTerm."%' ORDER BY name ASC");
	}

	if(isset($_GET['eye_drops']))
	{
		$query = mysqli_query($con, "SELECT * FROM eye_drops WHERE name LIKE '%".$searchTerm."%' ORDER BY name ASC");
	}


	while ($row = $query->fetch_assoc()) {
	    $data[] = $row['name'];
	}

	//return json data
	echo json_encode($data);

?>