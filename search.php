<?php




if (isset($_POST['search'])) {
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "webdevproject";
					 	
	
	$gender = $_POST ['gender'];
	$university = $_POST ['uni'];
	$course = $_POST ['course'];
	$cert = $_POST ['cert'];
				
	$conn = mysqli_connect($servername, $username, $password,$database);
	
	
	$query = "SELECT * FROM student WHERE gender = '$gender' && university = '$university'
		&& course = '$course' && certifications = '$cert '   " ;
			
	
	$result = mysqli_query($conn, $query);
	
	
	if (mysqli_num_rows($result) >0){
		while ($row = mysqli_fetch_array($query)){
			echo $row ['name'];
			echo $row ['email'];
			echo $row ['gender'];
			echo $row ['university'];
			echo $row ['course'];
			echo $row ['certifications'];
				
		}
	  
	}
	
				
		}
	
	
	
	



?>