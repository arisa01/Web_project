<?php

	if  (isset($_POST['search']))	{
				
					
					$servername = "localhost";
					$username = "root";
					$password = "";
					$database = "webdevproject";
					 
				    
					
					$gender = $_POST ['gender'];
					$university = $_POST ['uni'];
					$course = $_POST ['course'];
					$cert = $_POST ['cert'];
				

					 
					
					 
					 
					$conn = mysqli_connect($servername, $username, $password,$database);
					$s = $conn -> query ("SELECT * FROM student WHERE gender = '$gender' && university = '$university' && course = '$course' && certifications = '$cert' ") ;
					$numRow = mysqli_num_rows($s);
					
					if($numRow > 0){
						echo "<table border='1'>";
						while ($rows = mysqli_fetch_assoc($s)){
							echo "<table border='1'>
						<tr>
							<th>NAME</th>
							<th>EMAIL</th>
							<th>GENDER</th>
							<th>UNIVERSITY</th>
							<th>COURSE</th>
							<th>CERTIFICATIONS</th>
						</tr>
								<tr>
						<td>{$rows ['name']}</td>
							<td>  {$rows ['email']}</td>
								  <td>{$rows ['gender']}</td>
									  <td>{$rows ['university']}</td>
										  <td>{$rows ['course']}</td>
											  <td>{$rows ['certifications']}</td>
											  </tr>
							</table>";
							
					}
					echo "	<a href='home.html'>home</a>";
						
	}else{
		echo  'No results contained in the system!';
	}

	
	}

		
?>