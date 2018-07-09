<?php

    


	  $name = filter_input(INPUT_POST,'name');
	  $loc = filter_input(INPUT_POST, 'location');
	  $email = filter_input(INPUT_POST, 'email');
	  $pass = filter_input(INPUT_POST, 'pass');
	  $description = filter_input(INPUT_POST, 'description');
	  
	   
	  if (!empty($name) && !empty($loc) && !empty($pass) && !empty($pass) && !empty($description)){
		    $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "webdevproject";
			
			global $conn;
	$conn = new mysqli($servername, $username, $password,$database);
	// Check connection0
          $pass= md5($pass);
	if (mysqli_connect_error()) {
	    die('Connection Error ('  . mysqli_connect_errno() .')'
		.mysqli_connect_error());
	} else{
			$sql = "INSERT INTO employer ( name, location, email, password, description)
					VALUES('$name','$loc','$email','$pass','$description')";
					
				if ($conn->query($sql)){
							echo "new account created";
				} else{
					echo "Error: ".$sql."<br>".$conn->error;
					$conn->close();
				}
	}
}else{
          echo "ensure that all fields are entered";
      }
	exit();



?>