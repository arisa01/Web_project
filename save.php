<?php
	  $name = $_POST['name'];
	  $loc = $_POST['location'];
	  $email = $_POST['email'];
	  $pass = $_POST['pass'];
	  $description = $_POST['description'];
	  
	  if (!empty($name) || !empty($loc) || !empty($pass) || !empty($pass) || !empty($description)){
		    $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "webdevproject";
			
			global $conn;
	$conn = new mysqli($servername, $username, $password,$database);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} else {
				$SELECT ="SELECT email from employer Where email = ? Limit 1";
				$INSERT = "INSERT INTO employer( 'name', 'location', 'email', 'password', 'description') 
							VALUES (?,?,?,?,?)"
				
				$stmt = $conn->prepare($SELECT);
				$stmt->bind_param("s", $email);
				$stmt->execute();
				$stmt->bind_result($email)
				$stmt->store_result();
				$rnum = $stmt->num_rows;
				
				if($rnum==0){
					$stmt->close();
					
					$stmt = $conn->prepare($INSERT);
					$stmt->bind_param("sssss" $name, $loc, $email, $pass ,$description);
					$stmt->execute();
					
					echo "new account created";
				 }else{
					    echo "email is already in use";
				 }
				 $stmt->close();
				 $conn->close();
				 
				
			
	
	
	}else {
				echo "Please ensure that all fields are entered";
				die();
	  }
	  }

?>