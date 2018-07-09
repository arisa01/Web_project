<?php
	session_start();
	if(isset($_POST['log'])){
		require 'dbconnect.php';

		
		$name = $_POST ['username'];
		$pass = $_POST ['password'];
		
		
		$sql = "SELECT * FROM $employer WHERE name = '$name' and password='$pass'";
		$result=mysqli_query($sqli);
		
		$count = mysqli_num_rows;
		
		if ($count==1){
						session_register("username");
						session_register("pasword");
						 
						header("location:home.html");
						exit();
						} else {
									echo "user non exitent ";
						}
	
	
	
}	
?>