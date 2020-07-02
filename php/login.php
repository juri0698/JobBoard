<?php
	
	include 'connect.php';

	// Add the new data to the database.
	$postdata = file_get_contents("php://input");

	if(isset($postdata) && !empty($postdata))
	{
	
	    $request = json_decode($postdata);
	    $username = $request->username;
	    $password = $request->password;

		if($username == "Admin" && $password="Admin"){
			echo $username;
		}else{
			echo "0";
		}
	    
	}
	exit;
?>