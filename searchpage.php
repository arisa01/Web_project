 <!doctype html>
<html>
<head>

	<title>SEARCH</title>

</head>
<body id="b">


	<style type="text/css">
		
		#x{
			background-color:orange;
			width:40%;
			height:30%;				
			margin-left:auto;
			margin-right:auto;
		}
		#b{
			height:100%;
			width:100%;
			background-image:url('sech.jpg');
			 background-repeat: no-repeat;
			 background-size:100%;

		}
		#x{
			background:#dfe6e9;
			opacity:.90;
			width:40%;
			height:30%;				
			margin-left:auto;
			margin-right:auto;
		}
		#sub{
			background-color:#3498db;
			width:45%;
			height:30%;		
			color:white;
			cursor:arrow;
			margin:8px;
			padding:14px;
			margin-left: auto;
			margin-right: auto;
		}
		#sub:hover{
					opacity:0.5;
		}
		
	
	
	</style>
	<a href="homepage.php" id="hm"><img src="hm.png" height="25" width="30"></a>
	<h1><p><center>please fill in all fields</center></p><h1>
	<form id="x" action="tried.php" method="post" >
		<strong>GENDER</strong>
		<input type="text" name="gender" value="" placeholder="enter name here"><br/><br/>
		<strong>UNIVERSITY</strong>
		<input type="text" name="uni" value="" placeholder="enter gender here"><br/><br/>
		<strong>COURSE</strong>
		<input type="text" name="course" value="" placeholder="enter course here"><br><br/>
		<strong>CERTIFICATION</strong>
		<input type="text" name="cert" value="" placeholder="enter certification here"><br/><br/>
		
	
		<input id="sub" type="submit" name="search" value="find">
	
	
	</form>
<body>












</html>